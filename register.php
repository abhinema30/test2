<?php
// Retrieve the form data using the POST method
$username1 = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password'];
$gender = $_POST['gender'];
$confirmpassword = $_POST['confirmpassword'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "file_db";

$conn = mysqli_connect ($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("conection error:" . mysqli_connect_error());

}

$sql = "INSERT INTO file (username, email, password,gender) 
VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);


if ( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt, "ssss",
$username1,
$email,
$password1,
$gender);

mysqli_stmt_execute($stmt);



echo '<script>alert("Submission successful! LOGIN PLEASE !!");</script>';

    

?>
<html>
    <head>
        <title>LOGIN PLEASE !</title>
        <link rel="stylesheet" type="text/css" href="css/style-1.css">
    </head>
    <body>
        <!----home--->
	<section class="REGIS" id="REGIS">
		<div class="home-text">
			<h1>FILE MANAGEMENT SYSTEM <br><span>GET STARTED !!</span></h1>
			<p>SAFE AND SECURE | QUICK AND EASY</p>
			<a href="http://localhost/filesystem/log.html#LOGIN" class="btn">LOGIN</a>
		</div>
	</section>
    </body>
    </html>
