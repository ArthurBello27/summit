<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register With the Academic Summit Today!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/set2.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/component.css" />
		<script src="../../assets/js/modernizr.custom.js"></script>
	<style type="text/css">
	@font-face { font-family: body_logo; src: url('../../assets/fonts/Quicksand.otf'); } 

	body{
		margin: 0 15px 15px 15px;
		display: none;
		background-color: #434545;

	}
	#menu_items {
		padding: 35px;
		width: 575px;
		float: right;
	}
	.menu_term {
		padding: 30px;
		background-color: white;
		color: grey;

	}
	#menu {
		min-width: 1190px;
		padding: 15px 150px 15px 150px;
		background-color: white;
	}
	a {
		text-decoration: none;
		font-family: Verdana;
	}
	#header {
		font-size: 50px;
		font-family: Geneva;
	}

	#header_div {
		width: 400px;
		margin: 0 auto;
	}
	#body_content{
		font-family: body_logo;
		color: white;
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
#registration_div{
	text-align: center;
	margin: 20px auto;
	padding: 10px;
	background-color: white;
	border-radius: 5px;
	width: 400px;
	height: 600px;
}
#workshop {
	width: 400px;
	color: grey;
	position: absolute;
	margin-top: 40px;
	line-height: 150%;
	padding: 15px;
	background-color: white;
	border: solid;
	border-radius: 10px;
}
#classes {
	line-height: 250%;
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

	<div id="workshop">Workshop Classes<br><br>
The following classes have been offered for participants on how to leverage on their creative ability with the use of technology in this content driven media age.<br><br>
<span id="classes">Digital Marketing:	The Internet of Things<br>
Art Direction:		Art Beyond Borders<br>
Copy Writing:		Imaginative Chronicles<br>
Content Development:	The Idea Merchant<br>
Blogging:		Engaging The Digital Audience<br></span>
</div>
	<div id="registration_div">
		<p>Register with us</p>
		<form method="post" action="/main/new_user">
			<span class="input input--yoshiko">
						<input name="name" required class="input__field input__field--yoshiko" type="text" id="input-1">
						<label class="input__label input__label--yoshiko" for="input-1">
							<span class="input__label-content input__label-content--yoshiko" data-content="Name">Name</span>
						</label>
					</span>
			
			<span class="input input--yoshiko">
						<input name="email" required class="input__field input__field--yoshiko" type="text" id="input-2">
						<label class="input__label input__label--yoshiko" for="input-2">
							<span class="input__label-content input__label-content--yoshiko" data-content="Email">Email</span>
						</label>
			</span>

			<span class="input input--yoshiko">
						<input name="workshop" required class="input__field input__field--yoshiko" type="text" id="input-3">
						<label class="input__label input__label--yoshiko" for="input-3">
							<span class="input__label-content input__label-content--yoshiko" data-content="Workshop Class">Workshop Class</span>
						</label>
			</span>

			<span class="input input--yoshiko">
						<input name="school" required class="input__field input__field--yoshiko" type="text" id="input-4">
						<label class="input__label input__label--yoshiko" for="input-4">
							<span class="input__label-content input__label-content--yoshiko" data-content="School">School</span>
						</label>
			</span>

			<span class="input input--yoshiko">
						<input name="number" required class="input__field input__field--yoshiko" type="text" id="input-4">
						<label class="input__label input__label--yoshiko" for="input-4">
							<span class="input__label-content input__label-content--yoshiko" data-content="Phone number">Phone number</span>
						</label>
			</span>

			<button type="submit" class="btn btn-1 btn-1a">Register</button>
		</form>
	</div>
	
</div>

<script src="../../assets/js/classie.js"></script>
		<script>

			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
			var buttons7Click = Array.prototype.slice.call( document.querySelectorAll( '#btn-click button' ) ),
				buttons9Click = Array.prototype.slice.call( document.querySelectorAll( 'button.btn-8g' ) ),
				totalButtons7Click = buttons7Click.length,
				totalButtons9Click = buttons9Click.length;

			buttons7Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );
			buttons9Click.forEach( function( el, i ) { el.addEventListener( 'click', activate, false ); } );

			function activate() {
				var self = this, activatedClass = 'btn-activated';

				if( classie.has( this, 'btn-7h' ) ) {
					// if it is the first of the two btn-7h then activatedClass = 'btn-error';
					// if it is the second then activatedClass = 'btn-success'
					activatedClass = buttons7Click.indexOf( this ) === totalButtons7Click-2 ? 'btn-error' : 'btn-success';
				}
				else if( classie.has( this, 'btn-8g' ) ) {
					// if it is the first of the two btn-8g then activatedClass = 'btn-success3d';
					// if it is the second then activatedClass = 'btn-error3d'
					activatedClass = buttons9Click.indexOf( this ) === totalButtons9Click-2 ? 'btn-success3d' : 'btn-error3d';
				}

				if( !classie.has( this, activatedClass ) ) {
					classie.add( this, activatedClass );
					setTimeout( function() { classie.remove( self, activatedClass ) }, 1000 );
				}
			}

			
			$('body').fadeIn("slow");
		</script>
</body>
</html>