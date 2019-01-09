<?php

   $conn = mysqli_connect("localhost", "root", "", "e-health (1)");
                                            $sql = "SELECT * from patient";
$result = $conn->query($sql);
if ($result->num_rows > 0) {    while($row = $result->fetch_assoc()) {
 $name = $row["patient_UsName"];}}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SERVICES - E-health System</title>
	<link rel="shortcut icon" href="img/logo_icon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
	<style>
	#header {
	background-color:#014701;


}
	</style>
	     <script type = "text/javascript">

         function mOver() 
         {
               test.innerText = "Logout";

         }

         function mOut() 
         {
              test.innerText = "<?= $name ?>";
         }


      </script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.php" class="logo"><img src="img/logo.png" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li class="menu selected">
						<a href="SERVICES.php">SERVICES</a>
					</li>
				</ul>
					<ul style="float: right;">
					<li>
						<a id="test" name="test" href="Operations/Logout.php"  onmouseover = "mOver()" onmouseout = "mOut()"><?= $name ?></a>
					</li>
					</ul>
			</div>
		</div>
		<div id="body">
			
			<div class="header">
				<div>
	
					<h1>OUR SERVICES</h1>
					<ul>
						<li>
							<a href="patient_information.php"><img src="img/Create_amedical_file.jpg" alt=""></a>
							<div>
								<h1>Create a medical file</h1>
								<p>You are close to enjoying the full service provided by the site !! Creating a medical file for you ensures that you keep on following up by our doctors. We will keep your data protected and confidential from appearing publicly.</p>
								<a href="patient_information.php" class="more">Lit's Go..</a>
							</div>
						</li>
						<li>
							<a href="form_DISEASE_TEST.php"><img src="img/HEART_DISEASE_TEST.jpg" alt=""></a>
							<div>
								<h1>Heart disease test </h1>
								<p>The study of previous cases and the work of research on them to come out with a system capable of detecting people with heart disease, and distinguish them and give them tips for their different situations, and most of it is completely free! You can perform the test in an easy, secure and confidential manner and the information is saved in a way that ensures the privacy of the information.</p>
								<a href="form_DISEASE_TEST.php" class="more">Lit's Go..</a>
							</div>
						</li>
						<li>
							<a href="researches.php"><img src="img/The_latest_research_in_diseases.jpg" alt=""></a>
							<div>
								<h1>The latest research in diseases</h1>
								<p>Looking for research or studies on a particular disease? Just browse our Disease Guide and find the disease you are looking for. Our research is constantly updated and you will find our latest information do not worry.</p>
								<a href="researches.php" class="more">Lit's Go..</a>
							</div>
						</li>
						<li>
							<a href="diseases.php"><img src="img/Learn_about_diseases.jpg" alt=""></a>
							<div>
								<h1>Learn about diseases</h1>
								<p>Diseases spread! Learn about its symptoms and causes! We have collected the most common symptoms of the most common diseases that are common among people. As well as their causes and definitions, so that they remain safe from them and maintain and avoid injury.</p>
								<a href="diseases.php" class="more">Lit's Go..</a>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
				<?php include("footer.php"); ?>

	</div>
</body>
</html>