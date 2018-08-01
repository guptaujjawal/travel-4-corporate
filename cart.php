<html>
	<head>
		<title>Travel4Corporate</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>

	<?php
		include_once 'connect.inc.php';
		//include_once 'core.inc.php';
		
		/*$page='index1.php';
		
		if(isset($_GET['add']))
		{
			echo $_SESSION['cart_'.(int)$_GET['add']]+=1;
			header('Location:'.$page);
		}
		
		if(isset($_GET['remove']))
		{
			$_SESSION['cart_'.(int)$_GET['remove']]--;
			header('Location:'.$page);
		}
		
		if(isset($_GET['delete']))
		{
			$_SESSION['cart_'.(int)$_GET['delete']]='0';
			header('Location:'.$page);
		}*/
		
		function products()
		{	
			$get=mysql_query('SELECT id,name,description,price FROM products ORDER BY id DESC');
			if(mysql_num_rows($get)==0)
			{
				echo 'There is no product to display';
			}
			else
			{
				while($get_row=mysql_fetch_assoc($get))
				{
					echo '<p><b>'.$get_row['name'].'</b><br/><br/>'.$get_row['description'].'<br/><br/>&#36;'.number_format($get_row['price']).'<p><a class="btn btn-success" href="shopping.php?add='.$get_row['id'].'">ADD</a></p></p>';
					
				}
			}
		}
		
		/*function paypal_item()
		{
			$num=0;
			foreach($_SESSION as $name=>$value)
			{
				if($value!=0)
				{
					if(substr($name,0,5)=='cart_')
					{
						$id=substr($name,5,strlen($name-5));
						$get=mysql_query('SELECT id,name,price FROM products WHERE id='.mysql_real_escape_string((int)$id));
						while($get_row=mysql_fetch_assoc($get))
						{
							$num++;
							echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
							echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['name'].'">';
							echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['price'].'">';
							echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
						}
					}
				}
			}	
		}
		
		function cart()
		{
			$sub=0;
			$total=0;
			echo '<p><b>Your Cart : </b></p>';
			foreach($_SESSION as $name => $value)
			{
				if($value>0)
				{
					if(substr($name,0,5)=='cart_')
					{
						$id=substr($name,5,(strlen($name)-5));
						$get=mysql_query('SELECT id,name,price FROM products WHERE id='.mysql_real_escape_string((int)$id));
						while($get_row=mysql_fetch_assoc($get))
						{
							$sub=$get_row['price']*$value;
							echo '<b>'.$get_row['name'].'</b> x '.$value.' @  &#8377;'.number_format($get_row['price']).' = &#8377;'.number_format($sub).'<a href="cart.php?remove='.$id.'"> [-] </a> <a href="cart.php?add='.$id.'"> [+] </a> <a href="cart.php?delete='.$id.'"> Delete </a><br/>';
						}
					}
					$total += $sub;
				}
			}
			if($total==0)
			{
				echo 'Your cart is empty <br/>';
			}
			else
			{
				echo '<p><b>Total</b> : &#8377;'.number_format($total).'</p>';
				
			?>
			<p>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="upload" value="1">
				<input type="hidden" name="business" value="you@youremail.com">
				<?php paypal_item(); ?> 
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="amount" value="<?php echo $total; ?>">
				<input type="image" src="x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
			</form>
			</p>
			<?php
			}
		}	*/
	?>
	</body>
</html>