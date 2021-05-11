<?php
//include_once 'UserManager.php';
include_once "../vendor/autoload.php";
use src\UserManager;
$name = $_REQUEST['name'];
$birthday = $_REQUEST['birthday'];
$address = $_REQUEST['address'];
$job = $_REQUEST['job'];


$data = [
    'name' => $name,
    'birthday'=> $birthday,
    'address' => $address,
    'job' => $job
];

$usermanager = new UserManager('../data.json');
$usermanager->addUser($data);
header('Location: ../index.php');




