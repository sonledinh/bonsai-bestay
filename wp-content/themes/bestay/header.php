<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bestay
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header> 
    <div class="header-menu">
        <div class="container">  
            <div class="row align-items-center">
                <div class="col-md-9">
                    <?php 
                        // wp_nav_menu( array(
                        //     'container'       => 'div',
                        //     'container_class' => 'menu', 
                        //     'menu_class'      => 'menu',
                        // ) ); 
                    $arg = array(
                        'container' => 'div',
                        'container_class' => 'menu', 
                        'menu_class' => 'nav_menu_css_class'
                    );
                    wp_nav_menu($arg); 

                    ?>

                    <!-- <div class="menu"> 
                        <ul>
                            <li><div class="logo"><a href="index.php"> <img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid" alt=""></a></div></li>
                            <li><a href="product.php" class="active">Products</a></li>
                            <li><a href="trade.php">Trade</a></li>
                            <li><a href="aidrop.php">Airdrop</a></li>
                            <li><a href="guide.php">Guide</a></li>
                            <li><a href="#">Lastest News</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-md-3 text-right">
                    <div class="translate">
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle" data-toggle="dropdown">EN</button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">VN</a>
                                <a href="#" class="dropdown-item">EN</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <div class="btn-menu text-left"><a href="javascript:void(0)"> <img src="<?php echo __BASE_URL__ ?>/images/bar.png" class="img-fluid" alt=""></a></div>
                    <?php wp_nav_menu( array(
                        'theme_location'  => '',
                        'menu'            => '',
                        'container'       => 'div',
                        'container_class' => 'sub-menu', 
                        'container_id'    => '',
                        'menu_class'      => 'sub-menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id = "" class = "">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ) ); ?>
                    <!-- <div class="sub-menu">
                        <ul>
                            <li><a href="" class="active">Products</a></li>
                            <li><a href="">Trade</a></li>
                            <li><a href="">Airdrop</a></li>
                            <li><a href="">Guide</a></li>
                            <li><a href="">Lastest News</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-6">
                    <div class="logo-mobile text-center"><a href="index.php"> <img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid " alt=""></a></div>
                </div>
                <div class="col-3">
                    <div class="btn-trans text-right"><a href="javascript:void(0)"> <img src="<?php echo __BASE_URL__ ?>/images/trans.png" class="img-fluid" alt=""></a></div>
                    <div class="sub-trans">
                        <ul>
                            <li><a href="" class="active">English</a></li>
                            <li><a href="">Tiếng Việt</a></li>
                            <li><a href="">한국어</a></li>
                            <li><a href="">日本語</a></li>
                            <li><a href="">বাংলা</a></li>
                            <li><a href="">اردو</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ovgray"></div>
</header>   



<style>
    #wpadminbar {
        display: none;
    }
</style>