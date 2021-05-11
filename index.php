<?php
include_once "vendor/autoload.php";
//include_once 'src/User.php';
//include_once 'src/UserManager.php';

use src\UserManager;

$dataUser = new UserManager('data.json');

$users = $dataUser->getAll();
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
        table {
            border-collapse: collapse;
            width: 900px;
        }
    </style>
</head>

<body>
<a href="view/add.php" style="color: darkred">
    <button>Thêm mới</button>
</a>
<br>
<br>

<table border="1">
    <tr>
        <td>Tên</td>
        <td>Ngày sinh</td>
        <td>Địa chỉ</td>
        <td>Chức vụ</td>
        <td>Chức năng Xoá</td>
        <td>Chức năng xem chi tiết</td>
        <td>Chức năng xem chỉnh sửa</td>
    </tr>
    <?php foreach ($users as $key => $item): ?>
        <tr>
            <td> <?php echo $item->getName() ?> </td>
            <td> <?php echo $item->getBirthday() ?> </td>
            <td> <?php echo $item->getAddress() ?> </td>
            <td> <?php echo $item->getJob() ?> </td>
            <td><a href="action/delete.php?index=<?php echo $key ?>">
                    <button style="width: 100%">Xoá</button>
                </a></td>
            <td><a href="view/view.php?index=<?php echo $key ?>">
                    <button style="width: 100%">Xem chi tiết</button>
                </a></td>
            <td><a href="view/edit.php?index=<?php echo $key ?>">
                    <button style="width: 100%">Edit</button>
                </a></td>


        </tr>
    <?php endforeach ?>
</table>

</body>
</html>