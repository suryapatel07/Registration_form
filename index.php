<?php
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());}
    

$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql= "INSERT INTO `trip`.`trip_detail` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', 
        '$phone', '$desc',  current_timestamp());";
       // echo $sql;
        if($con->query($sql)==true){
               echo "successfullly inserted";

        }
        else{
                echo "error :$sql <br> $con->error";
        }
   $con->close();
   
?>

