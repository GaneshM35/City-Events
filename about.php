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
<h3>About Coimbatore</h3>
<p>Coimbatore, also better-known as Kovai, is a main city within the Indian state of TamilNadu. Located on the banks of the Noyyal watercourse encircled by the Western Ghats, it is the second largest city within the state when urban center and also the sixteenth largest urban agglomeration in Asian nation. It is one amongst the highest rising tier-II cities in Asian nation and a serious hub for textiles, industries, commerce, education, information technology, healthcare and producing in Tamil Nadu. "Manchester of South India" attributable to its cotton production and textile industries. Coimbatore is also remarked because the "Pump City" and it provides nearly half India's necessities of motors and pumps. The city is one amongst the biggest exporters of jewelry, wet grinders, poultry and auto elements with "Coimbatore Wet Grinder".</p>
<br>
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7dk_k6zJbuo"></iframe>
  </div><br>
<p>Coimbatore was part of Kongu Nadu throughout the Sangam amount between 1st and the fourth centuries metal and was dominated by the Cheras because it served because the jap entrance to the Palakkad Gap, the principal trade route between the west coast and Madras. Coimbatore was located on the ancient Roman trade route that extended from Muziris to Arikamedu in South Asian nation. The medieval Cholas conquered the Kongu Nadu in the 10th century metal. The region was ruled by Vijayanagara Empire in the fifteenth century followed by the Nayaks United Nations agency introduced the Palayakkarar system beneath that Kongu nadu region was divided into twenty four Palayams. In the later a part of the 18th century, the Coimbatore region came under the Kingdom of Mysore and following the defeat of tree grand Turk within the Anglo-Mysore Wars, the British East India Company annexed Coimbatore to the Madras Presidency in 1799. The Coimbatore region played a distinguished role in the Second Poligar War (1801) once it absolutely was the realm of operations of Dheeran Chinnamalai.</p><br>
<h4>History of Coimbatore</h4>
<h5>Early history</h5>
<p>Coimbatore has been occupied since the early Sangam amount. The area was called Kongunadu and was conquered by semi-independent group leader United Nations agency allocated nominal loyalty to the Chera kingdom. big amount of Roman coins and option artifacts discovered in the region attest to the presence of Roman traders.</p>
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
