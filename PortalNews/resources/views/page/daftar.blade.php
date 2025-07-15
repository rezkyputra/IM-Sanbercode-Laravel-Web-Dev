<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Daftar</h1>
    <form method="POST" action="/home">
        @csrf

        <label >Full Name</label> <br>
        <input type="text" name="fullname"> <br> <br>
        <label >Biodata</label> <br>
        <textarea name="bio" ></textarea> <br> <br>

        <input type="submit" value="Daftar">

    </form>
</body>
</html>