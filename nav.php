<?php
	session_start();
?>
<ul class='navbar'>
	<li id="list1"><a id="undln" class='nav-link' href = "index.php">Home</a></li>
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
	<li id="list1"><a id="undln" class='nav-link' href="about.php">About Her</a></li>
	<li id="list1"><a id="undln" class='nav-link' href="principles.php">Principles</a></li>
	<li id="list1"><a id="undln" class='nav-link' href="memberpledge.php">Member Pledge</a></li>
	<li id="list1"><a id="undln" class='nav-link' href="enroll.php">Enroll Here</a></li>
	<li id="list1"><a id="undln" class='nav-link' href="purple.php">Purple Cloth</a></li>
	<li id="list1"><a id="undln" class='nav-link' href="commitments.php">Commitments</a></li>
</ul>