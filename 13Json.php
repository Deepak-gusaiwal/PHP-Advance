<h2>JSON & PHP</h2>
<?php
// joson encoded
$arr = [
    "name"=>"Deepak",
    "Learning"=>"Web Development"
];

$jsonEncoded = json_encode($arr);
echo $jsonEncoded;
echo "<br>";
// joson decoded
$jsonDecoded = json_decode($jsonEncoded);
print_r($jsonDecoded);
?>