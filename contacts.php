<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Townhub - Directory Listing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
		<style>
		@import url(https://fonts.googleapis.com/css?family=Lato:400,700,300);






.file-upload-wrapper {
  position: relative;
  width: 100%;
  height: 55px;
	border: 1px solid #e5e7f2;}
.file-upload-wrapper:after {
  content: attr(data-text);
  font-size: 18px;
  position: absolute;
  top: 0;
  left: 0;
  background: #f5f5f5;
  padding: 10px 15px;
  display: block;
  width: calc(100% - 40px);
  pointer-events: none;
  z-index: 20;
  height: 33px;
  line-height: 40px;
  color: #999;
  border-radius: 5px 10px 10px 5px;
  font-weight: 300;
}
.file-upload-wrapper:before {
  content: 'Upload';
  position: absolute;
  top: 0;
  right: 0;
  display: inline-block;
  height: 53px;
  background:#3d8c63;
  color: #fff;
  font-weight: 700;
  z-index: 25;
  font-size: 16px;
  line-height: 60px;
  padding: 0 15px;
  text-transform: uppercase;
  pointer-events: none;
  border-radius: 0 5px 5px 0;
}
.file-upload-wrapper:hover:before {
  background:  #C00604;
}
.file-upload-wrapper input {
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 99;
  height: 40px;
  margin: 0;
  padding: 0;
  display: block;
  cursor: pointer;
  width: 100%;
}

		</style>
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header -->
         <?php include 'header.php'; ?>
            <!-- header end-->
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/k13.jpeg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <h2><span>Our Contacts</span></h2>
                                <span class="section-separator"></span>
                                <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Pages</a><span>Contacts</span></div>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--  section  end-->               
                    <!--  section  -->
                    <section   id="sec1" data-scrollax-parent="true">
                        <div class="container">
                            <!--about-wrap -->
                            <div class="about-wrap">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="ab_text-title fl-wrap">
                                            <h3>Get in Touch</h3>
                                            <span class="section-separator fl-sec-sep"></span>
                                        </div>
                                        <!--box-widget-item -->                                       
                                        <div class="box-widget-item fl-wrap block_box">
                                            <div class="box-widget">
                                                <div class="box-widget-content bwc-nopad">
                                                    <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#singleMap" class="custom-scroll-link">Tollygunge Kolkata</a></li>
                                                            <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">9088241439</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#"> business@thekolkatabuzz.com</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                                        <ul class="no-list-style">
                                                            <li><a href="https://www.facebook.com/thekolkatabuzz" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="https://twitter.com/thekolkatabuzz" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="https://www.instagram.com/thekolkatabuz/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="https://www.youtube.com/channel/UCf110q8v7UFUZbiYkcVR0Fw" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="https://wa.me/message/OTWSEEED6YQ6E1" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->  
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap" style="margin-top:20px;">
                                            <div class="banner-wdget fl-wrap">
                                                <div class="overlay op4"></div>
                                                <div class="bg"  data-bg="images/k14.jpg"></div>
                                                <div class="banner-wdget-content fl-wrap">
                                                    <h4>Become a contributor</h4>
                                                    <a href="#" class="color-bg">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                            
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Drop us a line</h3>
                                                <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form  class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                                                    <fieldset>
                                                        <label><i class="fal fa-user"></i></label>
                                                        <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                                        <div class="clearfix"></div>
														<label><i class="fal fa-phone"></i></label>
                                                        <input type="text" name="name" id="name" placeholder="Your Contact Number *" value=""/>
                                                        <div class="clearfix"></div>
														<label><i class="fal fa-book"></i></label>
                                                        <input type="text" name="name" id="name" placeholder="Area of Interest *" value=""/>
                                                        <div class="clearfix"></div>
                                                        <label><i class="fal fa-envelope"></i>  </label>
                                                        <input type="text"  name="email" id="email" placeholder="Email Address*" value=""/>
													
                                                        <div class="clearfix"></div>
                                                      <form class="form">
    <div class="file-upload-wrapper" data-text="submit your Samples">
      <input name="file-upload-field" type="file" class="file-upload-field" value="">
    </div>
  </form>
														<div class="clearfix"></div>
                                                    </fieldset>
                                                    <button class="btn float-btn color2-bg" id="submit">Send Message<i class="fal fa-paper-plane"></i></button>
                                                </form>
                                            </div>
                                            <!-- contact form  end--> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about-wrap end  --> 
                        </div>
                    </section>
                    <section class="no-padding-section">
                        <div class="map-container">
                            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location"></div>
                        </div>
                    </section>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
            <?php include 'footer.php'; ?>
            <!--footer end -->  
            <!--register form -->
         
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>     
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE&libraries=places&callback=initAutocomplete"></script>
        <script src="js/map-single.js"></script>                     
    </body>
</html>