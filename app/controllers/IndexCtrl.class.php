<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\SessionUtils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\forms\ShowTaskForm;

class IndexCtrl {

    private $user;
    private $id;
    private $todo;
    private $zadania;

    public function __construct() {
        $this->zadania = new ShowTaskForm();
    }

    public function validate() {
        $this->user = SessionUtils::loadObject("user", true);
    }

    public function ZliczToDo() {   
        $this->validate();     
        $this->zadania->ilosc = App::getDB()->query("
            SELECT todo.id, todo.title, todo.users_id, category.name, category.picture
            FROM todo
            INNER JOIN category ON todo.category_id = category.id
            WHERE todo.users_id = ".$this->user->id."
            ORDER BY todo.id DESC;
        ")->fetchAll();
    }

    public function NaIleStr() {
        $this->ZliczToDo();
        $this->zadania->ilenastronie = 3;
        $this->zadania->modulo = count($this->zadania->ilosc) % $this->zadania->ilenastronie;
        $this->zadania->beka = (count($this->zadania->ilosc) - $this->zadania->modulo) / $this->zadania->ilenastronie;
        if($this->zadania->modulo>0) {
            $this->zadania->beka++;
        }
        $this->zadania->todotototoON = array_fill(0, $this->zadania->beka, "0");
        for($i=0; $i<count($this->zadania->todotototoON); $i++) {
            $this->zadania->todotototoON[$i] = $i+1;
        }
    }

    public function naktorej() {
        $this->NaIleStr();
        $this->zadania->Doletto = ParamUtils::getFromCleanURL(1, true);
        if(empty($this->zadania->Doletto)){
            $this->zadania->liczdopom = 0;
        } else {
            if($this->zadania->Doletto == 1) {
                $this->zadania->liczdopom = 0;
            } else {
                $this->zadania->liczdopom = $this->zadania->Doletto * $this->zadania->ilenastronie - $this->zadania->ilenastronie;
            }
        }
    }

    public function zbytnormalne() {
        $this->naktorej();
        $this->todo = App::getDB()->query("
            SELECT todo.id, todo.title, todo.users_id, todo.ready, category.name, category.picture
            FROM todo
            INNER JOIN category ON todo.category_id = category.id
            WHERE todo.users_id = ".$this->user->id."
            ORDER BY todo.ready ASC, todo.id DESC
            LIMIT ". $this->zadania->ilenastronie ." OFFSET ".$this->zadania->liczdopom
        )->fetchAll();
    }

    public function action_delete() {
        $this->id = ParamUtils::getFromCleanURL(1, true);
        App::getDB()->delete("todo", [
            "id" => $this->id
        ]);
        App::getRouter()->redirectTo("indexShow");
    }

    public function action_ready() {
        $id = ParamUtils::getFromCleanURL(1, true);
        App::getDB()->update("todo", [
            "ready" => 1
        ],[
            "id" => $id
        ]);
        App::getRouter()->redirectTo("indexShow");
        }


    public function action_indexShow() {
        $this->validate();
        if(!empty($this->user->id)) {
            $this->zbytnormalne();
        }
    
        App::getSmarty()->assign('user',SessionUtils::loadObject('user', true));
        App::getSmarty()->assign('todo',$this->todo);
        App::getSmarty()->assign('zadania',$this->zadania);
        App::getSmarty()->display('index.tpl');
    }
}
