<?php 
 include 'config/database.php';
 
 $title=$_POST['Title']; 
 $jobdes=$_POST['Jobdes']; 
 $Profile=$_POST['Profile'];
 $exp=$_POST['exp'];
 $apply=$_POST['apply']; 
 $details=$_POST['details'];
 
 $sql = "INSERT INTO jobs (Company_name,description,profile,experience,Apply_by,details) VALUES ('$title', '$jobdes', '$Profile', '$exp','$apply','$details')" ; 

//$addGuide = mysqli_query($con,$sql);
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?> 