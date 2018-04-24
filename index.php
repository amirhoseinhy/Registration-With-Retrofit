<?php
 
$username = $_POST['name'];
$useremail = $_POST['email'];
$userpassword = $_POST['password'];
$user = "root";
$pass = "";
$host= "localhost";
$dbname="check";
 
$con = mysqli_connect($host,$user,$pass,$dbname);
$sql="insert into userdata(name,email,password) values('".$username."','".$useremail."','".$userpassword."');";
if(mysqli_query($con,$sql)){
 echo  "data inserted";
 
}else{ 
 echo "Failed";
}
?>