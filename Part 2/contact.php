<!doctype HTML>
<html>
	<head>
		<title>Hit me up</title>
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

	<h2 id="pagetitle">Contact me</h2>

	<p>Say hi!  You can access my Facebook page <a href="https://www.facebook.com/michael.fieseher" class="fblink">right here</a>.  I also have an email at <a href="mailto:maf194@pitt.edu">maf194@pitt.edu</a> that you can reach me at.  If neither of those suit your fancy, send me a simple message below!</p>

	<form	action="/cs1520/personal%20website/contacted.php" 
			method="POST"
			class="generalform"
			autocomplete="off">
		<input type="text" name="name" placeholder="Name" size="25"/><br/><br/>
		<textarea rows="5" name="message" placeholder="Your message here" style= width:300px></textarea><br/><br/>
		<input type="submit" value="Send"/>
	</form>

	</div>

	</body>
</html>