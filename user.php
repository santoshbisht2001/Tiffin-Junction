<?php
// if(isset($_POST['company_name'])){
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


//new added
$sql = "INSERT INTO `tiffin`.`user` ( `username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
echo $sql;

if($conn->query($sql)==true){
    header("location: login.html");
    exit();
}
else{
    echo "ERROR: $sql <br>  $conn->error";

    
}

$conn->close();


?>