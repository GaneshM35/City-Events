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
  <a href="#" class="w3-bar-item w3-button">Donate Blood</a>
  <a href="#" class="w3-bar-item w3-button">Bus Details</a>
  <a href="gallery.php" class="w3-bar-item w3-button">Gallery</a>
  <a href="#" class="w3-bar-item w3-button">Tourism</a>
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
</div>

<div class="container-fluid">
<div class="row well">
    <div class="col-sm-4" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/index2.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/index3.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/index4.jpg" alt="New york" style="width:100%;">
      </div>
    </div>
  </div>

</div>
<div class="col-sm-8" >
<p>The Popover plugin is similar to tooltips; it is a pop-up box that appears when the user clicks on an element. The difference is that the popover can contain much more content.

Plugin dependency: Popovers require the tooltip plugin (tooltip.js) to be included in your version of Bootstrap.

For a tutorial about Popovers, read our Bootstrap Popover Tutorial.
</p>
</div>
</div>
<div class="row well">
<div class="col-sm-4" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/index2.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/index3.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/index4.jpg" alt="New york" style="width:100%;">
      </div>
    </div>
  </div>

</div>
</div>

<div class="col-sm-8" >
<p>The Popover plugin is similar to tooltips; it is a pop-up box that appears when the user clicks on an element. The difference is that the popover can contain much more content.

Plugin dependency: Popovers require the tooltip plugin (tooltip.js) to be included in your version of Bootstrap.

For a tutorial about Popovers, read our Bootstrap Popover Tutorial.
</p>
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
