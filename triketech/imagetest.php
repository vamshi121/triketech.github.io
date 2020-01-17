<?php include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
	<meta charset="utf-8">

<title>Adham Dannaway | UI/UX Designer &amp; Front End Developer</title>



<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="twitter:widgets:csp" content="on">
<meta property='fb:app_id' content='381830641890866' />

<!-- For all browsers -->
<link rel="stylesheet" type="text/css" href="http://www.adhamdannaway.com/wp-content/themes/dannaway/style.css">

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/selectivizr-min.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="http://www.adhamdannaway.com/wp-content/themes/dannaway/ie.css" />
<![endif]-->

<!-- JavaScript -->
<script src="http://www.adhamdannaway.com/wp-content/themes/dannaway/js/modernizr-2.5.3-min.js"></script>


<!-- For iPhone 4 -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png"> -->
<!-- For iPad 1-->
<!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png"> -->
<!-- For the new iPad -->
<!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/h/apple-touch-icon-144x144-precomposed.png"> -->
<!-- For iPhone 3G, iPod Touch and Android -->
<!-- <link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png"> -->
<!-- For Nokia -->
<!-- <link rel="shortcut icon" href="img/l/apple-touch-icon.png"> -->
<!-- For everything else -->


<!--iOS -->
<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
<!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
<!-- <link rel="apple-touch-startup-image" href="img/splash.png"> -->

<!-- <script>(function(){var p,l,r=window.devicePixelRatio;if(navigator.platform==="iPad"){p=r===2?"img/startup/startup-tablet-portrait-retina.png":"img/startup/startup-tablet-portrait.png";l=r===2?"img/startup/startup-tablet-landscape-retina.png":"img/startup/startup-tablet-landscape.png";document.write('<link rel="apple-touch-startup-image" href="'+l+'" media="screen and (orientation: landscape)"/><link rel="apple-touch-startup-image" href="'+p+'" media="screen and (orientation: portrait)"/>');}else{p=r===2?"img/startup/startup-retina.png":"img/startup/startup.png";document.write('<link rel="apple-touch-startup-image" href="'+p+'"/>');}})()</script> -->
<!--Microsoft -->

<!-- Prevents links from opening in mobile Safari -->
<!-- <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script> -->
<meta http-equiv="cleartype" content="on">

<link rel="pingback" href="http://www.adhamdannaway.com/xmlrpc.php" />


<script type="text/javascript">

  // Eliminate FOUC
  document.documentElement.className = 'js';

</script>



<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
    
    

</head>
<body>
<section id="section" class="light nopad-t nopad-b">

<div class="row">

    <div class="col-12">
        
        <div id="face" class="face">

            <a href="/portfolio">
                <div id="designer" class="designer">
                    <div id="designer-desc" class="description">
                        <h1>designer</h1>
                        <p>UI/UX Designer with a passion for designing beautiful and functional user experiences.</p>
                    </div>
                </div>
            </a>

            <a href="/about">
                <div id="coder" class="coder">
                    <div id="coder-desc" class="description">
                        <h1>&lt;coder&gt;</h1>
                        <p>Front End Developer who focuses on writing clean, elegant and efficient code.</p>
                    </div>
                </div>
            </a>

            <img id="face-img" class="face-img" src="http://www.adhamdannaway.com/wp-content/themes/dannaway/images/adham-dannaway-designer-coder.jpg" alt="adham dannaway ui designer">

            <div id="designer-img" class="designer-img"></div>
            <div id="coder-img" class="coder-img"></div>
            <div id="designer-bg" class="designer-bg"></div>
            <div id="coder-bg" class="coder-bg"></div>

        </div>

    </div>

</div>

</section>



<script type='text/javascript' src='http://www.adhamdannaway.com/wp-includes/js/wp-embed.min.js?ver=4.9.10'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script> 
<script src="http://www.adhamdannaway.com/wp-content/themes/dannaway/js/clipboard.js-master/dist/clipboard.min.js"></script>
<script src="http://www.adhamdannaway.com/wp-content/themes/dannaway/js/script.js"></script>
<script type="text/javascript">
<!--

//If browser is IE8 or older we show IE specific page
if(ie < 9){
	ieMessage();
}

/*
* Call functions when dom is ready
*/
$(document).ready(function() {

	// Hide browser top bar in mobiles
	$('body').scrollTop(1);

	// Toggle Navigation for mobile devices
	$('.icon-nav').on('click', function(){
		$('header nav').slideToggle();
		$(this).toggleClass('active');
	});

	// Function to scroll to top
	$('a[href=#top]').click(function(){

        $('html, body').animate({scrollTop:0}, 1000, 'easeInOutQuad');
        return false;
    });

	// Function to fade in image sprites
  	$('.sprite').fadeSprite();

    //Function for thumbnail hover effect
    $('.thumbs li').hoverThumb();

	// Function to animate when leaving page
	$('.transition, #nav .page_item a, #nav-footer a, #thumbs a, #next a, #prev a, #logo, #face a').leavePage();	

	// Animate the header on first			
	$('#header').stop().animate({'opacity': '1', 'top':'0'}, 1000);


	// Copy email address to clipboard	
	var clipboard = new ClipboardJS('#email');

	clipboard.on('success', function(e) {
	    $('#email-tooltip').attr("tooltip", "Yay! My email address has been copied to your clipboard ✅");
	    $('#email-tooltip').addClass('success');

	    // Reset
	    $('#email-tooltip').mouseleave(function() {

		    setTimeout( function(){
				$('#email-tooltip').attr("tooltip", "Click to copy my email address to your clipboard 😀");
		    	$('#email-tooltip').removeClass('success');
			}, 300);
		});

	    e.clearSelection();
	});

	clipboard.on('error', function(e) {
	    $('#email-tooltip').attr("tooltip", "Sorry, there was a technical glitch. Please try again.");
	    $('#email-tooltip').toggleClass('fail');
	});


	// Preload the page with jPreLoader
	$('body').jpreLoader({

		showSplash: true

	}, function() {	

		//Show the page once images are loaded	
				
			$('#face').animateHome();
			$('#face').resizeFace();

			
	});

});
-->
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2290797-3', 'adhamdannaway.com');
  ga('send', 'pageview');

</script>

<!-- Amazon OneTag -->
<script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=b678d37e-a438-49a0-8c04-1b28e372c8ec"></script>



</body>
</html>


