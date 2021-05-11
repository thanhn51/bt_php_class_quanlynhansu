<?php
//include_once 'User.php';
//include_once 'UserManager.php';
include_once "../vendor/autoload.php";
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
</head>
<body>
<form action="../action/editReturn.php?" method="post">
    <table>
        <tr>
            <td>
                Nhập tên
            </td>
            <td>
                <input type="text" name="name" value='<?php echo $user->getName()?>'>
            </td>
        </tr>
        <tr>
            <td>
                Nhập ngày sinh
            </td>
            <td>
                <input type="text" name="birthday" value='<?php echo $user->getBirthday()?>'>
            </td>
        </tr>
        <tr>
            <td>
                Nhập địa chỉ
            </td>
            <td>
                <input type="text" name="address" value='<?php echo $user->getAddress()?>'>
            </td>
        </tr>
        <tr>
            <td>
                Nhập chức vụ
            </td>
            <td>
                <input type="text" name="job" value='<?php echo $user->getJob()?>'>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="index" value="<?php echo $index ?>" >
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">EDIT</button>
            </td>
        </tr>

    </table>
</form>
</body>
</html>
