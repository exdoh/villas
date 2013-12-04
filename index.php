<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Villa S Hua Hin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <!-- LOAD CSS FILES -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    
    <!-- LOAD JS FILES -->
   	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
     <script src="js/easing.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
	<script src="js/selectnav.js"></script>
    <script src="js/ender.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/datepickr.js"></script>
    <script>
		jQuery(function() {
		new datepickr('checkin');
		});
		jQuery(function() {
		new datepickr('checkout');
		});
	</script>
</head>

<body>
	<!-- header begin -->
	<header>
        	<div id="logo">
            	<div class="inner">
   	    		  <a href="index.html"><img src="img/logo7Trans.png" alt=""></a>
            	</div>
            </div>
            
                        
            <!-- mainmenu begin -->
            <div id="mainmenu-container">           
				<ul id="mainmenu">
                  <li onclick="scrolltodiv('logo')"><a href="#">HOME</a></li>
                  <li onclick="scrolltodiv('roomrate')"><a href="#">ROOM & RATES</a></li>
                  <li onclick="scrolltodiv('facilities')"><a href="#">Room Facillties</a></li>
                  <li onclick="scrolltodiv('gall')"><a href="#">Gallery</a></li>
                  <li onclick="scrolltodiv('activities')"><a href="#">Activities</a></li>
                  <li onclick="scrolltodiv('footer')"><a href="#">Contact Us</a></li>
              	</ul>
    		</div>

    </header>
	<!-- header close -->
    
	<!-- slider -->
	<div id="slider">
    	<div class="callbacks_container">
        	<ul class="rslides pic_slider">
             	<li>
               		<img src="img/slider-home/home1n.jpg" alt="">
                	<!--<div class="slider-info">
                		<h1>Hua Hin</h1>
                	</div>-->
                </li>  
                <li>
               		<img src="img/slider-home/s1n.jpg" alt="">
                	<!--<div class="slider-info">
                		<h1></h1>
                	</div>-->
                </li>     
                 <li>
               		<img src="img/slider-home/s2n.jpg" alt="">
                	<!--<div class="slider-info">
                		<h1></h1>
                	</div>-->
                </li>           
                <li>
               		<img src="img/slider-home/beach3.jpg" alt="">
                	<!--<div class="slider-info">
                		<h1></h1>
                	</div>-->
                </li>                                
        	</ul>
    	</div>
    </div>
	<!-- slider close -->
    
    <div class="clearfix"></div>
    
	<!-- search begin -->
   	<div id="booking" style="display:none;">
    	<div class="container">
        	<div class="row">
        	<span class="span2">Booking Now:</span>
        	<form class="form-inline">
            	<div class="span2">
                	<input type="text" id="checkin" value="Check In Date">
                </div>
                <div class="span2">
            		<input type="text" id="checkout" value="Check Out Date">
            </div>
            	<div class="span2">
            		<select>
                   		<option>Select Room</option>
                        <option>Deluxe Room </option>
                        <option>Elegant Room</option>
                        <option>luxury Room</option>
                    </select>
                </div>            	
                <div class="span2">
                <select>
                   		<option>Number of Guests</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>5+</option>
                  </select>
        </div>
                <div class="span2">
                <a href="#" class="btn btn-pimary btn-submit">Submit</a>
                </div>
        	</form>
      	</div>
      </div>
	</div>
	<!-- search close -->
    
	<!-- content begin -->
    <div id="content">
    	<div class="container">
        	
			<div id="roomrate" class="row">
            	<div class="text-center">
                    <h2>Rooms & Rates</h2>
                    Villa-S-Huahin consist of 2 private Pool Villas.<br><br>
     			 </div>
                
                <!-- room -->
                <!--<div class="room span4">
                    <div class="btn-book-container">
                    <a href="#" class="btn-book">Book Now</a>
                    </div>
           	    	<img data-original="img/room-1.jpg" src="img/pic-blank-1.gif" class="img-polaroid" alt="">
                    <h4>Deluxe Room</h4>
                    <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                	</div>
                    <div class="row">
                            <ul class="room-features">
                                <li class="span2"><i class="icon-check-sign"></i>Kingsize Bed</li>
                                <li class="span2"><i class="icon-check-sign"></i>Mountain View</li>
                                <li class="span2"><i class="icon-check-sign"></i>Hotspot and TV Cable</li>
                                <li class="span2"><i class="icon-check-sign"></i>Free Lunch and Dinner</li>
                            
                            </ul>
                    </div>
                </div>-->
                <!-- close room -->
                
                  <!-- room -->
                <div class="room span6">
                    <div class="btn-book-container" style="display:none;">
                    	<a href="#" class="btn-book">Book Now</a>
                    </div>
           	    	<img data-original="img/s1_thump.jpg" src="img/pic-blank-1.gif" alt="">
                    <h4>Villa-S1 Room</h4>
                    <div class="description">
                    The design concept of this Pool Villa is simple and elegance. 
					Great for Family Re-Unions, friends get together or company retreat. 
					4 Bed-Rooms, 4 Bath-Rooms, 1 Private Pool & Jacuzzi, 1 Kitchen,1 Open Air Living Room, 1 In-door Living-Room.  
					Room rate: 17,000 Baht / Night
                	</div>
                    <div class="row" style="display:none;">
                            <ul class="room-features">
                                <li class="span2"><i class="icon-check-sign"></i>Kingsize Bed</li>
                                <li class="span2"><i class="icon-check-sign"></i>Mountain View</li>
                                <li class="span2"><i class="icon-check-sign"></i>Hotspot and TV Cable</li>
                                <li class="span2"><i class="icon-check-sign"></i>Free Lunch and Dinner</li>
                            </ul>
                    </div>
      			</div>
                <!-- close room -->


              <!-- room -->
                <div class="room span6">
                    <div class="btn-book-container" style="display:none;">
                    	<a href="#" class="btn-book">Book Now</a>
                    </div>
           	    	<img data-original="img/s2_thump.jpg" src="img/pic-blank-1.gif" alt="">
                    <h4>Villa-S2 Room</h4>
                    <div class="description">
                    The design concept of this Pool Villa is fun and lively. 
					Great for Family Re-Unions, friends get together or company retreat. 
					4 Bed-Rooms, 4 Bath-Rooms, 1 Private Pool & Jacuzzi, 1 Kitchen,1 Open Air Living Room, 1 In-door Living-Room.  
					Room rate: 17,000 Baht / Night
                	</div>
                    <div class="row">
                            <ul class="room-features" style="display:none;">
                                <li class="span2"><i class="icon-check-sign"></i>Kingsize Bed</li>
                                <li class="span2"><i class="icon-check-sign"></i>Mountain View</li>
                                <li class="span2"><i class="icon-check-sign"></i>Hotspot and TV Cable</li>
                                <li class="span2"><i class="icon-check-sign"></i>Free Lunch and Dinner</li>
                            </ul>
                    </div>

      			</div>
                <!-- close room -->

            	
         	 </div>
             
             <hr>
             
             <!--facilities-->
             <?php
             	$arr_fac_img = array("wifi","tv","hair_dryer","coffee",
             						 "dvd","house_keeping","safe","bathroom",
             						 "bbq","nopetnosmoking","ipod_desk","villa_pool");
				$arr_fac = array("Wifi","32 LED TV","Hair dryer","Complimontar <br>Coffee Tray",
				                 "DVD Player","Daily House Keeping","Safe","Bathroom",
				                 "BBQ Grill","Non smoking <br>Non pet facilities","Ipod desk","Pool villa");
             	$count = 0;
             ?>
             <div id="facilities">
             	 <div class="text-center">
	                  <h2>Facilities</h2>
	                  Find your favorite room, feel more than home<br><br>
	   			 </div>
	   	     <?php for($i = 0 ; $i < 3 ; $i++){ ?>
	             <div class="row">
	             <?php for($m = 0 ; $m < 4 ; $m++){ ?>
		           	  <div class="span3 feature">
		              	<i class="icon-3x"><img data-original="img/facilities/<?php echo $arr_fac_img[$count];?>.png" src="img/pic-blank-1.gif" alt=""></i>
		              	<br>
		                <h4><?php echo $arr_fac[$count]?></h4>
		             	
		              </div>
		         <?php $count++; }?>      
	            </div>
	         <?php } ?>
	         </div>
             <!--close facilities-->
             
             <hr>
             
             <!--S1 Gallery-->
             <?php $count=0;?>
             <div id="gall" class="row gallery">
             	<div class="text-center">
                    <h2>Villa-S1 Gallery</h2>
                    Find your favorite room, feel more than home<br><br>
   			   </div>
   			   
               <?php for($m = 1 ; $m <= 6 ; $m++){ ?>
                 <div class="span2 row-gallery">
           	     	<a class="preview" href="img/gallery/s1/original/s1_<?php echo $count?>.jpg" rel="prettyPhoto" title="Your Title">
           	     	<img data-original="img/gallery/s1/thumb/s1_<?php echo $count?>.jpg" src="img/pic-blank-1.gif" alt="">
                    </a>
                 </div>
               <?php $count++;}?>
                 
             </div>
             <div class="row gallery">
               <?php for($m = 1 ; $m <= 6 ; $m++){ ?>
                 <div class="span2 row-gallery">
           	     	<a class="preview" href="img/gallery/s1/original/s1_<?php echo $count?>.jpg" rel="prettyPhoto" title="Your Title">
           	     	<img data-original="img/gallery/s1/thumb/s1_<?php echo $count?>.jpg" src="img/pic-blank-1.gif" alt="">
                    </a>
                 </div>
               <?php $count++;}?>
                 
             </div>
             <div class="row gallery">
               <?php for($m = 1 ; $m <= 6 ; $m++){ ?>
                 <div class="span2 row-gallery">
           	     	<a class="preview" href="img/gallery/s1/original/s1_<?php echo $count?>.jpg" rel="prettyPhoto" title="Your Title">
           	     	<img data-original="img/gallery/s1/thumb/s1_<?php echo $count?>.jpg" src="img/pic-blank-1.gif" alt="">
                    </a>
                 </div>
               <?php $count++;}?>
                 
             </div>
             <div class="row gallery">	   
               <?php for($m = 1 ; $m <= 6 ; $m++){ ?>
                 <div class="span2 row-gallery">
           	     	<a class="preview" href="img/gallery/s1/original/s1_<?php echo $count?>.jpg" rel="prettyPhoto" title="Your Title">
           	     	<img data-original="img/gallery/s1/thumb/s1_<?php echo $count?>.jpg" src="img/pic-blank-1.gif" alt="">
                    </a>
                 </div>
               <?php $count++;}?>
                 
             </div>
             <!--S1 Gallery-->
             
             <hr>
             
             <!--S2 Gallery-->
             <?php $count=0;?>
             <div class="row gallery">
             	<div class="text-center">
                    <h2>Villa-S2 Gallery</h2>
                    Find your favorite room, feel more than home<br><br>
   			   </div>
   			   
               <?php for($m = 1 ; $m <= 6 ; $m++){ ?>
                 <div class="span2">
           	     	<a class="preview" href="img/gallery/s2/original/s2_<?php echo $count?>.jpg" rel="prettyPhoto" title="Your Title">
           	     	<img data-original="img/gallery/s2/thumb/s2_<?php echo $count?>.jpg" src="img/pic-blank-1.gif" alt="">
                    </a>
                 </div>
               <?php $count++;}?>
                 
             </div>
             <div class="row gallery">
               <?php for($m = 1 ; $m <= 6 ; $m++){ ?>
                 <div class="span2">
           	     	<a class="preview" href="img/gallery/s2/original/s2_<?php echo $count?>.jpg" rel="prettyPhoto" title="Your Title">
           	     	<img data-original="img/gallery/s2/thumb/s2_<?php echo $count?>.jpg" src="img/pic-blank-1.gif" alt="">
                    </a>
                 </div>
               <?php $count++;}?>
                 
             </div>
             <div class="row gallery">
               <?php for($m = 1 ; $m <= 6 ; $m++){ ?>
                 <div class="span2">
           	     	<a class="preview" href="img/gallery/s2/original/s2_<?php echo $count?>.jpg" rel="prettyPhoto" title="Your Title">
           	     	<img data-original="img/gallery/s2/thumb/s2_<?php echo $count?>.jpg" src="img/pic-blank-1.gif" alt="">
                    </a>
                 </div>
               <?php $count++;}?>
                 
             </div>
             <div class="row gallery">	   
               <?php for($m = 1 ; $m <= 6 ; $m++){ ?>
                 <div class="span2">
           	     	<a class="preview" href="img/gallery/s2/original/s2_<?php echo $count?>.jpg" rel="prettyPhoto" title="Your Title">
           	     	<img data-original="img/gallery/s2/thumb/s2_<?php echo $count?>.jpg" src="img/pic-blank-1.gif" alt="">
                    </a>
                 </div>
               <?php $count++;}?>
                 
             </div>
             <!--S2 Gallery-->
             
            <hr>
             
             <!--Activities-->
             <?php
             	$arr_ac_img = array("horse_riding","water_sport","bbq_party","golf");
				$arr_ac = array("Horse Riding","Water Sport","BBQ Party","Golf");
             ?>
             <div id="activities">
             	 <div class="text-center">
	                  <h2>Activities</h2>
	                  Find your favorite room, feel more than home<br><br>
	   			 </div>
	            <div class="row">
		           	  <div class="span2 offset1 feature">
		              	<i class="icon-3x"><img data-original="img/activities/cycling.png" src="img/pic-blank-1.gif" alt=""></i><br>
		                <h4>Cycling</h4>	              
		              </div>
		        
		        <?php for($m = 0 ; $m < 4 ; $m++){ ?>  
		              <div class="span2 feature">
		              	<i class="icon-3x"><img data-original="img/activities/<?php echo $arr_ac_img[$m];?>.png" src="img/pic-blank-1.gif" alt=""></i><br>
		              	<h4><?php echo $arr_ac[$m];?></h4>
		                	
		              </div>
		        <?php }?>      
		      
	            </div>
             </div>
            </div>
        
        </div>
	<!-- content close -->
    
    <!-- footer begin -->
	<footer>
  		<div id="footer" class="container">
   	  		<div class="row">
                <div class="span6 gallery">
                	<a class="preview" href="img/map.jpg" rel="prettyPhoto" title="Your Title">
           	     	<img data-original="img/map.jpg" src="img/pic-blank-1.gif" class="img-polaroid" alt="">
                    </a>
                </div> 
            	<div class="span3">
                	<h3>About Us</h3>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </div>                                
               <div class="span3">
                	<h3>Our Contact</h3>
                    	<address>
                                Villa S 44/1 Soi Aou Ta Kieab Nhong Kae 
                                <br>Hua Hin Prachuabkirikhan Thailand 77110
                        <span><strong>Phone:</strong>+6681-8470102</span>
                        <!--<span><strong>Fax:</strong>208) 222 4546</span>-->
                        <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                       </address>
                       
                       <div class="social-icons">
                        	<a href="#"><img src="img/social-icons/rss.png" alt=""/></a>
                        	<a href="#"><img src="img/social-icons/facebook.png" alt=""/></a>
                        	<a href="#"><img src="img/social-icons/twitter.png" alt=""/></a>
                        	<a href="#"><img src="img/social-icons/gplus.png" alt=""/></a>
                        	<a href="#"><img src="img/social-icons/youtube.png" alt=""/></a>
                        	<a href="#"><img src="img/social-icons/vimeo.png" alt=""/></a>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="subfooter">
        	<div class="container">
                <div class="row">
                	<div class="span6">
                    	&copy; Copyiright 2013 - Sunshine by Aveothemes
                    </div>
                    <div class="span6" style="display:none">
                    	<nav>
                          <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Room</a></li>
                              <li><a href="#">Booking</a></li>
                              <li><a href="#">News</a></li>
                              <li><a href="#">Gallery</a></li>
                              <li><a href="#">Contact</a></li>
                          </ul>
                        </nav>
                  </div>
                </div>
            </div>
        </div>
        
   	</footer>
	<!-- footer close -->
    
    <script type="text/javascript">
		 	function scrolltodiv (name) {
			    $('html,body').animate({
			    	scrollTop: $("#"+name).offset().top-20},
			    2000);
			}
			
			
		 	
	</script>
</body>
</html>
