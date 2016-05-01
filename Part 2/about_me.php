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

	<div id="menurectangle">
	<span class="siteheader">Michael Fieseher</span><span id="headerdivider">|</span>
		<span class="blankspace"></span>
		
		<a href="/cs1520/personal%20website/about_me.php" class="menuitems"><span class="menuitems">About Me</span></a>
		<a href="/cs1520/personal%20website/contact.php" class="menuitems"><span class="menuitems">Contact</span></a>
		<a href="/cs1520/personal%20website/fun_stuff.php" class="menuitems"><span class="menuitems">Fun Stuff</span></a>

	</div>

	<div id="bodybackground">

	<h2 id="pagetitle">About me</h2>

	
	<div id="picturediv">
		<img src="Me and josh.jpg" alt="My brother Josh and I" id="meandjosh">
	</div>
	<p id="aboutme">
	&emsp; Hey there.  My name's Michael Fieseher.  That's me on the left in that picture right there.  I'm currently a junior at the University of Pittsburgh working towards a bachelor's degree in computer science.  I'm also working to get a minor in applied statistics.  I have a lot of experience working with Java, C, and (regretfully) MIPS assembly.  I've also worked with MATLAB, HTML, PHP, R, CSS, Javascript, and Python to varying degrees.  I've been programming to some degree since 2009 in my first year of high school.  I started out by being put in a web programming class by accident but quickly fell in love with it.  I took classes on Visual Basic and Flash before finally learning Java in junior year of high school.  This is also about the time that I took a statistics class and realized how much I liked it.  That Java experience carried me into college where I picked up some assembly language for a computer architecture class, as well as some C for a pair of systems software classes.  Free time and other classes have led me to pick up the remaining list of languages in the past year or so.
	</p>

	<p id="aboutme">
	&emsp; I'm not just a programmer, I'm a real person too!  My favorite hobbies are playing guitar and ultimate, though not at the same time.  I'm also always up for a game of Super Smash Bros that the challenger will inevitably lose.  On top of all that, I'm an Eagle Scout who enjoys camping and backpacking.  When I'm not being cool or outdoorsy (okay, so most of the time), you can probably find me staring at some sort of screen.  My favorite shows are Bojack Horseman, Bob's Burgers, and Archer.  As for movies, I'm a fan of Hot Fuzz, The Prestige, Airplaine!, and Hot Rod, among others.  I'm generally a comedy guy, if you can't tell.
	</p>

	<p id="aboutme">
	&emsp; I'm going to take this opportunity to plug some of my favorite artists.  Listening to music and finding new artists is probably my biggest hobby of all, and I think it would be awesome of other people would check out the same music I'm listening to.  I've put some links to their Spotify pages below.
	</p>

	<p id="musiclist">
	<?php

		$music = array(
			"Odesza" => "https://play.spotify.com/artist/21mKp7DqtSNHhCAU2ugvUw",
			"Acceptance" => "https://play.spotify.com/artist/4zCbNayYzorqdzd9mPrghW",
			"The Receiving End of Sirens" => "https://play.spotify.com/artist/57fbnHozNJMl16yNzt4agV",
			"Closure in Moscow" => "https://play.spotify.com/artist/4I1DvdLsieFgvgYbr8NRfh",
			"Envy on the Coast" => "https://play.spotify.com/artist/6RvruFAgvsAb4B82u8wsSH",
			"Emancipator" => "https://play.spotify.com/artist/6HCnsY0Rxi3cg53xreoAIm"
		);
		echo"<ul id=\"musiclist\">";
		foreach($music as $key=>$value){
			$spantext = "<span id=\"spotlogo\"><img id=\"spotlogo\" src=\"http://image005.flaticon.com/9/png/512/7/7709.png\"></span>";
			echo "<li class=\"musiclist\"><a class=\"musiclist\" href=\"$value\">$key $spantext</a></li>";
		}
		echo"</ul></p><p id=\"aboutme\">";

	if(isset($_COOKIE["visited"])){
		echo "<p>&emsp;But you already knew all that from the last time you read this.  Welcome back, by the way.</p>";
	}else{
		echo "<p>&emsp;Thanks for being interested in me!  Feel free to take a look around my site - sorry it's a little barebones right now.</p>";
	}

	?>

	</p>
</body>
</html>