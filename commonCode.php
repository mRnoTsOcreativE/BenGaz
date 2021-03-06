<?php
//============================
//you will need to the "CSS/CommonCode.css" file to use these functions 
//function lists
//
//TITLE_LOGO(); //for logo
//NAVIGATION_BAR(); // for navigation
//FOOTER(); //for footer
//DB_START(); // for DB connect
//DB_STOP($conn); // for DB disconect
//DataSanitize($value) // for sanitizaing data
//
//=================================

//title logo
//header title
function TITLE_LOGO()
{
	echo '
	<div id="header_logo">
		<a href="index.php">
			<img src="img/BengalGazetteLogo.png" style="width: 500px;height:auto;">
		</a>
	</div>';
} //title logo ends

// navigation bar function
// this will call the sticky navigation bar
function NAVIGATION_BAR()
{
	echo '
	<div id="nav_bar">
		<ul id="bar_list">
			<li class="bar_list_item"><span><a href="home.php">Feature</a></span></li>
			<li class="bar_list_item"><span><a href="bangladesh.php">Bangladesh</a></span></li>
			<li class="bar_list_item"><span><a href="#">International</a></span></li>
		  	<li class="bar_list_item"><span><a href="#">Corporate</a></span></li>
		  	<li class="bar_list_item"><span><a href="#">Economics</a></span></li>
			<li class="bar_list_item"><span><a href="#">Sports</a></span></li>
		  	<li class="bar_list_item"><span><a href="#">Entertainment</a></span></li>
		  	<li class="bar_list_item"><span><a href="#">Technology</a></span></li>
			<li class="bar_list_item"><span><a href="#">LifeStyle</a></span></li>
			<li class="bar_list_item"><span><a href="opinion/">Opinion</a></span></li>
			<li class="bar_list_item"><span><a href="#">Photo</a></span></li>
		</ul>
	</div>';
} // end function navigation bar

//footer function
function FOOTER()
{
	echo'
		<div id="footer">
			<p>Bengal Gazette | &copy 1780-' . date("Y").'<br>
				<a class="footer_links" href="about.php">About</a> | 
				<a class="footer_links" href="policy.php">Policy</a> |
				<a class="footer_links" href="contact.php">Contact Us</a>
			</p>
		</div>';
} //end function footer

//database start functions
function DB_START()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "bengaz";
	$conn = mysqli_connect($servername,$username,$password,$databasename);

	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	}

	return $conn;
} //end function db start
//
function DB_STOP($conn)
{
	mysqli_close($conn);
}

function DataSanitize($value)
{
	$value = trim($value);
	$value = stripcslashes($value);
	$value = strip_tags($value);

	return $value;
}




?>