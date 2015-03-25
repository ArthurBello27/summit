

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<style type="text/css">
	.image {
		display: inline-block;

	}
	.description {
		display: inline-block;
	}
</style>
</head>

<body>
	<div class='image col-md-5'>
		
	</div>

	<div class='description col-md-7'>
		<?php 
			foreach ($item_details->result() as $value) {
				echo "<h3>". $value->name . "</h3>";
			}
			foreach ($item_category->result() as $value) {
				echo "<h6>". $value->name . "</h6>";
			}
			foreach ($item_details->result() as $value) {
				echo "<p>$". $value->price . "</p>";
				echo "<p>". $value->description . "</p>";
			}
		?>
		<form method="post" action='/main/add_cart'>
					<select name="quantity">
					    <?php for ($i = 1; $i <= 9; $i++) : ?>
					        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					    <?php endfor; ?>
					</select>
						<input hidden value='<?php foreach ($item_details->result() as $value) { echo $value->id ;} ?>' name='id'>
						<input class="pure-button pure-button-primary" type='submit' value='Add to Cart' name='submit'>
				</form>
	</div>
</body>	