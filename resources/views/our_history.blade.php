@extends('layouts.master')
@section('content')
<!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Our History</h1>
              <p><a href="{{url('/')}}">Home</a> / <span>About Us</span></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Heading Ends Here -->
  
  
      <!-- About Us Starts Here -->
      <div class="about-us">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/abtlog.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-content">
                <div class="section-heading">
                  <span>Our Backround</span>
                  <h2>Get to know us</h2>
                  <p>Mtaani-Tech Hub was founded back in the year 2017 and strategically located along the lake region, Homa-bay County. The main objective for the innitiation of this hub was to exploit and commercialize the innovative skills and talents among the youths through technology.</p>
                  <p> Other reasons behind the formation of Mtaani-Tech hub is to nurture and provide the basic computer skills and promote the IT talents amongst the regional and national developers as well as to provide the necessary and essential IT related services to Home-based residents as a way of improving Technological advancement in rural areas. </p>
                </div>
                <div id='tabs'>
                    <ul>
                      <li><a href='#tabs-1'>Our Impact</a></li>
                      <li><a href='#tabs-2'>Areas of Focus</a></li>
                      <li><a href='#tabs-3'>Sustainability</a></li>
                    </ul>
                    <section class='tabs-content'>
                      <article id='tabs-1'>
                        <p>We serve the remote communities by connecting business and social organizations as well as the individual stakeholders through building customer-centric technological solutions.</p>
                      </article>
                      <article id='tabs-2'>
                        <p>
                            <li>Education & Training</li>
                            <li>Scientific Research</li>
                            <li>Agriculture & Food</li>
                            <li>Health</li>
                            <li>Real Estate</li>
                            <li>Transportation</li>
                        </p>
                      </article>
                      <article id='tabs-3'>
                        <p>
                          Mtaani-Tech Hub embraces that the primary instigator of every space like ours is in the hands of a community and in collaboration, not in a single individual or firm.</p>
                      </article>
                    </section>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About Us Ends Here -->
  
  
      <!-- Team Starts Here -->
      <div class="team-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="section-heading">
                <span>Management</span>
                <h2>Working Team</h2>
                <p> Meet our team of experts who are well versed in every aspects of computer technologies as well as research projects realm. </p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="team-item">
                <img src="assets/images/aketch.jpeg" alt="steve">
                <div class="down-content">
                  <h4>Aketch Stephen</h4>
                  <span>Director, General Management & Project Coordination.</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="team-item">
                <img src="assets/images/kurt.jpg"  alt="kurt">
                <div class="down-content">
                  <h4>Enock Omondi</h4>
                  <span>Software Engineering Lead</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="team-item">
                <img src="assets/images/ogola.jpg" alt="silas">
                <div class="down-content">
                  <h4>Ogola Silas</h4>
                  <span>Director, Legal Compliance & Business Development</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team Ends Here -->
@endsection