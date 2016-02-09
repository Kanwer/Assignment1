<html>
<head>
    <title>
        LogIn Page
    </title>
</head>
<body>
<form name="f1" action="../ajax/Request.php" method="post">
    <table>
        <tr>
            <td>
                UserName <input type="text" name="user_name" id="user_name">
            </td>
        </tr>
        <tr>
            <td>
                Password <input type="password" name="user_pass" id="user_pass">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" id="login" value="LogIn">
            </td>
        </tr>
        <input type="hidden" name="action" value="login_try"

    </table>
</form>

</body>
</html>