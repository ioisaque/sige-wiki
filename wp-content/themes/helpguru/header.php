<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
<body <?php body_class(''); ?> itemtype="http://schema.org/WebPage" itemscope="itemscope">
<!-- #ht-site-container -->
<div id="ht-site-container" class="clearfix ht-layout-<?php echo get_theme_mod('ht_setting_widthmode', 'fullwidth') ?> ">

    <!-- #header -->
    <header id="site-header" class="clearfix" role="banner" itemtype="http://schema.org/WPHeader" itemscope="itemscope">	
    <div class="ht-container clearfix">
	
	<?php if (!is_user_logged_in()){ ?>
		<div class="login-nav">
		  <a href="wp-login.php"><i class="fas fa-sign-in-alt"></i> | Login</a>
		</div>
	<?php }else{?>
		<div class="login-nav">
		  <a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fas fa-sign-in-alt"></i> | Logout</a>	
		</div>
	<?php }?>
	
    <!-- #logo -->
    <center id="logo">
        <a title="<?php bloginfo( 'name' ); ?>" href="<?php echo home_url(); ?>">
            <img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo ht_theme_logo(); ?>" />
                <?php if ( is_front_page() ) { ?>
                    <h1 class="site-title" itemprop="headline"><?php bloginfo( 'name' ); ?></h1>
                <?php } ?>
        </a>
    </center>
    <!-- /#logo -->

    <?php if ( has_nav_menu( 'primary-nav' ) ) { ?>
        <!-- #primary-nav -->
        <nav id="nav-primary" role="navigation" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">
            <button id="ht-nav-toggle"><span><?php _e('Menu','helpguru') ?></span></button>
            <?php wp_nav_menu( array('theme_location' => 'primary-nav', 'menu_id' => false, 'menu_class' => false, 'container_id' => 'nav-primary-menu', 'container_class' => '' )); ?>
        </nav>
        <!-- /#primary-nav -->
    <?php } ?>

    </div>
    </header>
    <!-- /#header -->