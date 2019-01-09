
<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);
$link = mysqli_connect("localhost", "root", "", "e-health (1)");
$sql = "INSERT INTO patient (
 patient_Email, patient_pass,patient_UsName
)
VALUES (
 '$email', '$password','$username'
)";

if ($link->query($sql) === TRUE) {
    echo "تم اضافة مجموعة مواد جديدة .";
   //  header('Location: http://'. $_SERVER["SERVER_NAME"].'/upload/login.php');
} else {
    echo "Error: " . $sql . "<br>" . $link->error;

}
$link->close();
}else {
  header('Location: http://'. $_SERVER["SERVER_NAME"].'/d/Pages/404.html');
}

?>