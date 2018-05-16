<!DOCTYPE html>

<html>

<head>
	<title> BooX LogIn</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="height=device-height, initial-scale=1.0">
	<link rel="stylesheet" href="../public/css/Styles.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../CSS/mediaLogIn.css">
</head>

<body style="background-image:url(../Images/bookshelves-wallpaper-1920x1080.jpg); background-repeat: no-repeat;">
 	<form class="bookFrame bookFrame--logIn" action="../public/index.php" method="POST">
 		<p class="frameTitle frameTitle--logIn" >Log In</p>
 		
 			<input type="text" placeholder="email or username" class="bookFrame__inputText" name="user" >
 			<input type="password" placeholder="password" class="bookFrame__inputText" name="password" >
 			<button type="submit" class="bookFrame__submitButton" name="submit">
 				<a class="removeUnderline">Login</a>
 			</button>
 			<p class="bookFrame__newUser"> Forgotten <a href="../HTML/ForgottenPassword" style="color:white">password?</a> 
 			</p>
 			<p class="bookFrame__newUser"> New BooX user? Click <a href="../HTML/SignIn" style="color:white">here!</a> 
 			</p>
 		
 	</form>
 	<div class="container-quotes">
 		
 	</div>

 	<footer class="footerSeparator">
 		<ul class="footerSeparator__ul">
 			<li class="footerSeparator__ul__li">
 				&copy; 2018 BooX 
 			</li>
  		</ul>
 	</footer>
</body>

</html> 