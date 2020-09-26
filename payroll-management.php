<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Azir</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
    <meta name="author" content="AZIR | Deer Creative Theme">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/custom_bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/elegant.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="shortcut icon" href="assets/images/fav.png">
  </head>
  <body>

    <?php  include('header.php') ?>

    <div class="page-header_parallax" style="background-image: url('assets/images/pages/case-study/bg.png')">
      <div class="azir-container">
        <h1 class="h1 mb-25">Payroll Management </h1>
        <!-- <p class="p-16 color-pink">Tuesday, 15 May 2019</p> -->
      </div>
    </div>

    <section class="case-study">
      <div class="azir-container">
        <div class="case-study_detail">
          <!-- <h1 class="h1 mb-20">Recruitment Services</h1> -->
          <div class="row">
            <div class="col-12 col-md-12">
              <p class="p-16 mb-60">Managing complete Payroll processing in addition to your core business processes can become
                quite overwhelming and often result in stress. Outsourcing Payroll Management services to EMK
                Consultants can assure impeccable Payroll Management while you focus on your core business
                functions.</p>
            </div>
           
            <div class="col-12 col-sm-6"><img class="mb-30 img-fluid" src="assets/images/pages/case-study/img-1.png" alt="case study imnage"></div>
            <div class="col-12 col-sm-6"><img class="mb-60 img-fluid" src="assets/images/pages/case-study/img-2.png" alt="case study imnage"></div>
            <div class="col-12">
              <div class="solution">
                <!-- <h3 class="mb-15 case-study--title">EMK Consultants</h3> -->
                <p class="p-16 mb-30">
                It is our primary objective to create high-impact solutions to enhance the competitiveness of the
                organizations we serve. Our customized Payroll Management solutions can address any aspect of
                syour payroll management system which can include everything from salary account opening to
                timely salary disbursal and compliance-related obligations including full and final settlement.
                Payroll Management isn’t just about paying your people. It’s about ensuring that there is a process
                that will reduce time &amp; enhance client experience. At EMK Consultants, we have been handling
                Payroll Management of our associates since inception.
                We address the payroll challenges with complete independence of operations, also ensuring ease of
                scalability and payment disbursement on time, when our client pass on the critical task of
                outsourcing their payroll to us, they are ensured of seamless execution and reporting of each aspect
                of Payroll Management. Our Payroll management system helps us manage the payroll of thousands
                of associates simultaneously through automated tools and software.
                Our operational specialists are also industry experts who understand all the intricacies involved in
                payroll management. They have good knowledge of full and final settlement process, time &amp;
                attendance management process, incentive and reimbursement disbursements, leave encashment
                process and the legal and compliance processes associated with payroll.
                As a reliable payroll outsourcing company, we offer a better and more efficient payroll management
                process for organisations with a large number of outsourced workforce.
                </p>
                
            </div>
            </div>
            
          </div>
        </div>
        
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
    <script>
      var ctx = document.getElementById('myChart');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
              datasets: [{
                  label: '# of Votes',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });
    </script>
  </body>
</html>