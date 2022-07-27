<!doctype html>
<html lang="en">
  <head>
  
  <link rel="preload" as="image" href="icon/fb.png">
	<link rel="preload" as="image" href="icon/fb_change.png">
	<link rel="preload" as="image" href="icon/insta.png">
	<link rel="preload" as="image" href="icon/insta_change.png">
	<link rel="preload" as="image" href="icon/youtube.png">
	<link rel="preload" as="image" href="icon/youtube_change.png">
	<link rel="preload" as="image" href="images/source.gif">
	

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="style/css.css">
	<link href="style/css-1.css" rel="stylesheet">
	<link rel="stylesheet" href="style/material.blue_grey-red.min.css">
	<link rel="stylesheet" href="style/styles.css">
	<link rel="stylesheet" href="style/syntax.css">
	
	
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

	
    <title>Home | Robotics Club</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Fuzzy+Bubbles&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Montserrat+Alternates&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Yuji+Hentaigana+Akebono&display=swap');
	</style>

  </head>
  <body>
  <!--
<div class="se-pre-con"></div>
-->
  <!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light sticky-top link bg-light" id="myNavBar">
  <?php   
    include("includes/nav.php");
    ?>
</nav>

<!--Carousel-->
<div id="carouselHome" class="carousel slide carousel-dark" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselHome" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="images/slides/slide-1.jpg" class="d-block w-75" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/slides/slide-2.jpg" class="d-block w-75" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/slides/slide-3.jpg" class="d-block w-75" alt="...">
    </div>
	<div class="carousel-item" data-bs-interval="2000">
      <img src="images/slides/slide-4.jpg" class="d-block w-75" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container-fluid main-background">
	<div class="row align-center-ad">
		<div class="col main-text">
				<img src="images/about-us.png" class="welcome-ad">
					<p> This is a place for people who love to have fun, and be creative in their everyday lives</p>
		</div>
	</div>
</div>
<?php 
    
    include("includes/footer.php");
    
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 <script src="script/nav.js"></script>
<script src="script/footer.js"></script> 
 <script src="script/index.js"></script>	

  </body>
</html>
