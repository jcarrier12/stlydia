<?php
	session_start();
?>
<a class="burger-nav"></a>
<ul class='navbar'>
	<li id="list1"><a id="undln" class='nav-link' href = "index.php"><b>Home</b></a></li>
 	<?php
		// if(isset($_SESSION["username"])){
			// echo "<li id='list1'><a id='undln' class='nav-link' href = 'profile.php'>Profile</a></li>";
			// echo "<li id='list1'><a id='undln' class='nav-link' href = 'logout.php'>Logout</a></li>";
		// }
		// else{
			// echo "<li id='list1'><a id='undln' class='nav-link' href = 'login.php'>Login</a></li>";
			// echo "<li id='list1'><a id='undln' class='nav-link' href = 'register.php'>Register</a></li>";
		// }
	?> 
	<li id="list1"><a id="undln" class='nav-link' href="about.php"><b>About Her</b></a></li>
	<li id="list1"><a id="undln" class='nav-link' href="purplecloth.php"><b>Purple Cloth</b></a></li>
	<li id="list1"><a id="undln" class='nav-link' href="principles.php"><b>Principles</b></a></li>
	<li id="list1"><a id="undln" class='nav-link' href="structure.php"><b>Structure</b></a></li>
	<li id="list1"><a id="undln" class='nav-link' href="commitments.php"><b>Commitments</b></a></li>
	<li id="list1"><a id="undln" class='nav-link' href="enroll.php"><b>Application</b></a></li>
	<li id="list1"><a id="undln" class='nav-link' href="contactus.php"><b>Contact Us</b></a></li>
</ul>