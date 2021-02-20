<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <!-- title -->
    <title><?php echo wp_get_document_title() ?></title>
    <!-- metas -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Tony - Portfolio Template">
    <meta name="description" content="Tony - Portfolio Template">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico"> -->
    <!-- plugin CSS -->
    <?php wp_head() ?>
</head>
<!-- Body Start -->

<body data-spy="scroll" data-target="#navbar-collapse-toggle" data-offset="70">
    <!-- page loading -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    <!-- end page loading -->
    <header>
        <nav class="navbar header-nav header-white navbar-expand-lg">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><div class="logo"></div></a>
                <!-- / -->
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-toggle" aria-controls="navbar-collapse-toggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- / -->
                <!-- Top Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse-toggle">
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" href="<?php echo get_home_url(); ?>#home">Главная</a></li>
                        <li><a class="nav-link" href="<?php echo get_home_url(); ?>#about">Обо мне</a></li>
                        <li><a class="nav-link" href="<?php echo get_home_url(); ?>#services">Что я предлагаю</a></li>
                        <li><a class="nav-link" href="<?php echo get_home_url(); ?>#work">Портфолио</a></li>
                        <li><a class="nav-link" href="<?php echo get_home_url(); ?>#blog">Блог</a></li>
                        <li><a class="nav-link" href="<?php echo get_home_url(); ?>#contactus">Контакты</a></li>
                    </ul>
                </div>
                <!-- / -->
            </div><!-- Container -->
        </nav> <!-- Navbar -->
    </header>