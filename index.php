<?php
require_once("connect.php");
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/style.css">
	<link rel="stylesheet" href="assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>



<body>
<style>
		body {
			position: relative;
			overflow: hidden;
		}

		.toast {
			width: 300px;
			display: flex;
			position: absolute;
			top: 5%;
			right: 2%;
			border: 1px solid black;
			padding: 10px;
			transform: translateX(300px);
			animation: show 1s 1 ease-in-out forwards;
			border-radius: 5px;
			align-items: center;
		}

		.iconToast {

			color: lightgreen;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.message {
			margin-left: 10px;
		}

		@keyframes show {
			from {
				transform: translateX(300px);
			}

			to {
				transform: translateX(0);
			}
		}
	</style>
	<script>
		const body = document.querySelector("body")
		const list = [
			{
				type: "info",
				icon: "bi bi-info-circle-fill",
			},// info
			{
				type: "success",
				icon: "bi bi-check-circle"
			},// check
			{
				type: "warning",
				icon: "bi bi-exclamation"
			},//	warning
		]
		function showToast(type, message) {
			const data = list.filter(tag => tag.type === type);
			console.log(data)
			// tạo toast
			const newDiv = document.createElement("div");
			// thêm css
			newDiv.classList.add("toast")
			// thêm icon
			newDiv.innerHTML = `
				<i class="${data[0].icon} iconToast"style="width: 20px; color: "black""></i>
				<p class="message">${message ? message : "Không có gì"}</p>
			`
			body.appendChild(newDiv)
		}

		// Hàm để lấy giá trị của cookie theo tên
		function getCookieValue(cookieName) {
			const cookies = document.cookie.split('; ');
			for (const cookie of cookies) {
				const [name, value] = cookie.split('=');
				if (name === cookieName) {
					return value;
				}
			}
			return null; // Không tìm thấy cookie với tên đã cho
		}

		// Lấy giá trị của value1 từ cookie
		const value1 = getCookieValue('user');
		if (value1 !== null) {
			showToast("success", "Đăng nhập thành công!")
		} else {
			showToast("warning", "Bạn chưa đăng nhập!")
		}



	</script>
	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="user.php"><i class="fa fa-user"></i><?php echo isset($_COOKIE['user']) ? $_COOKIE['user'] : 'Your Account'?></a></li>
						<li><a href="<?php echo isset($_COOKIE['user']) ? 'user.php' : 'signup.html'?>"><?php echo isset($_COOKIE['user']) ? 'Thông tin người dùng' : 'Đăng ký'?></a></li>
						<li><a href="<?php echo isset($_COOKIE['user']) ? 'logout.php' : 'login.html'?>"><?php echo isset($_COOKIE['user']) ? 'Đăng xuất' : 'Đăng nhập'?></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.php" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form method="post" action="search.php">
							<input type="text" value="" name="keyword" id="s" placeholder="Nhập từ khóa..." />
							<button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i
									class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/1.png"
												alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/2.png"
												alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/3.png"
												alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span
											class="cart-total-value">$34.55</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.php" class="beta-btn primary text-center">Đặt hàng <i
												class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span
						class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="#">Sản phẩm</a>
							<ul class="sub-menu">
								<li><a href="product_type.php">Sản phẩm 1</a></li>
								<li><a href="product_type.php">Sản phẩm 2</a></li>
								<li><a href="product_type.php">Sản phẩm 4</a></li>
							</ul>
						</li>
						<li><a href="about.php">Giới thiệu</a></li>
						<li><a href="contacts.php">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<div class="rev-slider">
		<div class="fullwidthbanner-container">
			<?php
			$sql = "select image from products limit 4";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				//   echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while ($row = mysqli_fetch_assoc($result)) {
					// echo "image: " . $row["image"] . "<br>";
				}
			} else {
				echo "0 results";
			}

			?>

			<div class="fullwidthbanner">
				<div class="bannercontainer">
					<div class="banner">
						<ul>
							<!-- THE FIRST SLIDE -->
							<!-- banner -->
							<li data-transition="boxfade" data-slotamount="20" class="active-revslide"
								style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
								<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
									data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
									data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
									data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
									data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
									data-oheight="undefined">
									<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
										data-bgposition="center center" data-bgrepeat="no-repeat"
										data-lazydone="undefined" src="<?php echo "./image/slide/" . $row['image'] ?>"
										data-src="assets/dest/images/thumbs/1.jpg"
										>
									</div>
								</div>
							</li>
							<li data-transition="boxfade" data-slotamount="20" class="active-revslide"
								style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
								<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
									data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
									data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
									data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
									data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
									data-oheight="undefined">
									<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
										data-bgposition="center center" data-bgrepeat="no-repeat"
										data-lazydone="undefined" src="<?php echo "./image/slide/" . $row['image'] ?>"
										data-src="assets/dest/images/thumbs/1.jpg"
										>
									</div>
								</div>

							</li>

							<li data-transition="boxfade" data-slotamount="20"
								class="active-revslide current-sr-slide-visible"
								style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
								<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
									data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
									data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
									data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
									data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
									data-oheight="undefined">
									<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
										data-bgposition="center center" data-bgrepeat="no-repeat"
										data-lazydone="undefined" src="<?php echo "./image/slide/" . $row['image'] ?>"
										data-src="assets/dest/images/thumbs/1.jpg"
										>
									</div>
								</div>

							</li>
						</ul>
					</div>
				</div>

				<div class="tp-bannertimer"></div>
			</div>
		</div>
		<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<!-- <div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.php"><img src="assets/dest/images/products/1.jpg"
													alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Sample Woman Top</p>
											<p class="single-item-price">
												<span>$34.55</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.php"><i
													class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.php">Details <i
													class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div> -->
								<?php
								$sql = "SELECT * FROM products limit 4";
								$result = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_assoc($result)) {
									?>
									<div class="col-sm-3">
										<div class="single-item">
											<div class="ribbon-wrapper">
												<div class="ribbon sale">Sale</div>
											</div>

											<div class="single-item-header">
												<a href="product.php?id=<?php echo $row['id'];?>"><img style="width: 270px; height: 250px"
														src="<?php echo "./image/product/" . $row['image'] ?>" alt=""></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">
													<?php echo $row['name'] ?>
												</p>
												<p class="single-item-price">
													<span class="flash-del">
														<?php echo $row['unit_price'] ?>đ
													</span>
													<span class="flash-sale">
														<?php echo $row['promotion_price'] ?>đ
													</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.php"><i
														class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="product.php?id=<?php echo $row['id'];?>">Details <i
														class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php } ?>



							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">

							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>


							<div class="row">
								<?php
								$sql = "SELECT * FROM products WHERE id_type = 1 limit 4 ";
								$result = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_assoc($result)) {
									?>
									<div class="col-sm-3">

										<div class="single-item">
											<div class="single-item-header">
												<a href="product.php?id=<?php echo $row['id'];?>"><img style="width: 270px; height: 250px" src="<?php echo "./image/product/" . $row['image'] ?>" alt=""></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">
													<?php echo $row['name'] ?>
												</p>
												<p class="single-item-price">
													<span>
														<?php echo $row['unit_price'] ?>đ
													</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.php"><i
														class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="product.php?id=<?php echo $row['id'];?>">Details <i
														class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="space40">&nbsp;</div>
							<div class="row">
								<?php
								$sql = "SELECT * FROM products WHERE id_type = 3 limit 4 ";
								$result = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_assoc($result)) {
									?>
									<div class="col-sm-3">

										<div class="single-item">
											<div class="single-item-header">
												<a href="product.php?id=<?php echo $row['id'];?>"><img style="width: 270px; height: 250px" src="<?php echo "./image/product/" . $row['image'] ?>" alt=""></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">
													<?php echo $row['name'] ?>
												</p>
												<p class="single-item-price">
													<span>
														<?php echo $row['unit_price'] ?>đ
													</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.php"><i
														class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="product.php?id=<?php echo $row['id'];?>">Details <i
														class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Instagram Feed</h4>
						<div id="beta-instagram-feed">
							<div></div>
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h4 class="widget-title">Information</h4>
						<div>
							<ul>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web
										Design</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web
										development</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a>
								</li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a>
								</li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i>
										Illustrations</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="col-sm-10">
						<div class="widget">
							<h4 class="widget-title">Contact Us</h4>
							<div>
								<div class="contact-info">
									<i class="fa fa-map-marker"></i>
									<p>30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78</p>
									<p>Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia
										consequuntur magni dolores eos qui ratione.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Newsletter Subscribe</h4>
						<form action="#" method="post">
							<input type="email" name="your_email">
							<button class="pull-right" type="submit">Subscribe <i
									class="fa fa-chevron-right"></i></button>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="assets/dest/js/jquery.js"></script>
	<script src="assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="assets/dest/vendors/animo/Animo.js"></script>
	<script src="assets/dest/vendors/dug/dug.js"></script>
	<script src="assets/dest/js/scripts.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/dest/js/waypoints.min.js"></script>
	<script src="assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="assets/dest/js/custom2.js"></script>
	<script>
		$(document).ready(function ($) {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 150) {
					$(".header-bottom").addClass('fixNav')
				} else {
					$(".header-bottom").removeClass('fixNav')
				}
			}
			)
		})
	</script>
</body>

</html>