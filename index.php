<?php include 'config/database.php' ; ?>
<?php include 'api/weather.php' ; ?>
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
      <a href="#" class="w3-bar-item w3-button">updates</a>
      <a href="news.php" class="w3-bar-item w3-button">News</a>
      <a href="#" class="w3-bar-item w3-button">Publish</a>
    </div>
  </div> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">Social Activaties
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="blood.php" class="w3-bar-item w3-button">Blood Bank</a>
      <a href="#" class="w3-bar-item w3-button">Donate a food</a>
    </div>
  </div> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">More about Coimbatore
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Gallery</a>
      <a href="#" class="w3-bar-item w3-button">About</a>
    </div>
  </div> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">Events
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Technical Events</a>
      <a href="#" class="w3-bar-item w3-button">Non-Technical Events</a>
      <a href="#" class="w3-bar-item w3-button">Discourses</a>
    </div>
  </div> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">Phone Book
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Emergency</a>
      <a href="#" class="w3-bar-item w3-button">Essentials</a>
    </div>
  </div> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">Transportation
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Bus Details</a>
      <a href="#" class="w3-bar-item w3-button">Local Auto App</a>
    </div>
  </div> 
  <a href="tourtism.php" class="w3-bar-item w3-button">Place of Interest</a>
  <a href="guides.php" class="w3-bar-item w3-button">Guides in Coimbatore</a>
</div>

<div zclass="w3-main" id="main">

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>My City</h1>
  </div>
</div>

<br>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/index1.png" alt="My City" style="width:100%;">
        <div class="carousel-caption">
          <h3>Dhyanalinga</h3>
        </div>
      </div>

      <div class="item">
        <img src="images/index2.jpg" alt="My City" style="width:100%;">
        <div class="carousel-caption">
          <h3>Pollachi</h3>
        </div>
      </div>

      <div class="item">
        <img src="images/index4.jpg" alt="My City" style="width:100%;">
        <div class="carousel-caption">
          <h3>Maruthamalai</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="images/index3.jpg" alt="My City" style="width:100%;">
        <div class="carousel-caption">
          <h3>Railway Station</h3>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br>
<div class="w3-container">
<div class="col-lg-3 col-sm-3">
      <header class="w3-container w3-blue">
        <center><h3><span>Weather</span></h3></center>
      </header>

      <div class="w3-container">
      <center><?php echo $country; ?><br><?php echo $logo; ?></center>
        <p>
      <?php echo $temperature; ?>
      <?php echo $clouds; ?>
      <?php echo $humidity; ?>
      <?php echo $$windspeed; ?>
      <?php echo $pressure; ?>
      <?php echo $$visibility; ?>
      <?php echo $sunrise; ?>
      <?php echo $sunset; ?></p>
      </div>

      <footer class="w3-container w3-blue">
        <h4><span>Today</span><span class="pull-right"><?php echo $desc; ?></span></h4>
     </footer>
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
