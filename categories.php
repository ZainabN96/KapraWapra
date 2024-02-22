<!DOCTYPE html>
<html class="no-js" lang="">

	<?php 
		$title='Category | Kapray Veghera';
		include 'includes/header.php'; 
	?>

    <body class="shop">

		<!-- header area start -->
		<?php include 'includes/navbar.php'  ?>
		<!-- header area end -->
		<!-- category-banner area start -->
		<div class="category-banner">
			<div class="cat-heading">
				<span>Women</span>
			</div>
		</div>
		<!-- category-banner area end -->
		<!-- breadcrumbs area start -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="index.html">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
								<li class="category3"><span>Shop List</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- shop-with-sidebar Start -->
		<div class="shop-with-sidebar">
			<div class="container">
				<div class="row flex-column-reverse flex-lg-row">
					<!-- right sidebar start -->
					<div class="col-lg-12 col-12">
						<!-- shop toolbar start -->
						<div class="shop-content-area">
							<div class="shop-toolbar d-flex flex-column align-item-start flex-md-row justify-content-start justify-content-md-between">
								<div class="col-auto mb-3">
									<form class="tree-most" method="get">
										<div class="orderby-wrapper">
											<label>Sort By</label>
											<select name="orderby" class="orderby">
												<option value="menu_order" selected="selected">Default sorting</option>
												<option value="popularity">Sort by popularity</option>
												<option value="rating">Sort by average rating</option>
												<option value="date">Sort by newness</option>
												<option value="price">Sort by price: low to high</option>
												<option value="price-desc">Sort by price: high to low</option>
											</select>
										</div>
									</form>
								</div>
								<div class="col-auto text-center">
									<div class="limiter">
										<label>Show</label>
										<select>
											<option selected="selected" value="9">9</option>
											<option value="">12</option>
											<option value="">24</option>
											<option value="">36</option>
										</select>
										per page        
									</div>
								</div>
								<!-- <div class="col-auto">
									<div class="view-mode">
										<label>View on</label>
										<ul class="nav">
											<li class="nav-item"><button class="nav-link" data-bs-target="#shop-grid-tab" data-bs-toggle="tab"><i class="fa fa-th"></i></button></li>
											<li class="nav-item "><button class="nav-link active" data-bs-target="#shop-list-tab" data-bs-toggle="tab" ><i class="fa fa-th-list"></i></button></li>
										</ul>
									</div>
								</div> -->
							</div>
						</div>
						<!-- shop toolbar end -->
						<!-- product-row start -->
						<div class="tab-content">
							<!-- list view -->
							<div class="tab-pane fade show active" id="shop-list-tab">
								<div class="list-view">
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img class="primary-image img-fluid" src="img/products/product-7.webp" alt="" />
															<img class="secondary-image img-fluid" src="img/products/product-2.webp" alt="" />
														</a>
													</div>								
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$110.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>								
																</div>
															</div>
														</div>										
													</div>									
												</div>
											</div>	
										</div>
									</div>
									<!-- single-product end -->	
									
								
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-4.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-2.webp" alt="" />
														</a>
													</div>									
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Consequences</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$220.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div>	 							
										</div>
									</div>
									<!-- single-product end -->
									<!-- single-product start -->
									<div class="product-list-wrapper">
										<div class="single-product">
											<div class="row">
												<div class="col-md-4 col-12">
													<div class="product-img">
														<a href="#">
															<img width="540" height="660" class="primary-image" src="img/products/product-1.webp" alt="" />
															<img width="540" height="660" class="secondary-image" src="img/products/product-1.webp" alt="" />
														</a>
													</div>									
												</div>
												<div class="col-md-8 col-12">
													<div class="product-content">
														<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
														<div class="rating-price">	
															<div class="pro-rating">
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
																<a href="#"><i class="fa fa-star"></i></a>
															</div>
															<div class="price-boxes">
																<span class="new-price">$230.00</span>
															</div>
														</div>
														<div class="product-desc">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva</p>
														</div>
														<div class="actions-e">
															<div class="action-buttons">
																<div class="add-to-cart">
																	<a href="#">Add to cart</a>
																</div>
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
																	</div>									
																</div>
															</div>
														</div>
													</div>									
												</div>
											</div>	 							
										</div>
									</div>
									<!-- single-product end -->
								</div>
							</div>
							<!-- shop toolbar start -->
							<div class="shop-content-bottom mb-5 mb-lg-0">
								<div class="shop-toolbar btn-tlbr">
									<div class="col-auto text-center">
										<div class="pages">
											<label>Page:</label>
											<ul class="d-inline-flex">
												<li class="current">1</li>
												<li><a href="#">2</a></li>
												<li><a href="#" class="next i-next" title="Next"><i class="fa fa-arrow-right"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- shop toolbar end -->
						</div>
					</div>
					<!-- right sidebar end -->
				</div>
			</div>
		</div>
		<!-- shop-with-sidebar end -->
		<!-- Brand Logo Area Start -->
		<!-- <div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="brand-carousel owl-carousel owl-theme">
						<div class="brand-item"><a href="#"><img  width="225" height="103" src="img/brand/bg1-brand.webp" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img  width="225" height="103" src="img/brand/bg2-brand.webp" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img  width="225" height="103" src="img/brand/bg3-brand.webp" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img  width="225" height="103" src="img/brand/bg4-brand.webp" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img  width="225" height="103" src="img/brand/bg5-brand.webp" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img  width="225" height="103" src="img/brand/bg2-brand.webp" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img  width="225" height="103" src="img/brand/bg3-brand.webp" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img  width="225" height="103" src="img/brand/bg4-brand.webp" alt="" /></a></div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Brand Logo Area End -->

		<!-- FOOTER START -->
		<?php include 'includes/footer.php'; ?>
		<!-- FOOTER END -->
		
        <!-- JS -->
        <?php include 'includes/jsfiles.php';?>
 		
    </body>

<!-- Mirrored from htmldemo.net/lavoro/lavoro/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 07:30:16 GMT -->
</html>