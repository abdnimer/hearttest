<html>
    <head>
        <title>TODO supply a title</title>
		
<style type="text/css">
.form-style-4{
    width: 100%;
	height :100%;
    font-size: 20px;
    padding: 30px 30px 15px 30px;

}
.form-style-4 input[type=submit],
.form-style-4 input[type=button],
.form-style-4 input[type=text],
.form-style-4 input[type=email],
.form-style-4 textarea,
.form-style-4 label
{
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size: 20px;
    color: #fff;

}
.form-style-4 label {
    display:block;
    margin-bottom: 3%;
	margin-left:35%;
}
.form-style-4 label > span{
    display: inline-block;
    float: left;
    width: 300px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=email] 
{
    background: transparent;
    border: none;
    border-bottom: 1px dashed #83A4C5;
    width: 20%;
    outline: none;
    padding: 0px 0px 0px 0px;
    font-style: italic;

}

.form-style-4 textarea:focus, 
.form-style-4 input[type=text]:focus,
.form-style-4 input[type=email]:focus,
.form-style-4 input[type=email] :focus
{
    border-bottom: 1px dashed #D9FFA9;
}

.form-style-4 input[type=submit],
.form-style-4 input[type=button]{
    background: #576E86;
    border: none;
    padding: 8px 10px 8px 10px;
    border-radius: 5px;
    color: #A8BACE;
	margin-left:-15%;
}
.form-style-4 input[type=submit]:hover,
.form-style-4 input[type=button]:hover{
background: #394D61;
}
</style>
		<script>
		function calculate()
          { 
            var x1 = parseInt(document.myform.age.value);
            var x2 = parseInt(document.myform.sex.value);
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
			alert("state1");	
			}
			else if(x13<=3 && x3>3 && x12<=0 && x1<=54){
				alert("stat2");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9<=0 && x11<=1 && x5<=288){
				alert("state3");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9<=0 && x11<=1 && x5>288){
				alert("state4");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9<=0 && x11>1){
				alert("state5");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9>0 && x11<=1){
				alert("state6");
			}
			else if (x13<=3 && x3>3 && x12<=0 && x1>54 && x9>0 && x11>1){
				alert("state7");
			}
			else if (x13<=3 && x3>3 && x12>0 && x2<=0 && x11<=1){
				alert("state8");
			}
			else if (x13<=3 && x3>3 && x12>0 && x2<=0 && x11>1){
				alert("state9");
			}
			else if (x13<=3 && x3>3 && x12>0 && x2>0 ){
				alert("state10");
			}
			else if (x13>3 && x12<=0 && x9<=0 && x6<=0 && x13<=6){
				alert("state11");
			}
			else if (x13>3 && x12<=0 && x9<=0 && x6<=0 && x13>6 && x1<=52){
				alert("state12");
			}	
			else if (x13>3 && x12<=0 && x9<=0 && x6<=0 && x13>6 && x1>52){
				alert("state13");
			}	
			else if (x13>3 && x12<=0 && x9<=0 && x6>0 ){
				alert("state14");
			}
			else if (x13>3 && x12<=0 && x9>0 && x10<=1 && x5<=255 ){
				alert("state15");
			}
			else if (x13>3 && x12<=0 && x9>0 && x10<=1 && x5>255 ){
				alert("state16");
			}
			else if (x13>3 && x12<=0 && x9>0 &&  x10>1){
				alert("state17");
			}
			else if (x13>3 && x12>0 ){
				alert("state18");
			}
		  }
		  
		</script>
    </head>
    <body>
        <form action="" id="myform" name="myform" method="post">
            <h1>Add new Student</h1>
			
            <input id="age" name="age" type="text" placeholder="age"  required=""/>
            
			<input id="sex" name="sex" type="text" placeholder="sex"  required=""/>
			
			<input id="chest_pain_type" name="chest_pain_type" type="text" placeholder="chest_pain_type"  required=""/>
            
			<input id="resting_blood_pressure" name="resting_blood_pressure" type="text" placeholder="resting_blood_pressure"   required=""/>
			
			<input id="serum_cholestoral" name="serum_cholestoral" type="text" placeholder="serum_cholestoral"  required=""/>
            
			<input id="fasting_blood" name="fasting_blood" type="text" placeholder="fasting_blood"  required=""/>
			
			<input id="resting_electrocardiographic" name="resting_electrocardiographic" type="text" placeholder="resting_electrocardiographic"  required=""/>
            
			<input id="maximum_heart_rate_achieved" name="maximum_heart_rate_achieved" type="text" placeholder="maximum_heart_rate_achieved"  required=""/>
			
            <input id="exercise_induced_angina" name="exercise_induced_angina" type="text" placeholder="exercise_induced_angina"  required=""/>
			
			<input id="oldpeak" name="oldpeak" type="text" placeholder="oldpeak" required="">
			
			<input id="slope" name="slope" type="text" placeholder="slope" required="">
			
			<input id="major_vessels" name="major_vessels" type="text" placeholder="major_vessels" required="">
			
			<input id="thal" name="thal" type="text" placeholder="thal" required="">
           
            <input id="save" name="save" type="submit" value="Save"  onclick="calculate()"/>
        </form>
		

    </body>
</html>