<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Daftar</h1>
    <a href="/">Kembali</a>
    <form action="/dashboard" method="POST">
        @csrf
        <label>Full Name</label> <br>
        <input type="text" name="fname"> <br> <br>
        <label>Address</label> <br>
        <textarea name="address" cols="30" rows="10"></textarea> <br> <br>

        <input type="submit" value="Sign up">
    </form>
</body>
</html>