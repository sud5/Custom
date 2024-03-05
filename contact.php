<!DOCTYPE html>
<html lang="en">

<head>
    <title>2PI Solutions</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="UpTech — IT Solutions and Services Website Template" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/swiper.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link href="css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" >

</head>

<body>
    <div id="wrapper">
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

<?php include_once("header.php"); ?>
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/5.webp" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle s2 wow fadeInUp mb-3">Contact</div>
                            <h2 class="wow fadeInUp mb20" data-wow-delay=".2s">We're here to help you</h2>
                            <ul class="crumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>                 
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section class="no-top no-bottom text-light">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-6">
                            <div class="de-icon-text bg-dark-1 p-4">
                                <img src="images/svg/phone-svgrepo-com-white.svg" class="" alt="">
                                <div class="d-text">
                                    <h4>Phone</h4>
                                    8383856542
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="de-icon-text bg-dark-2 p-4">
                                <img src="images/svg/email-address-svgrepo-com-white.svg" class="" alt="">
                                <div class="d-text">
                                    <h4>Email</h4>
                                    hello@2pisolutions.com
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="de-icon-text bg-dark-3 p-4">
                                <img src="images/svg/map-pin-svgrepo-com-white.svg" class="" alt="">
                                <div class="d-text">
                                    <h4>Address</h4>
                                    O1117 Gaur City Centre, Gaur Chowk, West, Sector 4, Greater Noida, Uttar Pradesh 203207
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="#">
                                <div class="row gx-4">
                                    <div class="col-lg-6 col-md-6 mb10">
                                        <div class="field-set">
                                            <span class="d-label">Name</span>
                                            <input type="text" name="Name" id="name" class="form-control" placeholder="Your Name" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">Email</span>
                                            <input type="text" name="Email" id="email" class="form-control" placeholder="Your Email" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">Phone</span>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-set mb20">
                                            <span class="d-label">Message</span>
                                            <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                    
                                
                                <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                                <div id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                </div>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </form>

                            </div>
                    </div>
                </div>
            </section>            

        </div>
        <!-- content close -->
        <?php include_once("footer.php"); ?>
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="form.js"></script>
    <script src="recaptcha.js"></script>
   
</body>

</html>