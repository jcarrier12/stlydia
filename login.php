<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
	}
	else{
        // Prepare a select statement
		error_reporting(E_ALL);
		ini_set('display_errors',true);
		$sql = "SELECT * FROM users WHERE username = '".$_POST['username']."'";
		$result = mysqli_query($link, $sql);
		try{
            if(mysqli_num_rows($result)){
                $pass = mysqli_fetch_assoc($result);
				if(password_verify(trim($_POST["password"]), $pass['password'])){
					session_start();
					$_SESSION["username"] = $_POST["username"];
					header("Location: index.php");
					exit();
				}
				else{
					exit('password does not match username');
				}
            }
			else{
				$username_err = "This username does not exist";
			}
		}
		catch (Exception $e){
			echo $e->getMessage();
			exit;
		}
    }
}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
	<link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
	<div id="nav-bar">
			
	</div>
	<script>
		$(function(){
		$("#nav-bar").load("nav.php");
		});
	</script>
<body id="login">

    <div class="wrapper">
        <h3>Login</h3>
        <h2 style="font-size: 15pt">Please fill this form to login to your account.</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="form-group">
                <h3>Username</h3>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <h3>Password</h3>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
        </form>
    </div>    
</body>
</html>