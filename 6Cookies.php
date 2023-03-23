<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6Cookies.php</title>
</head>
<body>
    <h2>6Cookies.php</h2>
    <?php
    // set cookie
    setcookie('name','Brad',time()+ 86400 *30);
    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }
    setcookie('name','',time()- 86400); // it will remove the cookie
    ?>
</body>
</html>