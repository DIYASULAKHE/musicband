
<!DOCTYPE html>
<html lang="en">
<head>
  <title>THE ROOKIES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../main/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../main/script.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Georgia">
<style>
  body {
    font-family: 'Georgia', sans-serif;
    font-size:medium;
    background-image:url('background.jpg');
    background-size: cover;
    height:100vh;
    background-position: center;
  }
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">THE ROOKIES</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.html">HOME</a></li>
        <li><a href="band.php">BAND</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="tour.php">TOUR</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="contact" class="container">
  <br>
  <br>
  <h2 class="text-center">CONTACT US</h2>
  <h4 class="text-center"><em>We love our fans!</em></h4>
  <br>
  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bengaluru, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> Phone: +91 6912345049</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: @therookies.com</p>
    </div>
    <div class="col-md-8">
      <form action="Contacts.php" method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Your Good Name please" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="Phnumber" name="Phnumber" placeholder="Enter 10 digit Phone number" type="text" required minlength="10" maxlength="10" pattern="\d{10}"/>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Your voice matters! Share your thoughts and help us make your experience even better. We're all ears for your feedback!" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <input class="btn pull-right" type="submit" onclick="validateForm()" value="Send"/>
        </div>
      </div>
    </form>
    </div>
    <p style="text-align:center">THANK YOU PEOPLE!!<br>MUCH LOVE :)</p>
  </div>
  <script>
 function validateForm() {
    var x = document.getElementById("Phnumber").value;
    if (isNaN(x) || x.length != 10) {
      alert("Invalid phone number. Please enter a valid 10 digit phone number.");
      return false;
    }
 }
</script>
</body>
</html>