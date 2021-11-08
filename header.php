<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./swiper/swiper.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/83d1986101.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="section-ad">
            <div class="section-ad__wrapp wrapp-size">
                <a href="#" target="_blank">Daily NetLease demo at 2pm</a>
                <span class="hide">Hide</span>
            </div>
        </div>
        <div class="header-wrapp wrapp-size">
            <div class="header__logo nav-mobile-logo">
                <a href="<?php bloginfo('url') ?>"><img src="./images//logo.svg" alt="logo"></a>
            </div>
            <div class="header__icon-menu"></div>
            <nav class="header__nav">
				<?php wp_nav_menu( [
					'theme_location'  => 'topnetgain',
					'menu_class'      => 'header__menu',
					'container'       => 'div',
					] ); 
				?>
                <div class="header__login">
                    <a href="#" class="header__login-item button-transparent button">GET DEMO<i class="fas fa-chevron-right"></i></a>
                    <a href="#" class="header__login-item button">sign in<i class="fas fa-chevron-right"></i></a>
                </div>
            </nav>
        </div>
    </header>