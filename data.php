<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_student";

$con = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])) {
    
    if(!empty($_POST['student_name']) && ($_POST['father_name']) && ($_POST['mother_name']) && ($_POST['student_mobile']) && ($_POST['student_email']) &&
    ($_POST['student_aadhar']) && ($_POST['student_add']) && ($_POST['student_gender'])) {

        $student_name = $_POST['student_name'];
        $father_name = $_POST['father_name'];
        $mother_name = $_POST['mother_name'];
        $student_mobile = $_POST['student_mobile'];
        $student_email = $_POST['student_email'];
        $student_aadhar = $_POST['student_aadhar'];
        $student_add = $_POST['student_add'];
        $student_gender = $_POST['student_gender'];

        $query = "insert into student(student_name, father_name, mother_name, student_mobile, student_email, student_aadhar, student_add,
        student_gender) values('$student_name', '$father_name', '$mother_name', '$student_mobile', '$student_email', '$student_aadhar',
        '$student_add', '$student_gender')";

        $run = mysqli_query($con, $query) or die(mysqli_error());

        if($run) {
            echo "Form Submitted";
        }
        else {
            echo "Form Not Submitted";
        }

    }
    else {
        echo "All Fields Required";
    }
}

mysqli_query($con, $query);
?>

