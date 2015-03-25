<html>
	<head>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<style>
			body {
				text-align: center;
			}
			#carts {
				border : 1px solid silver;
				padding: 10px;
				width: 30%;
				margin: 0 auto;
							}
			th, td {
				border: 1px solid silver;
				padding: 10px;
				
			}
			
			table {
				margin: 0 auto;
			}
			
			.vals {
				width: 20px;
				margin: 0 23px;
			}
			
			form {
				margin: 0 auto;
			}
			
			.update {
				background-color: green;
				color: white;
				height: 13px;
				padding: 3px 10px;
				font-size: 10px;
			}
			a:link, a:visited{
				background-color: rgba(168, 11, 11, 0.91);
				color: white;
			}
		</style>
	</head>
	<body>
		<div id="carts">
			<h2>CART</h2>
			<table>
				<thead>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
				</thead>
				<tbody>
			<?php
				$total = 0;
				foreach ($query as $item) 
				{
					?>
					<tr>
					<td>
						<?php
					echo $item->name . ' ';
					?>
					</td>
					<td>
						<?php
					echo '$'.$item->price . ' ';
					?>
					</td>
					<td>
						<form action="/main/update"  method="post">
						<select name="new_quantity">
							<option selected="selected">
								<?php echo $item->quantity ?>
							</option>
						    <?php for ($i = 0; $i <= 9; $i++) : ?>
						        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						    <?php endfor; ?>
						</select>						
							<input hidden value="<?php echo $item->id ?>" name='id'>
							<input class="pure-button update" type="submit" value="Update">
						</form>
					</td>
					</tr>
					<?php
						$total += $item->price * $item->quantity;
					} ?>
					
				</tbody>
			</table>
			<?php echo 'Total: $'.$total ?>
		</div>


				 <div id="container">
			 <?php require_once('stripe/lib/Stripe.php');
				 $stripe = array(
    'secret_key'      => 'sk_test_m8ciEXSALB5t387gWJ5Z70Ls',
    'publishable_key' => 'pk_test_a61WlYGB8FZmQrZxxuZ8rXm3'
    );
    Stripe::setApiKey($stripe['secret_key']);
    
     if ($_POST) {
	    $error = NULL;
	    try {
	      if (!isset($_POST['stripeToken']))
	        throw new Exception("The Stripe Token was not generated correctly");
	    $charge = Stripe_Charge::create(array(
	      'card'     => $_POST['stripeToken'],
	      'amount'   => $total * 100 ,
	      'currency' => 'usd'
	    )); 
	    
	}
	    catch (Exception $e) {
	      $error = $e->getMessage();
	    }
	    if ($error == NULL) {
	      
	
	      echo "<h1>Thanks!</h1>";
	    }
	    else {
	      echo "<div class=\"error\">".$error."</div>";
	    }
	}    
    if (!$_POST || $error)
  { ?>
   
    <form action="/main/cart" method="post">
      <script src="https://button.stripe.com/v1/button.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']; ?>"
				        data-amount=<?php echo $total * 100 ?>
        data-description="Confirm Purchase"
        data-label="Buy"></script>
    </form>
				   <?php } ?>
  
		 </div>
		<a class="pure-button" href="/main/home"> Continue Shopping </a>
	</body>
</html>