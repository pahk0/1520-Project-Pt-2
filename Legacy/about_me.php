<!doctype HTML>

<?php
	$cookie_name = "visited";
	$cookie_value = 1;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // set cookie for a month
?>

<html>
	<head>
		<title>Nice to meet ya</title>
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
<!-- 		<tr>
			<td class="main"><a href="/cs1520/personal%20website/testing.php">Testing</a></td>
		</tr> -->

	</table>

	<h2 id="pagetitle">About me</h2>

	<p>
	&emsp; Hey there.  My name's Michael Fieseher.  That's me on the left in that picture right there.
	<img src="Me and josh.jpg" alt="My brother Josh and I", style="width: 200px; float: right; margin-right: -50px; margin-top: -20px; border-radius: 5px">I am currently a junior at the University of Pittsburgh currently working towards a bachelor's degree in computer science.  I'm also working to get a minor in applied statistics.  I've been programming in Java since high school, and thusly have a lot of experience with the language.  I've also worked a lot with C and, regretfully, MIPS assembly.  Other languages I have varied experience with include MATLAB, HTML, PHP, Python, R, and CSS.  
	</p>

	<p>&emsp; I'm not just a programmer, I'm a real person too!  My favorite hobbies include ultimate, guitar, and Super Smash Bros.  On top of that, I'm an Eagle Scout who enjoys camping and backpacking.  My favorite shows are Bojack Horseman, Bob's Burgers, and Archer.  As for movies, I'm a fan of Hot Fuzz, The Prestige, Airplane!, and Hot Rod, among others.  I also really like music!  It's to the point where I debated putting "music listening" as a hobby.  I've linked some artist Spotify pages below.  My tastes tend to be pretty varied, but favorite artists include 

	<?php

		$music = array(
			"Odesza" => "https://play.spotify.com/artist/21mKp7DqtSNHhCAU2ugvUw",
			"Acceptance" => "https://play.spotify.com/artist/4zCbNayYzorqdzd9mPrghW",
			"The Receiving End of Sirens" => "https://play.spotify.com/artist/57fbnHozNJMl16yNzt4agV",
			"Closure in Moscow" => "https://play.spotify.com/artist/4I1DvdLsieFgvgYbr8NRfh",
			"Envy on the Coast" => "https://play.spotify.com/artist/6RvruFAgvsAb4B82u8wsSH",
			"Emancipator" => "https://play.spotify.com/artist/6HCnsY0Rxi3cg53xreoAIm"
		);
		echo"<ul>";
		foreach($music as $key=>$value){
			echo "<li><a href=\"$value\">$key</a></li>";
		}
		echo"</ul>";

	if(isset($_COOKIE["visited"])){
		echo "<p>&emsp;But you already knew all that from the last time you read this.  Welcome back, by the way.</p>";
	}else{
		echo "<p>&emsp;Thanks for being interested in me!  Feel free to take a look around my site - sorry it's a little barebones right now.</p>";
	}

	?>
	</body>
</html>