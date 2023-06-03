<?php
include 'connect.php';
$student_id=$_GET['updateid'];
$sql="select * from student_data where student_id=$student_id ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$student_id = $row['student_id'];
$first_name = $row['first_Name'];
$last_name = $row['last_Name'];
$gender =  $row['gender'];
$class = $row['class'];

if(isset($_POST['submit'])){
    $student_id = $_POST['student_id'];
    $first_name =  $_POST['first_name'];
    $last_name =  $_POST['last_name'];
    $gender =  $_POST['gender'];
    $class =  $_POST['class'];

    $sql="update student_data set student_id=$student_id , first_name='$first_name' , last_name='$last_name' , gender='$gender' , class='$class'
    where student_id=$student_id";
    $result=mysqli_query($con,$sql);

    if($result){
       // echo "updated successfully";
        header('location:display.php');
    } else{
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 

    <title>Student Record</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post" autocomplete="off">
            <div class="form-group">
    <lable>Student ID</lable>
       <input type="text" class="form-control"  placeholder="Enter your Id" name="student_id" value=<?php echo $student_id;?>>
</div>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control"  placeholder="Enter First name" name="first_name"  value=<?php echo $first_name;?>>
</div>
<div class="form-group">
    <lable>Last Name</lable>
       <input type="text" class="form-control"  placeholder="Enter Last name" name="last_name"  value=<?php echo $last_name;?>>
</div>
<div class="form-group">
    <lable>Gender</lable>
       <input type="text" class="form-control"  placeholder="Enter Gender" name="gender"  value=<?php echo $gender;?>>
</div>
<div class="form-group">
    <lable>Class</lable>
       <input type="text" class="form-control"  placeholder="Enter your class" name="class"  value=<?php echo $class;?>>
</div>
    
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

    
  </body>
</html>