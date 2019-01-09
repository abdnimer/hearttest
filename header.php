     <?php
session_start();
if(!isset($_SESSION['patient_ID'])) {header("Location: login.php");}

$id =$_SESSION['patient_ID'];
   $conn = mysqli_connect("localhost", "root", "", "e-health (1)");
     $sql = "SELECT * from patient where patient_ID= $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
  while($row = $result->fetch_assoc()) {
 $name = $row["patient_UsName"];
}
}
?>
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
       <link rel="stylesheet" type="text/css" href="css/style - Copy.css">

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
<a id="test" name="test" href="Operations/Logout.php"  onmouseover = "mOver()" onmouseout = "mOut()"><?= $name ?></a>          </li>
        </ul>
      </div>
    </div>