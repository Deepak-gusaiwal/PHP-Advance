<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3Arrays Function</title>
</head>
<body>
    <h2>3Arrays Function</h2>
    <?php
   $arr = ["ram","shyam","mohan"];

//    Get the length
echo count($arr) ."<br>";

// Search array
var_dump(in_array('ram',$arr))."<br>";

// Add to array
echo "<br>";
$arr[] = 'krishn';
array_push($arr,'shiva','durga');
print_r($arr)."<br>";
echo "<br>";

// remove from arrays
// array_pop($arr);//remove last value in array
// array_shift($arr);//remove first value in array
// unset($arr[3]);//remove array value witch is at index 3
// print_r($arr)."<br>";

// split into define chunks
$chunkedArray = array_chunk($arr,2);
print_r($chunkedArray);

// concatinate the arrays
$num1 =[1,2,3];
$num2 =[4,5,6];
echo "<br>";
// way 1
// $merged = array_merge($num1,$num2);
// way 2
$merged = [...$num1,...$num2];
print_r($merged);

// htmlspecialchars
$string = '<script>alert(1)</script>';
echo htmlspecialchars($string);


?>
</body>
</html>