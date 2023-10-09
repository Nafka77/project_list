<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class RegisterCtrl {

    private $form;
    private $exists;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->firstname = ParamUtils::getFromRequest('firstname');
        $this->form->lastname = ParamUtils::getFromRequest('lastname');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->email))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->firstname)) {
            Utils::addErrorMessage('Nie podano imienia');
        }
        if (empty($this->form->lastname)) {
            Utils::addErrorMessage('Nie podano nazwiska');
        }
        if (empty($this->form->email)) {
            Utils::addErrorMessage('Nie podano maila');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_registerShow() {
        $this->generateView();
    }

    public function exists() {
        $this->exists = App::getDB()->count("users", [
            "email",
        ], [
            "password" => $this->form->pass,
        ]);
        return $this->exists;
    }

    public function action_register() {
        if ($this->validate()) {
            if($this->exists == 0){
                App::getDB()->insert("users", [
                    "firstname" => $this->form->firstname,
                    "lastname" => $this->form->lastname,
                    "email" => $this->form->email,
                    "password" => $this->form->pass,
                    "rola_id" => 2,
                ]);
                Utils::addInfoMessage('Poprawnie zarejestrowano do systemu');
                App::getRouter()->forwardTo("loginShow");
            }
        } else {
            //niezalogowany => pozostań na stronie logowania
            Utils::addInfoMessage('nie zarejestrowano');
            //App::getRouter()->forwardTo("loginShow");
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('Register.tpl');
    }

}
