<!doctype HTML>
<html>
	<head>
		<title>I got mail</title>
		<link rel="stylesheet" type="text/css" href="mysitestyle.css">
	</head>
	<body>

	<div id="menurectangle">
		<span class="siteheader">Michael Fieseher</span><span id="headerdivider">|</span>
		<span class="blankspace"></span>
		
		<a href="/cs1520/personal%20website/about_me.php" class="menuitems"><span class="menuitems">About Me</span></a>
		<a href="/cs1520/personal%20website/contact.php" class="menuitems"><span class="menuitems">Contact</span></a>
		<a href="/cs1520/personal%20website/fun_stuff.php" class="menuitems"><span class="menuitems">Fun Stuff</span></a>

	</div>

	<div id="bodybackground">
	
		<h2 id="pagetitle">Message sent</h2>
		<p>
		<?php
			//EpBWpN6zdeXJMcYw  <-- I don't know why I put that there but I'm afraid to take it out in case it's useful to know for some reason
			$servername = "localhost";
			$username = "root";
			$password = "";

			// Create and check connection
			$db = mysqli_connect($servername, $username, $password, "projDB");
			if ($db->connect_error) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$name = $_POST["name"];
			$message=$_POST["message"];

			$query = "INSERT INTO contact_messages VALUES(\"" . $name . "\", \"" . $message . "\")";
			mysqli_query($db, $query) or die(mysql_error());
			echo "Thank you for your message!  I'll get around to reading it soon, I promise.";

			mysqli_close($db)
		?>
		</p>
	</div>
</body>
</html>