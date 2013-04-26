<?php include "functions.php"; ?>
<!doctype html manifest="site.appcache">
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8" />
<title></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="cleartype" content="on" />
<!-- Stylesheets -->
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" media="print" href="css/print.css" />
<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/libs/selectivizr-1.0.2.min.js"></script>
<![endif]-->
<!-- HTML5 Support -->
<script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div id="container">
    <!-- START HEADER -->
    <header id="header" class="group">
    	
    </header>
    <!-- END HEADER -->
    <!-- START BODY -->
    <div id="main">
		<div id="ENTER_PAGE_NAME_HERE" class="group">
        
        </div>
    </div>
    <!-- END BODY -->
    <!-- START FOOTER -->
    <footer id="footer">
    
    </footer>
    <!-- END FOOTER -->
</div>
<!-- JavaScript -->
<script type="text/javascript" src="js/libs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/libs/helper.js"></script>
<!-- iOS Scale Bug Fix -->
<script>
MBP.scaleFix();
yepnope({
    test : Modernizr.mq('(only all)'),
    nope : ['js/libs/respond-0.7.5.min.js']
});
</script>
<!-- Google Analytics -->
<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to your Site's ID
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>