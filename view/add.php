<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cửa sổ Add</title>
</head>
<body>
<form action="../action/creat.php" method="post">
    <table>
        <tr>
            <td>
                Nhập tên
            </td>
            <td>
                <input type="text" name="name" value="abc">
            </td>
        </tr>
        <tr>
            <td>
                Nhập ngày sinh
            </td>
            <td>
                <input type="text" name="birthday" value="05/01/2000">
            </td>
        </tr>
        <tr>
            <td>
                Nhập địa chỉ
            </td>
            <td>
                <input type="text" name="address" value="1A hawai">
            </td>
        </tr>
        <tr>
            <td>
                Nhập chức vụ
            </td>
            <td>
                <input type="text" name="job" value="Director">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">THÊM MỚI</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>