<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals</title>
</head>
<body>
    <h2>Super Globals</h2>

    <?php 
    echo $_SERVER['HTTP_HOST'];
    print_r($_SERVER) ;
    ?>
</body>
</html>