<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="thankyou.css">
    <title>THANK YOU</title>
</head>
<body>

    <div class="thank-you-container">
        <h1>Thank You!</h1>
        <p>Your submission has been received. We appreciate your time and effort!</p>
        <a href="index.html" class="back-home-btn">Back to Home</a>
    </div>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techplement";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection Failed : ".mysqli_connect_error());
}

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];


$sql = "INSERT INTO WeekOneTask(firstName, lastName, email, pswd, mobile, gender)VALUES(?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt,$sql) ){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $email, $pswd, $mobile, $gender);

mysqli_stmt_execute($stmt);

#die("Data Saved Succesfully");



exit();

?>

</body>
</html>