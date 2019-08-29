<!DOCTYPE html>
<html>

<head>
    <title> OMNISUN Contact Us</title>
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
    <link href="css/contact.css" rel='stylesheet' type='text/css' />
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
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
    <!--//banner-->
    <!--/Contact-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Contact Us</h3>

            <div class="row inner-sec-wthree">
                <div class="contact-map">

                   <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7180.3017977923455!2d85.77829202501573!3d25.864510488491206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x39ed90bdcd9d0b5f%3A0xc530d0313a5bcf79!2sOld%20Post%20Office%20Rd%2C%20Gudari%20Bazar%2C%20Samastipur%2C%20Bihar%20848101!3m2!1d25.8645009!2d85.7826694!5e0!3m2!1sen!2sin!4v1567053248154!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> 
                </div>
                <div class="address row">
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-phone-volume" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Phone Number</h6>
                                <p>+91 8298555501,+91 778193412</p>
                                <p>+91.8298555501/8010604470</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="far fa-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Email Address</h6>
                                <p>Email :
                                    <a href="mailto:example@email.com"> www.omnisun.co.in</a></p>
                                 <p>Email :<a href="mailto:example@email.com"> info@omnisun.co.in</a>
                                
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Location</h6>
                                <p>Old Post Office Road,</p>
                                <p>Samastripur,BIHAR-848101,</p>
                                <p>INDIA</p>
                            </div> 
                        </div>
                    </div>

                </div>

                <div class="contact_grid_right">
                    <h6>Please fill this form to contact with us.</h6>
                    <form action="#" method="post">
                        <div class="contact_left_grid">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <input type="text" name="Subject" placeholder="Subject" required="">
                            <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                            <input type="submit" value="Submit">
                           
                            <div class="clearfix"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--//Contact-->
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

</php>