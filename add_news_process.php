<?php 
 include 'config/database.php';

 //This is the directory where images will be saved 
 $target = "news/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 
 //This retrieves all the other information from the form 
 $news_title=$_POST['Title']; 
 $Newsdes=$_POST['Newsdes'];
 $date=$_POST['Date'];
 $pic=($_FILES['photo']['name']); 
 
 $sql = "INSERT INTO news (TITLE,Description,Date,News_pic) VALUES ('$news_title', '$Newsdes', '$date','$pic')" ; 

//$addGuide = mysqli_query($con,$sql);
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header('Location: news.php');
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