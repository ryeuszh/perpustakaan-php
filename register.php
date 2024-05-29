<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    <form methode="POST" action="./register_process.php">
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email"><br>

        <label for="password">Password:</labe><br>
        <input type="password" id="password" name="password"><br>

        <br>

        <input type="submit" value="Register">
        <a class="btn btn-success" href="./register.php">Register</a>
</form>
</body>
</html>