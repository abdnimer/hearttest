<!doctype html>
<html>
<head>
	<link rel="shortcut icon" href="img/logo_icon.ico" />
<style>
#table_login{	
	display: inline-block;
	float: right;
	list-style: none;
	margin: 0;
	margin-left: 1%;
	padding: 0;
	width: auto;
}
</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>H-Health System</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">	
		<div id="header">
			<div>			
				<a href="index.php" class="logo"><img src="img/logo.png" alt=""></a>

				<ul id="navigation">
					<li class="selected">
						<a href="index.php">Home</a>
					</li>
					<li class="menu">
						<a href="SERVICES.php">SERVICES</a>

					</li>
					<li>	
						<center>
							<a href="login.php"><img src="img/login.png" id="login_img"></a>
						</center>
					</li>
					<li>
						<center>
							<a href="login_doctor.php"><img src="img/login_doctor.png" id="login_img"></a>
						</center>
					</li>
				</ul>			
			</div>
		</div>
				<table id="table_login">
				<tr><td>
				</td><td>
				</td></tr></table>					
		<div id="body" class="home">

			<div class="header">
				<div>
					<img src="img/Doctor.png" alt="" class="satellite">
					<h1>H-health</h1>
					<h2>the heart</h2>
					<a href="HEART_DISEASE_TEST_first.php" class="more">Lit's Start..</a>
					<h3>OUR SERVICES</h3>
					<ul>
						<li>
							<a href="patient_information.php"><img src="img/doctor_form.jpg" alt=""></a>
						</li>
						<li>
							<a href="diseases.php"><img src="img/Diseases.jpg" alt=""></a>
						</li>
						<li>
							<a href="projects.php"><img src="img/drugs.jpg" alt=""></a>
						</li>
						<li>
							<a href="researches.php"><img src="img/Research.jpg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="body">
				<div>
					<h1>OUR MISSION</h1>
					<p>We would like to find everyone who needs general medical information on our site</p>
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						<li>
							<h1>FEATURED VIDEO</h1>
							<video width="420" height="315" controls src="img/What is eHealth.mp4">
								Your browser does not support the video tag.
							</video>
						</li>
						<li>
							<h1>Top services</h1>
							<ul>
								<li>
									<a href="patient_information.php"><img src="img/new_doctor_form.jpg" alt=""></a>
									<h1>Create your profile</h1>
									<span>To keep the attention to your health</span>
									<a href="patient_information.php" class="more">Read More</a>
								</li>
								<li>
									<a href="researches.php"><img src="img/new_Research.jpg" alt=""></a>
									<h1>See the latest research</h1>
									<span>Many researches for many diseases</span>
									<a href="researches.php" class="more">Read More</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include("footer.php"); ?>

	</div>
</body>
</html>