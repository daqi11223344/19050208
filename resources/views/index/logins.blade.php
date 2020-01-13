<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/loginss') }}" method="POST"> 
        @csrf
        <table>
            <tr>
                <td>手机号</td>
                <td>
                    
                    <input type="text" name="tel"></td>
            </tr>
           
                <td>密码</td>
                <td><input type="password" name="pwd"></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" value="登录"></td>
            </tr>
        </table>
    </form>
</body>
</html>