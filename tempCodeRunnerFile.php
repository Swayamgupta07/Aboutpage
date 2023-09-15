<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";}
else{
    echo "Connection Failed";
}
mysqli_select_db($con,'project');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "INSERT into intro(`id`, `user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comments')";

mysqli_query($con,$query);

header('location:index.php');
?>