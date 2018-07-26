<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
<title>Buy or Sell in your college</title>
<!--Bootstrap 4 -->

  
<!-- for favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('favicon/apple-touch-icon.png'); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('favicon/favicon-32x32.png'); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('favicon/favicon-16x16.png'); ?>">
<link rel="manifest" href="<?= base_url('favicon/manifest.json'); ?>">
<link rel="mask-icon" href="<?= base_url('favicon/safari-pinned-tab.svg'); ?>" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<meta property="og:image" content="<?= base_url('images/edubuylogo.png'); ?>" />

  
<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('css/bootstrap-select.css'); ?>">
<link href="<?= base_url('css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="<?= base_url('css/jquery-ui1.css'); ?>">
<link rel="stylesheet" href="<?= base_url('css/flexslider.css'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php for($i=1;$i<=27;$i++){
  echo $this->mylib->categories_name($i)." ";
  

}?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="<?= base_url('js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('js/jquery-ui.js'); ?>"></script>

<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('js/bootstrap-select.js'); ?>"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="<?= base_url('js/jquery.leanModal.min.js'); ?>"></script>
<link href="<?= base_url('css/jquery.uls.css'); ?>" rel="stylesheet"/>
<link href="<?= base_url('css/jquery.uls.grid.css'); ?>" rel="stylesheet"/>
<link href="<?= base_url('css/jquery.uls.lcd.css'); ?>" rel="stylesheet"/>
<!-- Source -->
<!-- for Ajax -->




<script src="<?= base_url('js/jquery.uls.data.js'); ?>"></script>
<script src="<?= base_url('js/jquery.uls.data.utils.js'); ?>"></script>
<script src="<?= base_url('js/jquery.uls.lcd.js'); ?>"></script>
<script src="<?= base_url('js/jquery.uls.languagefilter.js'); ?>"></script>
<script src="<?= base_url('js/jquery.uls.regionfilter.js'); ?>"></script>
<script src="<?= base_url('js/jquery.uls.core.js'); ?>"></script>
<script src="<?= base_url('js/jquery.flexslider.js'); ?>"></script>
<script src="<?= base_url('js/myjquery.js'); ?>"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>

    <link rel="stylesheet" type="text/css" href="<?= base_url('css/easy-responsive-tabs.css '); ?>" />
    <script src="<?= base_url('js/easyResponsiveTabs.js'); ?>"></script>

     <script src="<?= base_url('js/tabs.js'); ?>"></script>
  
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul'); 
  $('#viewcontrols a').on('click',function(e) {
    
    if ($(this).hasClass('gridview')) {
      elem.fadeOut(1000, function () {
        $('#container ul').removeClass('list').addClass('grid');
        $('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
        $('#viewcontrols .gridview').addClass('active');
        $('#viewcontrols .listview').removeClass('active');
        elem.fadeIn(1000);
      });           
    }
    else if($(this).hasClass('listview')) {
      elem.fadeOut(1000, function () {
        $('#container ul').removeClass('grid').addClass('list');
        $('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
        $('#viewcontrols .gridview').removeClass('active');
        $('#viewcontrols .listview').addClass('active');
        elem.fadeIn(1000);
      });                 
    }
  });
});
</script>


<link href="<?= base_url('css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />

<!--Start of Zendesk Chat Script-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5865198250487793",
    enable_page_level_ads: true
  });
</script>

<!-- for preloading gif -->
<style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(http://edubuy.in/images/Preloader.gif) center no-repeat #fff;
}

</style>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
//paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });

</script>
</head>











<body>
<div class="se-pre-con"></div>
<a  class="sellbutton" href="<?= site_url('Postad'); ?>">SELL</a>
<div class="header">
    <div class="container">
      <div class="logo">
        <a href="<?=site_url();?>"><span>Edu</span>Buy</a>
      </div>
      <div class="header-right">
       <span class="myaccount"> <a class="account" href="<?= site_url('useraccount'); ?>"><i class="glyphicon glyphicon-user"></i> My Account</a> </span>
      
      
  <!-- Large modal -->
      
    </div>
    </div>
  </div>

  





