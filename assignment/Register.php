<?php include 'connection.php'; ?>

<?php
if(!isset($_SESSION)){
    //start session
    session_start();
};

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con,$_POST['un']);
    $email = mysqli_real_escape_string($con,$_POST['em']);
    $password1 = mysqli_real_escape_string($con,$_POST['psw1']);
    $password2 = mysqli_real_escape_string($con,$_POST['psw2']);
    //Escape special characters in strings 


    if ($password1 != $password2){
        echo "<br>Passwords don't match";
    }
    else{
        $sql = "INSERT INTO users(username,email,password)Values('$username','$email','$password1')";
        mysqli_query($con,$sql);
        $_SESSION['name'] = $username;
        //An associative array containing session variables available to the current script
        header('location:Log.php');
        echo "<br>Welcome " . $_SESSION['name'];
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Register</h1>
    <form action="Register.php" method="post">
        
        <label for="User">User</label>
        <input type="text" name="un" id="User" placeholder="User" required>
        <label for="E-mail">E-mail</label>
        <input type="text" name="em" id="E-mail" placeholder="E-mail" required>
        <label for="Password">Password</label>
        <input type="password" name="psw1" id="Password" placeholder="Password" required>
        <label for="Password">Confirm Password</label>
        <input type="Confirm" name="psw2" id="Confirm" placeholder="Confirm Password" required>
        <button type="submit" name= "submit">Submit</button>
        <a href="Log.php">Already a Member?</a>

    </form>
</body>
</html>