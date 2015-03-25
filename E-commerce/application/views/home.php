<head>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<style type="text/css">

	.inlines {
		display: inline-block;
	}

	#categories {
		vertical-align: top;
		width: 10%;
	}

	.products {
		display: inline-block;
		border: 1px solid silver;
		padding: 20px;
		text-align: center;
		margin: 10px;
}
	}
</style>
</head>
<body>
<div class='inlines' id='categories'>
	<ul class="nav nav-tabs">
		<li role="presentation" class="dropdown">
	    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
	      Categories <span class="caret"></span>
	    </a>
	    <ul class="dropdown-menu" role="menu">
	     
	<?php
		foreach ($categories->result() as $item) {
			echo '<li ><a href="#" >'.$item->name.'</a></li>';
		}; ?>
			</ul>
	  </li> 
	</ul>
</div>	
<div class='inlines'>
<?php
	
	foreach ($products->result() as $product) {
		echo '<a href="/main/item/'.$product->id .'"> <div class="products">'.$product->name . '<br> $' . $product->price . '<br></div></a>' ;

	}
?>
</div>
</body>