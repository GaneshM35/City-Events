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
  <h2>Add Your Events</h2>
  <form class="form-horizontal" method="POST" action="add_event_process.php">
  <div class="form-group">
      <label class="control-label col-sm-2" for="Events">Event Type:</label>
      <div class="col-sm-10">          
    <select class="form-control" name ="Event_Type">
    <option value="0">Technical Events</option>
    <option value="1">Non-Technical Events</option>
    <option value="2">Discourses</option>
    </select>
    </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="Title">Event Title:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Title" placeholder="Enter Event Title" name="Title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Eventdes">Event Description:</label>
      <div class="col-sm-10">
        <textarea rows="5" class="form-control" id="Eventdes" placeholder="Enter Event Details" name="Eventdes"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Location">Location:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Location" placeholder="Enter Venue" name="Location">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Date">Date:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Date" placeholder="Enter Venue" name="Date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="timeFrom">From Time:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="FromTime" placeholder="Enter Start Time" name="FromTime">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="timeTo">To Time:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="ToTime" placeholder="Enter End Time" name="ToTime">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Organistor">Organisator:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Organistor" placeholder="Enter Organistor Name" name="Organistor">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="EventBan">Event Banner:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="EventBan" name="EventBan">
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