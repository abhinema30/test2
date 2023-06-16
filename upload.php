<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "file_db";

$conn = mysqli_connect ($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("conection error:" . mysqli_connect_error());

}
if(isset($_POST["submit"]))
{
    $pname = rand(1000,10000)."-".$_FILES["files"]["name"];
    $tname = $_FILES["filess"]["temp_name"];
    $uploads_dir ='/images';
    move_uploaded_file($tname,$uploads_dir.'/'.$pname);
    $sql = "INSERT INTO upload_file (image) values('$pname')";
    if(mysqli_query($conn,$sql)){
        echo"success";
    }
    else{
        echo "failed";
    }
}