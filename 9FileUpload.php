<h2>9FileUpload.php</h2>
<?php
if(isset($_POST['submit'])){

    $allowedExt = ['png','jpg','jpeg','gif'];
    // print_r($_FILES['upload']);// it will give the array of files uploaded;

    if(!empty($_FILES['upload']['name'])){
        $fileName = $_FILES['upload']['name'];
        $fileSize = $_FILES['upload']['size'];
        $fileTmp = $_FILES['upload']['tmp_name'];
        $targetDir="uploads/$fileName";

        // get file extention
        $fileExt = explode('.',$fileName);
        // $fileExt = strtolower($fileExt[1]);
        $fileExt = strtolower(end($fileExt));
        
        // ==== Validate Img ===========
        if(in_array($fileExt,$allowedExt)){
        move_uploaded_file($fileTmp,$targetDir);
        echo "<h2 style='color:green'> Your File Uploaded Successfully </h2>";
        }else{
            echo "<h2 style='color:red'> Invalid File Type </h2>";
        }

    }else{
        echo "<h2 style='color:red'> Select Your File To Upload </h2>";
    }
}
?>

<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<label for="">Select Image To upload :</label> <br>
<input type="file" name="upload" id=""> <br>
<button name="submit" type="submit">submit</button>
<img src="" alt="">
</form>