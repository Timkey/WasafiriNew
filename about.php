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
      <style>
        body{
          /*padding-top: 0;*/
        }
        .jumbo{
          background: url('img/jumbo.jpg');
        }
        .jumbo {
          color: white;
        }
        .bg-grey {
         background-color: #f9f9f9;
        }
      </style>
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

    <div class="jumbotron jumbo">
      <div class="container">
         <h1>About wasafiritransporters</h1>
         <p>Wasafiritransporters is your number one stop portal for all your bus booking and travelling arangements.</p>
       </div>
    </div>
    <!-- title -->
    <div class="container">
      <div class="page-header">
        <h1>About us - who we are exactly.</h1>
      </div>
      <div class="col-md-8">
        <p style="font-size: 19px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia erat ac erat vestibulum, ut vestibulum mauris imperdiet. Sed sollicitudin suscipit massa, sed eleifend nisi ultricies vitae. Maecenas efficitur ipsum in urna hendrerit, a feugiat odio fermentum. Proin eleifend lobortis leo. Aliquam erat volutpat. Nam vehicula semper lorem ac vehicula.</p>
        <div class="seperator"></div>
        <h2>A little more about wasafiri.</h2>
        <p style="font-size: 16px; margin-bottom: 50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia erat ac erat vestibulum, ut vestibulum mauris imperdiet. Sed sollicitudin suscipit massa, sed eleifend nisi ultricies vitae. Maecenas efficitur ipsum in urna hendrerit, a feugiat odio fermentum. Proin eleifend lobortis leo. Aliquam erat volutpat. Nam vehicula semper lorem ac vehicula.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia erat ac erat vestibulum, ut vestibulum mauris imperdiet. Sed sollicitudin suscipit massa, sed eleifend nisi ultricies vitae. Maecenas efficitur ipsum in urna hendrerit, a feugiat odio fermentum. Proin eleifend lobortis leo. Aliquam erat volutpat. Nam vehicula semper lorem ac vehicula.</p>
      </div>
      <div class="col-md-4 text-center bg-grey">
        <img class="img-circle" src="img/wt.png" alt="Wasafiritransporters logo."/>
        <span class="glyphicon glyphicon-facebook"></span>
        <span class="glyphicon glyphicon-twitter"></span>
        <span class="glyphicon glyphicon-instagram"></span>
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

    <!--code for the modal window -->
    <div class="modal fade" id="my-modal-about" tabindex="-1" role="dialog"> 
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="form-horizontal" role="form">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">About Us</h4>
                </div>
                <div class="modal-body">
                  <h4>Oh my kush!</h4>
                  <p>The quick brown fox jumps over the lazy dog. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo deserunt corporis esse qui. Eaque atque aliquam quisquam excepturi cum suscipit voluptatibus recusandae natus at sapiente! Ad beatae atque modi natus!</p>
                </div>
                <div class="modal-footer">
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