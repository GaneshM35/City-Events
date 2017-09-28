<?php 
 include 'config/database.php';

 //This is the directory where images will be saved 
 $target = "events/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This retrieves all the other information from the form 
 $event_type=$_POST['Event_Type']; 
 $event_title=$_POST['Title']; 
 $eventdes=$_POST['Eventdes'];
 $location=$_POST['Location']; 
 $date=$_POST['Date'];
 $from=$_POST['FromTime'];
 $to=$_POST['ToTime']; 
 $organisator=$_POST['Organistor'];

 $pic=($_FILES['photo']['name']); 
 
 $sql = "INSERT INTO events (Organisator,Location,Date,From_Time,To_Time,Event_Cat,Event_Type,Event_desc,Events_pic) VALUES ('$organisator', '$location', '$date', '$from','$to','$event_type','$event_title','$eventdes','$pic')" ; 

//$addGuide = mysqli_query($con,$sql);
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

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