<?php
session_start();
 ?>
 
<?php
 if (@$_SESSION['userID'] != '123') {
         header('Refresh: 1; URL = login.php');
    } else if(@$_SESSION['userID'] == '123') {
        echo "Hallo Admin";
 }
?>


<!DOCTYPE html>
<html>
<head>
        <title>Unsere erste Seite</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
<body>

 <?php 
    include 'navbar.php';
 ?>


<form action="news.php?menu=upload" method="post" enctype="multipart/form-data" style="padding-top: 100px;">
<input name="text1" value="<?php if(isset($_POST["text1"])) echo $_POST["text1"] ?>"/>
<input name="text2" value="<?php if(isset($_POST["text2"])) echo $_POST["text2"] ?>"/><br/>
 
  <input type="file" name="myFile" id="myFile" accept="image/jpg, image/png">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>



        
 <?php
if (!isset($_FILES["myFile"])) {
    die("There is no file to upload.");
}

$filepath = $_FILES['myFile']['tmp_name'];
$fileSize = filesize($filepath);
$fileinfo = finfo_open(FILEINFO_MIME_TYPE);
$filetype = finfo_file($fileinfo, $filepath);

if ($fileSize === 0) {
    die("The file is empty.");
}

if ($fileSize > 13145728) { // 13 MB (1 byte * 1024 * 1024 * 3 (for 3 MB))
    die("The file is too large");
}

$allowedTypes = [
   'image/jpeg' => 'jpg',
   'image/png' => 'png',
];

if (!in_array($filetype, array_keys($allowedTypes))) {
    die("<p class='red'>Sorry, only PDF-files can be accepted!</p>");
}

$filename = basename($filepath); // I'm using the original name here, but you can also change the name of the file here
$extension = $allowedTypes[$filetype];

$newFilepath = "./uploads/" . $filename . "." . $extension;

if (!copy($filepath, $newFilepath)) { // Copy the file, returns false if failed
    die("Can't move file.");
}
unlink($filepath); // Delete the temp file

echo "<p> <font color=green>The File has been uploaded</font></p>";
?>

