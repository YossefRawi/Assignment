

<?php
include 'connection.php';

if(!isset($_SESSION)){
    session_start();
    //creates of resumes a session
};
if(isset($_POST['submit'])){
    $n = mysqli_real_escape_string($con,$_POST['uname']);
    $p = mysqli_real_escape_string($con,$_POST['pword']);
    //Escape special characters in strings:
    $t = "SELECT * FROM users WHERE `username` = '$n' AND `password` = '$p' ";
    $r = mysqli_query($con,$t);

    if(mysqli_num_rows($r) == 1){
        //Go through every row in a table and find one that is true
        header('location:Home.php');
        $_SESSION['success'] = "<h1>Welcome</h1>";
        $_SESSION['name'] = $n;
        
    }else{
        echo "<h1>Wrong Data!</h1>";
    }
};
if(isset($_GET['logout'])){
    //PHP $_GET is a PHP super global variable which is used to collect form data
    session_destroy();
    //destroy the session
    unset($_SESSION['name']);
    unset($_SESSION['success']);
    //remove all variables in a session
    header('location:Log.php');

}

?>