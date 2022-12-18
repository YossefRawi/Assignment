

<?php
include 'connection.php';

if(!isset($_SESSION)){
    session_start();
};
if(isset($_POST['submit'])){
    $n = mysqli_real_escape_string($con,$_POST['uname']);
    $p = mysqli_real_escape_string($con,$_POST['pword']);
    $t = "SELECT * FROM users WHERE `username` = '$n' AND `password` = '$p' ";
    $r = mysqli_query($con,$t);

    if(mysqli_num_rows($r) == 1){
        header('location:Home.php');
        $_SESSION['success'] = "<h1>Welcome</h1>";
        $_SESSION['name'] = $n;
        
    }else{
        echo "<h3></br>Wrong Data!</h3>";
    }
};
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['name']);
    unset($_SESSION['success']);
    header('location:Log.php');
}

?>