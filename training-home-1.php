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

    <meta name="keywords" content="HTML5 News Magazine Template" />
    <meta name="description" content="The Next Mag - Ultimate News and Magazine Template">
    <meta name="author" content="minimaldog.net">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" sizes="32x32" />
    <link rel="icon" href="img/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/favicon.png" />
    <meta name="msapplication-TileImage" content="img/favicon.png" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Vendor CSS -->
    <link href="css/vendors.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link href="css/icons.css" rel="stylesheet">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="./css/main-home-1.css">

    <!-- Web Fonts  -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Rubik:300,400,700']
            },
            active: function() {
                $(window).trigger('webfontLoaded');
            }
        };

        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
</head>

<body class="training-home-1">

    <!-- .site-wrapper -->
    <div class="site-wrapper">

        <?php include './module-home-1/header.php'; ?>

        <div class="site-content">
            <?php include './module-home-1/featured-module-1.php'; ?>

            <?php include './module-home-1/featured-module-2.php'; ?>

            <div class="mnmd-block mnmd-block--fullwidth">
                <div class="container">
                    <div class="row">
                        <div class="mnmd-main-col">
                            <?php include './module-home-1/mnmd-grid-listing-1.php'; ?>

                            <nav class="mnmd-pagination mnmd-module-pagination">
                                <h4 class="mnmd-pagination__title sr-only">Posts navigation</h4>
                                <div class="mnmd-pagination__links text-right">
                                    <a class="mnmd-pagination__item mnmd-pagination__item-prev disable-click" href="#">
                                        <i class="mdicon mdicon-arrow_back"></i> PREV
                                    </a>
                                    <a class="mnmd-pagination__item mnmd-pagination__item-current" href="#">1</a>
                                    <a class="mnmd-pagination__item" href="#">2</a>
                                    <a class="mnmd-pagination__item" href="#">3</a>
                                    <a class="mnmd-pagination__item mnmd-pagination__item-next" href="#">
                                        NEXT <i class="mdicon mdicon-arrow_forward"></i>
                                    </a>
                                </div>
                            </nav>
                        </div>

                        <div class="mnmd-sub-col js-sticky-sidebar">
                            <?php include 'module-home-1/mnmd-widget--author-1.php';?>

                            <?php include 'module-home-1/mnmd-widget--stories.php'?>
                        </div>
                    </div>
                </div>
            </div>
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