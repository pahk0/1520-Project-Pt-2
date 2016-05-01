<!doctype HTML>
<html>
	<head>
		<title>"Fun" is a subjective word</title>
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

	<h2 id="pagetitle">Fun stuff</h2>

	<p>Upload a text file.  Do it.  See what happens.  It's totally not underwhelming.</p>

	<form action="/cs1520/personal%20website/p1/filesubmitted.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="textfile" id="textfileid"/>
		<input type="submit" value="Upload text file"/>
	</form>

	<br/><br/><br/><br/>
	<p class="bottomnote">More FUNctionality to be added in the future!</p>
	
	</body>
</html>