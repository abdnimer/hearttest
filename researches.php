
<html>
<head>
	<link rel="shortcut icon" href="img/logo_icon.ico" />
	    <title>Researches</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="">
$(document).ready(function(){
$( "#researchelist" ).change(function() {
 var path = $( "#researchelist" ).val();
 $("#showpdf").attr("src", "files/"+path+"");
});
});
</script>
<style>
body {background-color: #1a6c1a;}

form h1{
	    color: #00ff00;
		margin-top:5%;
}
table tr td h3 {
	   color: #00ff00;
		    margin-left: 25%

}
table a {
		   color: #000f00;
			    font-size: 25px;
				    margin-right: 300px;

			
}
table select {
}
</style>
</head>

<body>
<?php
include("header.php");
?>
<form name="researcheform" action="researches.php/id_co=;" method="post">
<center><h1>Researche form</h1></center>
<br/><br/>
<table width="100%"> 
<tr><td><h3>Researche Name</h3></td></tr>
<tr><td align="center">
<select name="researchelist" id="researchelist">
<?php
   $conn = mysqli_connect("localhost", "root", "", "e-health (1)");
                                            $sql = "SELECT  researches_id, path, researche_name FROM researches";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<option  value="<?= $row["path"] ?>"><?= $row["researche_name"] ?></option>
  <?php 
   }}else {echo "no result data";}
    ?>
</select>
</td></tr>
</table>

</form>
<center><embed id="showpdf" src='' type='application/pdf' width='50%' height='600px' /></center>
</body>
</html>