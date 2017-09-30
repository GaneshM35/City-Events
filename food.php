<?php include 'config/database.php'; ?>
<?php
  $query = "SELECT * from orphanage";
  $getOrphanages = mysqli_query($con,$query);
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

<div class="w3-sidebar w3-bar-block w3-light-grey w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close <span class="pull-right glyphicon glyphicon-remove"></span></button>
  <div class="w3-dropdown-hover">
    <button class="w3-button"><span class="pull-left fa fa-home"></span>Announcesments
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="news.php" class="w3-bar-item w3-button">updates</a>
      <a href="news.php" class="w3-bar-item w3-button">News</a>
      <a href="event.php" class="w3-bar-item w3-button">Events</a>
    </div>
  </div> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">Social Activaties
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="blood.php" class="w3-bar-item w3-button">Blood Bank</a>
      <a href="food.php" class="w3-bar-item w3-button">Donate a food</a>
    </div>
  </div> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">More about Coimbatore
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="gallery.html" class="w3-bar-item w3-button">Gallery</a>
      <a href="about.php" class="w3-bar-item w3-button">About</a>
    </div>
  </div> 
  <a href="event.php" class="w3-bar-item w3-button">Events</a>
  <a href="phone_book.php" class="w3-bar-item w3-button">Phone Book</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Transportation
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="getRoutes.php" class="w3-bar-item w3-button">Bus Details</a>
      <a href="https://www.jugnoo.in/rides/coimbatore" class="w3-bar-item w3-button">Local Auto App</a>
      <a href="drivers.php" class="w3-bar-item w3-button">Acting Drivers</a>
      </div>
  </div> 
  <a href="tourtism.php" class="w3-bar-item w3-button">Place of Interest</a>
  <a href="guides.php" class="w3-bar-item w3-button">Guides in Coimbatore</a>
  <a href="waterlevel.php" class="w3-bar-item w3-button">Know under ground Water level</a>
  <a href="hostipals.php" class="w3-bar-item w3-button">Hospitals</a>
  <a href="jobs.php" class="w3-bar-item w3-button">Jobs in Coimbatore</a>
  <a href="rental.php" class="w3-bar-item w3-button">Rent a House</a>

</div>
<div zclass="w3-main" id="main">

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>My City</h1>
  </div>
</div>

<img src="images/food.jpg" alt="Donate Food" style="width:60%">

<div class="w3-container">
  <h2>Help Them For a Little Bit</h2>
  <div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Mobile</th>
        <th>Open Hours</th>
        <th>Help them</th>
      </tr>
    </thead>
    <tbody>
  
  <?php while($row = mysqli_fetch_assoc($getOrphanages)) : ?>
        <tr>
        <td><?php echo $row['Orphanage_Name'] ?></td>
        <td><?php echo $row['Address'] ?></td>
        <td><?php echo $row['Phone_no'] ?></td>
        <td><?php echo $row['Open_Hours'] ?></td>
        <td><form action='message.php' method='POST'><input type='hidden' name='tempId' value= <?php echo $row['Phone_no'] ?>/>
              <span>
              <button type="button" data-id =<?php echo $row['Phone_no'] ?> class="open-message btn btn-info btn-md" data-toggle="modal" data-target="#food">Send Message</button>

  <!-- Modal -->
  <div class="modal fade" id="food" role="dialog">
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
          <p><span>contact Person Number :</span>
          <span><input type="text" name = "emergyNo" id="emergyNo" value ="" />
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
