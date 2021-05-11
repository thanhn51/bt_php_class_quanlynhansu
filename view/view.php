<?php
include_once '../vendor/autoload.php';
//include_once 'User.php';
//include_once 'UserManager.php';

use src\UserManager;
$index = $_REQUEST['index'];
$usermanage = new UserManager('../data.json');
$users = $usermanage->getAll();
$user = $users[$index];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        tr {
            text-align: left;
        }
    </style>
</head>
<body>
<table border="1" style="border-collapse: collapse;width: 200px;text-align: center">
    <tr>
        <td>Thuộc tính</td>
        <td>Giá trị</td>
    </tr>
    <?php foreach ($user as $item => $value): ?>
    <tr>
        <td><?php echo $item?></td>
        <td><?php echo $value?></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="../index.php"><button>Trở về trang chủ</button></a>
</body>
</html>


