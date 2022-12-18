
<?php include 'logForm.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="index.php">
        <label for="uname" >username</label>
        <input type="text" name="uname"  required>
        <label for="pword" >password</label>
        <input type="password" name="pword"  required>
        <button type="submit" name="submit">Submit</button>
        <a href="Register.php">Not yet a Member?</a>
    </form>
</body>
</html>