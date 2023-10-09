<?php include ( "inc/connect.inc.php" ); ?>
<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysqli_query($con, "SELECT * FROM users WHERE id='$user'");
	$get_user_email = mysqli_fetch_assoc($result);
	$uname_db = $get_user_email != null ? $get_user_email['first_name'] : null;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to online grocery</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="/js/homeslideshow.js"></script>
	</head>
	<body style="min-width: 980px;">
		<div class="homepageheader" style="position: relative;">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signin.php">SIGN UP</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
			</div>
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="image/cart.png">
				</a>
			</div>
			<div class="">
				<div id="srcheader">
					<form id="newsearch" method="get" action="search.php">
					        <input type="text" class="srctextinput" name="keywords" size="21" maxlength="120"  placeholder="Search Here..."><input type="submit" value="search" class="srcbutton" >
					</form>
				<div class="srcclear"></div>
				</div>
			</div>
		</div>
		<div class="home-welcome">
			<div class="home-welcome-text" style="background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20230426/pngtree-this-is-a-grocery-store-image_2518837.jpg); height: 380px; ">
				<div style="background-image:cover;">
					<div style=" background-color: #dadbe6;">
						<h1 style="margin: 0px;"></h1>
					
					</div>
				</div>
			</div>
		</div>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Products Category</h3>
			</div>
			<div style="padding: 30px 40px; width: 95%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/NoodlesCanned.php">
						<img src="https://mallko.store/cdn/shop/collections/1615903015_6.jpg?v=1615903017" class="home-prodlist-imgi">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Snacks.php">
							<img src="https://www.eatthis.com/wp-content/uploads/sites/4/2020/05/snacks-in-america.jpg?quality=82&strip=all" class="home-prodlist-imgi">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Sweets.php">
							<img src="https://veganuary.com/wp-content/uploads/2022/01/Best-Vegan-Chocolate-2.png" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Hygene.php">
							<img src="https://indian-retailer.s3.ap-south-1.amazonaws.com/s3fs-public/article3103.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Shampoo.php">
							<img src="https://img-new.cgtrader.com/items/877588/d9a0203460/large/shampoo-collection-3d-model-low-poly-max-obj-fbx-ma-mb.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Soap&Detergent.php">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReUj30e4OsvRkMhXbdiNOrqo93c4nOpG4NnTdPz3DlE7SEzOqC8LzN5uyY29ln1Ynk0tQ&usqp=CAU" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Drinks.php">
							<img src="https://shopmnr.com/wp-content/uploads/2021/07/coke-sprite-fanta-225ltr-1.webp" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Seasonings.php">
							<img src="./image/product/seasoning/cond.jpg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
			</div>			
		</div>
	</body>
</html>