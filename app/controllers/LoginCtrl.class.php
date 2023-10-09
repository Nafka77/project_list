<?php

namespace app\controllers;

use core\App;
use app\transfer\User;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\SessionUtils;

class LoginCtrl {

    private $form;
    private $user;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->email))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
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

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {

            $exists = App::getDB()->get("users", [
                "email",
            ], [
                "password" => $this->form->pass,
            ]);

            if($exists == true) {
                $user = App::getDB()->get("users", [
                    "[><]role" => ["rola_id" => "id"]
                ], [
                    "users.id",
                    "users.email",
                    "users.password",
                    "role.rola"
                ], [
                    "email" => $this->form->email,
                    "password" => $this->form->pass,
                ]);
                RoleUtils::addRole($user["rola"]);
                $user = new User($user["id"], $user["email"], $user["rola"]);
                SessionUtils::storeObject("user", $user);

                Utils::addInfoMessage('Poprawnie zalogowano do systemu');
                App::getRouter()->forwardTo("indexShow");
            } else {
                Utils::addErrorMessage("Konto nie istnieje");
            }
        }
            //niezalogowany to pozosta na stronie logowania
            $this->generateView();
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        //RoleUtils::removeRole($user["rola"]);
        SessionUtils::remove("user");
        $guest = "Anon";
        RoleUtils::addRole($guest);
        $user = new User(0, 0, $guest);
        SessionUtils::storeObject("user", $user);
       
        Utils::addInfoMessage('Poprawne wylogowanie');
         App::getRouter()->forwardTo('indexShow');
         
    }

    public function generateView() {
        App::getSmarty()->assign('user',SessionUtils::loadObject('user', true));
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('Login.tpl');
    }
}
