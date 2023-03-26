<h2>12callBack.php</h2>
<?php 
function fun1($x,$fun){
    echo "(fun1) passed variable is $x";
    $fun($x);
}

function fun2($x){
   $x = $x + 5;
    echo "<br> value in fun2 is $x";
}

echo fun1(10,"fun2");
?>