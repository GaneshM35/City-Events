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

<div class="container">
  <h2>Join With us as a Local Guide</h2>
 

<form class="form-horizontal" enctype="multipart/form-data" action="guides_add_process.php" method="POST">  
<div class="form-group">
      <label class="control-label col-sm-2" for="Name">Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="Language">Languages Known :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="language" placeholder="Enter Languages Known" name="language">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="Phone">Phone :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="phone" placeholder="Enter Mobile number" name="phone">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="ages">Ages :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="ages" placeholder="Enter Your age" name="age">
      </div>
    </div>

 <div class="form-group">
      <label class="control-label col-sm-2" for="Charges">Charges :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Charges" placeholder="Enter Charges per day" name="Charges">
      </div>
    </div>


<div class="form-group">
      <label class="control-label col-sm-2" for="proof">Upload your Proof:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="photo" name="photo">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>