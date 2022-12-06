<?php

require_once '../vendor/autoload.php';

use RedBeanPHP\R;

R::setup('mysql:host=localhost;dbname=time_tracking', 'root', '');

$user = R::dispense('user');
$user->username = "";
$user->password = "";
