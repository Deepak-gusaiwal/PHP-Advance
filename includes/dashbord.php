<?php require "./header.php"; ?>
<h2>This is Dashbord php</h2>

<?php
 // we have to use session start function when we create it and also call in the file where we want to get it's value like dashbord.php
//  session_start(); // but we are using it in header.php

if(isset($_SESSION['userName'])){
    $sessionUserName = $_SESSION['userName'];
    echo "<h2>User Name is " . $sessionUserName."</h2>";
    echo '<a href="logout.php">LogOut</a>';
}else{
    echo "<h2>user Name is not set in session</h2>";
}
?>
<br>
    <a href="../7Sessions.php">Get Back</a>