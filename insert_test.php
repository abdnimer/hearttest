
<?php
session_start();
$id =$_SESSION['patient_ID'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);
$link = mysqli_connect("localhost", "root", "", "e-health (1)");
$sql = "INSERT INTO testing (
 age, gender, chest_pain_type, resting_blood_pressure, serum_cholestoral, fasting_blood,  exercise_induced_angina, oldpeak, slope, major_vessels, thal ,id_patient
)
VALUES (
 $age, $gender, $chest_pain_type, $resting_blood_pressure, $serum_cholestoral, $fasting_blood ,
  $exercise_induced_angina, $oldpeak, $slope, $major_vessels,$thal ,$id
)";

if ($link->query($sql) === TRUE) {
    echo "thanks";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
$link->close();
}else {
  header('Location: http://'. $_SERVER["SERVER_NAME"].'/d/Pages/404.html');
}

?>