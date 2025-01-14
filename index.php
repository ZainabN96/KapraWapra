<!DOCTYPE html>
<html class="no-js" lang="">

<?php
$title = 'Home | Kapray Vaghera';
include 'includes/header2.php';
?>
<link rel="stylesheet" href="styles.css">


<body class="home-five">

	<!-- <marquee class="delivery">Delivery service is now available for just Lahore.</marquee> -->
	<!-- header area start -->
	<?php include 'includes/navbar2.php' ?>
	<!-- header area end -->
	<!-- <marquee>A Computer Science portal</marquee> -->
	<!-- start home slider -->
	<div class="slider-area an-1 hm-1 clr">
		<!-- slider -->
		<div class="bend niceties preview-2">
			<div id="ensign-nivoslider" class="slides abc">
				<div class="carousel-item">
					<img class="d-block mx-auto img-fluid" alt="Image 1"
						src="img/slider/slider2.jpg" alt=""
						title="#slider-direction-1" />
				</div>
				<div class="carousel-item">
					<img class="d-block mx-auto img-fluid" alt="Image 1"
						src="img/slider/slider1.jpg" alt=""
						title="#slider-direction-2" />
				</div>
			</div>
			<!-- direction 1 -->
			<div id="slider-direction-1" class="t-cn slider-direction">
				<div class="slider-progress"></div>
				<div class="slider-content t-lfl lft-pr s-tb slider-1">
					<div class="title-container s-tb-c title-compress">
						<h3 class="title2 low-f">Collection 2024</h3>
						<h4 class="title2">FALL-WINTER</h4>
						<a class="btn-title" href="#hotselling">View collection</a>
					</div>
				</div>
			</div>

			<!-- direction 2 -->
			<div id="slider-direction-2" class="slider-direction">
				<div class="slider-progress"></div>
				<div class="slider-content t-lfl lft-pr s-tb  slider-2">
					<div class="title-container s-tb-c">
						<h3 class="title2 low-f">Collection 2024</h3>
						<h4 class="title2">SPRING-SUMMER</h4>
						<a class="btn-title" href="#newarrival">View collection</a>
					</div>
				</div>
			</div>
		</div>
		<div id="loader-wrapper">
			<div id="loader">
				<div class="loader-ellips">
					<span class="ring"></span>
					<span class="ring"></span>
					<span class="ring"></span>
				</div>
			</div>
		</div>
		<!-- slider end-->
	</div>
	<!-- end home slider -->
	<!-- New Arrival section start -->
	<div class="our-product-area" id="newarrival">
		<div class="container">


			<!-- area title start -->
			<div class="area-title">
				<h2>New Arrival</h2>
			</div>

			<div class="row">
				<?php
				$get_product = get_product($con, 4);
				foreach ($get_product as $list) {
				?>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-product slider-item">
							<div class="product-img">
								<a href="product.php?id=<?php echo $list['id'] ?>">
									<img class="primary-image" style="width: 450px; height: 350px;"
										src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
									<img class="secondary-image" style="width: 450px; height: 350px;"
										src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
								</a>
								<!-- <div class="action-zoom">
									<div class="add-to-cart">
										<a href="product.php?id=<?php echo $list['id'] ?>"><i
												class="fa fa-search-plus"></i></a>
									</div>
								</div> -->
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<!-- <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a> -->


												<a href="javascript:void(0)"
													onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i
														class="fa fa-heart"></i></a>

											</div>
											<div class="compare-button">
												<a href="product.php?id=<?php echo $list['id'] ?>"><i
														class="icon-bag"></i></a>
											</div>
										</div>
										<!-- <div class="quickviewbtn">
											<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
										</div> -->
									</div>
								</div>
								<!-- <div class="price-box">
									<span class="new-price">PKR
										<?php echo $list['price'] ?>
									</span>
								</div> -->
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">
										<?php echo $list['name'] ?>
									</a></h2>
								<p>
									<?php echo $list['short_desc'] ?><br>
									<span class="new-price">PKR
										<?php echo $list['price'] ?>
									</span>
								</p>

							</div>
						</div>
					</div>
				<?php } ?>
				<!-- <div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-product slider-item">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/products/producy1front.jpg" alt="" />
									<img class="secondary-image" width="540" height="660" src="img/products/image-540x660.jpg" alt="" />
								</a>
								<div class="action-zoom">
									<div class="add-to-cart">
										<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
											</div>
											<div class="compare-button">
												<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
											</div>									
										</div>
									</div>
								</div>
								<div class="price-box">
									<span class="new-price">$222.00</span>
								</div>
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
								<p>Nunc facilisis sagittis ullamcorper...</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-product slider-item">
							<div class="product-img">
								<a href="#">
									<img class="primary-image" src="img/products/producy1front.jpg" alt="" />
									<img class="secondary-image" width="540" height="660" src="img/products/image-540x660.jpg" alt="" />
								</a>
								<div class="action-zoom">
									<div class="add-to-cart">
										<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
								<div class="actions">
									<div class="action-buttons">
										<div class="add-to-links">
											<div class="add-to-wishlist">
												<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
											</div>
											<div class="compare-button">
												<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
											</div>									
										</div>
									</div>
								</div>
								<div class="price-box">
									<span class="new-price">$222.00</span>
								</div>
							</div>
							<div class="product-content">
								<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
								<p>Nunc facilisis sagittis ullamcorper...</p>
							</div>
						</div>
					</div> -->
			</div>
		</div>
		<!-- New Arrival section end -->
		<!-- Hot Selling section start -->
		<div class="our-product-area" id="hotselling">
			<div class="container">
				<!-- area title start -->
				<div class="area-title">
					<h2>Hot Selling</h2>
				</div>

				<div class="row">
					<?PHP
					$get_product = get_product($con, 4, '', '', '', '', 'yes');
					foreach ($get_product as $list) {
					?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-product slider-item">
								<div class="product-img">
									<a href="#">
										<img class="primary-image" style="width: 450px; height: 350px;"
											src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
										<img class="secondary-image" style="width: 450px; height: 350px;"
											src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="" />
									</a>
									<!-- <div class="action-zoom">
										<div class="add-to-cart">y
											<a href="product.php?id=<?php echo $list['id'] ?>"><i
													class="fa fa-search-plus"></i></a>
										</div>
									</div> -->
									<div class="actions">
										<div class="action-buttons">
											<div class="add-to-links">
												<div class="add-to-wishlist">
													<a href="javascript:void(0)"
														onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i
															class="fa fa-heart"></i></a>
												</div>
												<div class="compare-button">
													<a href="product.php?id=<?php echo $list['id'] ?>"><i
															class="icon-bag"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="price-box">
										<span class="new-price">PKR
											<?php echo $list['price'] ?>
										</span>
									</div> -->
								</div>
								<div class="product-content">
									<h2 class="product-name"><a href="#">
											<?php echo $list['name'] ?>
										</a></h2>
									<p>
										<?php echo $list['short_desc'] ?><br>
										<span class="new-price">PKR
											<?php echo $list['price'] ?>
										</span>
									</p>
								</div>
							</div>
						</div>
					<?php } ?>
					<!--  -->
				</div>
			</div>
			<!-- product section end -->
			<!-- FOOTER START -->
			<?php include 'includes/footer.php'; ?>
			<!-- FOOTER END -->

			<!-- JS -->
			<?php include 'includes/jsfiles.php'; ?>

</body>
<script>
	$(window).on('load', function() {
		$('#loader').delay(100).fadeOut('slow');
		$('#loader-wrapper').delay(500).fadeOut('slow');
	});

	var loader = document.getElementById("loader");
	window.addEventListener("load", function() {
		loader.style.display = "none";
	})
</script>


<!--Mirrored from htmldemo.net / lavoro / lavoro / index - 5. html by HTTrack Website Copier / 3. x[XR & CO '2014], Tue, 30 Jan 2024 07:29:40 GMT -->

</html>