<html>
<head>
<?php
if(isset($_POST['save']))
{

    $conn = mysqli_connect("localhost", "root", "", "e-health");		

 $age_db = $_POST['age'];
 $gender_db = $_POST['gender'];
 $chest_pain_type_db = $_POST['chest_pain_type'];
 $resting_blood_pressure_db = $_POST['resting_blood_pressure'];
 $serum_cholestoral_db = $_POST['serum_cholestoral'];
 $fasting_blood_db = $_POST['fasting_blood'];
  $resting_electrocardiographic_db = $_POST['resting_electrocardiographic'];
 $maximum_heart_rate_achieved_db = $_POST['maximum_heart_rate_achieved'];
 $exercise_induced_angina_db = $_POST['exercise_induced_angina'];
  $oldpeak_db = $_POST['oldpeak'];
  $slope_db = $_POST['slope'];
  $major_vessels_db= $_POST['major_vessels'];
  $thal_db=$_POST['thal'];


 

   if(mysqli_query($conn, "INSERT INTO HEART_DISEASE VALUES ($age_db, $gender_db, $chest_pain_type_db, $resting_blood_pressure_db, $serum_cholestoral_db, $fasting_blood_db , $resting_electrocardiographic_db ,$maximum_heart_rate_achieved_db , $exercise_induced_angina_db, $oldpeak_db, $slope_db,$major_vessels_db ,$thal_db)"))
   {
           echo"1";
  }
   else{
           echo"Error";
        // echo "Error: <br>" . $conn->error;   
   }
  
}

 
?>
	<link rel="stylesheet" href="css/style.css" type="text/css">

<style type="text/css">
.form-style{
    width: 100%;
	height :100%;
    font-size: 20px;
    padding: 5% 0 0 0 ;

}
.form-style input[type=submit],
.form-style input[type=button],
.form-style input[type=text],
.form-style textarea,
.form-style label
{
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size: 20px;
    color: #208e28;
	font-weight: bold;

}
.form-style label {
    display:block;
    margin-bottom: 3%;
	margin-left:20%;
}
.form-style label > span{
    display: inline-block;
    float: left;

	
}
.form-style input[type=text],
.form-style input[type=text] 
{
    background: transparent;
    border: none;
    border-bottom: 2px dashed #208e28;
    width: 20%;
    outline: none;
    padding: 0px 0px 0px 0px;
    font-style: italic;
	margin-left:300px;
	   float: right;
	 margin-bottom: 3%;
	 margin-right:20%;
}

.form-style input[type=text]:focus,

{
    border-bottom: 1px dashed #D9FFA9;

}

.form-style input[type=submit],
.form-style input[type=button]{
    background: #576E86;
    border: none;
    padding: 8px 10px 8px 0;
    border-radius: 5px;
    color: #A8BACE;
	margin-left:40%;

	
}
.form-style input[type=submit]:hover,
.form-style input[type=button]:hover{
background: #394D61;
}
.tooltip {
    position: relative;
    display: inline-block;

}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 300px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
body {
    background-image: url("img/test_bg.jpg");
    background-repeat: no-repeat;
    background-size: auto;
}
</style>
<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}


function calculate()
          { 
            var x1 = parseInt(document.myform.age.value);
            var x2 = parseInt(document.myform.gender.value);
			var x3 = parseInt(document.myform.chest_pain_type.value);
			var x4 = parseInt(document.myform.resting_blood_pressure.value);
			var x5 = parseInt(document.myform.serum_cholestoral.value);
			var x6 = parseInt(document.myform.fasting_blood.value);
			var x7 = parseInt(document.myform.resting_electrocardiographic.value);
			var x8 = parseInt(document.myform.maximum_heart_rate_achieved.value);
			var x9 = parseInt(document.myform.exercise_induced_angina.value);
			var x10 = parseInt(document.myform.oldpeak.value);
			var x11 = parseInt(document.myform.slope.value);
			var x12 = parseInt(document.myform.major_vessels.value);
			var x13 = parseInt(document.myform.thal.value);

			
			if(x13<=3 && x3<=3 ){
				alert("absent");	
			}
			else if(x13<=3 && x3>3 && x12<=0 && x1<=54){
				alert("absent");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9<=0 && x11<=1 && x5<=288){
				alert("absent");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9<=0 && x11<=1 && x5>288){
				alert("present");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9<=0 && x11>1){
				alert("absent");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9>0 && x11<=1){
				alert("absent");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9>0 && x11>1){
				alert("present");
			}
			else if (x13<=3 && x3>3 && x12>0 && x2<=0 && x11<=1){
				alert("absent");
			}
			else if (x13<=3 && x3>3 && x12>0 && x2<=0 && x11>1){
				alert("present");
			}
			else if (x13<=3 && x3>3 && x12>0 && x2>0 ){
				alert("present");
			}
			else if (x13>3 && x12<=0 && x9<=0 && x6<=0 && x13<=6){
				alert("absent");
			}
			else if (x13>3 && x12<=0 && x9<=0 && x6<=0 && x13>6 && x1<=52){
				alert("present");
			}	
			else if (x13>3 && x12<=0 && x9<=0 && x6<=0 && x13>6 && x1>52){
				alert("absent");
			}	
			else if (x13>3 && x12<=0 && x9<=0 && x6>0 ){
				alert("absent");
			}
			else if (x13>3 && x12<=0 && x9>0 && x10<=1 && x5<=255 ){
				alert("absent");
			}
			else if (x13>3 && x12<=0 && x9>0 && x10<=1 && x5>255 ){
				alert("present");
			}
			else if (x13>3 && x12<=0 && x9>0 &&  x10>1){
				alert("present");
			}
			else if (x13>3 && x12>0 ){
				alert("present");
			}
		  }
		  
</script>

</head>
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
					<li>
						<a href="about.php">About</a>
					</li>
					<li class="menu">
						<a href="blog.php">Blog</a>

					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</div>
<body >
<form class="form-style" id="myform" name="myform" action="" method="post">
<label >
<div class="tooltip"><span>Age</span><span class="tooltiptext">Age in years exactly</span></div>
<input id="age" name="age" type="text" placeholder="Age" required="true" maxlength="2" />
</label>
<label >
<div class="tooltip"><span>Gender</span><span class="tooltiptext">(1 = male , 0 = female)</span></div>
<input id="gender" name="gender" type="text" placeholder="Gender"  required="true" maxlength="2" />
</label>
<label >
<div class="tooltip"><span>Do you feel chest pain?</span><span class="tooltiptext">chest pain type (1 = typical angina; 2 = atypical angina; 3 = non-anginal pain; 4 = asymptomatic)</span></div>
<input id="chest_pain_type" name="chest_pain_type" type="text" placeholder="Chest Pain Type" maxlength="2" required="true" />
</label>
<label >
<div class="tooltip"><span>Rsting Blood Pressure</span><span class="tooltiptext">(in mmHg on admission to the hospital)</span></div>
<input id="resting_blood_pressure" name="resting_blood_pressure" type="text" maxlength="2" placeholder="Rsting Blood Pressure" required="true" />
</label>
<label >
<div class="tooltip"><span>Serum Cholestoral</span><span class="tooltiptext">(serum cholesterol in mg/dl)</span></div>
<input id="serum_cholestoral" name="serum_cholestoral" type="text" placeholder="Serum Cholestoral" maxlength="2" required="true" />
</label>
<label >
<div class="tooltip"><span>Fasting Blood</span><span class="tooltiptext">fasting blood sugar > 120 mg/dl (1 = true; 0 = false)</span></div>
<input id="fasting_blood" name="fasting_blood" type="text" placeholder="Fasting Blood" maxlength="2" required="true" />
</label>
<label >
<div class="tooltip"><span>Resting Electrocardiographic</span><span class="tooltiptext">(0 = normal; 1 = having ST-T; 2 = hypertrophy)</span></div>
<input id="resting_electrocardiographic" name="resting_electrocardiographic" maxlength="2" type="text" placeholder="resting electrocardiographic" required="true" />
</label>
<label >
<div class="tooltip"><span>Maximum Heart Rate Achieved</span><span class="tooltiptext">Maximum heart rate</span></div>
<input id="maximum_heart_rate_achieved" name="maximum_heart_rate_achieved" maxlength="2" type="text" placeholder="maximum heart rate achieved" required="true" />
</label>
<label >
<div class="tooltip"><span>Exercise Induced Angina</span><span class="tooltiptext"> exercise induced angina (1 = yes; 0 = no)</span></div>
<input id="exercise_induced_angina" name="exercise_induced_angina" type="text" maxlength="2" placeholder="Exercise Induced Angina" required="true" />
</label>
<label >
<div class="tooltip"><span>Oldpeak</span><span class="tooltiptext">depression induced by exercise relative to rest</span></div>
<input id="oldpeak" name="oldpeak" type="text" placeholder="oldpeak" maxlength="2" required="true" />
</label>
<label >
<div class="tooltip"><span>Slope</span><span class="tooltiptext">the slope of the peak exercise ST segment (1 = upsloping; 2 = flat; 3 = downsloping)</span></div>
<input id="slope" name="slope" type="text" placeholder="slope" maxlength="2" required="true" />
</label>
<label >
<div class="tooltip"><span>Major Vessels</span><span class="tooltiptext">(0-3)</span></div>
<input id="major_vessels" name="major_vessels" type="text" maxlength="2" placeholder="Major Vessels" required="true" />
</label>
<label >
<div class="tooltip"><span>Thal</span><span class="tooltiptext">(3 = normal; 6 = fixed defect; 7 = reversible defect)</span></div>
<input id="thal" name="thal" type="text" placeholder="thal" maxlength="2" required="true" />
</label>
<label>
<span>&nbsp;</span><input id="save" name="save" type="submit" value="Send Letter" onclick="calculate()"/>
</label>
</form>
</body>
</html>