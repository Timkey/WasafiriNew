<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wasafiri</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
	 <link href="css/custom.css" rel="stylesheet">
	 <link href="css/sprites.css" rel="stylesheet">
	 <link href="css/sprite.css" rel="stylesheet">
   <link href="css/poproute.css" rel="stylesheet">
    </head>
  <body>
    <!--This is the navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="sr-only">Toggle Navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Wasafiritransporters</a>
         </div>

         <div class="collapse navbar-collapse dropdown">
            <ul class="nav navbar-nav navbar-right">
              <a href="#" class="btn btn-primary navbar-btn dropdown-toggle" data-toggle="dropdown" id="company"><b>Select Company <span class="caret"></span></b></a>
              <ul class="dropdown-menu" role="menu" >
                 <li><a href="#">Simba Coach</a></li>
                 <li class="divider"></li>
                 <li><a href="#">ModernCoast</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Mash</a></li>
                 <li class="divider"></li>
                 <li><a href="#">Tahmeed</a></li>
              </ul>

               <li class="active">
                  <a href="index.php">Home</a>
               </li>
               <li>
                  <a href="about.php">About</a>
               </li>
               <li>
                  <a href="#my-modal" data-toggle="modal">Contact Us</a>
               </li>
             </ul>
         </div>
      </div>
    </nav>

    <!-- Carousel -->
    <div class="carousel slide" data-ride="carousel" id="carousel-example">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example" data-slide-to="1" class="active"></li>
        <li data-target="#carousel-example" data-slide-to="2" class="active"></li>
        <li data-target="#carousel-example" data-slide-to="3" class="active"></li>
      </ol>


      <!-- div that wraps the images -->
      <div class="carousel-inner">
        <!-- Image one -->
        <div class="item active">
          <img src="img/slider-1.jpg" alt="Image number one"/>
          <div class="carousel-caption">
            <h3>This image number</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo deserunt corporis esse qui.</p>
          </div>
        </div>
        <!-- Image two -->
        <div class="item">
          <img src="img/slider-2.jpg" alt="Image number one"/>
          <div class="carousel-caption">
            <h3>This image number</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo deserunt corporis esse qui.</p>
          </div>
        </div>
        <!-- Image three -->
        <div class="item">
          <img src="img/slider-3.jpg" alt="Image number one"/>
          <div class="carousel-caption">
            <h3>This image number</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo deserunt corporis esse qui.</p>
          </div>
        </div>
        <!-- Image four -->
        <div class="item">
          <img src="img/slider-4.jpg" alt="Image number four"/>
          <div class="carousel-caption">
            <h3>This image number</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo deserunt corporis esse qui.</p>
          </div>
        </div>
      </div>

      <!-- Carousel controls -->
      <a href="#carousel-example" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a href="#carousel-example" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

    <!--Jumbotron -->
    <!-- <div class="jumbotron text-center">
       <h1>Bootstrap Themes</h1>
       <p>Bootstrapbay is your #1 source for premium bootstrap thees & templates.</p>
       <a href="#" class="btn btn-primary">Buy Themes</a>
       <a href="#" class="btn btn-success">Sell Themes</a>
    </div> -->

    <div id="wrapper">
  	  <div class="container containa">
    		<div class="page-header">
    			<h3>Heard about us? - Here you go.</h3>	
    		</div>

        <div class="col-sm-8">
          <div class="row">
            <div class="col-md-4" id="image-array">
              <img id="one" src="images/image1.jpg" alt="Beautiful landscape." />
              <img id="two" src="images/image2.jpg" alt="Beautiful landscape." />
              <img id="three" src="images/image3.jpg" alt="Beautiful landscape." />
              <img id="four" src="images/image4.jpg" alt="Beautiful landscape." />
            </div>
            <div class="col-md-8">
              <h3><b>Wasafiritransporters briefly</b></h3>
              <p>Top traversed routes, top bus carriers, forget the hustle.</p>
              <p>Wasafiri allows you to explore your options. We aim to reach more and more people by partnering with more bus carriers, eventually all of them so that your travel arrangements are hustle free and when you think of it, if it's a place you want to travel to, it is on wasafiritransporters.</p>
            </div>
          </div>
          <div class="seperator"></div>
          <div class="row">
            <div class="col-md-8">
              <h3><b>Find us on mobile</b></h3>
              <p>Top traversed routes, top bus carriers, forget the hustle.</p>
              <p>Wasafiri allows you to explore your options. We aim to reach more and more people by partnering with more bus carriers, eventually all of them so that your travel arrangements are hustle free and when you think of it, if it's a place you want to travel to, it is on wasafiritransporters.</p>
              <a href=#><img src="images/thumb-3.png" alt="Google Play icon"></a>
            </div>
            <div class="col-md-4"><img src="images/thumb-2.png" alt="Arm holding mobile phone"></div>
          </div>
          <div class="row">
            <div class="page-header"><h4>FAQs</h4></p>
            <!-- FAQ Accordion section -->
            <div class="panel-group" id="faq">
              <!-- Question One -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a href="#faq-one" data-toggle="collapse" data-parent="faq"><b>Lorem ipsum dolor sit amet</b></a>
                  </h4>
                </div>
                <div class="panel-collapse collapse in" id="faq-one">
                  <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia erat ac erat vestibulum, ut vestibulum mauris imperdiet. Sed sollicitudin suscipit massa, sed eleifend nisi ultricies vitae.</p>
                  </div>
                </div>
              </div>
              <!-- Question Two -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a href="#faq-two" data-toggle="collapse" data-parent="faq"><b>Lorem ipsum dolor sit amet</b></a>
                  </h4>
                </div>
                <div class="panel-collapse collapse" id="faq-two">
                  <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia erat ac erat vestibulum, ut vestibulum mauris imperdiet. Sed sollicitudin suscipit massa, sed eleifend nisi ultricies vitae.</p>
                  </div>
                </div>
              </div>
              <!-- Question Three -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a href="#faq-three" data-toggle="collapse" data-parent="faq"><b>Lorem ipsum dolor sit amet</b></a>
                  </h4>
                </div>
                <div class="panel-collapse collapse" id="faq-three">
                  <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia erat ac erat vestibulum, ut vestibulum mauris imperdiet. Sed sollicitudin suscipit massa, sed eleifend nisi ultricies vitae.</p>
                  </div>
                </div>
              </div>
              <!-- Question Four -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a href="#faq-four" data-toggle="collapse" data-parent="faq"><b>Lorem ipsum dolor sit amet</b></a>
                  </h4>
                </div>
                <div class="panel-collapse collapse" id="faq-four">
                  <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia erat ac erat vestibulum, ut vestibulum mauris imperdiet. Sed sollicitudin suscipit massa, sed eleifend nisi ultricies vitae.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Side Column -->
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Advertisement</h4>
            </div>
            <div class="panel-body bg-grey glyph-sprites">
              <p>Your advertisement goes here.</p>
            </div>
          </div>
          <!-- Customer Service Section -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Customer Service</h4>
            </div>
  			    <div class="panel-body bg-grey glyph-sprites">
             <p><span class="custos-glyph-envelope"></span> Contact Us</p>
             <p><span class="custos-glyph-print"></span> Print E-ticket</p>
             <p><span class="custos-glyph-question-sign"></span> FAQs</p>
             <p><span class="custos-glyph-briefcase"></span> Manage your bookings</p>
             <p><span class="custos-glyph-phone-alt"></span> Problems / Complains</p>
             <p><span class="custos-glyph-user"></span> Customer Service</p>
            </div>
          </div>
          <!-- Why choose us -->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h4 class="panel-title">Why Choose Us?</h4>
             </div>
            <div class="panel-body bg-grey whychos-sprites">
              <!-- Option one -->
              <div class="row">
                <div class="col-sm-2" style="font-size: 1.7em; margin-top: 1.5em;"><span class="whychos-glyph-cog"></div>
                <div class="col-sm-10">
                  <b><i>Options</i></b>
                  <p>We provide you a variety of bus carriers to choose from. If your preferred bus carrier isn't on this site, send them a join wasafiri request.</p>
                </div>
              </div>
              <!-- Option two -->
              <div class="row">
                <div class="col-sm-2" style="font-size: 1.7em; margin-top: 1.5em;"><span class="whychos-glyph-time"></div>
                <div class="col-sm-10">
                  <b><i>Awesome Service</i></b>
                  <p>Book a bus anywhere, anytime 24/7. If stuck just contact us</p>
                </div>
              </div>
              <!-- Option three -->
              <div class="row">
                <div class="col-sm-2" style="font-size: 1.7em; margin-top: 1.5em;"><span class="whychos-glyph-ok"></div>
                <div class="col-sm-10">
                  <b><i>Best Price</i></b>
                  <p>The cost to convenience ratio is almost non-existent. Manage your entire booking online at almost no extra cost.</p>
                </div>
              </div>
              <!-- Option four -->
              <div class="row">
                <div class="col-sm-2" style="font-size: 1.7em; margin-top: 1.5em;"><span class="whychos-glyph-thumbs-up"></div>
                <div class="col-sm-10">
                  <b><i>Best Local Online Bus Booking portal</i></b>
                  <p>We are the only ones offering you this service, no compromises made, we give you 100%.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container containa">
        <div id="popular-routes" class="clearfix">
        <div id="routes-wrapper">
          <p class="title">Popular routes and routes recommended for you</p>
          <!-- Each row will have three divs, FROM arrow TO -->
          <!-- first row -->
          <article>
            <section class="from not-arrow">
              <div class="deal-image stuff">
                <img src="img/mombasa.jpg" alt="Mombasa" />
              </div>

              <div class="deal-desc stuff">
                <p><span>Mombasa</span></br>The city of lights. Travel in style to the Kenyan coastal capital. Sandy beaches, blue ocean, swahili cuisine...</p>
                <!-- The rating area -->
                <p class="rate" style="font-size: 12px; font-style: italic; font-weight: bold;">Rating </br>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                </p>
              </div>

              <div class="deal-price stuff">
                <p class="price-details"><!--From..--><span>starting @</span></br>Sh 1,000</p>
              </div>
            </section>
            <!-- the arrow showing to and fro -->
            <section class="arrow">&#x21C4</section>

            <section class="to not-arrow">
              <div class="deal-image stuff">
                <img src="img/mombasa.jpg" alt="Nairobi" />
              </div>

              <div class="deal-desc stuff">
                <p><span>Nairobi</span></br>The city that works. Travel in style to the Kenyan capital. This city runs the country...</p>
                <!-- The rating area -->
                <p class="rate" style="font-size: 12px; font-style: italic; font-weight: bold;">Rating </br>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                </p>
              </div>

              <div class="deal-price stuff">
                <p class="price-details"><!--From..--><span>starting @</span></br>Sh 1,000</p>
              </div>
            </section>
          </article>

          <!-- second row -->
          <article>
            <section class="from not-arrow">
              <div class="deal-image stuff">
                <img src="img/mombasa.jpg" alt="Mombasa" />
              </div>

              <div class="deal-desc stuff">
                <p><span>Mombasa</span></br>The city of lights. Travel in style to the Kenyan coastal capital. Sandy beaches, blue ocean, swahili cuisine...</p>
                <!-- The rating area -->
                <p class="rate" style="font-size: 12px; font-style: italic; font-weight: bold;">Rating </br>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                </p>
              </div>

              <div class="deal-price stuff">
                <p class="price-details"><!--From..--><span>starting @</span></br>Sh 1,000</p>
              </div>
            </section>
            <!-- the arrow showing to and fro -->
            <section class="arrow">&#x21C4</section>

            <section class="to not-arrow">
              <div class="deal-image stuff">
                <img src="img/mombasa.jpg" alt="Nairobi" />
              </div>

              <div class="deal-desc stuff">
                <p><span>Nairobi</span></br>The city that works. Travel in style to the Kenyan capital. This city runs the country...</p>
                <!-- The rating area -->
                <p class="rate" style="font-size: 12px; font-style: italic; font-weight: bold;">Rating </br>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                </p>
              </div>

              <div class="deal-price stuff">
                <p class="price-details"><!--From..--><span>starting @</span></br>Sh 1,000</p>
              </div>
            </section>
          </article>

          <!-- THIRD row -->
          <article>
            <section class="from not-arrow">
              <div class="deal-image stuff">
                <img src="img/mombasa.jpg" alt="Mombasa" />
              </div>

              <div class="deal-desc stuff">
                <p><span>Mombasa</span></br>The city of lights. Travel in style to the Kenyan coastal capital. Sandy beaches, blue ocean, swahili cuisine...</p>
                <!-- The rating area -->
                <p class="rate" style="font-size: 12px; font-style: italic; font-weight: bold;">Rating </br>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                </p>
              </div>

              <div class="deal-price stuff">
                <p class="price-details"><!--From..--><span>starting @</span></br>Sh 1,000</p>
              </div>
            </section>
            <!-- the arrow showing to and fro -->
            <section class="arrow">&#x21C4</section>

            <section class="to not-arrow">
              <div class="deal-image stuff">
                <img src="img/mombasa.jpg" alt="Nairobi" />
              </div>

              <div class="deal-desc stuff">
                <p><span>Nairobi</span></br>The city that works. Travel in style to the Kenyan capital. This city runs the country...</p>
                <!-- The rating area -->
                <p class="rate" style="font-size: 12px; font-style: italic; font-weight: bold;">Rating </br>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                  <span style="color: yellow; margin-right:-8px;" class="glyphicon glyphicon-star"></span>
                </p>
              </div>

              <div class="deal-price stuff">
                <p class="price-details"><!--From..--><span>starting @</span></br>Sh 1,000</p>
              </div>
            </section>
          </article>
        </div>
      </div>
      </div>

      <div class="container container-info">
        <div class="row">
          <div class="col-md-4">
            <h4 class="text-center"><b>PERSONAL EXPERIENCE</b></h4>
            <p>For regular and seasonal travellers, we know what a hustle it is to travel long distance by bus. You have to go to the booking station, book then go back home or sit and wait for hours for your bus. All this is now uneccessary. Browse routes, select your seat, pay and get your ticket, all online!</p>
          </div>
          <div class="col-md-4">
            <h4 class="text-center"><b>ABOUT</b></h4>
            <p>We are regular persons who merely identified a gap and sort to fill it. We are of the opinion that life should not be as hard as it is. Time is of the essence and we need not waste it commuting to and fro the bus station or waiting in line. If you want to travel, book with wasafiri.</p>
          </div>
          <div class="col-md-4">
            <h4 class="text-center"><b>YOU AND I</b></h4>
            <p>We who use the public transport system could use a break, a whif of fresh air. How about hustle free booking? This is it. Let us spread the word and make the lives of more people less stressful whilst saving them and ourselves a little more time in the process.</p>
          </div>
        </div>
      </div>
    </div>

    <!--code for the modal window -->
    <div class="modal fade" id="my-modal" tabindex="-1" role="dialog"> 
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="form-horizontal" role="form">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Contact Us</h4>
                </div>
                <div class="modal-body">
                   <div class="form-group">
                      <label class="col-sm-2 control-label" for="contact-name">Name</label>
                      <div class="col-sm-10">
                         <input name="" type="text" id="contact-name" value="" class="text form-control" placeholder="First and Last name">
                      </div>
                   </div>
                   
                   <div class="form-group">
                      <label class="col-sm-2 control-label" for="contact-email">Email</label>
                      <div class="col-sm-10">
                         <input name="" type="text" id="contact-email" value="" class="form-control" placeholder="Enter your email addres">
                      </div>
                   </div>

                   <div class="form-group">
                      <label class="col-sm-2 control-label" for="contact-message">Message</label>
                      <div class="col-sm-10">
                         <textarea rows="4" class="form-control" name="message"></textarea>
                      </div>
                   </div>
                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">Send</button>
                   <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
             </div>
          </div>
       </div>
    </div>

    <!-- Popular routes and routes recommended for you section -->

    <!-- End of popular routes section -->
    <footer>
    <article>
      <!-- available on -->
      <section>
        <p class="title">Available on</p>
        <a href="#">
          <img src="images/icons/droid.png" alt=""> <span>android</span>
        </a>
        <!-- coming soon -->
        <p class="coming-soon">Coming soon to...</p>

        <a href="#">
          <img src="images/icons/winmo.png" alt=""> <span>windowsMobile</span>
        </a>
        <a href="#">
          <img src="images/icons/bb.png" alt=""> <span>blackberry</span>
        </a>
        <a href="#">
          <img src="images/icons/apple.png" alt=""> <span>ios</span>
        </a>
      </section>
      <!-- using wasafiri -->
      <section>
        <p class="title">Using Wasafiri</p>

        <a href="#">Select Bus Company</a>
        <a href="#">Search and select</a>
        <a href="#">Choose seat</a>
        <a href="#">Confirm details</a>
        <a href="#">Pay</a>
        <a href="#">Receive ticket</a>
      </section>
      <!-- payment -->
      <section>
        <p class="title">Payment</p>
        <a href="#">
          <img class="pay mpesa" src="images/icons/mpesa.png" alt=""> <span>M-pesa</span>
        </a>
        <!-- coming soon -->
        <p class="coming-soon">Available soon...</p>

        <a href="#">
          <img class="pay" src="images/icons/am.png" alt=""> <span>airtelmoney</span>
        </a>
        <a href="#">
          <img class="pay" src="images/icons/mc.png" alt=""> <span>mastercard</span>
        </a>
        <a href="#">
          <img class="pay" src="images/icons/visa.png" alt=""> <span>visa</span>
        </a>
      </section>
      <!-- quicklinks -->
      <section>
        <p class="title">Quicklinks</p>
        <a href="#">Support</a>
        <a href="#">Privacy policy</a>
        <a href="#">Terms and conditions</a>
        <a href="#">About wasafiri</a>
        <a href="#">Send an invite</a>
        <a href="#">Contact Us</a>
      </section>
      <!-- connect with us -->
      <section class="last">
        <p class="title">Connect with us</p>
        <a href="#">
          <img src="images/icons/facebook.png" alt=""> <span>facebook</span>
        </a>
        <a href="#">
          <img src="images/icons/tweet.png" alt=""> <span>twitter</span>
        </a>
        <a href="#">
          <img src="images/icons/gplus.png" alt=""> <span>google plus</span>
        </a>
        <a href="#">
          <img src="images/icons/instagram.png" alt=""> <span>instagram</span>
        </a>
      </section>
      <!-- copyright information -->
      <p id="copyright">Copyright @ 2015 wasafiritransporters.com</p>
    </article>
  </footer>

    
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
