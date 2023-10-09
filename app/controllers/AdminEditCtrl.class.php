<?php

namespace app\controllers;

use core\App;
use app\transfer\User;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\SessionUtils;

class AdminEditCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true);
    }

    public function validateEdit() {
        $this->form->firstname = ParamUtils::getFromRequest("firstname", true);
        $this->form->lastname = ParamUtils::getFromRequest("lastname", true);
        $this->form->email = ParamUtils::getFromRequest("email", true);
        $this->form->role = ParamUtils::getFromRequest("role", true);
    }

    public function action_edit() {
        $this->validateEdit();
        $this->validate();
        App::getDB()->update("users", [
            "firstname" => $this->form->firstname,
            "lastname" => $this->form->lastname,
            "email" => $this->form->email,
            "rola_id" => $this->form->role
        ], [
            "id" => $this->form->id
        ]);
        App::getRouter()->redirectTo("admin");
    }

    public function action_adminDelete() {
        $this->validateEdit();
        $this->validate();
        App::getDB()->delete("users",[
            "id" => $this->form->id
        ]);
        App::getRouter()->redirectTo("admin");
    }



    public function action_adminEdit() {
        $this->validate();
        App::getSmarty()->assign('user',SessionUtils::loadObject('user', true));
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->assign('id', $this->form->id); // dane formularza do widoku
        App::getSmarty()->display('adminEdit.tpl');
    }
}
