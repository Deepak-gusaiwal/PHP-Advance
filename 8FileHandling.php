<!-- File Handling -->
File handling is the ability to read and write files on the server <br>
php has builtin function to read and write files

<?php 
$file = './includes/user2.txt';
// ready file data
if(file_exists($file)){
    echo "<h2>Read File Function </h2>";
    echo readfile($file);
    echo "<br>";
}
// fopen function
if(file_exists($file)){
    $handle = fopen($file,'r');
    $contents = fread($handle,filesize($file));
    fclose($handle);
    echo "<h2>File Open Function </h2>";
    echo $contents;
    echo "<br>";
}else{
    // in this way we will create a file with the content if the file does'nt exists
    // PHP_EOL  is useing to get a line break in txt file using php
    $handle = fopen($file,'w');
    $contents = '<br> Mohan'. PHP_EOL . 'Ram'. PHP_EOL . 'Shyam';
    fwrite($handle,$contents);
    fclose($handle);
    echo $contents;
}
?>