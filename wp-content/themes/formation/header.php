<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Formation
 * @since Formation 2.0
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title><?php if(is_front_page()){ ?>Корпорация Спектр - Системы безопасности и противопожарной защиты<?php } else{ echo the_title(); }?></title>

<meta name="description" content="<?php if(is_front_page()){ ?>Проектирование, мониторинг и обслуживание систем видеонаблюдения, охраны и пожаротушения. Комплекс противопожарных услуг согласно пожарного предписания<?php } else{ echo get_post_meta($post->ID, 'description', true); }?>"> 

 <meta name="keywords" content="<?php if(is_front_page()){ ?>корпорация спектр, видеонаблюдение, пожарная сигнализация, огнезащита, охранная сигнализация, огнетушители, обучение пожтехминимуму, птм, пожарные рукава, зарядка перезарядка заправка огнетушителей, молниезащита, пожаротушение, дымоудаление, противопожарные двери e1-30<?php } else{ echo get_post_meta($post->ID, 'keywords', true); }?>">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<style>
.caption_wrap{display:none;}
<?php 
if ( is_home() ) { 
echo '#wrap, #main{background-color:rgba(20,20,20,0);}.section_thumbnails h3{color:#fff}.recent_title{background-color:#111;}';
}
?>
</style>
</head>

<body <?php body_class(); ?>>
<div id="wrap">
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
    <div id="masthead-wrap">
    <div id="topbar_container">
    <div class="topbar">
    <div class="topbar_content_left"><?php echo get_theme_mod( 'telnumber_textbox_header_one' ); ?></div>
	<div class="topbar_content_right"><div style="float:right;"><a href="/ukr"><img src="ukr.png" width="24" /></a><a href="/"><img src="rus.png" width="24" /></a></div><div class="share42init" style="float:right;"></div>
<script type="text/javascript" src="http://spektr.dp.ua/share42.js"></script><?php /* get_template_part( 'inc/socmed' ); */ ?></div>
    </div>
    </div>
<header id="masthead" class="site-header header_container" role="banner">
    <?php if ( get_theme_mod( 'Formation_logo' ) ) : ?>
    <div class="site-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'Formation_logo' ); ?>" width="200" style="width:200px;" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
    </div>
<?php else : ?>

		<div class="site-introduction">
			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p> 
		</div>
<?php endif; ?>

		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'Formation' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'Formation' ); ?>"><?php _e( 'Skip to content', 'Formation' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
	</header><!-- #masthead .site-header -->
	</div><!-- #masthead-wrap -->
    <div class="header-image">
	<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
			</a>
		<?php } // if ( ! empty( $header_image ) ) ?>
	</div>
	<div id="main" class="site-main">


