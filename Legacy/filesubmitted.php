<!doctype HTML>
<html>
	<head>
		<title>Thx 4 th file</title>
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

	<h2 id="pagetitle">Your character counts:</h2>

	<?php
		echo"<p>";
		if(isset($_FILES['textfile'])){
			// following "setup" largely copied from http://www.tutorialspoint.com/php/php_file_uploading.htm
			//print_r($_FILES['textfile']);
			$file_name = $_FILES['textfile']['name'];
			$temp_name = $_FILES['textfile']['tmp_name'];
			$file_type = $_FILES['textfile']['type']; // should be "txt"
			$file_ext=strtolower(end(explode('.',$file_name)));
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
	    //print_r($ascii_vals);

	    while (! feof ($filevar)){
			$asciinum = ord(fgetc($filevar));
			$ascii_vals[$asciinum]+=1;
		}

		// for ease of user understanding:
		$common_ascii_under_33 = array_pad(array(), 32, "");
		$common_ascii_under_33[10] = "newline";
		$common_ascii_under_33[32] = "space";

		echo "<table class=\"fileresults\">";
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
				echo "<td class=\"fileresults\">" . $curr_char . "</td>";
				echo "<td class=\"fileresults\">" . $ascii_vals[$i] . "</td>";
				echo "</tr>";
				//echo "Number of " . $curr_char . " characters: " . $ascii_vals[$i] . "<br/>";
			}
			//echo "Number of " . chr($i) . ":" . $ascii_vals[$i] . "<br/>";
		}
		$totalchars = array_sum($ascii_vals) - $ascii_vals[0] + $ascii_vals[13];
		echo "</tr><tr><td class=\"fileresults\">Total</td><td class=\"fileresults\">" . $totalchars . "</td></tr></table>";
		// echo "Total number of characters: " . array_sum($ascii_vals);

		echo"</p>";
	?>

	</body>
</html>