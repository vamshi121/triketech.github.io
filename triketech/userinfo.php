<?php

$con = mysqli_connect('localhost','root');


if ($con) {
    echo("connection successfull");
}
 else {
   echo("connection Unsuccessfull");
}

mysqli_select_db($con, 'triketchuserdatat');

$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];


$query = " INSERT INTO  userinfo ( user, email, phone, comment) 
VALUES ('$user','$email','$phone','$comment')";

echo "$query";

mysqli_query($con , $query);

header('location:index.php');



?>