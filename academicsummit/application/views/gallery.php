<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The Academic Summit!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<style type="text/css">
	@font-face {
    font-family: "walkway";
    src: url("../../assets/fonts/Walkway.ttf") format("truetype");
	}
	body{
		margin: 0 0 15px 0;
		text-align: center;
		background-color: #434545;
	}
	#menu_items {
		padding: 35px;
		width: 505px;
		float: right;
	}
	.menu_term {
		padding: 30px;
		background-color: white;
		color: grey;

	}
	#menu {
		min-width: 800px;
		padding: 15px 150px 15px 150px;
		background-color: white;
	}
	a {
		text-decoration: none;
		font-family: Verdana;
	}
	#summit_logo{
		width: 150px;
	}
	/* Dropdown Button */
.dropbtn {
    background-color: #fff;
    color: grey;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    display: inline-block;
    margin: 0 5px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #E6E9EB;
    color: white;
}
.thread_image{
	width: 100%;
	min-width: 345px;
}
#image_thread{
	min-width: 1410px;
}
#orange_layer{
	color: white;
	font-family: Verdana;
    height: 500px;
	width: 100%;
	background-image: url('../../assets/img/orange_back.jpg');
    margin: 0 auto;
    background-size:100%;
}
#orange_texts{
	width: 500px;
	margin-left: 200px;
	padding: 50px;
}
#orange_header{
	font-size: 40px;
}
#orange_side_image{
	width: 660px;
	float: right;
}
h1 {
	display: none;
	color: white;
	font-family: "walkway";
}
.gallery_images {
	width: 500px;
	margin: 10px;
}
	
	</style>
</head>
<body>

<div id="content">
	<div id="menu">
		<img id="summit_logo" src="../../assets/img/home_logo.png">
		<div id="menu_items">
			<!-- <a class="menu_term" href="/">Home</a> -->
			
			<div class="dropdown" style="float:left;">
			 <a class="menu_term dropbtn" href="/">Home</a>
			  
			</div>
			<div class="dropdown" style="float:left;">
			 <a class="menu_term dropbtn" href="/main/speakers">Speakers</a>
			  
			</div>
			<div class="dropdown" style="float:left;">
			 <a class="menu_term dropbtn" href="/main/gallery">Gallery</a>
			</div>
			<div class="dropdown" style="float:left;">
			 <a class="menu_term dropbtn" href="/main/about">About</a>
			  
			</div>
			<div class="dropdown" style="float:left;">
			 <a class="menu_term dropbtn" href="/main/register">Register</a>
			</div>

			<!-- <a class="menu_term" href="#">Gallery</a>
			<a class="menu_term" href="/main/register">Register</a> -->
		</div>
	
	</div>
	<h1>Photos from our previous events</h1>
	<?php foreach ($query as $item){
		echo '<img class="gallery_images" src="'.$item->image_link.'">';
	} ?> 
</div>
<script>
	$('h1').fadeIn('slow');
</script>
</body>
</html>