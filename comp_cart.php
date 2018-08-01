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
					echo '<p><b>'.$get_row['name'].'</b><br/><br/>'.$get_row['description'].'<br/><br/> &#36;'.number_format($get_row['price']).'<p><a class="btn btn-success" href="comp_shopping.php?add='.$get_row['id'].'">ADD</a></p></p>';
					
				}
			}
		}
		
	?>
	</body>
</html>