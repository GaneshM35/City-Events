<? php include 'database.php' ?>
  <div class="row">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Add New Event</h3>
      </div>
      <div class="panel-body">

        <form class="form-horizontal" name="event_form" id="contact_form" enctype="multipart/form-data" method="post" action="">
          <fieldset>
            <div class="form-group">
              <label class="col-lg-4 control-label" for="first_name"><span class="required">*</span>Event Name:</label>
              <div class="col-lg-5">
                <input type="text" value="" placeholder="Event Name" id="event_name" class="form-control" name="event_name"><span id="first_name_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="last_name"><span class="required">*</span>Location:</label>
              <div class="col-lg-5">
                <input type="text" value="" placeholder="Event Location" id="location" class="form-control" name="location"><span id="last_name_err" class="error"></span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label" for="Date"><span class="required">*</span>Date :</label>
              <div class="col-lg-5">
                <input type="text" value="" placeholder="Event Date" id="date" class="form-control" name="date"><span id="date_err" class="error"></span>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label" for="Time"><span class="required">*</span>Time :</label>
              <div class="col-lg-5">
                <input type="text" value="" placeholder="Event Timing" id="time" class="form-control" name="time"><span id="time_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="contact_no1"><span class="required">*</span>Contact No .:</label>
              <div class="col-lg-5">
                <input type="text" value="" placeholder="Contact Number" id="contact_no1" class="form-control" name="contact_no1"><span id="contact_no1_err" class="error"></span>
                <span class="help-block">Maximum of 10 digits only and only numbers.</span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="profile_pic">Event Banner:</label>
              <div class="col-lg-5">
                <input type="file"  id="profile_pic" class="form-control file" name="profile_pic"><span id="profile_pic_err" class="error"></span>
                <span class="help-block">Must me jpg, jpeg, png, gif, bmp image only.</span>
              </div>
            </div>        
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="address"><span class="required">*</span>Organistor:</label>
              <div class="col-lg-5">
                <input type="text" value="" placeholder="Organistors" id="Organistors" class="form-control" name="Organistors"><span id="organistor_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-lg-5 col-lg-offset-4">
                <button class="btn btn-primary" type="submit" name ="btn-upload">Submit</button> 
              </div>
            </div>
          </fieldset>
        </form>

      </div>
    </div>
  </div>
<?php 
  if(isset($_POST["btn-upload"])){
        extract($_POST);
        $event_name = trim($_POST['event_name']);
  $location = trim($_POST['location']);
  $date = trim($_POST['date']);
  $time = trim($_POST['time']);
  $contact_no1 = trim($_POST['contact_no1']);
  $organistors = trim($_POST['Organistors']);
  $filename = "";
  $error = FALSE;
  
  if (is_uploaded_file($_FILES["profile_pic"]["tmp_name"])) {
    $filename = time() . '_' . $_FILES["profile_pic"]["name"];
    $filepath = 'events/' . $filename;
    if (!move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $filepath)) {
      $error = TRUE;
    }
  }


  }
?>

