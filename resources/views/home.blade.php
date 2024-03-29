<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>OsteriaX | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   
    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

           <!--  Text based logo  -->
          <a class="navbar-brand" href="index.html">Osteria<span>X</span></a> 

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="{{ route('home') }}">HOME</a></li>
            <li><a href="#mu-about-us">ABOUT US</a></li>                       
            <li><a href="#mu-restaurant-menu">MENU</a></li>                       
            <li><a href="#mu-reservation">RESERVATION</a></li>                       
            <li><a href="#mu-gallery">GALLERY</a></li>
            <li><a href="#mu-chef">OUR CHEFS</a></li> 
            <li><a href="#mu-contact">CONTACT</a></li>
            <li><a href="/login">LOGIN</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 

  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area"> 

      <!-- Top slider -->
      <div class="mu-top-slider">

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/1.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Welcome</span>
            <h2 class="mu-slider-title">To The OsteriaX</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
            <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    

         <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/2.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">The Elegant</span>
            <h2 class="mu-slider-title">Italian Restaurant</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
           <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide --> 

        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/3.jpeg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Delicious</span>
            <h2 class="mu-slider-title">Spicy Masalas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>           
            <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->   

      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>ABOUT US</h2>
            </div>

            <div class="row">
              <div class="col-md-6">
               <div class="mu-about-us-left">     
                <img src="assets/img/about-us.png" alt="img">           
                </div>
              </div>
              <div class="col-md-6">
                 <div class="mu-about-us-right">
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus aliquid, itaque illum assumenda repellendus dolorem, dolore numquam totam saepe, porro delectus, libero enim odio quo. Explicabo ex sapiente sit eligendi, facere voluptatum! Quia vero rerum sunt porro architecto corrupti eaque corporis eum, enim soluta, perferendis dignissimos, repellendus, beatae laboriosam.</p>                              
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque similique molestias est quod reprehenderit, quibusdam nam qui, quam magnam.</p>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
            </div>
            
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li><a href="#breakfast" data-toggle="tab">Menu</a></li>
           
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                    <div class="mu-tab-content-area">
                        <div class="row">
                            @foreach ($menus as $menu)
                                <div class="col-md-6">
                                    <div class="mu-tab-content-left">
                                        <ul class="mu-menu-item-nav">
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="{{ asset('menu_images/' . $menu->image) }}" alt="{{ $menu->name }}">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><a href="{{ route('menus.index') }}">{{ $menu->title }}</a></h4>
                                                        <span class="mu-menu-price">${{ $menu->price }}</span>
                                                        <p>{{ $menu->description }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Restaurant Menu -->

  <!-- Start Reservation section -->


<section id="mu-reservation">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="mu-reservation-area">

                  <div class="mu-title">
                      <span class="mu-subtitle">Make A</span>
                      <h2>Reservation</h2>
                  </div>

                  <div class="mu-reservation-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quidem autem iusto, perspiciatis, amet, quaerat blanditiis ducimus eius recusandae nisi aut totam alias consectetur et.</p>

                      <div class="col-md-6">
                          <div class="mu-reservation-left">
                              <form class="mu-reservation-form" action="{{ route('reservations.store') }}" method="post">
                                  @csrf
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="email" class="form-control" name="email" placeholder="Email" required>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" required>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="no_meja" placeholder="Nomor Meja" required>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <select class="form-control" name="number_of_people" required>
                                                  <option value="0">How Many?</option>
                                                  <option value="1">1 Person</option>
                                                  <option value="2">2 People</option>
                                                  <option value="3">3 People</option>
                                                  <option value="4">4 People</option>
                                                  <option value="5">5 People</option>
                                                  <option value="6">6 People</option>
                                                  <option value="7">7 People</option>
                                                  <option value="8">8 People</option>
                                                  <option value="9">9 People</option>
                                                  <option value="10">10 People</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" id="datepicker" name="reservation_date" placeholder="Date" required>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <button type="submit" class="mu-readmore-btn">Make Reservation</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>

                      <div class="col-md-5 col-md-offset-1">
                          <div class="mu-reservation-right">
                              <div class="mu-opening-hour">
                                  <h2>Opening Hours</h2>
                                  <ul class="list-unstyled">
                                      <li>
                                          <p>Monday &amp; Tuesday</p>
                                          <p>9:00 AM - 4:00 PM</p>
                                      </li>
                                      <li>
                                          <p>Wednesday &amp; Thursday</p>
                                          <p>9:00 AM - Midnight</p>
                                      </li>
                                      <li>
                                          <p>Friday &amp; Saturday</p>
                                          <p>9:00 AM - Midnight</p>
                                      </li>
                                      <li>
                                          <p>Sunday</p>
                                          <p>9:00 AM - 11:00 PM</p>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

  <!-- End Reservation section -->

  <!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">

            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Our Gallery</h2>
            </div>

            <div class="mu-gallery-content">
            
              <!-- Start gallery image -->
              <div class="mu-gallery-body">
                @foreach($galleries as $gallery)  
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">
                  
                    <div class="mu-single-gallery-item">
	                    <figure class="mu-single-gallery-img">
	                      
                        <img src="{{ asset('images/' . $gallery->image_path) }}">
                           <div class="mu-single-gallery-info">
                          </div> 
                        </a>
	                    </figure>            
                  	</div>
                  
                </div>
                @endforeach
                <!-- End single gallery image -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->

  
  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              <span class="mu-subtitle">Our Professionals</span>
              <h2>Master Chefs</h2>
            </div>

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
                @foreach($chefs as $chef)
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="{{ asset('chef_images/' . $chef->image) }}">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>{{ $chef->name }}</h4>
                      <span>{{ $chef->specialty }}</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  
                @endforeach              
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

 

  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">

            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
            </div>

            <div class="mu-contact-content">
              <div class="row">

                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <!-- Email message div -->
                    <div id="form-messages"></div>
                    <!-- Start contact form -->
                    <form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                      </div>                      
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Type Your Message" required></textarea>
                      </div>                      
                      <button type="submit" class="mu-send-btn">Send Message</button>
                    </form>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia temporibus corporis ea non consequatur porro corrupti hic voluptatibus assumenda, doloribus.</p>
                      <address>
                        <p><i class="fa fa-phone"></i> (850) 457 6688</p>
                        <p><i class="fa fa-envelope-o"></i>contact@markups.io</p>
                        <p><i class="fa fa-map-marker"></i>368 St. Panama City, Florida, USA</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9207.358598888495!2d-85.64847801496286!3d30.183918972289003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2320479d70eb6202!2sDillard&#39;s!5e0!3m2!1sbn!2sbd!4v1462359735720" width="100%" height="100%" frameborder="0"allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>