<?php include 'config/database.php'; ?>
<?php
  $query = "SELECT * from events";
  $getEvents = mysqli_query($con,$query);
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
  <h2>Announcements</h2>
  <p>Know more whats happening in and around coimbatore.</p>
  <div class="row">
  <div class="col-lg-12 full-width-media-text">
  <?php while($row = mysqli_fetch_assoc($getEvents)) : ?>
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
