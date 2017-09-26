<?php include 'config/database.php'; ?>
<?php
  $query = "SELECT * from bloods";
  $getBloods = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<title>Coimbatore Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close <span class="pull-right glyphicon glyphicon-remove"></span></button>
  <a href="#" class="w3-bar-item w3-button"><span class="pull-left fa fa-home"></span>announcement</a>
  <a href="events.php" class="w3-bar-item w3-button">Events</a>
  <a href="news.php" class="w3-bar-item w3-button">News</a>
  <a href="#" class="w3-bar-item w3-button">Publish</a>
  <a href="blood.php" class="w3-bar-item w3-button">Blood Bank</a>
  <a href="#" class="w3-bar-item w3-button">Bus Details</a>
  <a href="#" class="w3-bar-item w3-button">Gallery</a>
  <a href="tourtism.php" class="w3-bar-item w3-button">Tourism</a>
  <a href="#" class="w3-bar-item w3-button">Phone Book</a>
  <a href="#" class="w3-bar-item w3-button">Hostipals</a>
  <a href="#" class="w3-bar-item w3-button">Restaruants</a>
  <a href="#" class="w3-bar-item w3-button">Donate a food</a>
</div>

<div zclass="w3-main" id="main">

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>My City</h1>
  </div>
</div>

<img src="images/blood.jpg" alt="Donate Blood" style="width:60%">

<div class="w3-container">
  <h2>Blood Donators</h2>
  <p>Save Life..  Donate Blood</p>
  <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Mobile</th>
        <th>Blood Group</th>
        <th>Request Blood</th>
      </tr>
    </thead>
    <tbody>
  
  <?php while($row = mysqli_fetch_assoc($getBloods)) : ?>
        <tr>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Location'] ?></td>
        <td><?php echo $row['Mobile'] ?></td>
        <td><?php echo $row['Blood_Group'] ?></td>
        <td><form action='message.php' method='POST'><input type='hidden' name='tempId' value= <?php echo $row['Mobile'] ?>/>
              <span>
              <button type="button" data-id =<?php echo $row['Mobile'] ?> class="open-message btn btn-info btn-lg" data-toggle="modal" data-target="#reqBlood">Send Message</button>

  <!-- Modal -->
  <div class="modal fade" id="reqBlood" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Request a Blood</h4>
        </div>
        <div class="modal-body">
        <form method = "post" action = "message.php">
          <p><span>Mobile Number :</span>
          <span><input type="text" name = "mobileNo" id="mobileNo" value ="" />
          </span></p>
          <p><span>Message :</span>
          <span><textarea name = "message" id = "message"></textarea></span></p>
          <center><input type = "submit" name = "submit" value = "Request"> </center>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div></span>
        </td>
      </tr>
  <?php endwhile; ?>
  </tbody>
  </table>
</div>
</div>
</div>



<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

<script>
  $(document).on("click", ".open-message", function () {
     var mobileNo = $(this).data('id');
     $(".modal-body #mobileNo").val( mobileNo );
});

</script>

</body>
</html>
