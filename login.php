<?php
// Retrieve the form data using the POST method
$username2 = $_POST['username2'];
$password2 = $_POST['password2'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "file_db";

$conn = mysqli_connect ($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("conection error:" . mysqli_connect_error());

}

$sql = "Select * from file where username='$username2' AND password='$password2'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User exists, login successful
    echo '<script>alert("LOGIN successful!  !!");</script>';
    
header("location: welcome.php") ;

} 
else {
    // User doesn't exist or invalid credentials
    echo '<script>alert("INVALID CREDENTIALS , TRY AGAIN !!");</script>';
}
?>

<html>
    <head>
        <title>welcome !</title>
        <link rel="stylesheet" type="text/css" href="css/style-1.css">
    </head>
    <body>
        <!----home--->
	<section class="fail" id="fail">
		<div class="home-text">
			<h1>FILE MANAGEMENT SYSTEM <br><span>OPPS LOGIN FAILED !!</span></h1>
			<p>TRY AGAIN  | NOT TO WORRY </p>
			<a href="http://localhost/filesystem/log.html#LOGIN" class="btn">TRY LOGIN AGAIN </a>
		</div>
	</section>
    </body>
    </html>


