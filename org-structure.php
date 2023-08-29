<?php
	
	include 'content/head.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="<?php echo $web_name; ?>" />
	
	<!-- OG -->
	<meta property="og:title" content="<?php echo $web_name; ?>" />
	<meta property="og:description" content="<?php echo $web_name; ?>" />
	<meta name="og:image" content="images/preview.png" align="middle"/>
	<meta name="format-detection" content="telephone=no">
	
		<link rel="icon" href="assets/images/<?php echo $web_icon; ?>.png"" type="image/x-icon" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/<?php echo $web_icon; ?>.png"" />
		<title><?php echo $web_name; ?></title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">	
</head>
<?php include 'assets/css/color/color-1.php';  ?>
<style type="text/css">
	ul {
  list-style-type: none; /* Remove bullets */
  padding: 0; /* Remove padding */
  margin: 0; /* Remove margins */
}
</style>
<body id="bg">
<div class="page-wraper">

	<?php include 'content/navigation.php'; ?>

    <!-- Inner Content Box ==== -->
    <div class="page-content bg-white">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/cover.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"><?php echo $web_header; ?> Team</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="home">Home</a></li>
					<li>Our Team</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- contact area -->
        <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="profile-bx text-center">
								<div class="user-thumb">
									<img src="assets/images/org-structure/<?php echo $brgy_head_pic; ?>.jpg" style="width: 250px; height: 280px;">	
								</div>
								<div class="profile-info">
									<h4><?php echo $brgy_head; ?></h4>
									<span>DC Dental Care Clinic</span>
								</div>
								<!-- <div class="profile-tabnav">
									<ul class="nav nav-tabs">
										<li class="nav-item">
											<a class="nav-link" href="history"><i class="ti-bookmark-alt"></i>Our Story </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="vision-mission"><i class="ti-pencil-alt"></i>Vission & Mission</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="all-announcements"><i class="ti-announcement"></i>Announcements</a>
										</li>
									</ul>
								</div> -->
							</div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-12 m-b30">
							<div class="profile-content-bx">
								<div class="tab-content">
									<div class="tab-pane active" id="courses">
										<div class="profile-head">
											<h3><span style="color: <?php echo $primary_color; ?>"> OUR</span> TEAM</h3>
											<!-- <div class="feature-filters style1 ml-auto">
												<ul class="filters" data-toggle="buttons">
													<li data-filter="" class="btn active">
														<input type="radio">
														<a href="#"><span>All</span></a> 
													</li>
													<li data-filter="5" class="btn">
														<input type="radio">
														<a href="#"><span>Brgy. Kagawad</span></a> 
													</li>
													<li data-filter="10" class="btn">
														<input type="radio">
														<a href="#"><span>SK Chairman</span></a> 
													</li>
													<li data-filter="15" class="btn">
														<input type="radio">
														<a href="#"><span>Brgy. Record Keeper</span></a> 
													</li>
												</ul>
											</div> -->
										</div>
										<div class="courses-filter">
											<div class="clearfix">
												<ul id="masonry" class="ttr-gallery-listing magnific-image row">
													<?php
													$rows = $model->fetchOrgStructure(1);

														if (!empty($rows)) {
														foreach ($rows as $row) {
													?>
													<li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 <?php echo $row['position']; ?>">
														<div class="cours-bx">
															<div class="action-box">
																<img src="assets/images/org-structure/<?php echo $row['image_unique']; ?>.jpg" style="width: 250px; height: 260px;">	
															</div>
															<div class="info-bx text-center">
																<h5><a href="#"><?php echo $row['name']; ?></a></h5>
																<span><?php echo $row['position']; ?></span>
															</div>
														</div>
													</li>
													<?php
														}
													}
													?>
												</ul>
											</div>
										</div>
									</div> 
								</div>
							</div>
						</div>
				</div>
            </div>
		<!-- contact area END -->

        <?php include 'content/footer.php' ?>

</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>
