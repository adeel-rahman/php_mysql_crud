<html lang="en">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
        RASHID FAMILY LAW
</title>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_directory_uri();?>/assets/fonts/font-awesome/all.min.css">
<link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_directory_uri();?>/assets/fonts/font-awesome/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" crossorigin="anonymous">
<link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_directory_uri();?>/assets/fonts/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/extra.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/colors/green.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/style.css" media="screen">
</head>
<body>

<header id="header-wrap">

<div class="header-navbar sta">
	<div class="navbar-area">
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<nav class="navbar navbar-expand-lg">
	<a class="navbar-brand" href="index.html">
	<img class="logoimg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.png" alt="Logo">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="toggler-icon"></span>
	<span class="toggler-icon"></span>
	<span class="toggler-icon"></span>
	</button>
	<?php
	$home="";
	$about="";
	if ( is_home() ) {
	$home="active";
	}else{ 
	$about="active";
	} ?>
	<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
	<ul class="navbar-nav ml-auto">
	<li class="nav-item <?php echo $home;?>">
	<a href="<?php echo home_url( '/' );?>">HOME<button class="sub-nav-toggler"> <span></span> </button></a>
	</li>
	<li class="nav-item" id="collaboratives">
	<a href="#collaborative">COLLABORATIVE PROCESS<button class="sub-nav-toggler"> <span></span> </button></a>
	</li>

	<li class="nav-item" id="unbundleds">
	<a href="#unbundled">UNBUNDLED SERVICES<button class="sub-nav-toggler"> <span></span> </button></a>
	</li>
	<li class="nav-item" id="mediations">
	<a href="#mediation">MEDIATION<button class="sub-nav-toggler"> <span></span> </button></a>
	</li>
	<li class="nav-item" id="abouts">
	<a href="#about">ABOUT<button class="sub-nav-toggler"> <span></span> </button></a>
	</li>
	<li class="nav-item <?php echo $about;?>" id="blogs">
	<a href="#blog">Blog<button class="sub-nav-toggler"> <span></span> </button></a>
	</li>
	<li class="nav-item" id="contacts">
	<a href="#contact">CONTACT<button class="sub-nav-toggler"> <span></span> </button></a>
	</li>	
	</ul>
	</div> 
	<div class="navbar-search d-none d-sm-block">
	<a href="https://www.facebook.com/rashidfamilylaw"><i class="fab fa-facebook-f icon-round"></i></a>
	<a href="#"><i class="fab fa-twitter icon-round"></i></a>
	<a href="https://www.instagram.com/mikailrashid8"><i class="fab fa-instagram icon-round"></i></a>
	<a href="#"><i class="fab fa-google-plus-g icon-round"></i></a>
	<a href="#"><i class="fab fa-youtube icon-round"></i></a>
	</div>
	</nav> 
	</div>
	</div> 
	</div> 
</div> 
</div> 
</header>

