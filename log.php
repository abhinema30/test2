
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
			<li><a href="#home">Home</a></li>
			<li><a href="#REGISTER">REGISTER</a></li>
            <li><a href="#LOGIN">LOGIN</a></li>
		</ul>
    </header>

    <!----home--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>FILE MANAGEMENT SYSTEM <br><span>GET STARTED !!</span></h1>
			<p>SAFE AND SECURE | QUICK AND EASY</p>
			<a href="#REGISTER" class="btn">REGISTER</a>
            <a href="#LOGIN" class="btn">LOGIN</a>
		</div>
	</section>

    <!----register--->
	<section class="REGISTER" id="REGISTER">
        <div class="center-text">
            <h2>REGISTER </h2>
        </div>
        <div class="container">
            <form  action="register.php" method="POST" >
                
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="gender">Gender:</label>
			<select name="gender" id="gender" required>
				<option value="">Select your gender</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" id="confirmpassword" name="confirmpassword" required>
                <div style="text-align:center">
                    <input type="submit" value="Submit" >
                </div>
            </form>
        </div>

    </section>
	
<!----LOGIN--->
<section class="LOGIN" id="LOGIN">
    <div class="center-text">
        <h2>LOGIN </h2>
    </div>

    <div class="new-content">
        <form action="login.php" method="POST">
            
            <label for="username">Username:</label>
            <input type="text" id="username2" name="username2" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password2" name="password2" required>
            
            <div style="text-align:center">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</section> 

<!----FOOTER-->
<section style="text-align:center;width: 100%;bottom: 0;">
    <h2>created by abhishek nema</h2>
</section>

</body
</html>