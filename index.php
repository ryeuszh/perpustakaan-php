<?php
    session_start();

     // cek apakah ada SESSION["email"]
    // ! : not (tidak)
    if(!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan V.3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container-75"></div>
    <h1>Aplikasi Perpustakaan</h>
    
    <br>
    <a href="./buku.php">Lihat daftar buku</a>
    <br>
    <a href="./staff.php">Lihat daftar staff</a>
    <br></br>

    <form action="logout_proccess.php" methode="POST">
        <button type="submit">LOGOUT</button>
    </form>
</body>
</html>