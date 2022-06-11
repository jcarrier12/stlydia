<head>
	<link href="index.css" type="text/css" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
	<div id="nav-bar">
			
	</div>
	<script>
		$(function(){
		$("#nav-bar").load("nav.php");
		});
	</script>
	<h1>Application for Membership</h1>
    <form class="grid">
		<label for="fname">First name:</label>
		<input type="text" id="fname" name="fname">
		
		<label for="lname">Last name:</label>
		<input type="text" id="lname" name="lname">
		
		<label for="address">Address:</label>
		<input type="text" id="address" name="address">
		
		<label for="email">Email:</label>
		<input type="text" id="email" name="email">
		
		<label for="phone">Phone Number:</label>
		<input type="text" id="phone" name="phone">
		
		<label for="husband">Husband's Name: (if applicable)</label>
		<input type="text" id="husband" name="husband">
		
		<label for="children">Childrens' Names separated with commas: (if applicable)</label>
		<input type="text" id="children" name="children">
		
		
	</form>
	<p>What is your Marital Status?</p>
	<form>
		<input type="radio" id="single" name="marstat" value="Single">
		<label for="single">Single</label><br>
		<input type="radio" id="married" name="marstat" value="Married">
		<label for="married">Married</label><br>
		<input type="radio" id="widowed" name="marstat" value="Widowed">
		<label for="widowed">Widowed</label><br>
		<input type="radio" id="divorced" name="marstat" value="Divorced">
		<label for="divorced">Divorced</label><br>
		<input type="radio" id="separated" name="marstat" value="Separated">
		<label for="separated">Separated</label><br>
	</form>
	<p>Provide a Brief (500 word) Spiritual Biography</p>
	<p>Checklist of Points:</p>
	<form id="usrform">
		<input type="checkbox" id="q1" name="q1" value="q1">
		<label for="q1">Why do you want to be part of this society?</label><br>
		<input type="checkbox" id="q2" name="q2" value="q2">
		<label for="q2">How do you see the power of beauty working in your life?</label><br>
		<input type="checkbox" id="q3" name="q3" value="q3">
		<label for="q3">What do you do to live a life of modesty?</label><br>
		<input type="checkbox" id="q4" name="q4" value="q4">
		<label for="q4">Where can you grow in showing maternal love to others?</label><br>
		<input type="checkbox" id="q5" name="q5" value="q5">
		<label for="q5">Write out your daily, weekly, monthly and annual prayer schedule.</label><br>
		<input type="checkbox" id="q6" name="q6" value="q6">
		<label for="q6">Explain your personal apostolic commitment.</label><br>
	</form>
	<textarea rows="6" cols="150" name="comment" form="userform" placeholder="Enter text here..."></textarea>
</body>