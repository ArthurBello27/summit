<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The Academic Summit!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css/materialize.css">
	<script src="../../assets/js/materialize.js" type="text/javascript"></script>
	<style type="text/css">
	@font-face {
    font-family: "walkway";
    src: url("../../assets/fonts/Walkway.ttf") format("truetype");
	}
	
	body{
		margin: 15px 0 15px 0;
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
	background-image: url('../../assets/img/Background.jpg');
    margin: 0 auto;
    background-size:100%;
}
#orange_texts{
	width: 500px;
	margin-left: 200px;
	padding: 50px 0 50px 50px;
	display: inline-block;
}
#orange_header{
	font-size: 40px;
	font-family: "walkway";
}
#orange_side_image{
	width: 660px;
	float: right;
	position: absolute;
	margin-top: 250px;
}
#info {
	font-family: "walkway";
	color: grey;
	margin: 20px auto;
	line-height: 150%;
	font-size: 20px;
	padding: 50px;
	background-color: whitesmoke;

}
.page-footer {
	background-color: #30302F;
	padding: 30px;
	
}
	
#current_event_image {
	width: 400px;
    float: right;
    display: inline-block;
    margin-right: 130px;
    margin-top: 60px;
}	
#second_event_text {
	display: inline-block;
	width: 580px;
	margin: -70px 50px 22px 0;
	float: right;
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
			  <div class="dropdown-content">
			    <a href="#">Link 1</a>
			    <a href="#">Link 2</a>
			    <a href="#">Link 3</a>
			  </div>
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
	<div id="orange_layer">
		<div id="orange_texts">
			<p id="orange_header">The Academic Summit</p>
			
			<p>Latest Event: <?php foreach ($query as $item){
		echo $item->latest_event;
	} ?> </p>
			<p>Theme: <?php foreach ($query as $item){
		echo $item->theme;
	} ?> </p>
			
			<p>Event Date: <?php foreach ($query as $item){
		echo $item->event_date;
	} ?> </p>
		</div>
		<img id="current_event_image" src =<?php foreach ($query as $item){
		echo '"'.$item->image_link.'"';

	}  ?> >
	
	<p id="second_event_text">The need for students in tertiary institutions to not only acquire academic knowledge, but also a measure of real world experiences cannot be overemphasized. The avenues for the positioning of the minds of these budding professionals are through internship programmes and the emergence of what has been known as the TOWN & GOWN concept. The aim of the latter is to bring seasoned professionals in such fields to discuss global best practices in the industry, share knowledge, identify rare talents and provide career direction for the undergraduates. 
</p>
		

	</div><br><br><br><br><br><br><br><br><br>
	<div id="loading">

		<img class="thread_image" src="../../assets/img/loading2.jpg">
	</div>
	
	<p id="info">We live in an ever changing world with an increasing demand for information especially in the media. With the advent of information and communication technology (ICT), and its accessibility to everyone, nobody has an excuse. It is even more evident when we see the older generation opening social media accounts, sending us friend requests and asking what a certain feature is used for.

With the new landscape of technology available to us, practices, models and phenomena are being changed.

Consequently, the media practice has also evolved beyond the walls of the classroom. This however prompts ones curiosity to wonder around where that leaves the students aspiring to be professionals in this industry? Besides, what is the ‘outside –the-box’ requirement to stay ahead? At The Academic Summit 7.0, we look at the criterion to emerge as a professional in this evolving industry. We know that the new mantra in the media sphere is ‘Content is King’. We(media users) are exposed to a myriad of information(content) daily and we have to sift through this enormous pile daily. The pile is filled with all kind of things; the good, the bad and the ugly as we now live in the age of proliferation of content.

Everyone now blogs, vlog, tweet etc. So one way or the other you are a content creator. The media user doesn’t give the benefit of doubt; s/he gives the benefit of seconds. Your content must just be right and appealing to catch the fleeting eye of the user. So how does your content rise above the pool. How do you make sure you get it right in the first few seconds of listenership/ viewership/ readership?

How do you hit the bull’s eye? We know a way and we would let you on it in just a bit…

# TheConvergence # Thisis7 .0</p>
<div id="image_thread">
		<img class="thread_image" src="../../assets/img/summit.jpg">
	</div>
		<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">The Academic Summit</h5>
                <p class="grey-text text-lighten-4">Join the Academic Summit today!</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/main/register">Register</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/AcademicSummit">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/Theacademicsummit2014/">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/academicsummit/">Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Academic Summit
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</div>

</body>
</html>