<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <!-- Bootstrap CSS
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Animate CSS
    ================================================== -->
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- Font Icons CSS
    ================================================== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">

    <!-- Main CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google web font 
    ================================================== -->	
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://cdn.embed.ly/jquery.embedly-3.0.5.min.js" type="text/javascript"></script>
    <script src="http://cdn.embed.ly/jquery.preview-0.3.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://cdn.embed.ly/jquery.preview-0.3.2.css" />

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-92311923-2"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-92311923-2');
      </script>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <script>
          (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-2909144184328022",
              enable_page_level_ads: true
          });
      </script>

      <script src="https://cdn.jsdelivr.net/npm/webauthn-simple-app/dist/webauthn-simple-app.umd.js"></script>

      <title>Jason's Homepage</title>
  </head>
  <body>
    

<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="index.php">Jason's Websites</a>
              </div>
            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section
================================================== -->
<section id="header" class="header-one">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="0.6s">Jason's Websites</h1>
              <h3 class="wow fadeInUp" data-wow-delay="0.9s">Website's I'm working on</h3>
          </div>
			</div>

		</div>
	</div>		
</section>


<!-- Portfolio section
================================================== -->
<section id="portfolio">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="1.6s">
                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="0.2s">
                          <div class="iso-box-wrapper col4-iso-box">
						  <?php $photodir = 'img';
						  $photos = scandir($photodir);
						  array_pop($photos);
						  array_pop($photos);
						  $photonr=1;
						  foreach(glob('websites/*', GLOB_ONLYDIR) as $dir){
							echo "<div class='iso-box photoshop branding col-md-4 col-sm-6'>";
							echo "<div class='portfolio-thumb'>";
							echo "<li style="list-style-type: none;"><a href='" . $dir . "'><img src='" . $photodir . "/img" . $photonr . ".png' alt='' class='img-responsive iso-section wow fadeInUp' width='500px' data-wow-delay='0.5s'></a></li><br>"; //http://jasonvdh.ddns.net/" . $dir . "</a></li><br>"; <div class='box'><iframe src='http://jasonvdh.ddns.net/" . $dir . "' width = '800px' height = '500px'></iframe></div></li><br>";
							echo "</div>";
							echo "</div>";
							$photonr++;
						  }
                     ?>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </div>
</section>

<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © <?php echo date("Y"); ?> - Jason van den Heuvel</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>


<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript"> var infolinks_pid = 3169691; var infolinks_wsid = 0; </script> 
<script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>
    </div>
  </body>
</html>
