<?php 
 include 'config/database.php';

 //This is the directory where images will be saved 
 $target = "proofs/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This retrieves all the other information from the form 
 $name=$_POST['name']; 
 $languages=$_POST['language']; 
 $phone=$_POST['phone'];
 $age=$_POST['ages']; 
 $charges=$_POST['Charges']; 
 $pic=($_FILES['photo']['name']); 
 
 $sql = "INSERT INTO guides (name,mobile,languages,age,charges,proofs) VALUES ('$name', '$phone', '$languages', '$age','$charges','$pic')" ; 

//$addGuide = mysqli_query($con,$sql);
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
} 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
 { 
 
 //Tells you if it is all ok 
 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory"; 
 } 
 else { 
 
 //Gives an error if it is not ok 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 ?> 