
<?php include 'logForm.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>
    
    <section>
        <?php
        if(isset($_SESSION['name'])){
            echo $_SESSION['name'];
        };
        echo "</br>";
        if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
        };
        ?>
        <a href="index.php?logout='1'">Logout</a>
    </section>
</body>
</html>