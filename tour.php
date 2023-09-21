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
    <div class="bg-1">
  <div class="container">
    <br>
    <br>
    <h2 class="text-center">TOUR DATES</h2>
    <p class="text-center">Buckle up, because your eardrums are about to embark on a wild sonic rollercoaster!!<br> Remember to book your tickets!</p>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="g1.jpeg" alt="Goa" width="400" height="300">
          <p><strong>Goa</strong></p>
          <p>22 Oct 2023</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href="Buytickets.php">Buy Tickets</a></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="m1.jpg" alt="Mumbai" width="400" height="302">
          <p><strong>Mumbai</strong></p>
          <p>10 Nov 2023</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href="Buytickets.php">Buy Tickets</a></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="b1.jpg" alt="Bengaluru" width="400" height="300">
          <p><strong>Bengaluru</strong></p>
          <p>15 Dec 2023</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href="Buytickets.php">Buy Tickets</a></button>
        </div>
      </div>
    </div>
  </div>
</div>
    </body>
</html>