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
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

//new added
$sql = "INSERT INTO `tiffin`.`merchant`(`company_name`, `email`, `password`, `number`) VALUES ('$company_name','$email','$password','$number')";
echo $sql;

if($conn->query($sql)==true){
    header("location: merchant_login.php");
    exit();
}
else{
    echo "ERROR: $sql <br>  $conn->error";

    
}

$conn->close();


?>