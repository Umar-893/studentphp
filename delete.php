<?php
include 'index.php';
if(isset($_GET['deleteid'])){
    $student_id=$_GET['deleteid'];
    $sql="delete from student_data where student_id= $student_id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted Successfully";}
        header('location:display.php');}
        else{
            die(mysqli_error($con));} 
}
?>