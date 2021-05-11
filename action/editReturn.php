<?php
//include_once 'User.php';
//include_once 'UserManager.php';
include_once "../vendor/autoload.php";
use src\UserManager;
use src\User;
$index = $_REQUEST['index'];
$name = $_REQUEST['name'];
$birthday = $_REQUEST['birthday'];
$address = $_REQUEST['address'];
$job = $_REQUEST['job'];
$item = [
    'name' => $name,
    'birthday' => $birthday,
    'address'=> $address,
    'job' => $job
];
$object = new User($item);
var_dump($object);

$edituser = new UserManager('../data.json');
$edituser->editUser($object,$index);
header('Location: ../index.php');
