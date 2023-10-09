<?php

namespace app\controllers;

use core\App;
use app\transfer\User;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\AddTaskForm;
use core\SessionUtils;

class AddTaskCtrl {

    private $form;
    private $data;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new AddTaskForm();
    }

    public function validate() {
        $this->form->title = ParamUtils::getFromRequest('title');
        $this->form->category = ParamUtils::getFromRequest('category');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->title))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->title)) {
            Utils::addErrorMessage('Nie podano tytułu');
        }
        if (empty($this->form->category)) {
            Utils::addErrorMessage('Nie podano kategorii');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_addTaskShow() {
        $this->generateView();
    }

    public function category() {
        $this->data = App::getDB()->select("category", [
            "id",
            "name",
        ]);
    }

    public function action_AddTask() {
        if ($this->validate()) {
            $user = SessionUtils::loadObject("user", true);
            $exists = App::getDB()->count("todo", [
                "title"
            ], [
                "AND" =>[
                    "title" => $this->form->title,
                    "users_id" => $user->id,
                ]
            ]);

            if($exists == 0) {
                App::getDB()->insert("todo", [
                    "title" => $this->form->title,
                    "users_id" => $user->id,
                    "category_id" => $this->form->category,
                ]);

                //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
                Utils::addInfoMessage('Dodano zadanie');
                App::getRouter()->forwardTo("indexShow");
            } else {
                Utils::addErrorMessage("Masz już takie zadanie na liscie");
            }
        }
        Utils::addErrorMessage("Nie udało się dodać zadania");
        //niezalogowany => pozostań na stronie logowania
        $this->generateView();
    }

    public function generateView() {
        $this->category();
        App::getSmarty()->assign('user',SessionUtils::loadObject('user', true));
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->assign('data', $this->data); // dane formularza do widoku
        App::getSmarty()->display('addTask.tpl');
    }
}
