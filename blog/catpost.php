<?php require('includes/config.php'); 


$stmt = $db->prepare('SELECT * FROM sa_categories WHERE catSlug = :catSlug');
$stmt->execute(array(':catSlug' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['catID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html>
   <head>
      <title>Levycon - <?php echo $row['catTitle'];?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name='robots' content='index,follow'>
      <!--css-->
      <link href="assets/css/master.css" rel="stylesheet" type="text/css">
      <!--jquery-->
      <link rel="icon" type="image/png" href="assets/images/favicon.ico" sizes="16x16">

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
   <body class="bg">
            
   <?php include ('header.php'); ?>

      <div class="all-container">

	 	 <!-- <h1>Blog</h1> -->
		<h4>Catgories List: <?php echo $row['catTitle'];?></h4>
		<hr />
		<!-- <p><a href="./" >Back</a></p> -->

         <div class="row nopadding">
         
            <div class="col-md-12 nopadding">
               <div class="col-md-7 nopadding">
                  <div class="blog-listing">
					
				  <?php	
			try {

				$pages = new Paginator('4','p');

				$stmt = $db->prepare('SELECT sa_posts.postID FROM sa_posts, sa_post_categories WHERE sa_posts.postID = sa_post_categories.postID AND sa_post_categories.catID = :catID');
				$stmt->execute(array(':catID' => $row['catID']));

				//pass number of records to
				$pages->set_total($stmt->rowCount());

				$stmt = $db->prepare('
					SELECT 
						sa_posts.postID, sa_posts.postTitle, sa_posts.image, sa_posts.postSlug, sa_posts.postDesc, sa_posts.postDate 
					FROM 
						sa_posts,
						sa_post_categories
					WHERE
						 sa_posts.postID = sa_post_categories.postID
						 AND sa_post_categories.catID = :catID
					ORDER BY 
						postID DESC
					'.$pages->get_limit());

				$stmt->execute(array(':catID' => $row['catID']));
				while($row = $stmt->fetch()){
					
					echo '<div class="blog-listing-one">';

						echo '<h2><a href="'.$row['postSlug'].'">'.$row['postTitle'].'</a></h2>';
						echo  '<div class="blog-listing-one-img">';
                        echo  '<a href="'.$row['postSlug'].'"><img src="admin/uploads/'.$row['image'].'" width="100%"></a>';
                        echo '</div>';
						echo'<div class="blog-listing-one-like-bookmark">';
						echo '<ul>';
						  echo '<li><i class="fa fa-calendar" aria-hidden="true"></i><span> On:</span> '.date('jS M Y', strtotime($row['postDate'])).'</li>';
						  
						  $stmt2 = $db->prepare('SELECT catTitle, catSlug FROM sa_categories, sa_post_categories WHERE sa_categories.catID = sa_post_categories.catID AND sa_post_categories.postID = :postID');
							$stmt2->execute(array(':postID' => $row['postID']));

							$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

							$links = array();
							foreach ($catRow as $cat)
							{
								$links[] = "<a href='c-".$cat['catSlug']."'>".$cat['catTitle']."</a>";
							}
						  
						   echo '<li><i class="fa fa-folder-open"></i><span> Category: </span>'.implode(", ", $links).'</li>';
						  
					   echo '</ul>';
					echo '</div>';
						echo '<p>'.$row['postDesc'].'</p>';				
						echo '<a href="'.$row['postSlug'].'" class="btn-readmore">Continue Reading</a>';				
					echo '</div>';

				}

				echo $pages->page_links('c-'.$_GET['id'].'&');

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

			?>    
			  
                </div>
			    <!--end of blog listing-->
              </div>
               <!--end of col-md-7-->
                
               <div class="col-md-5 nopadding padding-left">
                <div id='sidebar'>
                    <?php require('sidebar.php'); ?>
                </div>
               </div>
                
               <!--end of col-05-->
            </div>
            <!--end of col-md-12-->
         </div>
         <!--end of row-->     
      </div>
      <!--end of all container-->

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