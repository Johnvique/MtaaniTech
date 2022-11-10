<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Mtaani-Tech Hub: Innovation Think Tank in a Digital Village</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Host Cloud Template

https://templatemo.com/tm-541-host-cloud

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><img width="80em" height="60em" src="assets/images/MTALOGO.png" alt="Image" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/our_history')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/what_we_offer')}}">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/talk_to_us')}}">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="functional-buttons ">
            <ul>
              <li><a href="{{url('/talk_to_us')}}">Get a Quote</a></li>
              <li><a href="{{url('/sample_projects')}}">Projects</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    @yield('content')

    <!-- Footer Starts Here -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-item">
                <div class="footer-heading">
                  <h2>About Us</h2>
                </div>
                <p>Mtaani-Tech Hub was founded back in the year 2017 and strategically located along the lake region, Homa-bay County. The main objective for the innitiation of this hub was to exploit and commercialize the innovative skills and talents among the youths through technology.</p>
              </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-item">
                <div class="footer-heading">
                  <h2>What We Offer</h2>
                </div>
                <ul class="footer-list">
                  <li><a href="#">Web Design & Software Development</a></li>
                  <li><a href="#">Data Science & Analysis</a></li>
                  <li><a href="#">Graphics Design & Business Branding</a></li>
                  <li><a href="#">Digital Marketing & Social Media Management</a></li>
                  <li><a href="#">Professional Writings & Academic Research Projects</a></li>
                </ul>
              </div>
            </div>
            
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-item">
                <div class="footer-heading">
                  <h2>Quick Links</h2>
                </div>
                <ul class="footer-list">
                  <li><a href="{{url('/')}}">Home Page</a></li>
                  <li><a href="{{url('/our_history')}}">Our History</a></li>
                  <li><a href="{{url('/what_we_offer')}}">What We Do</a></li>
                  <li><a href="{{url('/talk_to_us')}}">Talk To Us</a></li>
                </ul>
              </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="footer-item">
                <div class="footer-heading">
                  <h2>More Information</h2>
                </div>
                <ul class="footer-list">
                  <li>Phone: <a href="tel:+25453688297">+25453688297</a></li>
                  <li>Email: <a href="mailto:mtaanitech2019@gmail.com">mtaanitech2019@gmail.com</a></li>
                  <li>Support: <a href="mailto:info@mtaanitech-hub.co.ke">info@mtaanitech-hub.co.ke</a></li>
                  <li>Website: <a href="https://mtaanitech-hub.co.ke/">www.mtaanitech-hub.co.ke</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-12">
              <div class="sub-footer">
                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>| <a href="http://mtaanitech-hub.co.ke"><span>MTAANI-TECH HUB LIMITED</span></a> | All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Footer Ends Here -->
  
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
      <!-- Additional Scripts -->
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/owl.js"></script>
      <script src="assets/js/accordions.js"></script>
  
  
      <script language = "text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
      </script>
  
    </body>
  </html>