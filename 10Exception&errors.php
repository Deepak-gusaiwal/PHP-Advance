<h2>10Exception&errors.php</h2>

<?php 
function fun1($x){
    if(!$x){
        throw new Exception('Division by Zero');
    }
    return 1/$x;
}


// echo fun1(0) ."<br>";
echo 'true value is '. true ."<br>"; // it is consider as 1
echo 'false value is '.false; // it is consider as 0 or blank

try {
    echo fun1(2) ."<br>";
    echo fun1(0) ."<br>";
} catch (Exception $e) {
    echo "We Caught Exception ",$e->getMessage();
}
?>