<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Sessions.php</title>
</head>
<body>
    <?php require "./includes/header.php"; ?>
    <h2>7Sessions.php</h2>
    <?php
    // we have to use session start function when we create it and also call in the file where we want to get it's value like dashbord.php
    //  session_start(); // but we are using it in header.php


    if(isset($_POST['login'])){
        $userName = filter_input(INPUT_POST,'userName',FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if(!empty($userName) && !empty($password)){
            echo $userName , $password;
            // setting session
            $_SESSION['userName']=$userName;
            header('Location: /phpOnYoutube/includes/dashbord.php');
        }else{
            echo "<h1>Please Provide Some Value in Fields</h1>";
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
<input type="text" name="userName" placeholder="Enter Your Name" id=""> <br>
<input type="text" name="password" placeholder="Enter Your Password" id=""> <br>
<button name="login" type="submit">Login</button>
</form>
</body>
</html>