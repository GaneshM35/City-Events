<?php
include 'config/database-config.php' ;
?>
<?php
$s ="";
if(isset($_POST['Event_Type'])){
		$s = $_POST['Event_Type'];
	}
	if($s == ""){
		$sql='SELECT * FROM events';
		$query = $dbh->prepare($sql);
	$query->execute();
	}else{
	$sql='SELECT * FROM events WHERE Event_Cat = :s' ;
	$query = $dbh->prepare($sql);

	$query->execute(array(':s' => $s));
	}
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

<img src="images/event.gif" alt="Announcement" style="width:60%">

<div class="w3-container">
  <h2>Events in Coimbatore</h2>
  <p>Know more whats happening in and around coimbatore.</p>
<div class="row">
<form class="form-horizontal" method="POST" action="event.php">
  <div class="form-group">
      <label class="control-label col-sm-2" for="Events">Event Type:</label>
      <div class="col-sm-10">          
    <select class="form-control" name ="Event_Type">
    <option value="">select Event Type</option>
    <option value="0">Technical Events</option>
    <option value="1">Non-Technical Events</option>
    <option value="2">Discourses</option>
    </select>
    </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="text" class="btn btn-default" >Submit</button>
    </form>
</div><br><br>
  <div class="row">
  <div class="col-lg-12 full-width-media-text">
  <?php while($row = $query->fetch(PDO::FETCH_ASSOC)) : ?>
    <div class="col-lg-3 col-sm-3">
      <header class="w3-container w3-blue">
        <h4><span><?php echo $row['Event_Type'] ?></span></h4>
      </header>

      <div class="w3-container">
      <ul>
        <li><span class = "Title">Organisator :</span><span><?php echo $row['Organisator'] ?></span></li>
        <li><span class = "Title">Description :</span><span><?php echo $row['Event_desc'] ?></span></li>
        <li><span class = "Title">Date :</span><span><?php echo $row['Date'] ?></span></li>
        <li><span class = "Title">Timing :</span><span><?php echo $row['From_Time'] ?> - <?php echo $row['To_Time'] ?></span></li>
        </ul>
      </div>

      <footer class="w3-container w3-blue">
        <h5><span><?php echo $row['Location'] ?></span><span class="pull-right"><?php echo $row['event_id'] ?></span></h5>
     </footer>
    </div>
  <?php endwhile; ?>
  </div>
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

</body>
</html>
