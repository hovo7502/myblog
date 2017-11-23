<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php if(is_front_page()){ 
            the_title();
        }else{ 
            wp_title('');
        } echo " | " . esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/svg.svg" />
                </a> -->
                <h1>hover</h1>
            </div>
            <div class="col-md-10">
                <div class="masthead">
                    <div id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <div class="headerMenuClick">
                               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=" .navbar-menubuilder">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                               </button>
                            </div>
                        </div>
                        <div class="slideMenuOpen">
                            <?php wp_nav_menu(array('menu'=> 'Header menu', 'menu_class' =>'nav navbar-nav navbar-left','   container_class'=> ' navbar-collapse navbar-menubuilder'));?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>