<?php
session_start();
?>

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
  <div style="text-align: center; font-size: 30px;">
      <br>
      <br>
    <?php
    $name = $_POST['name'];
    $Phnumber = $_POST['Phnumber'];
    $comments = $_POST['comments'];

    $con = mysqli_connect("localhost", "root", "", "musicband");

    if (mysqli_connect_errno()) {
        echo "Cannot connect to the database";
        exit();
    }
    $query = "INSERT INTO contacts (name, Phnumber, comments) VALUES ('$name', '$Phnumber', '$comments')";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Your response was sent successfully.";
    } else {
        echo "Failed to send your response, Try again later!";
    }

    mysqli_close($con);
    ?>
    </d>
</body>
</html>