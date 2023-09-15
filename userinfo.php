<?php
$host='localhost';
$user='root';
$password = "";
$db='data';
$con = mysqli_connect($host,$user,$password,$db);
if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
echo "Connection Successful<br>";

mysqli_select_db($con, 'project');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "INSERT INTO userinfodata(user, email, mobile, comment) VALUES('$user', '$email', '$mobile', '$comments')";

mysqli_query($con, $query) or die("Query Failed: " . mysqli_error($con));
// echo $query;
header('Location: index.php');
exit();
?>