<?php

namespace app\controllers;

use core\App;
use app\transfer\User;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\SessionUtils;

class AdminCtrl {

    private $records;

    public function action_admin() {
        $this->records = App::getDB()->select("users", [
            "[><]role" => ["rola_id"=>"id"]
        ], [
            "users.id",
            "users.firstname",
            "users.lastname",
            "users.email",
            "role.rola"
        ]);
        $this->generateView();
    }
    
    public function generateView() {
        App::getSmarty()->assign('user',SessionUtils::loadObject('user', true));
        App::getSmarty()->assign('records', $this->records); 
        App::getSmarty()->display('admin.tpl');
    }
}
