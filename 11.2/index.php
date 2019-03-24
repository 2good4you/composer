<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\User;
use App\Employee;
use Services\Catalog;

$user = new User();
$user->setName('Vladimir Guts');
$user2 = new Employee();
$user2->setName('Dmitry Golub');
$user2->role = 'manager';
$catalog = new Catalog();
$catalog->addUser($user);
$catalog->addUser($user2);
$catalog->getNames();