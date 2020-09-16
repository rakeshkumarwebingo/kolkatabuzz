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
		/*moving text*/

.callouts {
    padding: 25px;
    border: 1px solid #ecedee;
    background: #fff;
    border-radius: 0px;
    -webkit-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .15);
    -moz-box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .15);
    box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .15);
    position: relative
}

.callouts span {
    font-size: 22px;
    font-weight: 600
}

#callouts-type .typed {
    color: #ec7323;
    font-size: 28px;
    line-height: 1;
    font-weight: 700
}

.callouts-separate {
    max-width: 1170px;
    margin: -45px auto 0
}

.callouts-separate-2 {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    width: 100%
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
                    <!--section  -->
                    <section class="hero-section"   data-scrollax-parent="true">
                        <div class="bg-tabs-wrap">
                            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                                <div class="bg bg_tabs"  data-bg="images/k2.jpg"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>Explore Best Places In City</h1>
                                </div>
                                <h3>Find some of the best tips from around the city from our partners and friends.</h3>
                            </div>
                            <!-- main-search-input-tabs-->
                            <div class="main-search-input-tabs  tabs-act fl-wrap">
                                <ul class="tabs-menu change_bg no-list-style">
                                    <li class="current"><a href="#tab-inpt1" data-bgtab="images/k2.jpg"> Places</a></li>
                                    <li><a href="#tab-inpt2" data-bgtab="images/k3.jpg"> Events</a></li>
                                    <li><a href="#tab-inpt3" data-bgtab="images/k4.jpg"> Restaurants</a></li>
                                    <li><a href="#tab-inpt4" data-bgtab="images/k5.jpg"> Hotels</a></li>
                                </ul>
                                <!--tabs -->                       
                                <div class="tabs-container fl-wrap  ">
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt1" class="tab-content first-tab">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                   
                                                    
                                                    <div class="main-search-input-item">
                                                        <select data-placeholder="All Categories"  class="chosen-select" >
                                                            <option>All Categories</option>
                                                            <option>Shops</option>
                                                            <option>Hotels</option>
                                                            <option>Restaurants</option>
                                                            <option>Fitness</option>
                                                            <option>Events</option>
                                                        </select>
                                                    </div>
													 <div class="main-search-input-item">
                                                        <label><i class="fal fa-map-marker-check"></i></label>
                                                        <input type="text" placeholder="kolkata" value="" disabled="disabled"/>
                                                    </div>
                                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt2" class="tab-content">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-handshake-alt"></i></label>
                                                        <input type="text" placeholder="Event Name or Place" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item">
                                                        <select data-placeholder="Loaction" class="chosen-select on-radius" >
                                                            <option>All Cities</option>
                                                            <option>New York</option>
                                                            <option>London</option>
                                                            <option>Paris</option>
                                                            <option>Kiev</option>
                                                            <option>Moscow</option>
                                                            <option>Dubai</option>
                                                            <option>Rome</option>
                                                            <option>Beijing</option>
                                                        </select>
                                                    </div>
                                                    <div class="main-search-input-item clact date-container">
                                                        <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                        <input type="text" placeholder="Event Date"     name="datepicker-here"   value=""/>
                                                        <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                                    </div>
                                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->                                
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt3" class="tab-content">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-cheeseburger"></i></label>
                                                        <input type="text" placeholder="Restaurant Name" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item clact date-container">
                                                        <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                        <input type="text" placeholder="Date and Time"     name="datepicker-here-time"   value=""/>
                                                        <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                                    </div>
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-user-friends"></i></label>
                                                        <input type="number" placeholder="Persons" value=""/>
                                                    </div>
                                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->                                 
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt4" class="tab-content">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-cheeseburger"></i></label>
                                                        <input type="text" placeholder="Hotel Name" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-user-friends"></i></label>
                                                        <input type="number" placeholder="Persons" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item clact date-container3 daterangepicker_big">
                                                        <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                        <input type="text" placeholder="Date In Out"     name="dates"   value=""/>
                                                        <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                                    </div>
                                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->                                  
                                </div>
                                <!--tabs end-->
                            </div>
                            <!-- main-search-input-tabs end-->
                            <div class="hero-categories fl-wrap">
                                <h4 class="hero-categories_title">Just looking around ? Use quick search by category :</h4>
                                <ul class="no-list-style">
                                    <li><a href="listing.html"><i class="far fa-cheeseburger"></i><span>Restaurants</span></a></li>
                                    <li><a href="listing.html"><i class="far fa-bed"></i><span>Hotels</span></a></li>
                                    <li><a href="listing.html"><i class="far fa-shopping-bag"></i><span>Shops</span></a></li>
                                    <li><a href="listing.html"><i class="far fa-dumbbell"></i><span>Fitness</span></a></li>
                                    <li><a href="listing.html"><i class="far fa-cocktail"></i><span>Events</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->
        <section class="slw-sec" id="sec1">
                        <div class="section-title">
                            <h2>Things to do in Kolkata</h2>
                            <div class="section-subtitle">Newest  Listings</div>
                            <span class="section-separator"></span>
                            <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum.</p>
                        </div>
                        <div class="listing-slider-wrap fl-wrap">
                            <div class="listing-slider fl-wrap">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                     
                                        <div class="swiper-slide">
                                            <div class="listing-slider-item fl-wrap">
                                             
                                                <div class="listing-item listing_carditem">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                           
                                                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                            <img src="images/k14.jpg" alt=""> 
                                                            </a>
                                                          
                                                            <div class="geodir-category-opt">
                                                                <div class="geodir-category-opt_title">
                                                                    <h4><a href="listing-single.html">The Goggi Restaurant</a></h4>
                                                                    <div class="geodir-category-location"><a href="#"><i class="fas fa-map-marker-alt"> </i>  Kolkata</a></div>
                                                                </div>
                                                               
                                                                <div class="listing_carditem_footer fl-wrap">
                                                                    <a class="listing-item-category-wrap" href="#">
                                                                        <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                                        <span>Restaurants</span>
                                                                    </a>
                                                                 
                                                                    <div class="post-author"><a href="#"><span style="margin-left: 150px;">By , Alisa Noory</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                                                              
                                            </div>
                                        </div>
										 <div class="swiper-slide">
                                            <div class="listing-slider-item fl-wrap">
                                             
                                                <div class="listing-item listing_carditem">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                           
                                                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                            <img src="images/k14.jpg" alt=""> 
                                                            </a>
                                                          
                                                            <div class="geodir-category-opt">
                                                                <div class="geodir-category-opt_title">
                                                                    <h4><a href="listing-single.html">The Goggi Restaurant</a></h4>
                                                                    <div class="geodir-category-location"><a href="#"><i class="fas fa-map-marker-alt"> </i>  Kolkata</a></div>
                                                                </div>
                                                               
                                                                <div class="listing_carditem_footer fl-wrap">
                                                                    <a class="listing-item-category-wrap" href="#">
                                                                        <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                                        <span>Restaurants</span>
                                                                    </a>
                                                                 
                                                                    <div class="post-author"><a href="#"><span style="margin-left: 150px;">By , Alisa Noory</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                                                              
                                            </div>
                                        </div>
										 <div class="swiper-slide">
                                            <div class="listing-slider-item fl-wrap">
                                             
                                                <div class="listing-item listing_carditem">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                           
                                                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                            <img src="images/k14.jpg" alt=""> 
                                                            </a>
                                                          
                                                            <div class="geodir-category-opt">
                                                                <div class="geodir-category-opt_title">
                                                                    <h4><a href="listing-single.html">The Goggi Restaurant</a></h4>
                                                                    <div class="geodir-category-location"><a href="#"><i class="fas fa-map-marker-alt"> </i>  Kolkata</a></div>
                                                                </div>
                                                               
                                                                <div class="listing_carditem_footer fl-wrap">
                                                                    <a class="listing-item-category-wrap" href="#">
                                                                        <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                                        <span>Restaurants</span>
                                                                    </a>
                                                                 
                                                                    <div class="post-author"><a href="#"><span style="margin-left: 150px;">By , Alisa Noory</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                                                              
                                            </div>
                                        </div>
										 <div class="swiper-slide">
                                            <div class="listing-slider-item fl-wrap">
                                             
                                                <div class="listing-item listing_carditem">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                           
                                                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                            <img src="images/k14.jpg" alt=""> 
                                                            </a>
                                                          
                                                            <div class="geodir-category-opt">
                                                                <div class="geodir-category-opt_title">
                                                                    <h4><a href="listing-single.html">The Goggi Restaurant</a></h4>
                                                                    <div class="geodir-category-location"><a href="#"><i class="fas fa-map-marker-alt"> </i>  Kolkata</a></div>
                                                                </div>
                                                               
                                                                <div class="listing_carditem_footer fl-wrap">
                                                                    <a class="listing-item-category-wrap" href="#">
                                                                        <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                                        <span>Restaurants</span>
                                                                    </a>
                                                                 
                                                                    <div class="post-author"><a href="#"><span style="margin-left: 150px;">By , Alisa Noory</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                                                              
                                            </div>
                                        </div>
										 <div class="swiper-slide">
                                            <div class="listing-slider-item fl-wrap">
                                             
                                                <div class="listing-item listing_carditem">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                           
                                                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                            <img src="images/k14.jpg" alt=""> 
                                                            </a>
                                                          
                                                            <div class="geodir-category-opt">
                                                                <div class="geodir-category-opt_title">
                                                                    <h4><a href="listing-single.html">The Goggi Restaurant</a></h4>
                                                                    <div class="geodir-category-location"><a href="#"><i class="fas fa-map-marker-alt"> </i>  Kolkata</a></div>
                                                                </div>
                                                               
                                                                <div class="listing_carditem_footer fl-wrap">
                                                                    <a class="listing-item-category-wrap" href="#">
                                                                        <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                                        <span>Restaurants</span>
                                                                    </a>
                                                                 
                                                                    <div class="post-author"><a href="#"><span style="margin-left: 150px;">By , Alisa Noory</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                                                              
                                            </div>
                                        </div>
                                                                              
                                    </div>
                                </div>
                                <div class="listing-carousel-button listing-carousel-button-next2"><i class="fas fa-caret-right"></i></div>
                                <div class="listing-carousel-button listing-carousel-button-prev2"><i class="fas fa-caret-left"></i></div>
                            </div>
                            <div class="tc-pagination_wrap">
                                <div class="tc-pagination2"></div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
					
                    <!--section -->
					<section id="sec1" data-scrollax-parent="true" class="gray-bg">
                        <div class="container">
                           
                            <!--about-wrap -->
                            <div class="about-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="list-single-main-media fl-wrap" style="box-shadow: 0 9px 26px rgba(58, 87, 135, 0.2);">
                                            <img src="images/k6.jpg" class="respimg" alt="">
											<a href="https://vimeo.com/70851162" class="promo-link   image-popup"><i class="fal fa-video"></i><span>Our Story</span></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>About <span>Kolkata Buzz</span></h3>
                                                <h4>Check video presentation to find   out more about us .</h4>
                                                <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed tempor iaculis massa faucibus feugiat. </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.
                                            </p>
                                            <!--<a href="#sec3" class="btn color2-bg float-btn custom-scroll-link">Our Team <i class="fal fa-users"></i></a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about-wrap end  --> 
                          
                          
                        </div>
                    </section>
                   
                    <!--  section  -->
                    <!--section end-->
                    <section class="parallax-section small-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/banner.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay  op7"></div>
                        <div class="container">
                            <div class=" single-facts single-facts_2 fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="30000">30000 </div>
												<span><h2 style="color: #fff">  +</h2></span>
                                            </div>
                                        </div>
                                        <h6>Visitors Every week</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="20 ">20 </div><span><h2 style="color: #fff"> Million +</h2></span>
                                            </div>
                                        </div>
                                        <h6> Reach Per Month</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="1">1 </div><span><h2 style="color: #fff"> Million +</h2></span>
                                            </div>
                                        </div>
                                        <h6>Followers</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="700">700 </div>
                                            </div>
											<span><h2 style="color: #fff">  +</h2></span>
                                        </div>
                                        <h6> Happy Clients</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
                        </div>
                    </section>
                    <!--section end--> 
                    <!--section  -->
                    <section>
                        <div class="container big-container">
                            <div class="section-title">
                                <h2><span>Most Popular Palces</span></h2>
                                <div class="section-subtitle">Best Listings</div>
                                <span class="section-separator"></span>
                                <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                            </div>
                            <div class="listing-filters gallery-filters fl-wrap">
                                <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All Categories</a>
                                <a href="#" class="gallery-filter" data-filter=".restaurant">Restaurants </a>
                                <a href="#" class="gallery-filter" data-filter=".hotels">Hotels</a>
                                <a href="#" class="gallery-filter" data-filter=".events">Events</a>
                                <a href="#" class="gallery-filter" data-filter=".fitness">Fitness</a>
                            </div>
                            <div class="grid-item-holder gallery-items fl-wrap">
                                <!--  gallery-item-->
                                <div class="gallery-item restaurant events">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                               
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="images/k12.jpg" alt=""> 
                                                </a>
                                               
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->                              
                                </div>
                                <!-- gallery-item  end-->
								  <!--  gallery-item-->
                                <div class="gallery-item restaurant fitness">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                               
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="images/k12.jpg" alt=""> 
                                                </a>
                                               
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->                              
                                </div>
                                <!-- gallery-item  end-->
								  <!--  gallery-item-->
                                <div class="gallery-item restaurant hotels">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                               
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="images/k12.jpg" alt=""> 
                                                </a>
                                               
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->                              
                                </div>
                                <!-- gallery-item  end-->
								  <!--  gallery-item-->
                                <div class="gallery-item restaurant restaurant">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                               
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="images/k12.jpg" alt=""> 
                                                </a>
                                               
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->                              
                                </div>
                                <!-- gallery-item  end-->
								  <!--  gallery-item-->
                                <div class="gallery-item restaurant restaurant">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                               
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="images/k12.jpg" alt=""> 
                                                </a>
                                               
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->                              
                                </div>
                                <!-- gallery-item  end-->
								  <!--  gallery-item-->
                                <div class="gallery-item restaurant events">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                               
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="images/k12.jpg" alt=""> 
                                                </a>
                                               
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->                              
                                </div>
                                <!-- gallery-item  end-->
								  <!--  gallery-item-->
                                <div class="gallery-item restaurant events">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                               
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="images/k12.jpg" alt=""> 
                                                </a>
                                               
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->                              
                                </div>
                                <!-- gallery-item  end-->
								  <!--  gallery-item-->
                                <div class="gallery-item restaurant events">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                               
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="images/k12.jpg" alt=""> 
                                                </a>
                                               
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->                              
                                </div>
                                <!-- gallery-item  end-->
                                <!--  gallery-item-->
                              
                                <!-- gallery-item  end-->        
                                <!-- gallery-item  -->
                             
                                <!-- gallery-item  end-->  
                                <!-- gallery-item  -->
                       
                                <!-- gallery-item  end-->                                  
                                <!-- gallery-item  -->
                         
                                <!-- gallery-item  end-->                                 
                                <!-- gallery-item  -->
                               
                                <!-- gallery-item  end-->
                                <!-- gallery-item  -->
                        
                                <!-- gallery-item  end--> 
                                <!-- gallery-item  -->
                        
                                <!-- gallery-item  end--> 								
                            </div>
                            <a href="listing.html" class="btn  dec_btn  color2-bg">Check Out All Listings<i class="fal fa-arrow-alt-right"></i></a>
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->
                    <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/banner2.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <!--container-->
                        <div class="container">
                            <div class="video_section-title fl-wrap">
                                <h4>Aliquam erat volutpat interdum</h4>
                                <h2>Our agency will lead you through the amazing digital world</h2>
                            </div>
                            <a href="https://vimeo.com/70851162" class="promo-link big_prom   image-popup"><i class="fal fa-play"></i><span>Promo Video</span></a>
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->
                    <section      data-scrollax-parent="true">
                        <div class="container">
                            <div class="section-title">
                                <h2>Our Blog </h2>
                                <div class="section-subtitle"></div>
                                <span class="section-separator"></span>
                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
                            </div>
                            <div class="process-wrap fl-wrap">
                                <ul class="no-list-style">
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">01 </span>
                                            <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                            <h4> Find Interesting Place</h4>
                                            <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">02</span>
                                            <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                            <h4> Contact a Few Owners</h4>
                                            <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin feugiat pharetra consectetur.</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">03</span>
                                            <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                            <h4> Make a Listing</h4>
                                            <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum metus nullam viverra porta.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="process-end"><i class="fal fa-check"></i></div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
					<!--====== Callouts ======-->  
<div class="callouts-separate callouts d-flex align-items-center justify-content-between">
   <span> <span id="word" style="color:red"></span> We are your one stop solution partners.</span>
   <a class="btn-custome btn waves-effect waves-light" href="contact.html">Get In Touch</a>
</div>
<!--====== End Callouts ======-->
                    <!--section  -->
                    <section class="gradient-bg hidden-section" data-scrollax-parent="true">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="colomn-text  pad-top-column-text fl-wrap">
                                        <div class="colomn-text-title">
                                            <h3>Our App Available Now</h3>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</p>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-apple"></i>  Apple Store </a>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-android"></i>  Google Play </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="collage-image">
                                        <img src="images/api.png" class="main-collage-image" alt="">                               
                                        <div class="images-collage-title color2-bg icdec"> <img src="images/logo.png"   alt=""></div>
                                        <div class="images-collage_icon green-bg" style="right:-20px; top:120px;"><i class="fal fa-thumbs-up"></i></div>
                                        <div class="collage-image-min cim_1"><img src="images/api/1.jpg" alt=""></div>
                                        <div class="collage-image-min cim_2"><img src="images/api/1.jpg" alt=""></div>
                                        <div class="collage-image-btn green-bg">Booking now</div>
                                        <div class="collage-image-input">Search <i class="fa fa-search"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
                        <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
                        <div class="circle-wrap" style="left:270px;top:120px;" data-scrollax="properties: { translateY: '-200px' }">
                            <div class="circle_bg-bal circle_bg-bal_small"></div>
                        </div>
                        <div class="circle-wrap" style="right:420px;bottom:-70px;" data-scrollax="properties: { translateY: '150px' }">
                            <div class="circle_bg-bal circle_bg-bal_big"></div>
                        </div>
                        <div class="circle-wrap" style="left:420px;top:-70px;" data-scrollax="properties: { translateY: '100px' }">
                            <div class="circle_bg-bal circle_bg-bal_big"></div>
                        </div>
                        <div class="circle-wrap" style="left:40%;bottom:-70px;"  >
                            <div class="circle_bg-bal circle_bg-bal_middle"></div>
                        </div>
                        <div class="circle-wrap" style="right:40%;top:-10px;"  >
                            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
                        </div>
                        <div class="circle-wrap" style="right:55%;top:90px;"  >
                            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
                        </div>
                    </section>
                    <!--section end--> 
					
                    <!--section  -->
                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2> Testimonials</h2>
                                <div class="section-subtitle">Clients Reviews</div>
                                <span class="section-separator"></span>
                                <p>Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="testimonilas-carousel-wrap fl-wrap">
                            <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
                            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
                            <div class="testimonilas-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="images/avatar/1.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Andy Dimasky</h3>
                                                        <h4>Restaurant Owner</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="images/avatar/1.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Twitter</a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Frank Dellov</h3>
                                                        <h4>Hotel Owner</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="images/avatar/1.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Centa Simpson</h3>
                                                        <h4>Restaurant Owner</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="images/avatar/1.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Instagram</a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Linda Svensky</h3>
                                                        <h4>Shop Owner</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                    </div>
                                </div>
                            </div>
                            <div class="tc-pagination"></div>
                        </div>
                        <div class="waveWrapper waveAnimation">
                          <div class="waveWrapperInner bgMiddle">
                            <div class="wave-bg-anim waveMiddle" style="background-image: url('images/wave-top.png')"></div>
                          </div>
                          <div class="waveWrapperInner bgBottom">
                            <div class="wave-bg-anim waveBottom" style="background-image: url('images/wave-top.png')"></div>
                          </div>
                        </div> 						
                    </section>
                    <!--section end-->  
					
                    <!--section  -->
                    <section class="gray-bg">
                        <div class="container">
                            <div class="clients-carousel-wrap fl-wrap">
                                <div class="cc-btn   cc-prev"><i class="fal fa-angle-left"></i></div>
                                <div class="cc-btn cc-next"><i class="fal fa-angle-right"></i></div>
                                <div class="clients-carousel">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->                                                                                                                                                                                                                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
           <?php include 'footer.php'; ?>
            <!--footer end -->  
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <h3><span>Location for : </span><a href="#">Listing Title</a></h3>
                        <div class="map-modal-close"><i class="fal fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->                
           
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
		 <script>
		  const words = ["Advertise with us"];
let i = 0;
let timer;

function typingEffect() {
	let word = words[i].split("");
	var loopTyping = function() {
		if (word.length > 0) {
			document.getElementById('word').innerHTML += word.shift();
		} else {
			deletingEffect();
			return false;
		};
		timer = setTimeout(loopTyping, 500);
	};
	loopTyping();
};

function deletingEffect() {
	let word = words[i].split("");
	var loopDeleting = function() {
		if (word.length > 0) {
			word.pop();
			document.getElementById('word').innerHTML = word.join("");
		} else {
			if (words.length > (i + 1)) {
				i++;
			} else {
				i = 0;
			};
			typingEffect();
			return false;
		};
		timer = setTimeout(loopDeleting, 200);
	};
	loopDeleting();
};

typingEffect();
		  </script>
    </body>
</html>