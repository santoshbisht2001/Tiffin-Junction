<?php
// if(isset($_POST['username'])){
$server="localhost";
$username="root";
$password = "";
$database = "tiffin";
$conn = mysqli_connect($server, $username, $password, $database);


if(!$conn){
    die("Connection to this database failed due to".mysqli_conncect_error());
}
echo "success connecting to the DB";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$sql = "INSERT INTO `tiffin`.`user`( `username`, `email`, `password`, `number`) VALUES ('$username','$email','$password','$number')";

echo $sql;

if($conn->query($sql)==true){
    header("location: coustomerlogin.php");
    exit();
}
else{
    echo "ERROR: $sql <br>  $conn->error";
}
$conn->close();


?>