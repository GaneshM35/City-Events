<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

</style>
</head>
<body>

<p>New user Register/ Already Registered Singup</p>

<div class="tab">
  <button class="tablinks" onclick="userClass(event, 'Register')">Register</button>
  <button class="tablinks" onclick="userClass(event, 'Signin')">Sign In</button>
</div>

<div id="Register" class="tabcontent">
  <h2>Signup Form</h2>

<form method="POST" action="new_registartion.php" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Name</b></label>
    <input type="text" placeholder="Enter your Name" name="name" required>

    <label><b>Date of Birth</b></label>
    <input type="text" placeholder="Enter your DOB" name="dob" required>

    <label><b>mobile Number</b></label>
    <input type="text" placeholder="Enter your Phone Number" name="phone" required>

    <label><b>Email-ID</b></label>
    <input type="text" placeholder="Enter your Mail-Id" name="email" required>

    <label><b>Location</b></label>
    <input type="text" placeholder="Enter your Area" name="location" required>    

    <label><b>Blood Group</b></label>
    <select name ="blood">
    <option value="A+ve">A+ve</option>
    <option value="A-ve">A-ve</option>
    <option value="B+ve">B+ve</option>
    <option value="B-ve">B-ve</option>
    <option value="AB+ve">AB+ve</option>
    <option value="AB-ve">AB-ve</option>
    <option value="O+ve">O+ve</option>
    <option value="O-ve">O-ve</option>
    </select><br><br>
    <input type="text" name="blood_ag" id="blood_ag" value="" />
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="checkbox" id="BG_box" /> Do you Like to Donate Blood
    
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</div>

<div id="Signin" class="tabcontent">
  <h3>Sign In</h3>
  <form action="login.php" style="border:1px solid #ccc">
  <div class="container">
    
    <label><b>Email-ID</b></label>
    <input type="text" placeholder="Enter your Mail-Id" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign In</button>
    </div>
  </div>
</form>

</div>

</div>


<script>
function userClass(evt, action) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(action).style.display = "block";
    evt.currentTarget.className += " active";
}

$(document).ready(function () {
    var ckbox = $('#BG_box');

    $('input').on('click',function () {
        if (ckbox.is(':checked')) {
            $('#blood_ag').val('1');
        } else {
            $('#blood_ag').val('0');
        }
    });
});
</script>
     
</body>
</html> 
