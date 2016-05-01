<!doctype HTML>
<html>
	<head>
		<title>I got mail</title>
		<link rel="stylesheet" type="text/css" href="mysitestyle.css">
	</head>
	<body>

	<span class="siteheader">Michael Fieseher</span><div id="rectangle"></div><hr id="topline"><br/><br/>

		<table class = "menu">
			<tr>
				<td class="table_head">Menu</td>
			</tr>
			<tr>
				<td class="top"><a href="/cs1520/personal%20website/about_me.php" class="menu">About me</a></td>
			</tr>
			<tr>
				<td class="main"><a href="/cs1520/personal%20website/contact.php" class="menu">Contact</a></td>
			</tr>
			<tr>
				<td class="main"><a href="/cs1520/personal%20website/fun_stuff.php" class="menu">Fun stuff</a></td>
			</tr>

		</table>
	
		<h2 id="pagetitle">Message sent</h2>
		<p>
		<?php
			//EpBWpN6zdeXJMcYw
			$servername = "localhost";
			$username = "root";
			$password = "";

			// Create connection
			$db = mysqli_connect($servername, $username, $password, "projDB");
			// Check connection
			if ($db->connect_error) {
				die("Connection failed: " . mysqli_connect_error());
			}
			//echo "We're connected.  Nice.";

			$name = $_POST["name"];
			$message=$_POST["message"];

			$query = "insert into contact_messages values(\"" . $name . "\", \"" . $message . "\")";

			mysqli_query($db, $query) or die(mysql_error());
			//$errormessage = "Message could not be sent :(   You can try again if you like."
			echo "Thank you for your message!  I'll get around to reading it soon, I promise.";

			mysqli_close($db)
		?>
		</p>
	</body>
</html>