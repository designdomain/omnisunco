<!DOCTYPE html>
<html>

<head>
    <title> OMNISUN Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Smelter a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800" rel="stylesheet">
   <?php include "include/header.php"; ?>
</head>

<body>
    
 <?php include "include/header.php"; ?>
    <!--//header-->
    <div class="banner-inner">
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Projects</li>
    </ol>
    <!--//banner-->
	
	<!--/Projets-->
	<section class="services">
		<div class="container">
			<h3 class="tittle">Projects</h3>
			<div class="row inner-sec-wthree">

				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
							<div class="section_1_gallery_grid1">
								<img src="images/w1.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Solar Modules</h3>
									
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
							<div class="section_1_gallery_grid1">
								<img src="images/w2.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Solar Thermal</h3>
									
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
							<div class="section_1_gallery_grid1">
								<img src="images/w3.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Rooftop Solution</h3>
									
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
							<div class="section_1_gallery_grid1">
								<img src="images/w4.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Solar Thermal</h3>
									
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
							<div class="section_1_gallery_grid1">
								<img src="images/w5.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Solar EPC</h3>
									
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
							<div class="section_1_gallery_grid1">
								<img src="images/w6.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Solar EPC</h3>
									
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
					<div class="section_1_gallery_grid">
							<div class="section_1_gallery_grid1">
								<img src="images/b4.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>solar water pumps</h3>
									
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
							<div class="section_1_gallery_grid1">
								<img src="images/w8.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Solar Modules</h3>
								
								</div>
							</div>
						</a>
					</div>
					<div class="section_1_gallery_grid" data-aos="zoom-in">
							<div class="section_1_gallery_grid1">
								<img src="images/w9.jpg" alt=" " class="img-responsive" />
								<div class="proj_gallery_grid1_pos">
									<h3>Rooftop Solution</h3>
									
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!--//projects-->
    <!--footer-->
        <?php include "include/footer.php"; ?>
    <!---->
    <?php include "include/copyright.php"; ?>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
     <!-- /js files -->
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='js/aos.js'></script>
	<script src="js/aosindex.js"></script>
	<!-- //js files -->
    <!-- start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('php,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            				  			containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            				 		};
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- /js -->
    <script src="js/bootstrap.js"></script>
</body>

</php>