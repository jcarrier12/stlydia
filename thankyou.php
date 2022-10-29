<head>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
	</script>
	<script type="text/javascript">
		(function(){
			emailjs.init("3bcGml_3OYQa5cW6Q");
		})();
	</script>
	<link rel="stylesheet" href="index.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
</head>
<body onload="sendmail()">
	
	<div id="nav-bar">
		
	</div>
	<script>
		function sendmail() {
			if($_SERVER["REQUEST_METHOD"] == "POST"){
    		let firstName = $_POST["fname"];
			let lastName = $_POST["lname"];
    		let userEmail = $_POST["email"];
    		let userMessage = "Thank you for submitting your response!";

			var contactParams = {
				from_name: ""+firstName+" "+lastName,
				from_email: userEmail,
				message: userMessage
			};

        	emailjs.send('default_service', 'template_xxec2yd', contactParams).then(function (res) {})
		}
		}
	</script>
	
	<script>
		$(function(){
		$("#nav-bar").load("nav.php");
		});
	</script>
    <h1>Thank You!</h1>
    <h2>Your form has been submitted and an email has been sent! Check your inbox</h2>
    <button onclick="window.location.href='/index.php'">Return to Homepage</button>
</body>