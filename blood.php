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

<img src="images/blood.jpg" alt="Donate Blood" style="width:60%">

<div class="w3-container">
  <h2>Blood Banks in Coimbatore</h2>
  <div class="row">
  <div class="col-lg-12 full-width-media-text">
    <div class="col-lg-3 col-sm-3">
      <header class="w3-container w3-blue">
        <h4><span>PSG HOSPITALS</span></h4>
      </header>

      <div class="w3-container">
      <ul>
        <li><span class = "Title">Contact :</span><span>Mr.PS.Govindaswamy Naidu</span></li>
        <li><span class = "Title">Phone :</span><span>0422 - 2570170 , 0422 - 2598822 </span></li>
        <li><span class = "Title">Address :</span><span>Peelamedu, Avinashi Road, Coimbatore - 641004. </span></li>
        </ul>
      </div>

      <footer class="w3-container w3-blue">
        <h5><span>Area :</span><span class="pull-right">Peelamedu </span></h5>
     </footer>
    </div>
    <div class="col-lg-3 col-sm-3">
      <header class="w3-container w3-blue">
        <h4><span>SHEELA HOSPITAL</span></h4>
      </header>

      <div class="w3-container">
      <ul>
        <li><span class = "Title">Contact :</span><span>Sheela Hospital</span></li>
        <li><span class = "Title">Phone :</span><span>0422 - 2498381 , 0422 - 4334500, 0422 - 2498383  </span></li>
        <li><span class = "Title">Address :</span><span>#46/117, East Power House Road, Tatabad, Coimbatore - 641012. </span></li>
        </ul>
      </div>

      <footer class="w3-container w3-blue">
        <h5><span>Area :</span><span class="pull-right">Tatabad </span></h5>
     </footer>
    </div>
    <div class="col-lg-3 col-sm-3">
      <header class="w3-container w3-blue">
        <h4><span>KARPAGAM HOSPITAL </span></h4>
      </header>

      <div class="w3-container">
      <ul>
        <li><span class = "Title">Contact :</span><span>KARPAGAM HOSPITAL </span></li>
        <li><span class = "Title">Phone :</span><span>0422 - 6554443 , 0422 - 6452888 </span></li>
        <li><span class = "Title">Address :</span><span>Pollachi Main Road, Othakkalmandapam, Coimbatore - 641032</span></li>
        </ul>
      </div>

      <footer class="w3-container w3-blue">
        <h5><span>Area :</span><span class="pull-right">Othakkalmandapam </span></h5>
     </footer>
    </div>
  </div>
</div>
</div>

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
              <button type="button" data-id =<?php echo $row['Mobile'] ?> class="open-message btn btn-info btn-md" data-toggle="modal" data-target="#reqBlood">Send Message</button>

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
          <p><span>Emergency contact Person Number :</span>
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

<div class="row well">
<div class="col-sm-12" >
<header class="w3-container w3-blue">
        <h4><span>Useful Links</span></h4>
      </header>

      <div class="w3-container">
      <a href = "drivers.php">Acting Driver</a><br>
      <a href = "guides.php">Avail Local Guide</a><br>
      <a href = "rental.php">Rent House</a><br>
      <a href = "educational.php">Donate Food</a><br>

</div>
<footer class="w3-container w3-blue">

     </footer>
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
