

<?php 
session_start();
if(!isset($_SESSION['logged_in__stu_roll'] )){
    echo '<script type="text/javascript"> location.href = "student_login.php" </script>';
}
include("sidebar_student.php");

$host = "localhost";
$username = "root";
$password = "";
$dbname = "hac";

$conn = new mysqli($host, $username, $password, $dbname);

$rollno = $_SESSION['logged_in__stu_roll'];

$sql = "SELECT * FROM student where rollNo ='$rollno'";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images_add/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor_add/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts_add/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts_add/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor_add/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor_add/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor_add/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor_add/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor_add/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor_add/noui/nouislider.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css_add/util.css">
  <link rel="stylesheet" type="text/css" href="css_add/main.css">
</head>
<body>

<div class="container-contact100" style="background-image: url('images_add/bg-01.jpg');">
    <div class="wrap-contact100">

    
    <table class = "table table-hover">
      <thead class="table-dark"><tr><th scope="col" colspan="2" style="text-align:center">PROFILE</th></tr></thead><tbody>

    <?php

       $row = $result->fetch_assoc();
        echo "<tr><td>ROLL NO</td><td>".$row["rollNo"]."</td>";
        echo "<tr><td>NAME</td><td>".$row["name"]."</td>";
        echo "<tr><td>NO OF COURSES</td><td>".$row["noOfCourses"]."</td>";
        echo "<tr><td>LIST OF COURSES</td><td>".$row["listOfCourses"]."</td>";
        echo "<tr><td>AGE</td><td>".$row["age"]."</td>";
        echo "<tr><td>GENDER</td><td>".$row["gender"]."</td>";
        echo "<tr><td>BLOOD GROUP</td><td>".$row["bloodGroup"]."</td>";
        echo "<tr><td>BRANCH</td><td>".$row["branch"]."</td>";
        echo "<tr><td>PASSING YEAR</td><td>".$row["passingYear"]."</td>";
        echo "<tr><td>PROGRAMME</td><td>".$row["programme"]."</td>";
        echo "<tr><td>PHONE</td><td>".$row["phone"]."</td>";
        echo "<tr><td>DOB</td><td>".$row["dob"]."</td>";
    ?>

    </tbody></table>
    
    <form action="student.php" method="post"> 
    	<center><button type="submit" class="btn btn-outline-dark">BACK</button></center>
    </form>

</div>

</div>

</body>
</html>