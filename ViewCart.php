<?php
	session_start();
	include 'dbcontroller.php';
	$db_handle = new dbcontroller();
	// -----action-----
	if(!empty($_GET["action"])){
		switch($_GET["action"]){
			case "add":
				if(!empty($_POST["quantity"])) {
					$productByID = $db_handle->runQuery("SELECT * FROM books WHERE id='" . $_GET["id"] . "'");
					$itemArray = array($productByID[0]["id"]=>(array('name'=>$productByID[0]["name"],
																		'quantity'=>$_POST["quantity"],
																		'price'=>$productByID[0]["price"],
																		'image'=>$productByID[0]["image"])));
				}
				if(!empty($_SESSION["cart_item"])){
					if(in_array($productByID[0]["id"], array_keys[$_SESSION["cart_item"]])){
						foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByID[0]["id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])){
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart"][$k]["quantity"] += $_POST["quantity"];
							}
						}
					} else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
					}
				} else {
					$_SESSION["cart_item"] = $itemArray;
				}
			break;
			case "remove":
				if(!empty($_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($_GET["id"] == $k)
							unset($_SESSION["cart_item"][$k]);
						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);
					}
				}
			break;
			case "empty":
				unset($_SESSION["cart_item"]);
			break;
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv=X-UA-Compatible" content=ie=edge>
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
	</script>
	<link href="style2.css" rel="stylesheet" type="text/css" />
	<nav id="navbar">
    <ul>
      <li >
				<a href="index.php">Home</a>
			</li>
      <li>
				<a href="aboutUs.html">About us</a>
			</li>
      <!--<li>
				<a href="home.php">Homephp</a>
			</li>-->
      <li style="float:right;">
				<a href="ViewCart.php" class="active">View Cart </a>
				<!--go to php form-->
			</li>
      <!--<li style="float:right;">
				<a href="Joinus.html"  >Join us</a>
			</li>
      <li style="float:right;">
				<a href="Signin.php" >Sign in</a>-->
				<!--go to php form-->
			</li>
		</ul>
    
	</nav>
</head>

<!--ส่วนที่ต้องทำ sql php-->
<body>
	<div id="shopping-cart">
		<div class="txt-heading">Shopping Cart</div>
		<a href="ViewCart.php?action=empty" id="btnEmpty">Empty Cart</a>
		
		<?php
			if(isset($_SESSION["cart_item"])){
				$total_quantity = 0;
				$total_price = 0;
			
		?>
		
		<table class="tbl-cart" cellpadding="10" cellspacing="1">
			<tbody>
				<tr>
					<th style="text-align: left;">Name</th>
					<!--<th style="text-align: left;">Code</th>-->
					<th style="text-align: right;" width="5%">Quantity</th>
					<th style="text-align: right;" width="10%"">Unit Price</th>
					<th style="text-align: right;" width="10%">Price</th>
					<th style="text-align: center;" width="5%">Remove</th>
				</tr>
				
				<!--เริ่มทำตรงตางรางให้ไปเชคกับ sql-->
				<?php
					foreach($_SESSION["cart_item"] as $item){
						$item_price = $item["quantity"] * $item["price"];
				?>
				<!--จบทำตรงตางรางให้ไปเชคกับ sql-->
				
				<tr>
					<td>
						<img src="<?php echo $item["image"]; ?>" width="5%" class="cart-item-image" alt="">
						<?php echo $item["name"]; ?>
					</td>
					<td style="text-align: right;"><?php echo $item["quantity"]; ?></td>
					<td style="text-align: right;"><?php echo "฿ " . $item["price"]; ?></td>
					<td style="text-align: right"><?php echo "฿ " . number_format($item["price"]*$item["quantity"], 2); ?></td>
					<td style="text-align: center;"><a href="Viewcart.php?action=remove&id" class="btmRemoveAction"><img src="icon-delete.png" alt="Remove Item"></a></td>
				</tr>
				
				<?php
					$total_quantity += $item["quantity"];
					$total_price += ($item["price"] * $item["quantity"]);
					}
				?>
				
				<tr>
					<td colspan="2" align="right">Total:</td>
					<td align="right"><?php echo $total_quantity; ?></td>
					<td align="right" colspan="2"><?php echo "฿ " . number_format($total_price, 2); ?></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		<?php
			} else {
		?>
		<div class="no-records">Your cart is empty</div>
		<?php
		}
		?>
	</div>
</div>

<script src="script.js"></script>
<div id="templatemo_footer">
  <div class="jumbotron text-center footer" style="margin-bottom:0; background-color: #333; color: white;">
    <h2>Contact Us</h2><br>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg><strong> Address:</strong> จุฬาลงกรณ์มหาวิทยาลัย 254 ถนนพระรามที่ ๔ แขวง ปทุมวัน เขตปทุมวัน กรุงเทพมหานคร 10330</p>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg> <strong> Tel:</strong> 094-0454556</p>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg><b> E-mail: </b>monthisa.wo61@cbs.chula.ac.th
  </div>
</div>
</body>

<!--END ส่วนที่ต้องทำ sql php-->
</html>