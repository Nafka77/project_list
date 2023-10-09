<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('indexShow'); 
// App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('indexShow',     'IndexCtrl');
Utils::addRoute('delete',        'IndexCtrl', ["Admin", "User"]);
Utils::addRoute('ready',          'IndexCtrl', ["Admin", "User"]);
Utils::addRoute('registerShow',  'RegisterCtrl');
Utils::addRoute('register',      'RegisterCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('addTaskShow',   'AddTaskCtrl', ["Admin", "User"]);
Utils::addRoute('addTask',       'AddTaskCtrl', ["Admin", "User"]);
Utils::addRoute('admin',         'AdminCtrl', ["Admin"]);
Utils::addRoute('adminDelete',   'AdminEditCtrl');
Utils::addRoute('adminEdit',     'AdminEditCtrl');
Utils::addRoute('edit',          'AdminEditCtrl');
