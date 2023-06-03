<?php
$con=new mysqli('localhost' , 'root' , '' , 'student-record');

if($con){
    
} else{
    die(mysqli_error($con));
}