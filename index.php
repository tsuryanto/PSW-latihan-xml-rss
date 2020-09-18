<!DOCTYPE html>
<html lang="id">

<head>
  <title>Kelompok 4 &mdash; Pemrograman Smart Web </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 d-flex">
            <a href="index.html" class="site-logo">
              Kelompok 4
            </a>
            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
      <div class="container">
        <div class="d-flex align-items-center">        
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active">
                  <a href="index.html" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="#foo" class="nav-link text-left">Nama Kelompok</a>
                </li>
              </ul>                    
            </nav>
          </div>
        </div>
      </div>
    </div>
    </div>
  

    <!-- END section -->

<?php
	$xml = simplexml_load_file ("https://lapi.kumparan.com/v2.0/rss/");
	// var_dump($xml->channel->item);
	$itemData = $xml->channel->item;
?>
	
    <div class="site-section">
      <div class="container">
      	<i>Sumber Data : <a target="_blank" href="https://lapi.kumparan.com/v2.0/rss/">https://lapi.kumparan.com/v2.0/rss/</a></i>
        <div class="section-title">
          <h2><?= $xml->channel->title; ?></h2>
        </div>      	
        <div class="row">
          <div class="col-lg-6">

            <?php
            	$i = 0;
            	$itemTotal = count($itemData);
            	foreach ($itemData as $key => $item) {            	           
            ?>
            <div class="post-entry-2 d-flex">
              <div class="thumbnail" style="background-image: url('<?= $item->enclosure['url']?>')"></div>
              <div class="contents">
                <h2><a href="<?= $item->link; ?>" target="_blank"><?= $item->title; ?></a></h2>
                <p class="mb-3"><?= $item->description; ?></p>
                <div class="post-meta">
                  <span class="d-block">Article in <a href="#"><?= $item->category; ?></a></span>
                  <span class="date-read"><?= substr($item->pubDate, 0, 16); ?></span>
                </div>
              </div>
            </div>
            <?php
            	if ($i+1 == ceil($itemTotal/2)) {
            		echo "</div>";
            		echo '<div class="col-lg-6">';
            	}
            ?>

            <?php
            	$i++;
            	}
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section subscribe bg-light">
      <div class="container">
        <form action="#" class="row align-items-center">
          <div class="col-md-3">
            <h2>Kelompok 4</h2>            
          </div>
          <div class="col-md-4">
          	<p>
          		<ul>
          			<li>TAUFIQ SURYANTO - 41517110051 (KETUA)</li>
          			<li>MIRZA FADHILLAH - 41517110107</li>
          			<li>RANGGA ADI PRAMANA - 41517120095</li>
          			<li>MUHAMAD SABARUDIN - 41518120057</li> 
          		</ul>
          	</p>
          </div>
        </form>
      </div>
    </div>


    
    <div class="footer" id="foo">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script> 
  <script src="js/bootstrap.min.js"></script>  
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>