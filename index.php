<!--  -->
<?php 
if(isset($_POST['submit'])){

print_r($_POST);

die();

}

print_r($_POST);

die();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>EMK CONSULTANTS</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
  <meta name="keywords"
    content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique" />
  <meta name="author" content="EMK CONSULTANTS" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css" />
  <link rel="stylesheet" href="assets/css/custom_bootstrap.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;display=swap" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/elegant.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/icomoon.css" />
  <link rel="shortcut icon" href="assets/images/fav.png" />
</head>

<body>



  <?php include('header.php') ?>



  <section class="h1-banner">
    <div class="azir-container">
      <div class="row align-items-center justify-content-between">
        <div class="col-12 col-md-6">
          <!-- <div class="banner-content">
            <h1 class="heading banner-title animated fadeInLeft" style="color: #fff;">
              Strategic Advisors For The Digital Economy
            </h1>
            <p class="p banner-paragraph animated fadeInLeft" style="color: #fff;">
              We live to get things done. We are much more go than show. We’re
              all about making it count for clients.
            </p>
            <div class="banner-btn-group d-flex align-items-center animated fadeInLeft">
              <a class="banner-qoute" href="services_1.html">Get A Quote</a>
              <div class="banner-video">
                <a class="d-flex align-items-center" href="#">
                  <div class="video-btn">
                    <i class="fas fa-play inline-block"></i>
                  </div>
                  <p class="inline-block" style="color: #fff;">
                    How we work
                  </p>
                </a>
              </div>
            </div>
          </div> -->
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-5">
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <div class="banner-quick-contact banner-quick-contact_h3 animated fadeInUp" style="animation-delay: 3s;">
            <div class="row justify-content-between">
              <div class="col-12">
                <div class="quick-contact_left">
                  <h1 class="bannerh1">How Can We Help You?</h1>
                  <div class="input-group">
                    <label for="jobs">Speak to our experts</label>
                    <select class="pink" id="jobs" name="jobs">
                      <option value="HR Services">HR Services</option>
                      <option value="Accounting Services">Accounting Services</option>
                      <option value="Manpower Services">Manpower Services</option>
                      <option value="Industrail Consulting">Industrail Consulting</option>
                      <option value="Creative" selected disabled hidden>Inquiry For</option>
                    </select>
                    <br>
                    <select class="pink" id="jobs" name="who">
                      <option value="Client">Client</option>
                      <option value="Associate/Employee">Associate/Employee</option>
                      <option value="Candidate">Candidate</option>
                      <option value="Creative" selected disabled hidden>You Are</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="col-12">
<br>
                <input class="banner-input-form" name="name" type="text" placeholder="Name" required />
                  <input class="banner-input-form" name="emai" type="text" placeholder="Email" required />
                  <input class="banner-input-form" name="Mobile" type="text" placeholder="Mobile" required />
                  <button class="banner-btn-pink"  type="submit">Submit</button>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="h1-section2 mb-100">
    <div class="azir-container">
      <div class="welcome-block">
        <div class="layout-2col-ti">
          <div class="row justify-content-between">
            <div class="col-12 col-lg-6">
              <div class="layout-2col-ti_left">
                <div class="welcome-block_img" data-aos="fade-left" data-aos-duration="1000">
                  <img src="assets/images/homepage1/il-1.svg" alt="Welcome" />
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-5">
              <div class="layout-2col-ti_right">
                <div class="welcome-block_content" data-aos="fade-right" data-aos-duration="1000">
                  <div class="section-header-style-3 text-center text-lg-left">
                    <h1 class="h1">Welcome to EMK Consultants</h1>
                    <!-- <h6 class="h6">
                      "We’re passionate about making a measurable impact in
                      all we do."
                    </h6> -->
                    <p class="p">
                    EMK Consultants committed to provide combined consulting services to excel organisations by
                    increasing their productive capacity through better use of their human and other available
                    resources and enable companies to achieve real competitive advantages.
                    </p>
                    <a class="btn-outline-red" href="about">About us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="call-to-action">
    <div class="azir-container">
      <div class="row justify-content-between align-items-center">
        <div class="col-12 col-lg-9">
          <div class="call-to-action_content text-center text-lg-left">
            <h3 class="h3 cta-title">
              Would you like to speak to one of our Consultant ?
            </h3>
            <p class="p cta-pragraph">
              Just submit your contact details and we’ll be in touch shortly.
            </p>
          </div>
        </div>
        <div class="col-12 col-lg-3 text-lg-right text-center">
          <a class="cta-btn btn-red" href="services_1.html">Get A Quote</a>
        </div>
      </div>
    </div>
  </section>

  <section class="h1-section2" style="margin-top:0px;">
    <div class="data-proof" style="margin-top:0px;">
      <div class="azir-container">
        <div class="section-header-style-1 text-center">
          <h1 class="h1">Let the numbers speak!</h1>
        </div>
        <div class="row">
          <div class="col-6 col-md-3">
            <div class="data-group text-center mb30-md">
              <div class="data-icon"><i class="fa fa-building" aria-hidden="true"></i></div>
              <div class="data-content">
                <h1 class="data-number heading numscroller" data-min="2000" data-max="2013" data-delay="5"
                  data-increment="5">
                  2013
                </h1>
                <h5 class="data-type h5">Company Established</h5>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="data-group text-center mb30-md">
              <div class="data-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
              <div class="data-content">
                <h1 class="data-number heading numscroller" data-min="1" data-max="635" data-delay="5"
                  data-increment="5">
                  635
                </h1>
                <h5 class="data-type h5">Projects Done</h5>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="data-group text-center">
              <div class="data-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
              <div class="data-content">
                <h1 class="data-number heading numscroller" data-min="1" data-max="20" data-delay="5"
                  data-increment="3">
                  20<span>+</span>
                </h1>
                <h5 class="data-type h5">Business Partners</h5>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="data-group text-center">
              <div class="data-icon"><i class="fa fa-smile" aria-hidden="true"></i></div>
              <div class="data-content">
                <h1 class="data-number heading numscroller" data-min="1" data-max="1920" data-delay="5"
                  data-increment="5">
                  1920
                </h1>
                <h5 class="data-type h5">Happy Clients</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="h5-section5 mb-100">
      <div class="azir-container">
        <div class="row justify-content-between align-items-center">    
          <div class="col-8 col-md-8 col-lg-8 offset-md-2">
            <h1 class="h1 text-center mb-5 text-white">What People Say ?</h1>
            <div class="h2-section3">
              <div class="counselor-wrapper">
                <div class="counselor-block">
                  <div class="counselor"><img class="avatar" src="assets/images/homepage2/avatar.png" alt="avatar">
                    <div class="counselor-detail">
                      <h5>Ankita Kadyan</h5>
                      <p class="color-pink">CEO Levycon </p>
                    </div>
                  </div>
                  <q class="counselors-advice">"EMK Consultants have done an excellent job presenting the analysis and insights. I am confident in saying that they have helped move our business forward!"</q>
                </div>
                <div class="counselor-block">
                  <div class="counselor"><img class="avatar" src="assets/images/homepage2/avatar.png" alt="avatar">
                    <div class="counselor-detail">
                      <h5>Ankita Kadyan</h5>
                      <p class="color-pink">CEO Levycon </p>
                    </div>
                  </div>
                  <q class="counselors-advice">"EMK Consultants have done an excellent job presenting the analysis and insights. I am confident in saying that they have helped move our business forward!"</q>
                </div>
                <div class="counselor-block">
                  <div class="counselor"><img class="avatar" src="assets/images/homepage2/avatar.png" alt="avatar">
                    <div class="counselor-detail">
                      <h5>Ankita Kadyan</h5>
                      <p class="color-pink">CEO Levycon </p>
                    </div>
                  </div>
                  <q class="counselors-advice">"EMK Consultants have done an excellent job presenting the analysis and insights. I am confident in saying that they have helped move our business forward!"</q>
                </div>
              </div>
              <div class="counselor_slider-control pink"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  <!-- <section class="h1-lastest-insight" data-aos="fade-in" data-aos-duration="1000">
    <div class="azir-container">
      <div class="h1-lastest-insight_top">
        <h1 class="h1">Our Latest Insights</h1>
        <a href="blog_default.html">View all Blog</a>
      </div>
      <div class="lastest-insights">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="feature-lastest-insights">
              <a class="feature-lastest-insights_img" href="blog_detail.html"><img
                  src="assets/images/homepage1/insight.png" alt="lastest insights image" /></a>
              <div class="feature-lastest-insights_content">
                <h5 class="insight-tag">Consulting</h5>
                <a class="insight-title" href="blog_detail.html">Year in Review: Healthcare Megadeals Lead the Way</a>
                <div class="insight-public-date">
                  <p class="inline-block author">Amin</p>
                  <p class="inline-block date">26 Nov 2019</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="list-lastest-insights_group">
              <div class="list-lastest-insight">
                <div class="list-lastest-insight_content">
                  <a class="list-insight--title" href="blog_detail.html">How Commodity Producers Can Raise Their
                  </a>
                  <div class="insight-public-date">
                    <p class="inline-block author">Amin</p>
                    <p class="inline-block date">26 Nov 2019</p>
                  </div>
                </div>
              </div>
              <div class="list-lastest-insight">
                <div class="list-lastest-insight_content">
                  <a class="list-insight--title" href="blog_detail.html">Micro-battles and Building New Businesses</a>
                  <div class="insight-public-date">
                    <p class="inline-block author">Amin</p>
                    <p class="inline-block date">26 Nov 2019</p>
                  </div>
                </div>
              </div>
              <div class="list-lastest-insight">
                <div class="list-lastest-insight_content">
                  <a class="list-insight--title" href="blog_detail.html">4 Questions Retailers Need to Ask About
                    Augmented
                    Reality</a>
                  <div class="insight-public-date">
                    <p class="inline-block author">Amin</p>
                    <p class="inline-block date">26 Nov 2019</p>
                  </div>
                </div>
              </div>
              <div class="list-lastest-insight">
                <div class="list-lastest-insight_content">
                  <a class="list-insight--title" href="blog_detail.html">Consumer Products: Now’s the Time to Double
                    Down on
                    China</a>
                  <div class="insight-public-date">
                    <p class="inline-block author">Amin</p>
                    <p class="inline-block date">26 Nov 2019</p>
                  </div>
                </div>
              </div>
              <div class="list-lastest-insight">
                <div class="list-lastest-insight_content">
                  <a class="list-insight--title" href="blog_detail.html">Micro-battles and Building New Businesses</a>
                  <div class="insight-public-date">
                    <p class="inline-block author">Amin</p>
                    <p class="inline-block date">26 Nov 2019</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="quick-contact quick-contact_h1" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="azir-container">
      <form method="POST">
        <div class="row justify-content-between">
          <div class="col-12 col-md-5">
            <div class="quick-contact_left">
              <h1 class="h1">Want to continue the conversation?</h1>
              <div class="input-group">
                <label for="jobs">Speak to our experts</label>
                <select id="jobs" name="jobs">
                  <option value="hrservices">HR Services</option>
                  <option value="accountingservices">Accounting Services</option>
                  <option value="manpowerservices">Manpower Services</option>
                  <option value="industrialconsulting">Industrial Consulting</option>
                  <option value="select" selected disabled hidden>Select an industry</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="quick-contact_right">
              <p class="p">
                We help global leaders with their organization's most critical
                issues and opportunities. Together, we create enduring change
                and results.
              </p>
              <div class="input-group">
                <input class="input-form mb-0" type="text" placeholder="Your e-mail address" />
                <button class="btn-red">Contact</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  
  <?php  include('footer.php') ?>

  <script src="assets/js/jquery-3.4.0.min.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/numscroller-1.0.js"></script>
  <script src="assets/js/chart.js"></script>
  <script src="assets/js/masonry.pkgd.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>