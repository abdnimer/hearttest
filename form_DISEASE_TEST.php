
<html>
<head>
    <title>Heart test</title>
<link rel="shortcut icon" href="img/logo_icon.ico" />
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/mobile.css">
  <script src="js/mobile.js" type="text/javascript"></script>


<style>
body {
  margin: auto;
  background: #369939 ;  
  font-family: 'Open Sans', sans-serif;
}

.info p {
  text-align:center;
  color: #999;
  text-transform:none;
  font-weight:600;
  font-size:15px;
  margin-top:2px
}

.info i {
  color:#F6AA93;
}
form h1 {
  font-size: 18px;
  background: #F6AA93 none repeat scroll 0% 0%;
  color: rgb(255, 255, 255);
  padding: 22px 25px;
  border-radius: 5px 5px 0px 0px;
  margin: auto;
  text-shadow: none; 
  text-align:left
}

.formm {
  border-radius: 5px;
  max-width:60%;
  width:100%;
  margin: 5% auto;
  background-color: #FFFFFF;
  overflow: hidden;
}

p span {
  color: #F00;
}

p {
  margin: 0px;
  font-weight: 500;
  line-height: 2;
  color:#333;
}

h1 {
  text-align:center; 
  color: #2d2d2d ;
  margin:50px 0px 0px 0px
}

input {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #eee;
  margin-bottom: 15px;
  width: 50%;
  height: 40px;
  float: left;
  padding: 0px 0px;
}
input[type=number] {
 border-radius: 0px 5px 5px 0px;
  border: 1px solid #eee;
  margin-bottom: 0;
  width: 50%;
  height: 40px;
  float: right;
padding: 0px 15px;}

input[type=range] {
  width: 45%;
  float: left;
}
a {
  text-decoration:inherit
}



.form-group {
  overflow: hidden;
  clear: both;
}

i {
  color:#555;
}

.contentform {
  padding: 40px 30px;
}

.bouton-contact{
  background-color: #81BDA4;
  color: #FFF;
  text-align: center;
  width: 100%;
  border:0;
  padding: 17px 25px;
  border-radius: 0px 0px 5px 5px;
  cursor: pointer;
  margin-top: 40px;
  font-size: 18px;
}

.leftcontact {
  width:49.5%; 
  float:left;
  border-right: 1px dotted #CCC;
  box-sizing: border-box;
  padding: 0px 15px 0px 0px;
}

.rightcontact {
  width:49.5%;
  float:right;
  box-sizing: border-box;
  padding: 0px 0px 0px 15px;
}

.validation {
  display:none;
  margin: 0 0 10px;
  font-weight:400;
  font-size:13px;
  color: #DE5959;
}

#sendmessage {
  border:1px solid #fff;
  display:none;
  text-align:center;
  margin:10px 0;
  font-weight:600;
  margin-bottom:30px;
  background-color: #EBF6E0;
  color: #5F9025;
  border: 1px solid #B3DC82;
  padding: 13px 40px 13px 18px;
  border-radius: 3px;
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
}

#sendmessage.show,.show  {
  display:block;
}
</style>
</head>
<body>
<?php
include("header.php");
?>
	  <h1>Heart Test</h1>
   <div class="info"><a href="https://www.grandvincent-marion.fr" target="_blank"><p> Enjoy </p></a></div>
  
  <form class="formm" id="test_f" name="test_f" method="POST">
	    <h1>Let's start the test together :</h1>
	    
    <div class="contentform">
    	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


    	<div class="leftcontact">
			      <div class="form-group">
			        <p>Age <span>*</span></p>
              (Enter the real age in years)
							<input type="number"  name="age" min="0" max="100" step="1"	value="0" id="age"/>
      </div> 

            <div class="form-group">
            <p>Gender <span>*</span></p>
            (1 = Male; 0 = Female)
					    <input type="number" class="hd-number-width" name="gender" min="0" max="1" step="1" 
						value="0" id="gender"  />
			</div>

			<div class="form-group">
			<p>Do you feel chest pain? <span>*</span></p>
       (1 = Typical angina; 2 = Atypical angina;<br> 3 = Non-anginal pain; 4 = Asymptomatic)	
         
          <input type="number" class="hd-number-width" name="chest_pain_type" min="1" max="4" step="1" value="1" id="chest_pain_type"  />
			</div>	

			<div class="form-group">
			<p>Rsting Blood Pressure <span>*</span></p>
      (In mm Hg)
         
          <input type="number" class="hd-number-width" name="resting_blood_pressure" min="94" max="200" step="1" value="94" id="resting_blood_pressure" />
			</div>

			<div class="form-group">
			<p>Serum Cholestoral <span>*</span></p>
      ( In mg/dl )
          
          <input type="number" class="hd-number-width" name="serum_cholestoral" min="50" max="220" step="1" value="50" id="serum_cholestoral"  />
			</div>

			<div class="form-group">
			<p>Fasting Blood <span>*</span></p>
       Fasting blood sugar > 120 mg/dl <br>(1 = true; 0 = false)
          <input type="number" class="hd-number-width" name="fasting_blood" min="0" max="1" step="1"
                 value="0" id="fasting_blood"  />
			</div>
			
			



	</div>

	<div class="rightcontact">	

			<!--<div class="form-group">
			<p>Resting Electrocardiographic <span>*</span></p>
				<input id="resting_electrocardiographic" name="resting_electrocardiographic" maxlength="2" type="text" placeholder="resting electrocardiographic" required="true" disabled/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Maximum Heart Rate Achieved <span>*</span></p>	
				<input id="maximum_heart_rate_achieved" name="maximum_heart_rate_achieved" maxlength="2" type="text" placeholder="maximum heart rate achieved" required="true" disabled/>
                <div class="validation"></div>
			</div>-->
<div class="form-group">
			<p>Oldpeak <span>*</span></p>
      ST depression induced by exercise relative to rest
         <input type="number" class="hd-number-width" name="oldpeak" min="1" max="5" step="1" 
                 value="1" id="oldpeak"  />
			</div>

			<div class="form-group">
			<p>Exercise Induced Angina <span>*</span></p>
      (1 = Yes; 0 = No)
              <input type="number" class="hd-number-width" name="exercise_induced_angina" min="0" max="1" step="1" 
                 value="0" id="exercise_induced_angina"  />
			</div>

			<div class="form-group">
			<p>Slope <span>*</span></p>	
      The slope of the peak exercise ST segment<br> (1 = upsloping; 2 = flat; 3 = downsloping)
           <input type="number" class="hd-number-width" name="slope" min="1" max="3" step="1" 
                 value="1" id="slope"  />
			</div>
			
			<div class="form-group">
			<p>Major Vessels <span>*</span></p>
      Number of major vessels (0-3) colored by flourosopy	
           <input type="number" class="hd-number-width" name="major_vessels" min="0" max="3" step="1" value="0" id="major_vessels"  />
			</div>
			
			<div class="form-group">
			<p>Thal <span>*</span></p>	
       3 = Normal, 6 = Fixed defect, 7 = Reversable defect
          <input type="number" class="hd-number-width" name="thal" min="3" max="7" step="1" 
                 value="3" id="thal" />
			</div>
		
		
	</div>
			<input id="save" name="save" type="button" value="Send Letter" onclick="calculate()"/>	

	</div>
</form>	
    
   
      <?php include("footer.php"); ?>

</body>
  <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
   <script type="text/javascript">


     $("#test_f").on("click", function (event) {

   $.ajax({
       type: 'POST',
       url: 'Operations/insert_test.php',
       data: $(this).serialize()
   })
   .done(function(data){
  alert( " ..." +data);
//$("#test_f")[0].reset();
   })
   .fail(function() {
       // just in case posting your form failed
       alert( "حصل خطأ ما الرجاء اعادة المحاولة ! ..." );
   });
   // to prevent refreshing the whole page page
   return false;

});
   
     </script>
<script type="text/javascript">
function calculate()
          { 
            var x1 = parseInt(document.test_f.age.value);
            var x2 = parseInt(document.test_f.gender.value);
            var x3 = parseInt(document.test_f.chest_pain_type.value);
            var x4 = parseInt(document.test_f.resting_blood_pressure.value);
            var x5 = parseInt(document.test_f.serum_cholestoral.value);
            var x6 = parseInt(document.test_f.fasting_blood.value);
            //var x7 = parseInt(document.test_f.resting_electrocardiographic.value);
            //var x8 = parseInt(document.test_f.maximum_heart_rate_achieved.value);
            var x9 = parseInt(document.test_f.exercise_induced_angina.value);
            var x10 = parseInt(document.test_f.oldpeak.value);
            var x11 = parseInt(document.test_f.slope.value);
            var x12 = parseInt(document.test_f.major_vessels.value);
            var x13 = parseInt(document.test_f.thal.value);

      
      if(x13<=3 && x3<=3 ){
        confirm("absent");   
      getConfirmation();
      }
      else if(x13<=3 && x3>3 && x12<=0 && x1<=54){
        confirm("absent");      getConfirmation();

      }
      else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9<=0 && x11<=1 && x5<=288){
        confirm("absent");      getConfirmation();

      }
      else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9<=0 && x11<=1 && x5>288){
        confirm("present");      getConfirmation();

      }
      else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9<=0 && x11>1){
        confirm("absent");      getConfirmation();

      }
      else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9>0 && x11<=1){
        confirm("absent");      getConfirmation();

      }
      else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9>0 && x11>1){
        confirm("present");
      }
      else if (x13<=3 && x3>3 && x12>0 && x2<=0 && x11<=1){
        confirm("absent");      getConfirmation();

      }
      else if (x13<=3 && x3>3 && x12>0 && x2<=0 && x11>1){
        confirm("present");      getConfirmation();

      }
      else if (x13<=3 && x3>3 && x12>0 && x2>0 ){
        confirm("present");      getConfirmation();

      }
      else if (x13>3 && x12<=0 && x9<=0 && x6<=0 && x13<=6){
        confirm("absent");      getConfirmation();

      }
      else if (x13>3 && x12<=0 && x9<=0 && x6<=0 && x13>6 && x1<=52){
        confirm("present");      getConfirmation();

      } 
      else if (x13>3 && x12<=0 && x9<=0 && x6<=0 && x13>6 && x1>52){
        confirm("absent");      getConfirmation();

      } 
      else if (x13>3 && x12<=0 && x9<=0 && x6>0 ){
        confirm("absent");      getConfirmation();

      }
      else if (x13>3 && x12<=0 && x9>0 && x10<=1 && x5<=255 ){
        confirm("absent");      getConfirmation();

      }
      else if (x13>3 && x12<=0 && x9>0 && x10<=1 && x5>255 ){
        confirm("present");      getConfirmation();

      }
      else if (x13>3 && x12<=0 && x9>0 &&  x10>1){
        confirm("present");      getConfirmation();

      }
      else if (x13>3 && x12>0 ){
        confirm("present");      getConfirmation();

      }
      }
      function getConfirmation(){
               var retVal = confirm("Do you want to continue ?");
               if( retVal == true ){
                  window.href = "login.php";
                  window.open("researches.php");
                  return true;
               }
               else{
                  document.write ("User does not want to continue!");
                  return false;
               }
            }
</script>

</html>