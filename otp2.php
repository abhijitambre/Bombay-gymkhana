<!DOCTYPE html>

<html>

<head>
    <title>Mobile Number Verification</title>
</head>

<body>
<form action="send_otp.php" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="Enter name"></td>
        </tr>
        <tr>
            <td>number</td>
            <td><input type="text" name="num" placeholder="valid! with country code"></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="login" value="sign(login)[send otp]"></td>
        </tr>
        <br>
        <tr>
            <td>verify otp</td>
            <td><input type="text" name="otp"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="ver" value="verify otp"></td>
        </tr>
    </table>
</form>

</body>

</html>
