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
    body{
      background-image:url('background.jpg');
      background-size: cover;
      height:100vh;
      background-position: center;
      font-family: 'Georgia', sans-serif;
      font-size:medium;
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
<div id="tickets" class="container">
<br>
<br>
<br>
<br>
<div class="row">

<form role="form"  action="Payment.php" method="post">
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, 250 per person</label>
            <select name="psw">
                <option value="1">1 Ticket (250)</option>
                <option value="2">2 Ticket (500)</option>
                <option value="3">3 Ticket (750)</option>
                <option value="4">4 Ticket (1000)</option>
            </select>
            </div>
           <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
            <input type="email" class="form-control" id="usrname" name="usrname" placeholder="Enter your Email ID" required/>
          </div>
             <div class="form-group">
            <label for="Phnumber"><span class="glyphicon glyphicon-user"></span>Phone_number</label>
            <input type="text" class="form-control" id="Phnumber" name="Phnumber" placeholder="Enter 10 digit Phone number" required minlength="10" maxlength="10" pattern="\d{10}"/>
          </div>
          <input type="submit" class="btn btn-block" onclick="validateForm()" style="width:100px; height:40px;"> <span class="glyphicon glyphicon-ok"></span>
        </form>
<br>
<br>
<p style="text-align:center; font-size: 20px;">"Thank you for your support, and we can't wait to rock the stage for you!"</p>
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