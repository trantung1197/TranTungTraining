
<!-- fontsize = num / 14 (rem)-->
<!-- fontweight < 20: 1.5rem
fontweight >= 20 & < 34: 1.4rem 
fontweight >= 34: 1.3rem -->

<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title>The Next Mag - Ultimate News and Magazine Template</title>

    <meta name="keywords" content="HTML5 News Magazine Template"/>
    <meta name="description" content="The Next Mag - Ultimate News and Magazine Template">
    <meta name="author" content="minimaldog.net">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" sizes="32x32"/>
    <link rel="icon" href="img/favicon.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="img/favicon.png"/>
    <meta name="msapplication-TileImage" content="img/favicon.png"/>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Vendor CSS -->
    <link href="css/vendors.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/module/typography.css">
    <link rel="stylesheet" href="css/module/featured-module-1.css">
    <link rel="stylesheet" href="css/module/featured-module-2.css">
    <link rel="stylesheet" href="css/module/featured-module-3.css">
    <link rel="stylesheet" href="css/module/featured-module-4.css">

    <!-- Web Fonts  -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Rubik:300,400,700']
            },
            active: function () {
                $(window).trigger('webfontLoaded');
            }
        };

        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
</head>
<body class="home">

<!-- .site-wrapper -->
<div class="site-wrapper">
    <!-- Site header -->
    <div class="site-content">
        <?php include 'featured-module-4.php'; ?>
        
        <?php include 'featured-module-3.php'; ?>
       
        <?php include 'featured-module-2.php'; ?>

        <?php include 'featured-module-1.php'; ?>
    </div><!-- .site-content -->

</div><!-- .site-wrapper -->

<!-- Vendor -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/vendors.js"></script>

<!-- Theme Scripts -->
<script type="text/javascript" src="js/scripts.js"></script>

<!-- Theme Custom Scripts -->
<script src="js/custom.js"></script>
</body>
</html>