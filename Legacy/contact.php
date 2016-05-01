<!doctype HTML>
<html>
	<head>
		<title>Hit me up</title>
		<link rel="stylesheet" type="text/css" href="mysitestyle.css">
	</head>
	<body>

	<span class="siteheader">Michael Fieseher</span><div id="rectangle"></div><hr id="topline"><br/><br/>

	<table class = "menu">
		<tr>
			<td class="table_head">Menu</td>
		</tr>
		<tr>
			<td class="top"><a href="/cs1520/personal%20website/p1/about_me.php" class="menu">About me</a></td>
		</tr>
		<tr>
			<td class="main"><a href="/cs1520/personal%20website/p1/contact.php" class="menu">Contact</a></td>
		</tr>
		<tr>
			<td class="main"><a href="/cs1520/personal%20website/p1/fun_stuff.php" class="menu">Fun stuff</a></td>
		</tr>
	</table>

	<h2 id="pagetitle">Contact me</h2>

	<p>Say hi!  You can access my Facebook page <a href="https://www.facebook.com/michael.fieseher" class="fblink">right here.</a>  I also have an email at maf194@pitt.edu that you can reach me at.  If neither of those suit your fancy, send me a simple message below!</p>

	<form	action="/cs1520/personal%20website/contacted.php" 
			method="POST">
		<input type="text" name="name" placeholder="Name" size="25"/><br/><br/>
		<textarea rows="5" name="message" placeholder="Your message here" style= width:300px></textarea><br/><br/>
		<input type="submit" value="Send"/>
	</form>


	</body>
</html>