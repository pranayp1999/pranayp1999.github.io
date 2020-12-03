<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'sitetest1';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM regdata WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href='https://fonts.googleapis.com/css?family=Englebert ' rel='stylesheet'>
		<style>
			body {
background-color: #d0fefe;
  font-family: 'Englebert';font-size: 22px; color:white; 
    background-image: url("home.jpg");
  }
			.topnav {
  overflow: hidden;
  background-color: #333;
  height: 75px;
}
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
	</head>
	<body class="loggedin">
		<nav class="navtop">
		<!-- 	<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div> -->
		</nav>
		<div class="content">
			<header>
<div class="topnav">
  <image src="logo.png" class="img"></image> 
  <a href="home.php"> Home </a>
  <a href="about.html">About</a>
  <a href="contact.html">Contact</a>
  <a href="logout.php">Logout</a>
  <a href="profile.php">My Profile </a>
</div>
</header>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
					
					
				</table>
			</div>
		</div>
	</body>
</html>