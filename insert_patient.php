<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(getimagesize ($_FILES['img_blog']['tmp_name'])== false)
{
}else {
$image= addslashes ($_FILES["img_blog"]['tmp_name']);
$image= file_get_contents($image);
$image= base64_encode($image);
}
extract($_POST);
$link = mysqli_connect("localhost", "root", "", "e-health (1)");
$sql = "INSERT INTO patient (
 patient_FirstName, patient_MiddleName, patient_LastName, patient_Gender, patient_BOD, patient_Blood_type, patient_NumPhone, CountryID
)
VALUES (
  '$first_name',
  '$middle_name',
   '$last_name',
  $gender,
  '$BOD',
  '$blood_type',
$phone_number,
'$country'
)";
if ($link->query($sql) === TRUE) {
  
$x = $_SESSION['patient_ID'];
$sql1 = "INSERT INTO files (
description, file, patient_id
)
VALUES (
  'j',
  '$image',
 $x
)";

if ($link->query($sql1) === TRUE) {
  echo "تم اضافة مجموعة مواد جديدة .";
}else{
   echo "Error: " . $sql1 . "<br>" . $link->error;
}
 
}// close first q
 else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
}
else {
  header('Location: http://'. $_SERVER["SERVER_NAME"].'/d/Pages/404.html');
}


?>