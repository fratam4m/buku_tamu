<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Silahkan login</h1>
    <form action="login_action.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
</body>
</html>
