<?php 


require('includes/config.php'); ?>
<!DOCTYPE html>
<html>

<head>
        <title>EMK CONSULTANTS</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
        <meta name="keywords"
            content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique" />
        <meta name="author" content="EMK CONSULTANTS" />
       <!--css-->
        <link href="assets/css/master.css" rel="stylesheet" type="text/css">
        <!--jquery-->
        <link rel="icon" type="image/png" href="" sizes="16x16">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/jquery-ui.css">
        <link rel="stylesheet" href="../assets/css/custom_bootstrap.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;display=swap">
        <link rel="stylesheet" href="../assets/css/fontawesome.css">
        <link rel="stylesheet" href="../assets/css/elegant.css">
        <link rel="stylesheet" href="../assets/css/slick.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/icomoon.css">
        <link rel="shortcut icon" href="../assets/images/fav.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/js/general.js" type="text/javascript"></script>
</head>

<body>

    <?php include ('header.php'); ?>

    <section class="blog">
        <div class="azir-container">
            <div class="blog-default">
                <div class="page-header text-center">
                    <h1 class="h1">Insights</h1>
                    <div class="bread-crumb"><a class="bread-crumb__link prv-page" href="index.html">Home</a><a class="bread-crumb__link crt-page" href="">Insight</a></div>
                  </div>
            </div>
            <div class="row">
                <div class="col-12">
                  <div class="blog-default_group">
                    <div class="row">
                        <?php       
                        try {

                        $pages = new Paginator('9','p');

                        $stmt = $db->query('SELECT postID FROM sa_posts');

                        //pass number of records to
                        $pages->set_total($stmt->rowCount());

                        $stmt = $db->query('SELECT * FROM sa_posts ORDER BY postID DESC '.$pages->get_limit());
                        while($row = $stmt->fetch()){
                        echo '<div class="col-12 col-sm-6 col-md-4">
                        <div class="insight-regular">
                            <div class="insight-img"><a href="'.$row['postSlug'].'"> <img src="admin/uploads/'.$row['image'].'" alt="insights image"> </a>
                                <!-- <p class="date">26 Nov 2019</p> -->
                            </div>
                            <div class="insight-content"><a href="'.$row['postSlug'].'">'.$row['postTitle'].'</a>
                                <p class="author">by<span>Admin</span></p>
                            </div>
                        </div>
                      </div>';
                    }
                    echo'</div>';

                    echo $pages->page_links();
                
                    } catch(PDOException $e) {
                        echo $e->getMessage();
                    }
                    ?>
                  </div>
                </div>
              </div>
            
        </div>
    </section>

    <?php include ('footer.php'); ?>


    <script src="../assets/js/jquery-3.4.0.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/jquery.scrollUp.min.js"></script>
    <script src="../assets/js/numscroller-1.0.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>