<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('init'); #default action

Utils::addRoute('init','KalkulatorKredytowy');
Utils::addRoute('oblicz','KalkulatorKredytowy');