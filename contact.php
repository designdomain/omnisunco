<!DOCTYPE html>
<html lang="en">
<head>
<title>OMNISUN</title>    
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Solar Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<link rel="icon" type="images/png" href="images\logo.png"/>
<!--//fonts-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Required-js -->
<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //script for smooth drop down-nav -->
</head>
<body>
<!-- header -->
	 <?php include "include/header.php"; ?>
	<!-- //header -->
	<!-- banner -->
	<div class="agile-banner">
	</div>
	<!-- //banner -->
	<!--contact-->
	<div class="contact w3l-2">
		<div class="container">
			<h2 class="w3ls_head">Contact <span>us</span></h2>
				<div class="contact-grids">
					<div class="col-md-7 contact-grid agileinfo-5">
						<h4>Your Message</h4>
						
						 <form id="contact-form" name="myForm" class="form" action="mail/sendmail.php" onsubmit="return validateForm()" method="POST">
							<label>Name</label>
							<input type="text" name="Name" placeholder="Your name" required="">
							<label>Email</label>
							<input type="text" name="Email" placeholder="Email address" required="">
							<label>Subject</label>
							<input type="text" name="Subject" placeholder="Subject" required="">
							<label>Message</label>
							<textarea placeholder="Message" name="Message"></textarea>
							 <div class="contact-fields-w3ls">
		                        <div class="g-recaptcha" data-sitekey="6LeuY7gUAAAAAHxOYNqxjUcMmjZUfRR1z8DXGF8C"></div>
		                    </div>
							<input type="submit" value="Send message">
						</form>
					</div>
					<div class="col-md-5 contact-grid agileits-5">
						<div class="contact-left">
							<h4> Address</h4>
							<div class="cont-info">
								<h5>Address</h5>
								<p>Old Post Office Road, Samastripur,BIHAR-848101,INDIA</p>
								<h5>Email</h5>
								<h5><a href="mailto:example@mail.com">info@omnisun.co.in</a></h5>
								<a href="mailto:example@mail.com">www.omnisun.co.in</a>
								<h5>Phone</h5>
								<p> +91 8298555501</p><p>+91 778193412</p><p>+91.8298555501</p><p>8010604470</p>
							</div>
						</div>
						<div class="contact-bottom wthree-5">
							
						</div>
					</div>
						<div class="clearfix"></div>
				</div>
		</div>
	</div>
	<div class="agile-info-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d57444.845102182604!2d85.8082039949341!3d25.859509065787293!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x39ed90bdcd9d0b5f%3A0xc530d0313a5bcf79!2sOld%20Post%20Office%20Rd%2C%20Gudari%20Bazar%2C%20Samastipur%2C%20Bihar%20848101!3m2!1d25.8645009!2d85.7826694!5e0!3m2!1sen!2sin!4v1568264160403!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
<!--contact-->
<!-- footer -->

  <?php include "include/footer.php"; ?>
<!-- //footer -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
</body>
</html>