<html>
	<head>
		<style type="text/css">
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
			<h1> Update event</h1>
			<form method="post" action="/main/update_event">
				<?php foreach ($query as $item){
					echo 'Event Name<input name="latest_event" type="text" value="'.$item->latest_event.'">';
					echo 'Theme<input name="theme" type="text" value="'.$item->theme.'">';
					echo 'Image_link<input name="image_link"type="text" value="'.$item->image_link.'">';
					echo 'Date<input name="event_date"type="text" value="'.$item->event_date.'">';
				} ?> 
				<button type="submit">Send event</button>
			</form>
			<br>
			<h1> Add new image</h1>
			<form method="post" action="/main/update_gallery">
				<input type="text" name="image_link" placeholder="Enter image link">
				<button type="submit">Submit image</button>
			</form>
			<br>
			<h1> Add new speaker</h1>
			<form method="post" action="/main/add_speaker">
				<input type="text" name="name" placeholder="Enter speaker name">
				<input type="text" name="info" placeholder="Enter speaker info">
				<input type="text" name="image_link" placeholder="Enter speaker image link">
				<button type="submit">Submit speaker</button>
			</form>

		</div>
	</body>
</html>
