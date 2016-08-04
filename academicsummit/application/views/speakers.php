<html>
	<head>
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" type="text/css" href="../../assets/css/materialize.css">
	<script src="../../assets/js/materialize.js" type="text/javascript"></script>
		<style type="text/css">
		@font-face {
    font-family: "walkway";
    src: url("../../assets/fonts/Walkway.ttf") format("truetype");
	}
	.page-footer {
	background-color: #30302F;
	padding: 30px;
	
}
			body{
					margin: 0 0 15px 0;
					background-color: grey;

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
			#main {
				color: white;
				font-family: "walkway";
				width: 80%; 
				margin: 0 auto;

			}
			h1{
				font-size: 40px;
			}
			#main p{
				font-size: 22px;
				
			}
			.speaker_image {
				max-height: 240px;
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
				</div>
					
			</div>
			<div id="main">
						<?php foreach ($query as $item){
							echo '<div class="speaker_div"><p class="speaker_name">'.$item->name.'</p><img class="speaker_image" src="'.$item->image_link.'""></div>';
							echo '<p class="speaker_info">'.$item->info.'</p>';
						} ?>
			</div>
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
	</body>
</html>
