<?php

	session_start();
	
	include 'includes/db.php';
	
	include 'includes/function.php';
	
	
?>
<!doctype html>
<html lang="en">
  <head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<script src="https://kit.fontawesome.com/a26e0633fc.js" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#4285f4">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
	<link href="style/common.css" rel="stylesheet">
	<link href="style/index.css" rel="stylesheet">

		 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="script/jquery.ui.autocomplete.scroll.min.js"></script>	

	
    <title>Arnav Kharbanda</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=PT+Serif&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Fuzzy+Bubbles&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Montserrat+Alternates&display=swap');
	</style>

  </head>
  <body>
<div class="se-pre-con"></div>
  <!--navbar-->

<nav class="navbar navbar-expand-lg navbar-light sticky-top link bg-light" id="myNavBar">
  <?php   
    include("includes/nav.php");
    ?>
</nav>

<img src="icons/youtube.png" class="youtube_icon">

<?php 
    
    include("includes/footer.php");
    
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 <script src="script/nav.js"></script>	
 <script src="script/test.js"></script>	

  </body>
</html>