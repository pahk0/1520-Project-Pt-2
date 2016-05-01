<?php
	session_start();
?>
<!doctype HTML>
<html>
	<head>
		<title>"Fun" is a subjective word</title>
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

	<h2 id="pagetitle">Fun stuff</h2>

	<h3 class="funstuffheader">Character counts</h3>

	<p>Upload a text file.  Do it.  See what happens.  It's the least underwhelming thing ever.  Would I ever lie to you?</p><br/>

	<form action="/cs1520/personal%20website/filesubmitted.php" method="POST" enctype="multipart/form-data" class="generalform">
		<input type="file" name="textfile" id="textfileid"/>
		<input type="submit" value="Upload text file"/>
	</form>

	<br/>
	<?php
		echo "<p>";
		if (isset($_SESSION["error"])){
			echo $_SESSION["error"];
			unset($_SESSION["error"]);
		}else{
			echo "<br/>";
		}
		echo "</p>";
	?>
	<br/><br/>

	<h3 class="funstuffheader">Math quiz</h3>
	<p>Test your knowledge of addition, subtraction, multiplication, and division! &nbsp;See how many math problems you can get right in 30 seconds after pressing the button!  During the quiz you can also use the button as a "skip" if you're weak.</p><br/>
	<div id="quizbackground">
		<div id="buttondiv">
			<button id="timerbutton">Start!</button>
		</div>
		<div id="quizdiv">
			<p id="quizquestion">
			<br/>
			</p><br/>
			<form id="quizform" autocomplete="off">
				<input type="text" name="quizanswer" id="quizanswer"/><br/>
			</form>
		</div>
	</div>

	<br/><br/>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="mathquiz.js"></script>
	</body>
</html>