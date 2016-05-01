<?php
	session_start();
	if (!isset($_FILES['textfile']) || strtolower(end(explode('.',$_FILES['textfile']['name']))) != "txt"){
		$_SESSION["error"] = "Please submit a text file (file extension .txt)";
		header("Location: fun_stuff.php");
		exit();
	}
?>

<!doctype HTML>
<html>
<head>
	<title>Thx 4 th file</title>
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

	<h2 id="pagetitle">Your character counts:</h2>

	<?php
		echo"<p>";
		if(isset($_FILES['textfile'])){
			// edumacated myself about this at http://www.tutorialspoint.com/php/php_file_uploading.htm
			$file_name = $_FILES['textfile']['name'];
			$temp_name = $_FILES['textfile']['tmp_name'];
			$file_type = $_FILES['textfile']['type']; // should be "txt"
			$file_ext = strtolower(end(explode('.',$file_name)));
			if($file_ext!="txt"){ // making sure it's a text file
				echo"Looks like you didn't submit a text file.  Please go back and submit a text file (file extension .txt)";
				exit();
			}

		}else{
			echo"Looks like you didn't submit a file. Please go back and submit something.</br>";
			exit();
		}
		echo"</p>";

		// alright.  Time to put the file somewhere.

		echo"<p>";
		if (!move_uploaded_file($temp_name, $file_name)) {
			echo "Sorry, there was an error uploading your file :(  You can try again if you want I guess.";
		}
		// looks like it's uploaded.  Now let's run through it.

		$filevar = fopen($file_name, "r");

		$ascii_vals = array_pad(array(), 128, 0);

	    while (! feof ($filevar)){
			$asciinum = ord(fgetc($filevar));
			$ascii_vals[$asciinum]+=1;
		}

		// for ease of user understanding:
		$common_ascii_under_33 = array_pad(array(), 32, "");
		$common_ascii_under_33[10] = "newline";
		$common_ascii_under_33[32] = "space";
		$row_count = 0;

		echo "<table id=\"fr\">";
		echo "<tr><th class=\"filetableheader\">Character</td><th class=\"filetableheader\">Count</td></tr>";
		for($i=0 ; $i < 128 ; $i++){
			if ($ascii_vals[$i] > 0){
				if ($i == 0 || $i == 13){
					continue; // null and carriage return don't count in my book.
				}
				$curr_char = "";
				if($i==10 || $i==32){
					$curr_char = $common_ascii_under_33[$i];
				}else{
					$curr_char = chr($i);
				}
				echo "<tr>";
				if ($row_count % 2 == 1){
					echo "<tr class=\"darkrow\">";
				}else{
					echo "<tr>";
				}
				echo "<td>" . $curr_char . "</td>";
				echo "<td>" . $ascii_vals[$i] . "</td>";
				echo "</tr>";
				$row_count++;
			}
		}
		$totalchars = array_sum($ascii_vals) - $ascii_vals[0] + $ascii_vals[13];
		if ($row_count % 2 == 1){
			echo "</tr><tr class=\"darkrow\">";
		}else{
			echo "</tr><tfoot>";
		}
		echo "<td>Total</td><td>" . $totalchars . "</td></tfoot></table>";

		echo"</p>";
	?>
	</div>

	</body>
</html>