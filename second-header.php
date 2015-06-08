 <?php
/**
 * The second-Header template for our theme
 *
 * 
 * @package WordPress
 * @subpackage wptest3
 * @since wptest3 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>wptest3</title>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header role="banner" class="navbar navbar-static-top bs-docs-nav top-header-navbar">
    
            <div class="container-fluid" style="padding: 0;">
                    <nav role="navigation" class="navbar navbar-default">
                        <div class="navbar-header">
                            <div class="logo">
                                <a href="/" class="navbar-brand"><img src="/wp-content/themes/wptest3/images/logo.png" alt="Pilgrim INC"></a>
                            </div>
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
    
                        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation" id="navbar-main">
                            <div class="row">
                            <div class="">
                            <ul class="nav navbar-nav navbar-right top-menu">
                                <li class="dropdown">
                                    <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">The Solutions<i class="fa fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu open-drop-menu">
                                        <li class="drop-section">
                                            <div class="drop-left-block">
                                                <h4>Services</h4>
                                                <ul>
                                                    <li><i class="fa fa-laptop"></i><a href="http://local.kenneth.com/#build"   class="build-i anchorLink" data-tab-id="build">Build</a></li>
                                                    <li><i class="fa fa-life-ring"></i><a  href="http://local.kenneth.com/#rescue"  class="rescue-i anchorLink" data-tab-id="rescue">Rescue</a></li>
                                                    <li><i class="fa fa-line-chart"></i><a href="http://local.kenneth.com/#augment"  class="augment-i anchorLink" data-tab-id="augment" >Augmentation</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop-section">
                                            <div class="drop-right-block clear">
                                                <h4>Technologies</h4>
                                                <ul class="mr-90">
                                                    <li><a href="http://local.kenneth.com/java-page/">Java</a></li>
                                                    <li><a href="http://local.kenneth.com/?page_id=55 ">PHP</a></li>
                                                    <li><a href="http://local.kenneth.com/?page_id=57">.NET</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="http://local.kenneth.com/?page_id=59 ">Ruby on Rails</a></li>
                                                    <li><a href="http://local.kenneth.com/?page_id=61 ">Mobile</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://local.kenneth.com/#itdifference">The Difference</a>
                                </li>
                                <li class="dropdown">
                                    <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">The Portfolio<i class="fa fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu open-drop-menu">
                                        <li class="drop-section">
                                            <div class="drop-left-block">
                                                <h4>Resources</h4>
                                                <ul>
                                                    <li><i class="fa fa-pencil"></i><a href="/blog">Blog</a></li>
                                                    <li><i class="fa fa-file-text"></i><a href="http://local.kenneth.com/?page_id=65">Resources</a></li>
                                                    <li><i class="fa fa-briefcase"></i><a href="http://local.kenneth.com/?page_id=67 ">Case Studies</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop-section">
                                            <div class="drop-right-block clear">
                                                <h4>Industries</h4>
                                                <ul class="mr-90">
                                                    <li><a href="http://local.kenneth.com/?page_id=69 ">Gaming</a></li>
                                                    <li><a href="http://local.kenneth.com/?page_id=71 ">Medical</a></li>
                                                    <li><a href="http://local.kenneth.com/?page_id=73">Financial</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="http://local.kenneth.com/?page_id=75">Educational</a></li>
                                                    <li><a href=" http://local.kenneth.com/?page_id=88">Domains</a></li>
                                                    <li><a href="http://local.kenneth.com/?page_id=90 ">Startups</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="http://local.kenneth.com/#itteam">The Team</a>
                                </li>
                                <li>
                                    <a href="http://local.kenneth.com/#itpurpose">The Purpose</a>
                                </li>
                                <li class="mailcontact">
                                    <a href="http://local.kenneth.com/#contactus-title" class="top-contact-btn" data-disable-modal="true">
                                        <i class="fa fa-phone"></i> Contact Us
                                    </a>
                                </li>
                            </ul>
                            </div>
                            </div>
                        </nav>                    
                        </div>
                    </nav>
                </div>
            </header>




 <header role="banner" class="navbar navbar-static-top bs-docs-nav top-header-navbar fix-two-menu" 		style="margin-top: 30px; width:100%; position:fixed;">
	            <div class="container-fluid" style="padding: 0;">
	                <nav role="navigation" class="navbar navbar-default">
	                    <div class="navbar-header">
	                        <div class="logo">
	                            <a href="./" class="navbar-brand"><img src="/wp-content/themes/wptest3/images/logo.png" alt="Peligrim INC"></a>
	                        </div>
	                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	                            <span class="sr-only">Toggle navigation</span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                        </button>
	                    </div>
	
	                    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation" id="navbar-main">
	                        <div class="row">
	                        <div class="">
	                        <ul class="nav navbar-nav navbar-right top-menu">
	                            <li class="dropdown">
	                                <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">The Solutions<i class="fa fa-chevron-down"></i></a>
	                                <ul class="dropdown-menu open-drop-menu">
	                                    <li class="drop-section">
	                                        <div class="drop-left-block">
	                                            <h4>Services</h4>
	                                            <ul> 
	                                                <li><i class="fa fa-laptop"></i><a href="http://local.kenneth.com/#build"  class="build-i anchorLink" data-tab-id="build">Build</a></li>
	                                                <li><i class="fa fa-life-ring"></i><a  href="http://local.kenneth.com/#rescue"  class="rescue-i anchorLink" data-tab-id="rescue">Rescue</a></li>
	                                                <li><i class="fa fa-line-chart"></i><a href="http://local.kenneth.com/#augment"  class="augment-i anchorLink" data-tab-id="augment" >Augmentation</a></li>
	                                            </ul>
	                                        </div>
	                                    </li>
	                                    <li class="drop-section">
	                                        <div class="drop-right-block clear">
	                                            <h4>Technologies</h4>
	                                            <ul class="mr-90">
	                                                <li><a href="http://local.kenneth.com/java-page/">Java</a></li>
	                                                <li><a href="http://local.kenneth.com/?page_id=55 ">PHP</a></li>
	                                                <li><a href="http://local.kenneth.com/?page_id=57">.NET</a></li>
	                                            </ul>
	                                            <ul>
	                                                <li><a href="http://local.kenneth.com/?page_id=59 ">Ruby on Rails</a></li>
	                                                <li><a href="http://local.kenneth.com/?page_id=61 ">Mobile</a></li>
	                                            </ul>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </li>
	                            <li>
	                                <a href="http://local.kenneth.com/#itdifference">The Difference</a>
	                            </li>
	                            <li class="dropdown">
	                                <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">The Portfolio<i class="fa fa-chevron-down"></i></a>
	                                <ul class="dropdown-menu open-drop-menu">
	                                    <li class="drop-section">
	                                        <div class="drop-left-block">
	                                            <h4>Resources</h4>
	                                            <ul>
	                                                <li><i class="fa fa-pencil"></i><a href="/blog">Blog</a></li>
	                                                <li><i class="fa fa-file-text"></i><a href="http://local.kenneth.com/?page_id=65">Resources</a></li>
	                                                <li><i class="fa fa-briefcase"></i><a href="http://local.kenneth.com/?page_id=67 ">Case Studies</a></li>
	                                            </ul>
	                                        </div>
	                                    </li>
	                                    <li class="drop-section">
	                                        <div class="drop-right-block clear">
	                                            <h4>Industries</h4>
	                                            <ul class="mr-90">
	                                                <li><a href="http://local.kenneth.com/?page_id=69 ">Gaming</a></li>
	                                                <li><a href="http://local.kenneth.com/?page_id=71 ">Medical</a></li>
	                                                <li><a href="http://local.kenneth.com/?page_id=73">Financial</a></li>
	                                            </ul>
	                                            <ul>
	                                                <li><a href="http://local.kenneth.com/?page_id=75">Educational</a></li>
	                                                <li><a href=" http://local.kenneth.com/?page_id=88">Domains</a></li>
	                                                <li><a href="http://local.kenneth.com/?page_id=90 ">Startups</a></li>
	                                            </ul>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </li>
	                            <li>
	                                <a href="http://local.kenneth.com/#itteam">The Team</a>
	                            </li>
	                            <li>
	                                <a href="http://local.kenneth.com/#itpurpose">The Purpose</a>
	                            </li>
	                            <li class="mailcontact">
	                                <a href="http://local.kenneth.com/#contactus-title" class="top-contact-btn" data-disable-modal="true">
	                                    <i class="fa fa-phone"></i> Contact Us
	                                </a>
	                            </li>
	                        </ul>
	                        </div>
	                        </div>
	                    </nav>
	                    </div>
	                </nav>
	            </div>
	        </header>