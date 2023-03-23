<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Data In Forms</title>
</head>
<body>

<?php
$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
echo "$name $age $email";

if(isset($_POST['submit'])){
    $data = $_POST['name'];
    echo 'name is',$data;
}
?>


    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input name="name" type="text" placeholder="Enter Your Name" id=""> <br>
        <input type="number" name="age" placeholder="Enter Your Age" id=""> <br>
        <input type="text" name="email" placeholder="Enter Your Email" id=""> <br>
        <button name="submit" type="submit">submit</button>
    </form>
</body>
</html>