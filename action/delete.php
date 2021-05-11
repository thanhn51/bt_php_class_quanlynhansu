<?php
//include_once 'User.php';
//include_once 'UserManager.php';
include_once "../vendor/autoload.php";
use src\UserManager;
use src\User;

$index = $_REQUEST['index'];
$usermanager = new UserManager('../data.json');
$usermanager->deletaUser($index);
header('Location: ../index.php');