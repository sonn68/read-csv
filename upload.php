<?php
$target_dir = "upload/";
$uploadOk = 1;
//file 1
$nameFile1 = $_POST['nameFile1'];
$timeStart1 = $_POST['timeStart1'];
$timeFinish1 = $_POST['timeFinish1'];
$filename1 = $_FILES["uploadFile1"]["name"];
$ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
$newfilename1 = $nameFile1.$timeStart1."--".$timeFinish1.".".$ext1;
$target_file1 = $target_dir . $newfilename1;

//file 2
$nameFile2 = $_POST['nameFile2'];
$timeStart2 = $_POST['timeStart2'];
$timeFinish2 = $_POST['timeFinish2'];
$filename2 = $_FILES["uploadFile2"]["name"];
$ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
$newfilename2 = $nameFile2.$timeStart2."--".$timeFinish2.".".$ext2;
$target_file2 = $target_dir . $newfilename2;

//file 3
$nameFile3 = $_POST['nameFile3'];
$timeStart3 = $_POST['timeStart3'];
$timeFinish3 = $_POST['timeFinish3'];
$filename3 = $_FILES["uploadFile3"]["name"];
$ext3 = pathinfo($filename3, PATHINFO_EXTENSION);
$newfilename3 = $nameFile3.$timeStart3."--".$timeFinish3.".".$ext3;
$target_file3 = $target_dir . $newfilename3;

// Check if file already exists
if (file_exists($target_file1)) {
    echo "Sorry, file 1 already exists.";
    $uploadOk = 0;
}
if (file_exists($target_file2)) {
    echo "Sorry, file 2 already exists.";
    $uploadOk = 0;
}
if (file_exists($target_file3)) {
    echo "Sorry, file 3 already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["uploadFile1"]["size"] > 500000) {
    echo "Sorry, your file 1 is too large.";
    $uploadOk = 0;
}
if ($_FILES["uploadFile2"]["size"] > 500000) {
    echo "Sorry, your file 2 is too large.";
    $uploadOk = 0;
}
if ($_FILES["uploadFile3"]["size"] > 500000) {
    echo "Sorry, your file 3 is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (
        move_uploaded_file($_FILES["uploadFile1"]["tmp_name"], $target_file1) &&
        move_uploaded_file($_FILES["uploadFile2"]["tmp_name"], $target_file2) &&
        move_uploaded_file($_FILES["uploadFile3"]["tmp_name"], $target_file3)
        ) {
      include 'convert.php';
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
?>