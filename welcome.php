<?php 
 echo '<script>alert("LOGIN successful!  !!");</script>';
 ?>



 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registration page </title>
	<link rel="stylesheet" type="text/css" href="css/style-1.css">
    
	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
   

	<!----header--->
	<header>
        <a href="#" class="logo">FILE MANAGEMENT SYSTEM</a>

		<ul class="navlist">
			<li><a href="http://localhost/filesystem/log.html">LOGOUT</a></li>
			
		</ul>
    </header>
        <!----home--->
	<section class="REGIS" id="REGIS">
		<div class="home-text">
			<h1>UPLOAD AND DOWNLOAD <br><span>YOUR FILE EASYLY</span></h1>
			<p>UPLOAD HERE | SELECT YOUR FILE</p>
            <form action="upload.php" method="POST">
        <input type="File" id="files" name="files" required>
                <input class="btn" type="submit" value="Submit">
</section>
			
	
    </body>
    </html>