<?php
ob_start();
session_start();

require_once('factory/Conexao.php');
require_once('controller/PostController.php');
require_once('dto/PostDTO.php');
require_once('dao/PostDAO.php');

$mensagem = $_SESSION["response"]["message"];
?>
<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="js" lang="en"><!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">

    <title>Blog Gilson Junior | Android Developer</title>

    <meta property="og:title" content="Professional background of Gilson Junior">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://goo.gl/Vv0x4V">
    <meta property="og:image" content="http://goo.gl/Vv0x4V/wp-content/themes/ad/images/portfolio/campaign-monitor-4/main.jpg">
    <meta property="og:image:width" content="590">
    <meta property="og:image:height" content="440">

    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:widgets:csp" content="on">
    <meta property="fb:app_id" content="381830641890866">

    <!-- For all browsers -->
    <link rel="stylesheet" type="text/css" href="resources/style.css">

    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="resources/selectivizr-min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="http://goo.gl/Vv0x4V/wp-content/themes/ad/ie.css" />
    <![endif]-->

    <!-- JavaScript -->
    <script src="resources/analytics.js" async=""></script><script src="resources/sdk.html" id="facebook-jssdk"></script>
    <script src="resources/modernizr-2.js"></script>

    <link rel="shortcut icon" href="resources/images/favicon.ico">

    <meta http-equiv="cleartype" content="on">

    <script type="text/javascript">
        document.documentElement.className = 'js';
    </script>

    <!-- This site is optimized with the Yoast SEO plugin v2.3.5 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="I'm a Android Developer from Curitiba, Brazil.">
    <link rel="canonical" href="http://goo.gl/Vv0x4V/about.php">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="About Gilson Junior | Android Developer">
    <meta property="og:description" content="I'm a Android Developer from Curitiba, Brazil.">
    <meta property="og:url" content="http://goo.gl/Vv0x4V/about.php">
    <meta property="og:site_name" content="Gilson Junior">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="I'm a Android Developer from Curitiba, Brazil.">
    <meta name="twitter:title" content="About Gilson Junior | Android Developer">
    <meta name="twitter:site" content="@gilsonjuniorpro">
    <meta name="twitter:domain" content="Gilson Junior">
    <meta name="twitter:creator" content="@gilsonjuniorpro">
    <!-- / Yoast SEO plugin. -->

    <link rel="stylesheet" id="contact-form-7-css" href="resources/styles.css" type="text/css" media="all">
    <script type="text/javascript" src="resources/jquery.js"></script>
    <style type="text/css" id="syntaxhighlighteranchor"></style>

    <script src="resources/button.js" async="" charset="utf-8" type="text/javascript"></script>

</head>

<body class="clearfix">

<header style="opacity: 1; top: 0px;" id="header">
    <div class="row">
        <div class="col-12">
            <a id="logo" class="logo" href="http://goo.gl/Vv0x4V">Gilson Junior</a>
            <div class="icon-nav">navigation</div>

            <ul class="social">
                <li class="facebook"><a href="http://www.facebook.com/gilsonjuniorpro" title="Like me on Facebook" target="_blank">facebook</a></li>
                <li class="twitter"><a href="http://www.twitter.com/gilsonjuniorpro" title="Follow me on Twitter" target="_blank">twitter</a></li>
                <li class="github"><a href="https://github.com/gilsonjuniorpro" title="Connect with me on Github" target="_blank">github</a></li>
                <li class="linkedin"><a href="https://br.linkedin.com/in/gilsonjuniorpro" title="Connect with me on Linkedin" target="_blank">linkedin</a></li>
            </ul>

            <nav>
                <ul id="nav">
                    <li class="page_item page-item-2"><a href="about.php">about</a></li>
                    <li class="page_item page-item-5"><a href="qualified.php">qualified</a></li>
                    <li class="page_item page-item-7"><a href="portfolio.php">portfolio</a></li>
                    <li class="page_item page-item-8"><a href="references.php">references</a></li>
                    <li class="page_item page-item-9 current_page_item"><a href="blog.php">blog</a></li>
                    <li class="page_item page-item-11"><a href="contact.php">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div style="opacity: 1; top: 0px;" id="content-detail" class="content blog clearfix blog-index">

    <div class="row">
        <div class="col-8">
            <?php
            $objPostController = new PostController();

            $collectionPost = array();
            $collectionPost = $objPostController->listarPosts();

            if(count($collectionPost) > 0) {
                foreach ($collectionPost as $object) {
                    echo '<article>';
                    echo '<h1><a href="#">'.$object->getTitulo().'</a></h1>';
                    echo '<p class="author"><a href="http://www.codeshare.co.uk/blog/10-golden-rules-for-becoming-a-better-programmer/">By Sean Paul - codshare</a> <span class="date">on '.$object->getData().'</span></p>';
                    echo '<a href="#"><img src="resources/'.$object->getImagem().'" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" sizes="(max-width: 680px) 100vw, 680px"></a>';
                    echo '<p>'.$object->getConteudo().'</p>';
                    echo '</article>';
                }
            }
            ?>
        </div>
    </div>
</div>


<footer style="opacity: 1; top: 0px;" id="footer" role="contentinfo">
    <div class="row">
        <div class="col-12">
            <div class="left"><a class="transition" href="http://goo.gl/Vv0x4V">?? 2016 Gilson Junior</a></div>

            <nav id="nav-footer">
                <ul>
                    <li class="page_item page-item-2"><a href="about.php">about</a></li>
                    <li class="page_item page-item-5"><a href="qualified.php">qualified</a></li>
                    <li class="page_item page-item-7"><a href="portfolio.php">portfolio</a></li>
                    <li class="page_item page-item-8"><a href="references.php">references</a></li>
                    <li class="page_item page-item-9 current_page_item"><a href="blog.php">blog</a></li>
                    <li class="page_item page-item-11"><a href="contact.php">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="gradient-white">
        <a class="top" href="#top">back to top</a>
    </div>
</footer>


<script type="text/javascript" src="resources/jquery_003.js"></script>
<script type="text/javascript" src="resources/scripts.js"></script>
<script src="resources/jquery_002.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
<script src="resources/script.js"></script>
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
        $('.transition, #nav a, #nav-footer a, #thumbs a, #next a, #prev a, #logo, #face a').leavePage();

        // Animate the header on first
        $('#header').stop().animate({'opacity': '1', 'top':'0'}, 1000);

        // Preload the page with jPreLoader
        $('body').jpreLoader({

            showSplash: true

        }, function() {

            //Show the page once images are loaded
            animateMain();
            animateAbout();

        });

    });
    -->
</script>


<iframe style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: medium none;" allowfullscreen="true" allowtransparency="true" scrolling="no" id="rufous-sandbox" frameborder="0"></iframe>

</body>
</html>