<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="index.css" type="text/css" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<link rel="shortcut icon" type="image/jpg" href="icon.png"/>
</head>
<body>
	<?php
		require_once "config.php";

		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$sql = "INSERT INTO FormSubmission (fname, lname, address, email, phone, hname, chname, mstatus, bio)
			VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['address']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['husband']."','".$_POST['children']."','".$_POST['marstat']."','".$_POST['comment']."')";
			if(mysqli_query($link, $sql)===TRUE){
			}
			else {
				echo "Error: " . $sql . "<br><br>" . $link->error;
			}

		}
	?>
	<div id="nav-bar">
			
	</div>
	<script>
		$(function(){
		$("#nav-bar").load("nav.php");
		});
	</script>
	<h1>Application for Membership</h1>
    <form id="form">
		<label for="from_name">Full Name:</label>
		<input type="text" id="from_name" name="from_name">
		<br><br>
		<label for="address">Address:</label>
		<input type="text" id="address" name="address">
		<br><br>
		<label for="city">City:</label>
		<input type="text" id="city" name="city">
		<br><br>
		<label for="state">State:</label>
		<input type="text" id="state" name="state">
		<br><br>
		<label for="zip">Zip Code:</label>
		<input type="text" id="zip" name="zip">
		<br><br>
		<label for="email">Email:</label>
		<input type="text" id="email" name="email">
		<br><br>
		<label for="phone">Phone Number:</label>
		<input type="text" id="phone" name="phone">
		<br><br>
		<label for="husband">Husband's Name: (if applicable)</label>
		<input type="text" id="husband" name="husband">
		<br><br>
		<label for="children">Childrens' Names separated with commas: (if applicable)</label>
		<input type="text" id="children" name="children">
		<br><br>
		<div class="form" id="marstat">
			<label>What is your Marital Status?</label>
			<div class="form-group">
				<input type="radio" id="single" name="marstat" value="Single">
				<label for="single">Single</label>
			</div>
			<div class="form-group">
				<input type="radio" id="married" name="marstat" value="Married">
				<label for="married">Married</label>
			</div>
			<div class="form-group">
				<input type="radio" id="widowed" name="marstat" value="Widowed">
				<label for="widowed">Widowed</label>
			</div>
			<div class="form-group">
				<input type="radio" id="divorced" name="marstat" value="Divorced">
				<label for="divorced">Divorced</label>
			</div>
			<div class="form-group">
				<input type="radio" id="separated" name="marstat" value="Separated">
				<label for="separated">Separated</label>
			</div>
		</div>
		<br><br>
		<label>Provide a Brief (500 word) Spiritual Biography</label>
		<br><br>
		<label>Checklist of Points:</label>
		<div class="form-group">
			<input type="checkbox" id="q1" name="q1" value="q1">
			<label for="q1">Why do you want to be part of this society?</label><br><br>
		</div>
		<div class="form-group">
			<input type="checkbox" id="q2" name="q2" value="q2">
			<label for="q2">How do you see the power of beauty working in your life?</label><br><br>
		</div>
		<div class="form-group">
			<input type="checkbox" id="q3" name="q3" value="q3">
			<label for="q3">What do you do to live a life of modesty?</label><br><br>
		</div>
		<div class="form-group">
			<input type="checkbox" id="q4" name="q4" value="q4">
			<label for="q4">Where can you grow in showing maternal love to others?</label><br><br>
		</div>
		<div class="form-group">
			<input type="checkbox" id="q5" name="q5" value="q5">
			<label for="q5">Write out your daily, weekly, monthly and annual prayer schedule.</label><br><br>
		</div>
		<div class="form-group">
			<input type="checkbox" id="q6" name="q6" value="q6">
			<label for="q6">Explain your personal apostolic commitment.</label><br><br>
		</div>
		<textarea rows="6" cols="70" name="essay" id="essay" placeholder="Enter text here..." style="color:#111"></textarea>
		<h2 class="makewhite">Pledge of Commitment</h2>
		<h3>I, <input type="text" id="fullname" name="fullname"> , being drawn by Almighty God and seeking to live the gift of my femininity more
			fruitfully in the heart of the Catholic Church, voluntarily enroll myself in the Society of Saint
			Lydia. I pledge to be faithful the principals of this Society. I pledge myself to live a life of
			modesty, beauty, and maternity. I pledge to live a life of devout and intimate prayer, being
			faithful to my spiritual commitments. I pledge to live a life of service to the Church and to
			others, being faithful to my apostolic commitments. I pledge to wear the prayer shawl as a
			public witness to my commitment and to share with others about they Society. I will faithfully
			pray for the other members of the society and for the Church.
		</h3>
		
		<input type="submit" id="button"value="Submit" />
		<br/>
		
		
	</form>
	<script type="text/javascript">
        window.onload = function() {
		const btn = document.getElementById('button');

		document.getElementById('form')
		.addEventListener('submit', function(event) {
			event.preventDefault();

			btn.value = 'Sending...';

			const serviceID = 'default_service';
			const templateID = 'template_xxec2yd';

			emailjs.sendForm(serviceID, templateID, this)
			.then(() => {
				btn.value = 'Send Email';
				alert('Sent!');
			}, (err) => {
				btn.value = 'Send Email';
				alert(JSON.stringify(err));
			});
		});
	}
	</script>
	<script type="text/javascript"
  		src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

	<script type="text/javascript">
		emailjs.init('3bcGml_3OYQa5cW6Q')
	</script>
	
</body>
<br/>
<br/>