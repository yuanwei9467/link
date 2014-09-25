<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Unify | Welcome...</title>
 
    

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://htmlstream.com/preview/unify-v1.5/favicon.ico">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/app/css/bootstrap.css">
    <link rel="stylesheet" href="/app/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/app/css/line-icons.css">
    <link rel="stylesheet" href="/app/css/font-awesome.css">



    <!-- CSS Theme -->
    <link rel="stylesheet" href="/app/css/default.css" id="style_color">
    <link rel="stylesheet" href="/app/css/custom.css" id="style_color">

    <style>
    .container{width:1170px;}
    </style>
</head>

<body>


<div class="wrapper">
<!--=== Header ===-->
<div class="header">
<!-- Topbar -->
<div class="topbar">
    <div class="container">
        <!-- Topbar Navigation -->
        <ul class="loginbar pull-right">
            <li> @if (Session::get('userid')){{Session::get('username')}} @else <a href="">请登录</a> @endif </li>
            <!--
            <li>
                <i class="fa fa-globe"></i>
                <a>Languages</a>
                <ul class="lenguages">
                    <li class="active">
                        <a href="#">English <i class="fa fa-check"></i></a>
                    </li>
                    <li><a href="#">Spanish</a></li>
                    <li><a href="#">Russian</a></li>
                    <li><a href="#">German</a></li>
                </ul>
            </li>
            <li class="topbar-devider"></li>
            <li><a href="http://htmlstream.com/preview/unify-v1.5/page_faq.html">Help</a></li>
            <li class="topbar-devider"></li>
            <li><a href="http://htmlstream.com/preview/unify-v1.5/page_login.html">Login</a></li>
        -->
        </ul>
        <!-- End Topbar Navigation -->
    </div>
</div>
<!-- End Topbar -->

<!-- Navbar -->
<div class="navbar navbar-default" role="navigation">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse" style="display:none;">
        <span class="sr-only">Toggle navigation</span>
        <span class="fa fa-bars"></span>
    </button>
    <a class="navbar-brand" href="http://htmlstream.com/preview/unify-v1.5/index.html">
        <img id="logo-header" src="/app/images/logo1-default.png" alt="Logo">
    </a>
</div>
<style>
.nav li{float:left;}
</style>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-responsive-collapse" style="display:block">
<ul class="nav navbar-nav" style="display:block;float:right;">
<!-- Home -->
<li class="dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        Home
    </a>
    <ul class="dropdown-menu">
        <li><a href="http://htmlstream.com/preview/unify-v1.5/index.html">Option 1: Default Page</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/One-Page/index.html">Option 2: One Page Template</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home1.html">Option 3: Layer Slider</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home2.html">Option 4: Revolution Slider</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home3.html">Option 5: Amazing Content</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home4.html">Option 6: Home Sidebar</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home5.html">Option 7: Home Flatty</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home6.html">Option 8: Home Magazine</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home7.html">Option 9: Home Portfolio</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home8.html">Option 10: Home Discover</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_jobs.html">Option 11: Home Jobs</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home9.html">Option 12: Home Boxed</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home11.html">Option 13: Home Boxed Image</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_home10.html">Option 14: Home Fixed Menu</a></li>
    </ul>
</li>
<!-- End Home -->

<!-- Pages -->
<li class="dropdown active">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        Pages
    </a>
    <ul class="dropdown-menu">
        <!-- About Pages -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">About Pages</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_about1.html">About Us</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_about.html">About Basic</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_about_me.html">About Me</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_about_our_team.html">About Our Team</a></li>
            </ul>
        </li>
        <!-- End About Pages -->

        <!-- Profile Pages -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Profile Dashboard Pages</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/profile.html">Profile Main Page</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/profile_me.html">Profile Overview</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/profile_users.html">Profile Users</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/profile_projects.html">Profile Projects</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/profile_comments.html">Profile Comments</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/profile_history.html">Profile History</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/profile_settings.html">Profile Settings</a></li>
            </ul>
        </li>
        <!-- End Profile Pages -->

        <!-- Job Pages -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Job Pages</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_jobs.html">Jobs Main Page</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_jobs_inner.html">Jobs Description Default</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_jobs_inner1.html">Jobs Description Basic</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_jobs_inner2.html">Jobs Description Min</a></li>
            </ul>
        </li>
        <!-- End Job Pages -->

        <!-- Email Tempaltes -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Email Templates</a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Email Corporate</a>
                    <ul class="dropdown-menu">
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_aqua.html">Corporate Aqua Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_blue.html">Corporate Blue Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_brown.html">Corporate Brown Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_dark_blue.html">Corporate Dark Blue Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_green.html">Corporate Green Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_light_green.html">Corporate Light Green Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_grey.html">Corporate Grey Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_orange.html">Corporate Orange Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_purple.html">Corporate Purple Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/corporate/email_corporate_red.html">Corporate Red Color</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Email Flat</a>
                    <ul class="dropdown-menu">
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_aqua.html">Flat Aqua Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_blue.html">Flat Blue Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_brown.html">Flat Brown Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_dark_blue.html">Flat Dark Blue Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_green.html">Flat Green Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_light_green.html">Flat Light Green Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_grey.html">Flat Grey Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_orange.html">Flat Orange Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_purple.html">Flat Purple Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/flat/email_flat_red.html">Flat Red Color</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Email Modern</a>
                    <ul class="dropdown-menu">
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_aqua.html">Modern Aqua Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_blue.html">Modern Blue Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_brown.html">Modern Brown Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_dark_blue.html">Modern Dark Blue Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_green.html">Modern Green Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_light_green.html">Modern Light Green Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_grey.html">Modern Grey Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_orange.html">Modern Orange Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_purple.html">Modern Purple Color</a></li>
                        <li><a target="_blank" href="http://htmlstream.com/preview/unify-v1.5/email-templates/modern/email_modern_red.html">Modern Red Color</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Service Pages</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_services.html">Our Services</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_services1.html">Our Services Basic</a></li>
            </ul>
        </li>
        <!-- End Email Tempaltes -->

        <!-- Funny Boxes -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_funny_boxes.html">Funny Boxes</a></li>
        <!-- End Funny Boxes -->

        <!-- Pricing Tables -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Pricing Tables</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_pricing_flat.html">Flat Pricing Tables</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_pricing_light.html">Light Pricing Tables</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_pricing_mega.html">Mega Pricing Tables</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_pricing.html">Default Pricing Tables</a></li>
            </ul>
        </li>
        <!-- End Pricing Tables -->

        <!-- Invoice Page -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_invoice.html">Invoice Page</a></li>
        <!-- End Invoice Page -->

        <!-- Search Results -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Search Results</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_search_inner.html">Default Search Results</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_search_table.html">Search Result Tables</a></li>
            </ul>
        </li>
        <!-- End Search Results -->

        <!-- Coming Soon -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_coming_soon.html">Coming Soon</a></li>
        <!-- End Coming Soon -->

        <!-- FAQs Pages -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">FAQs Pages</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_faq1.html">FAQs Page</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_faq.html">FAQs Basic</a></li>
            </ul>
        </li>
        <!-- End FAQs Pages -->

        <!-- Gallery Page -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_gallery.html">Gallery Page</a></li>
        <!-- End Gallery Page -->

        <!-- Login and Registration -->
        <li class="dropdown-submenu active">
            <a href="javascript:void(0);">Login and Registration</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_registration.html">Registration Page</a></li>
                <li class="active"><a href="http://htmlstream.com/preview/unify-v1.5/page_login.html">Login Page</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_registration1.html">Registration Option</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_login1.html">Login Option</a></li>
            </ul>
        </li>
        <!-- End Login and Registration -->

        <!-- Error Pages -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Error Pages</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_404_error.html">404 Error Default</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_404_error1.html">404 Error Option 1</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_404_error2.html">404 Error Option 2</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_404_error3.html">404 Error Option 3</a></li>
            </ul>
        </li>
        <!-- End Error Pages -->

        <!-- Clients Page -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_clients.html">Clients Page</a></li>
        <!-- End Clients Page -->

        <!-- Column Pages -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Column Pages</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_2_columns_left.html">2 Columns Page Left</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_2_columns_right.html">2 Columns Page Right</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/page_3_columns.html">3 Columns Page</a></li>
            </ul>
        </li>
        <!-- End Column Pages -->

        <!-- Privacy Policy -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_privacy.html">Privacy Policy</a></li>
        <!-- End Privacy Policy -->

        <!-- Terms Of Service -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_terms.html">Terms Of Service</a></li>
        <!-- End Terms Of Service -->
    </ul>
</li>
<!-- End Pages -->

<!-- Features -->
<li class="dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        Features
    </a>
    <ul class="dropdown-menu">
        <!-- Typography -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Typography</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_typo_general.html"><i class="fa fa-sort-alpha-asc"></i> General Typography</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_typo_headings.html"><i class="fa fa-magic"></i> Headings Options</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_typo_dividers.html"><i class="fa fa-ellipsis-h"></i> Deviders</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_typo_blockquote.html"><i class="fa fa-quote-left"></i> Blockquote Blocks</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_typo_boxshadows.html"><i class="fa fa-asterisk"></i> Box Shadows</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_typo_testimonials.html"><i class="fa fa-comments"></i> Testimonials</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_typo_tagline_boxes.html"><i class="fa fa-tasks"></i> Tagline Boxes</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_typo_grid.html"><i class="fa fa-align-justify"></i> Grid Layouts</a></li>
            </ul>
        </li>
        <!-- End Typography -->

        <!-- Buttons -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Buttons UI</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_btn_general.html"><i class="fa fa-flask"></i> General Buttons</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_btn_brands.html"><i class="fa fa-html5"></i> Brand &amp; Social Buttons</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_btn_effects.html"><i class="fa fa-bolt"></i> Loading &amp; Hover Effects</a></li>
            </ul>
        </li>
        <!-- End Buttons -->

        <!-- Icons -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Icons</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_icon_general.html"><i class="fa fa-chevron-circle-right"></i> General Icons</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_icon_fa.html"><i class="fa fa-chevron-circle-right"></i> Font Awesome Icons</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_icon_line.html"><i class="fa fa-chevron-circle-right"></i> Line Icons</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_icon_glyph.html"><i class="fa fa-chevron-circle-right"></i> Glyphicons Icons</a></li>
            </ul>
        </li>
        <!-- End Icons -->

        <!-- Content Boxes -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Content Boxes</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_box_general.html"><i class="fa fa-cog"></i> General Content Boxes</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_box_colored.html"><i class="fa fa-align-center"></i> Colored Boxes</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_box_funny.html"><i class="fa fa-bars"></i> Funny Boxes</a></li>
            </ul>
        </li>
        <!-- End Content Boxes -->

        <!-- Thumbnails -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_thumbails.html">Thumbnails</a></li>
        <!-- End Thumbnails -->

        <!-- Components -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Components</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_compo_messages.html"><i class="fa fa-comment"></i> Alerts &amp; Messages</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_compo_labels.html"><i class="fa fa-tags"></i> Labels &amp; Badges</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_compo_progress_bars.html"><i class="fa fa-align-left"></i> Progress Bars</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_compo_media.html"><i class="fa fa-volume-down"></i> Audio/Videos &amp; Images</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_compo_panels.html"><i class="fa fa-columns"></i> Panels</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_compo_pagination.html"><i class="fa fa-arrows-h"></i> Paginations</a></li>
            </ul>
        </li>
        <!-- End Components -->

        <!-- Accordion and Tabs -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_accordion_and_tabs.html">Accordion &amp; Tabs</a></li>
        <!-- End Accordion and Tabs -->

        <!-- Timeline -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Timeline</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_timeline1.html"><i class="fa fa-dot-circle-o"></i> Timeline Option 1</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_timeline2.html"><i class="fa fa-dot-circle-o"></i> Timeline Option 2</a></li>
            </ul>
        </li>
        <!-- End Timeline -->

        <!-- Carousel -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_carousels.html">Carousel Examples</a></li>
        <!-- End Carousel -->

        <!-- Forms -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Forms</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_form_general.html"><i class="fa fa-bars"></i> Common Bootstrap Forms</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_form_general1.html"><i class="fa fa-bars"></i> General Unify Forms</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_form_advanced.html"><i class="fa fa-bars"></i> Advanced Forms</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_form_layouts.html"><i class="fa fa-bars"></i> Form Layouts</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_form_layouts_advanced.html"><i class="fa fa-bars"></i> Advanced Layout Forms</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_form_states.html"><i class="fa fa-bars"></i> Form States</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_form_sliders.html"><i class="fa fa-bars"></i> Form Sliders</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_form_modals.html"><i class="fa fa-bars"></i> Modals</a></li>
            </ul>
        </li>
        <!-- End Forms -->

        <!-- Tables -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_table_general.html">Tables</a></li>
        <!-- End Tables -->

        <!-- Maps -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Maps</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_maps_google.html"><i class="fa fa-map-marker"></i> Google Maps</a></li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_maps_vector.html"><i class="fa fa-align-center"></i> Vector Maps</a></li>
            </ul>
        </li>
        <!-- End Maps -->

        <!-- Charts and Countdowns -->
        <li><a href="http://htmlstream.com/preview/unify-v1.5/feature_compo_charts.html">Charts &amp; Countdowns</a></li>
        <!-- End Charts and Countdowns -->

        <!-- Sub Level Menu -->
        <li class="dropdown-submenu">
            <a href="javascript:void(0);">Sub Level 1</a>
            <ul class="dropdown-menu">
                <li><a href="http://htmlstream.com/preview/unify-v1.5/index.hmtl">Sub Level 2</a></li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Sub Level 2</a>
                    <ul class="dropdown-menu">
                        <li><a href="http://htmlstream.com/preview/unify-v1.5/index.hmtl">Sub Level 3</a></li>
                        <li><a href="http://htmlstream.com/preview/unify-v1.5/index.hmtl">Sub Level 3</a></li>
                        <li><a href="http://htmlstream.com/preview/unify-v1.5/index.hmtl">Sub Level 3</a></li>
                        <li><a href="http://htmlstream.com/preview/unify-v1.5/index.hmtl">Sub Level 3</a></li>
                    </ul>
                </li>
                <li><a href="http://htmlstream.com/preview/unify-v1.5/index.hmtl">Sub Level 2</a></li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Sub Level 2</a>
                    <ul class="dropdown-menu">
                        <li><a href="http://htmlstream.com/preview/unify-v1.5/index.hmtl">Sub Level 3</a></li>
                        <li><a href="http://htmlstream.com/preview/unify-v1.5/index.hmtl">Sub Level 3</a></li>
                        <li><a href="http://htmlstream.com/preview/unify-v1.5/index.hmtl">Sub Level 3</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- End Sub Level Menu -->
    </ul>
</li>
<!-- End Features -->

<!-- Portfolio -->
<li class="dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        Portfolio
    </a>
    <ul class="dropdown-menu">
        <li><a href="http://htmlstream.com/preview/unify-v1.5/portfolio_text_blocks.html">Portfolio Text Blocks</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/portfolio_2_column.html">Portfolio 2 Columns</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/portfolio_3_column.html">Portfolio 3 Columns</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/portfolio_4_column.html">Portfolio 4 Columns</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/portfolio_item.html">Portfolio Item Option 1</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/portfolio_item1.html">Portfolio Item Option 2</a></li>
    </ul>
</li>
<!-- Ens Portfolio -->

<!-- Blog -->
<li class="dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        Blog
    </a>
    <ul class="dropdown-menu">
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_page.html">Blog Page</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_large.html">Blog Large</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_medium.html">Blog Medium</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_full_width.html">Blog Full Width</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_timeline.html">Blog Timeline</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_masonry_3col.html">Masonry Grid Blog</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_right_sidebar.html">Blog Right Sidebar</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_left_sidebar.html">Blog Left Sidebar</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_item_option1.html">Blog Item Option 1</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/blog_item_option2.html">Blog Item Option 2</a></li>
    </ul>
</li>
<!-- End Blog -->

<!-- Contacts -->
<li class="dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        Contacts
    </a>
    <ul class="dropdown-menu">
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_contact1.html">Contacts Default</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_contact2.html">Contacts Option 1</a></li>
        <li><a href="http://htmlstream.com/preview/unify-v1.5/page_contact3.html">Contacts Option 2</a></li>
    </ul>
</li>
<!-- End Contacts -->

<!-- Search Block -->
<li>
    <i class="search fa fa-search search-btn"></i>
    <div class="search-open">
        <div class="input-group animated fadeInDown">
            <input class="form-control" placeholder="Search" type="text">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="button">Go</button>
                                    </span>
        </div>
    </div>
</li>
<!-- End Search Block -->
</ul>
</div><!--/navbar-collapse-->
</div>
</div>
<!-- End Navbar -->
</div>
<!--=== End Header ===-->

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">
         @if(isset($title))
         {{$title}}
          @else
          17T8
        @endif
        </h1>
        <ul class="pull-right breadcrumb">
            <li><a href="http://htmlstream.com/preview/unify-v1.5/index.html">Home</a></li>
            <li><a href="">Pages</a></li>
            <li class="active">Login</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content">
    @yield('content')
</div><!--/container-->
<!--=== End Content Part ===-->
<style>
.col-md-4{
    width:33.3333%;
}
</style>
<!--=== Footer ===-->
<div class="footer">
    <div class="container" style="width:1170px;">
        <div class="row">
            <div class="col-md-4 md-margin-bottom-40" style="float:left;">
                <!-- About -->
                <div class="headline"><h2>About</h2></div>
                <p class="margin-bottom-25 md-margin-bottom-40">Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals.</p>
                <!-- End About -->

                <!-- Monthly Newsletter -->
                <div class="headline"><h2>Monthly Newsletter</h2></div>
                <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                <form class="footer-subsribe">
                    <div class="input-group">
                        <input class="form-control" placeholder="Email Address" type="text">
                            <span class="input-group-btn">
                                <button class="btn-u" type="button">Subscribe</button>
                            </span>
                    </div>
                </form>
                <!-- End Monthly Newsletter -->
            </div><!--/col-md-4-->

            <div class="col-md-4 md-margin-bottom-40" style="float:left;">
                <!-- Recent Blogs -->
                <div class="posts">
                    <div class="headline"><h2>Recent Blog Entries</h2></div>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="Unify%20_%20Login%20Page_files/6.jpg" alt=""></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="Unify%20_%20Login%20Page_files/10.jpg" alt=""></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="Unify%20_%20Login%20Page_files/11.jpg" alt=""></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                </div>
                <!-- End Recent Blogs -->
            </div><!--/col-md-4-->

            <div class="col-md-4"  style="float:left;">
                <!-- Contact Us -->
                <div class="headline"><h2>Contact Us</h2></div>
                <address class="md-margin-bottom-40">
                    25, Lorem Lis Street, Orange <br>
                    California, US <br>
                    Phone: 800 123 3456 <br>
                    Fax: 800 123 3456 <br>
                    Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                </address>
                <!-- End Contact Us -->

                <!-- Social Links -->
                <div class="headline"><h2>Stay Connected</h2></div>
                <ul class="social-icons">
                    <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                    <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                    <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                    <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                    <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                    <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                    <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                </ul>
                <!-- End Social Links -->
            </div><!--/col-md-4-->
        </div>
    </div>
</div><!--/footer-->
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>
                    2014 © Unify. ALL Rights Reserved.
                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                </p>
            </div>
            <div class="col-md-6">
                <a href="http://htmlstream.com/preview/unify-v1.5/index.html">
                    <img class="pull-right" id="logo-footer" src="Unify%20_%20Login%20Page_files/logo2-default.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div><!--/copyright-->
<!--=== End Copyright ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script src="/app/js/ga.js" async="" type="text/javascript"></script>

<script type="text/javascript" src="/app/js/jquery-migrate-1.js"></script>
<script type="text/javascript" src="/app/js/bootstrap.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/app/js/back-to-top.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/app/js/app.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-29166220-1']);
    _gaq.push(['_setDomainName', 'htmlstream.com']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>

<div title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 0; cursor: pointer;" id="topcontrol"><img src="Unify%20_%20Login%20Page_files/up.png" style="width:51px; height:42px"></div></body></html>