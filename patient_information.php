

<!DOCTYPE html>
<html>
    <head>
    	<link rel="shortcut icon" href="img/logo_icon.ico" />
		<link rel="stylesheet" href="css/style.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/mobile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style> 
@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);


body {
	background: #119e53;
	color: #fff;
	font-weight: 400;
	font-size: 1em;
	font-family: 'Lato', Arial, sans-serif;
	margin:0;
	padding:0;
	padding-bottom:60px;
}
.ccheader {
	margin: 0 auto;
	padding: 2em;
	text-align: center;
}

.ccheader h1 {
	margin: 0;
	font-weight: 300;
	font-size: 2.5em;
	line-height: 1.3;
}
.ccheader {
	margin: 0 auto;
	padding: 2em;
	text-align: center;
}

.ccheader h1 {
	margin: 0;
	font-weight: 300;
	font-size: 2.5em;
	line-height: 1.3;
}

/* Form CSS*/
.ccform {
   margin-left:33%;
    width: 800px;
}
.ccfield-prepend{
	margin-bottom:10px;
	width:100%;
}

.ccform-addon{
	color:#119e53; 
	float:left;
	padding:10px;
	width:8%;
	background:#FFFFFF;
	text-align:center;	
}

.ccformfield {
	color:#000000; 
	background:#FFFFFF;
	border:none;
	padding:17.5px;
	width:40%;
	display:block;
	font-family: 'Lato',Arial,sans-serif;
	font-size:14px;
}
.ccformfieldd {
	color:#000000; 
	background:#FFFFFF;
	border:none;
	padding:16.5px;
	width:44.5%;
	display:block;
	font-family: 'Lato',Arial,sans-serif;
	font-size:14px;
}
.ccformfield2 {
	color:#000000; 
	background:#FFFFFF;
	border:none;
	padding:15.5px;
	width:40.5%;
	display:block;
	font-family: 'Lato',Arial,sans-serif;
	font-size:14px;
}
.ccformfield3 {
	color:#000000; 
	background:#FFFFFF;
	border:none;
	padding:16.5px;
	width:44.5%;
	display:block;
	font-family: 'Lato',Arial,sans-serif;
	font-size:14px;
}

.ccformfield {
	font-family: 'Lato',Arial,sans-serif;
}
.ccformfield2 {
	font-family: 'Lato',Arial,sans-serif;
}
.ccformfield3 {
	font-family: 'Lato',Arial,sans-serif;
}
.ccbtn{
	display:block;
	border:none;
	background:#6a8978;
	color:#FFFFFF;
	padding:12px 25px;
	cursor:pointer;
	text-decoration:none;
	font-weight:bold;
	font-size: 20px;
}
.ccbtn:hover{
	background:#65eda5;

}
.credit {
  width: 800px;
  clear:both;
margin:0 auto;
  line-height:25px;
 padding: 25px 50px; 
text-align: center;
}
.credit em{
margin-right:5px;
}
.credit a {
color: #000;
font-weight: bold;
text-decoration: none;
}

</style>
<script>
function myFunction() {
var answer="";
   var statement="Answer yes or no";
   var answer=prompt("Are all the data you entered healthy and you are responsible?");
   if ( answer == "yes")
    {statement="Thank you, you are now a family member"};
   if(answer == "no")
    {statement="Review the data"};
   alert(statement);
    }
</script>
    </head>
<body background="img/patient_form_BG.jpg">
<?php
include("header.php");
?>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<header class="ccheader">
    <h1>Create File</h1>	
</header>
<div class="wrapper">
	<form class="ccform" method="POST" enctype="multipart/form-data" id="Patient_f">
  
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" id="first_name" name="first_name" type="text" placeholder="Your First name" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" type="text" id="middle_name" name="middle_name" placeholder="Your Middle name" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" type="text" id="last_name" name="last_name" placeholder="Your Last name">
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-transgender fa-2x"></i></span>
      <!-- <input class="ccformfield" type="text" name="gender" id="gender" placeholder="Select your Gender" required>-->
        <select  class="ccformfield3" name="gender" id="gender"  required>
            <option value="1" >Male</option>
            <option value="2">Female</option>
        </select>
    </div> 
	<div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-birthday-cake fa-2x"></i></span>
        <input class="ccformfield2" id="BOD"name="BOD" type="date" placeholder="Birth of date" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-tint fa-2x"></i></span>
        <!--<input class="ccformfield" type="text" id="blood_type" name="blood_type" placeholder="Select Blood type" required>-->
        <select class="ccformfield3" id="blood_type" name="blood_type" required>
		    <option >A Positive</option>
		    <option>A Negative</option>
		    <option>A Unknown</option>
		    <option>B Positive</option>
		    <option>B Negative</option>
		    <option>B Unknown</option>
		    <option>AB Positive</option>
		    <option>AB Negative</option>
		    <option>AB Unknown</option>
		    <option>O Positive</option>
		    <option>O Negative</option>
		    <option>O Unknown</option>
		    <option>Unknown</option>
		</select>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-mobile fa-2x"></i></span>
        <input class="ccformfield" type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number">
    </div>
     <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-globe fa-2x"></i></span>
        <select class="ccformfieldd" name="country" id="country">
             <?php
             $link = mysqli_connect("localhost", "root", "", "e-health (1)");
          $sql = "SELECT * FROM Country";
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <option value=<?= $row["country_ID"]; ?>>
    <?= $row["CoName"]; ?>
    </option>
    <?php
    }
    } else {
    echo "لا يوجد شيئ لعرض ........ <i class='mdi mdi-heart text-red'></i>";
    }
    ?>
</select>
    </div>
    <input  type="file"  accept="image/png, image/jpeg, image/gif" name="img_blog" id="img_blog" /> <!-- rename it -->
        <!--<input type="file" name="fileToUpload" id="fileToUpload">-->
		 <div class="ccfield-prepend">
        <input  type="button" value="Submit" name="submit" id="submit" class="ccbtn">
    </div>
    </form>
<div id="response"></div>
    	</div>
      <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
     
	    <script type="text/javascript">
$(document).ready(function(){
	   $('#submit').on('click' , function(){
        // show that something is loading
        $('#response').html("<b>Loading response...</b>");
sendForm();
				 function sendForm() {
   var fileData = new FormData(document.getElementById("Patient_f"));
   var xhr = new XMLHttpRequest();
   xhr.open("POST", "Operations/insert_patient.php", true);
   xhr.setRequestHeader('Accept', 'application/json');
   xhr.onload = function(progressEvent) {
     if (xhr.status == 200) {
       console.log('Uploaded', xhr);
       
     } else {
     	 console.log(xhr.responseText);
       console.log("Error " + xhr.status + " occurred uploading your file.", xhr);
     }
   };
   xhr.send(fileData);
 }
    });
 });
     </script>

		<?php include("footer.php"); ?>

	</body>

</html>