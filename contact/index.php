<?php include 'sendemail.php'; ?>



<html>
<head>
	<title>Contact form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- alert message start-->
	

	<!-- alert message start-->

	<div class="container">
		<form method="post" action="sendemail.php">
			<div class="form">
				<label class="lbl">Name:</label>
				<input  class="inputs" type="text" name="name"><br>

				<label class="lbl">Email:</label>
				<input  class="inputs" type="text" name="email"><br>

				<label class="lbl">Message:</label>
				<textarea class="inputs" rows="5" cols="20" name="message"></textarea>

				<input type="submit" name="submit">


			</div>
		</form>
	</div>

	<script type="text/javascript">
		if(window.history.replaceState){
			window.history.replaceState(null,null,window.location.href);
		}
	</script>
</body>
</html>