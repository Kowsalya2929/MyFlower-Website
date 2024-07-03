<?php
$conn=mysqli_connect("localhost","root","","new0");
if($conn){
     echo "Connected";
}
else{
    echo "Failed";
}
$a = $_POST['uemail'];
$b = $_POST['uname'];
$c = $_POST['upassword'];
$d = $_POST['ucorrectpassword'];

$data = "INSERT INTO website VALUES('','$a','$b','$c','$d')";
$check = mysqli_query($conn,$data);
if($check){
    echo "Data sended";
}
else{
    echo "Data not send";
}
?>