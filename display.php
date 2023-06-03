
<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="index.php" class="text-light"> Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Class</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from student_data";
    $result=mysqli_query($con,$sql);
    if($result){
       
        while($row=mysqli_fetch_assoc($result)){
            $student_id = $row['student_id'];
            $first_name = $row['first_Name'];
            $last_name = $row['last_Name'];
            $gender =  $row['gender'];
            $class = $row['class'];
            echo '<tr>
            <th scope="row">'.$student_id.'</th>
            <td>'.$first_name.'</td>
            <td>'.$last_name.'</td>
            <td> '.$gender.'</td>
            <td> '.$class.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$student_id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$student_id.'" class="text-light">Delete</a></button>
          </td>
          </tr>';
        }
    }
    ?>


  </tbody>
</table>
    </div>
</body>
</html>