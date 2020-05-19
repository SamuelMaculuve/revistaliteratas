<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <title></title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Literatura Moçambicana">

    <meta name="keywords" content="Literatura,Letras,Musica,Teatro,moçambique,cultura">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">

    <?php wp_head(); ?>

    <style>
        .woocommerce-input-wrapper{
            width: 100%;
            display: block;
        }
        .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea{
            padding: .25em;
            height: 30px;
            border: 1px solid #999;
            background: #f0f0f0;
            border: 0;
        }
    </style>
</head>
<body class="animsition">

<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="topbar">

        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{URL::to('/')}}"><img src="{{asset('img/icons/logo-05.png')}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="main-menu-m">
                <li>
                    <a href="{{URL::to('/')}}">Inicio</a>
                </li>

                <li>
                    <a href="{{URL::to('/categoria/letras')}}">Letras</a>
                </li>

                <li>
                    <a href="{{URL::to('/categoria/teatro')}}">Teatro </a>
                </li>

                <li>
                    <a href="{{URL::to('/categoria/música')}}">Música</a>
                </li>

                <li>
                    <a href="{{URL::to('/categoria/artes')}}">Artes</a>
                </li>

                <li>
                    <a href="{{URL::to('/categoria/poesia')}}">Poesia</a>
                </li>

                <li>
                    <a href="{{URL::to('/categoria/contos')}}">Contos</a>
                </li>

                <li>
                    <a href="{{URL::to('/categoria/Iniciativas')}}">Iniciativas</a>
                </li>
                <li>
                    <a href="{{URL::to('/categoria/agenda')}}">Agenda</a>
                </li>
            </ul>
        </div>

        <!--  -->
        <div class="wrap-logo container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="{{URL::to('/')}}"><img src="{{asset('img/icons/logo.gif')}}" alt="LOGO"></a>
            </div>

            <!-- Banner -->
            <div class="banner-header">
                <a href="#"><img src="{{asset('img/cONVERSASPARAENGANARTEMP_02-02.jpg')}}" alt="IMG"></a>
            </div>
        </div>

        <!--  -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="{{URL::to('/')}}">
                        <img src="{{asset('img/icons/logo-05.png')}}" alt="LOGO">
                    </a>

                    <ul class="main-menu">
                        <li class="mega-menu-item">
                            <a href="{{URL::to('/')}}">Inicio</a>
                        </li>

                        <li class="mega-menu-item">
                            <a href="http://localhost/revistaliteratas/shop/">Produto</a>
                        </li>

                        <li class="mega-menu-item">
                            <a href="{{URL::to('/categoria/teatro')}}">Teatro</a>
                        </li>

                        <li class="mega-menu-item">
                            <a href="{{URL::to('/categoria/música')}}">Música</a>
                        </li>

                        <li class="mega-menu-item">
                            <a href="{{URL::to('/categoria/artes')}}">Artes</a>
                        </li>

                        <li class="mega-menu-item">
                            <a href="{{URL::to('/categoria/poesia')}}">Poesia</a>
                        </li>

                        <li class="mega-menu-item">
                            <a href="{{URL::to('/categoria/contos')}}">Contos</a>
                        </li>
                        <li class="mega-menu-item">
                            <a href="{{URL::to('/categoria/reportagem')}}">Reportagem</a>

                        </li>
                        <li class="mega-menu-item">
                            <a href="{{URL::to('/categoria/Iniciativas')}}">Iniciativas</a>
                        </li>
                        <li class="mega-menu-item">
                            <a href="{{URL::to('/categoria/agenda')}}">Agenda</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
