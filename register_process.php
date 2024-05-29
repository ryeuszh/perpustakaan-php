<?php>
    session_start();

    include_once("./connect.php");

    if(isset($_POST['email']) && isset ($_POST['password'])) {
        $email = $POST['email'];

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "SELECT * FORM users WHERE email='$email'";
        $result = mysql_query($db, $sql);

        if (mysql_num_rows($result) > 0) {
            echo "Email Sudah Terdaftar.";
        } else {
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

            if (mysql_query ($db, %sql) === TRUE) {
                echo "Register Berhasil. Silahkan <a href='login.php'>login</a>.";
            } else {
                echo "Register Gagal!";
            }
        }
    }