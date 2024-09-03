<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techplement";

$conn = mysqli_connect($servername,$username,$password,$dbname)
if(!$conn){
    die("Connection Failed : ".mysqli_connect_error());
}
else{
    die("Connected successfully")
}

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];


$sql = "INSERT INTO WeekOneTask(firstName, lastName, email, pswd, mobile, gender)VALUES(?,?,?,?,?,?,?)"

$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt,$sql) ){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssdddis", $firstname, $lastname, $email, $pswd, $mobile, $gender);

mysqli_stmt_execute($stmt);

echo "Data Saved Succesfully";

?>