<?php 

require 'vendor/autoload.php';

use LS\Controllers\UserController;

$users = new UserController;
var_dump($users->index());