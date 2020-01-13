<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/user') }}" method="POST"> 
        @csrf
        <table>
            <tr>
                <td>用户名</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>邮箱</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>手机号</td>
                <td><input type="tel" name="tel"></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td><input type="password" name="pwd2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="注册"></td>
            </tr>
        </table>
    </form>
</body>
</html>