<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Our Website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<style>
	body{
	background-color: white;
	}
	.church_name{
		font-size: 70px;
	}
	.church_address{
		margin-top: -90px;
		margin-left: 220px;
		font-size: 20px;
	}
	.card{
		background: #F66868;
		border-radius: 20px;
		margin-bottom: 10px;
	}
	.bigTitle{
		font-size: 80px;
		padding-top: 50px;
		padding-bottom: 20px;
	}
	</style>

	<!-- <a href="logout.php">Logout</a> -->
		<!-- <div>
			<p class="church_name">
			<img src="logo.png" style="width:200px; height:200px;">
			Subic Pag-asa Christian Church
			<p class="church_address">Purok 1 Evangelista Street, Barangay Pamatawan, Subic, Zambales</p>
			</p>
		</div> -->
	<div class="container-fluid">
    <center><h1 class="bigTitle">
      A PLACE FOR TRUTH
	</h1></center>
	<div class="card">
  <img class="card-img-top" style="width:18rem; margin:auto;" src="logo.png" alt="logo">
  <div class="card-body">
    <center><h1 class="card-title">BE THE LIGHT</h1>
	<h5 class="card-text">About the App</h5></center><br>
    <p class="card-subtitle">This application can help you know more about "JESUS".
        It has a different activities to enjoy even if you're not in your Church.
        This app offers you Bible Stories every week and a testimonies that will inspired you and give you hope.</p>
  	</div>
	</div>
	<div class="card" style="width: 20rem;">
  	<img class="card-img-top" src="logo.png" alt="logo">
  	<div class="card-body">
    <h5 class="card-title">PAG-ASA CHRISTIAN CHURCH</h5>
    <p class="card-subtitle">PAG-ASA Christian Community Church</p>
	<p class="card-content">We proclaim that there truly is a God in heaven and that the human family lived with Him in a premortal existence. We are God’s children. He loves us and has prepared a plan whereby through His Son, Jesus Christ, we will enjoy blessings beyond this mortal life.</p>
  	</div>
	</div>

  

<ion-tabs>
  <ion-tab-bar slot="bottom">
    <ion-tab-button tab="HOME">
      <ion-icon name="home"></ion-icon>
      <ion-label>HOME</ion-label>
    </ion-tab-button>

    <ion-tab-button tab="activities">
      <ion-icon name="clipboard"></ion-icon>
      <ion-label>ACTIVITY</ion-label>
    </ion-tab-button>

    <ion-tab-button tab="about">
      <ion-icon name="information-circle"></ion-icon>
      <ion-label>About</ion-label>
    </ion-tab-button>
  </ion-tab-bar>
</ion-tabs>
</div>
</body>
</html>