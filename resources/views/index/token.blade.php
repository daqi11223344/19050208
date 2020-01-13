<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/token') }}" method="POST"> 
        @csrf
        <table>
            <tr>
                <td>用户名</td>
                <td><input type="text" name="name"></td>
            </tr>
           
                <td>TOKEN</td>
                <td><input type="text" name="token"></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" value="点击验证"></td>
            </tr>
        </table>
    </form>
</body>
</html>