<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Seo Meta -->
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">

    <title>Listen App - Online Music Streaming App</title>

    <!-- Favicon -->
    <link href="<?php echo base_url();  ?>assets/images/logos/favicon.png" rel="icon"/>

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="<?php echo base_url();  ?>assets/images/logos/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();  ?>assets/images/logos/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();  ?>assets/images/logos/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo base_url();  ?>assets/images/logos/touch-icon-ipad-retina.png">

    <!-- Styles -->
    <link href="<?php echo base_url();  ?>assets/css/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();  ?>assets/css/styles.bundle.css" rel="stylesheet" type="text/css"/>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Begin | Loading [[ Find at scss/framework/base/loader/loader.scss ]] -->
<div id="loading">
    <div class="loader">
        <div class="eq">
            <span class="eq-bar eq-bar--1"></span>
            <span class="eq-bar eq-bar--2"></span>
            <span class="eq-bar eq-bar--3"></span>
            <span class="eq-bar eq-bar--4"></span>
            <span class="eq-bar eq-bar--5"></span>
            <span class="eq-bar eq-bar--6"></span>
        </div>
        <span class="text">Loading</span>
    </div>
</div>
<!-- End | Loading -->

<!-- Begin | Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
<div id="wrapper" data-scrollable="true">

    <!-- Begin | Sidebar [[ Find at scss/framework/base/sidebar/left/sidebar.scss ]] -->
    <aside id="sidebar" class="sidebar-primary">

        <!-- Begin | Sidebar Header -->
        <div class="sidebar-header d-flex align-items-center">
            <a href="../index.html" class="brand">
                <img src="<?php echo base_url();  ?>assets/images/logos/logo.svg" alt="listen-app">
            </a>

            <button type="button" class="btn p-0 ml-auto" id="hideSidebar">
                <i class="ion-md-arrow-back h3"></i>
            </button>

            <button type="button" class="btn toggle-menu" id="toggleSidebar">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <!-- End | Sidebar Header -->

        <!-- Begin | Navbar [[ Find at scss/framework/components/navbar/navbar.scss ]] -->
        <?php include('include/left_account.php'); ?>
        <!-- End | Navbar -->

        <!-- Begin | Sidebar Footer -->
        <div class="sidebar-footer">
            <a href="add-music.html" class="btn btn-block btn-danger btn-air btn-bold">
                <i class="ion-md-musical-note"></i>
                <span>Add Music</span>
            </a>
        </div>
        <!-- End | Sidebar Footer -->

    </aside>
    <!-- End | Sidebar -->

    <!-- Begin | Page Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
    <main id="pageWrapper">

        <!-- Begin | Header [[ Find at scss/framework/base/header/header.scss ]] -->
       <?php include('include/header.php'); ?>
        <!-- End | Header -->

        <!-- Page Banner [[ Find at scss/base/core.scss ]] -->
        <div class="banner bg-home"></div>

        <!-- Begin | Main Container [[ Find at scss/base/core.scss ]] -->
        <div class="main-container" id="appRoute">

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Top Charts</h4>
                            <p>Listen top chart</p>
                        </div>
                        <a href="<?php echo base_url(); ?>index.php/home/songs" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-5 arrow-pos-3">
                <?php foreach($all_song as $allsongs){
                    ?>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "<?php echo $allsongs['name']; ?>", "artist": "Arebica Luna", "album": "Mummy", "url": "<?php echo base_url();  ?>assets/songs/<?php echo $allsongs['filename']; ?>", "cover_art_url": "<?php echo base_url();  ?>uploads/<?php echo $allsongs['thumbnail_128X128']; ?>"}'>
                                <img src="<?php echo base_url();  ?>assets/thumbnail/320X320/<?php echo $allsongs['thumbnail_320X320']; ?>" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="<?php echo base_url(); ?>index.php/home/song_details/<?php echo $allsongs['id']; ?>" class="custom-card--link mt-2">
                            <h6><?php echo $allsongs['name']; ?></h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                <?php } ?>

                    
                    
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>New Releases</h4>
                            <p>Listen recently release music</p>
                        </div>
                        <a href="<?php echo base_url(); ?>home/songs" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-5 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "<?php echo base_url();  ?>assets/audio/ringtone-1.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/1.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "<?php echo base_url();  ?>assets/audio/ringtone-2.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/2.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "<?php echo base_url();  ?>assets/audio/ringtone-3.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/3.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "<?php echo base_url();  ?>assets/audio/ringtone-4.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/4.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "<?php echo base_url();  ?>assets/audio/ringtone-5.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/5.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "<?php echo base_url();  ?>assets/audio/ringtone-6.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/6.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Featured Artists</h4>
                            <p>Select you best to listen</p>
                        </div>
                        <a href="artists.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-2" >
                <?php  if(!empty($all_artists)){
                    foreach($all_artists as $allArtists){
                    ?>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="artist-details.html">
                                <img src="<?php echo base_url();  ?>assets/Artist/<?php echo $allArtists['image']; ?>" alt="Nutty Nina" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="artist-details.html" class="custom-card--link mt-2">
                            <h6 class="mb-0"><?php echo $allArtists['name']; ?></h6>
                        </a>
                    </div>
                    <?php } } ?>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Your Playlist</h4>
                            <p>You best to listen</p>
                        </div>
                        <a href="playlist.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-4 arrow-pos-1">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/1.jpg" alt="DJ Remix" class="card-img--radius-lg">
                                <span class="bg-blur">DJ Remix</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/2.jpg" alt="Rock Band" class="card-img--radius-lg">
                                <span class="bg-blur">Rock Band</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/3.jpg" alt="Solo Special" class="card-img--radius-lg">
                                <span class="bg-blur">Solo Special</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/4.jpg" alt="Romantic" class="card-img--radius-lg">
                                <span class="bg-blur">Romantic</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/5.jpg" alt="GYM" class="card-img--radius-lg">
                                <span class="bg-blur">GYM</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/6.jpg" alt="Retro Special" class="card-img--radius-lg">
                                <span class="bg-blur">Retro Special</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Retro Classic</h4>
                            <p>Old is gold</p>
                        </div>
                        <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-3">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "<?php echo base_url();  ?>assets/audio/ringtone-1.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/1.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>I Love You Mummy</h6>
                            <p>Arebica Luna</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "<?php echo base_url();  ?>assets/audio/ringtone-2.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/2.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Shack your butty</h6>
                            <p>Gerrina Linda</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "<?php echo base_url();  ?>assets/audio/ringtone-3.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/3.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Do it your way(Female)</h6>
                            <p>Zunira Willy & Nutty Nina</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "<?php echo base_url();  ?>assets/audio/ringtone-4.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/4.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Say yes</h6>
                            <p>Johnny Marro</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                    <li><span class="badge badge-pill badge-danger"><i class="la la-heart"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "<?php echo base_url();  ?>assets/audio/ringtone-5.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/5.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Where is your letter</h6>
                            <p>Jina Moore & Lenisa Gory</p>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <div class="custom-card--info">
                                <ul class="custom-card--labels d-flex">
                                    <li><span class="badge badge-pill badge-warning"><i class="la la-star"></i></span></li>
                                </ul>
                                <div class="dropdown dropdown-icon">
                                    <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ion-md-more"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link favorite">
                                                <i class="la la-heart-o"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-plus"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:void(0);" class="dropdown-link">
                                                <i class="la la-share-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "<?php echo base_url();  ?>assets/audio/ringtone-6.mp3", "cover_art_url": "<?php echo base_url();  ?>assets/images/cover/small/6.jpg"}'>
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="song-details.html" class="custom-card--link mt-2">
                            <h6>Hey not me</h6>
                            <p>Rasomi Pelina</p>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Radio</h4>
                            <p>Listen live now</p>
                        </div>
                        <a href="stations.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-2">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/1.jpg" alt="International" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">International</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/2.jpg" alt="Network" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Network</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/3.jpg" alt="Alpha Gamma" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Alpha Gamma</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/4.jpg" alt="Leanne Hutton" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Leanne Hutton</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/5.jpg" alt="K S N F" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">K S N F</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/6.jpg" alt="Clay Gandy" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Clay Gandy</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/9.jpg" alt="Get Reehl" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Get Reehl</h6>
                        </a>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/cover/large/10.jpg" alt="Morning one" class="card-img--radius-lg">
                            </a>
                        </div>

                        <a href="javascript:void(0);" class="custom-card--link mt-2">
                            <h6 class="mb-0">Morning one</h6>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

            <!-- Begin | Section [[ Find at scss/base/core.scss ]] -->
            <div class="section">

                <div class="heading">
                    <div class="d-flex flex-wrap align-items-end">
                        <div class="flex-grow-1">
                            <h4>Genres</h4>
                            <p>Select you genre</p>
                        </div>
                        <a href="genres.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                    </div>
                    <hr>
                </div>

                <div class="carousel-item-6 arrow-pos-1">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/1.jpg" alt="Remix Songs" class="card-img--radius-md">
                                <span class="bg-blur">Remix Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/2.jpg" alt="Rock Songs" class="card-img--radius-md">
                                <span class="bg-blur">Rock Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/3.jpg" alt="Sufi Songs" class="card-img--radius-md">
                                <span class="bg-blur">Sufi Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/4.jpg" alt="Romantic Songs" class="card-img--radius-md">
                                <span class="bg-blur">Romantic Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/5.jpg" alt="Sports Songs" class="card-img--radius-md">
                                <span class="bg-blur">Sports Songs</span>
                            </a>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="javascript:void(0);">
                                <img src="<?php echo base_url();  ?>assets/images/background/horizontal/6.jpg" alt="Old Songs" class="card-img--radius-lg">
                                <span class="bg-blur">Old Songs</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End | Section -->

        </div>
        <!-- End | Main Container -->

        <!-- Begin | Footer [[ Find at scss/framework/base/footer/footer.scss ]] -->
        <footer id="footer" class="bg-img">
            <div class="footer-content">
                <a href="#" class="email">info@listenapp.com</a>
                <div class="platform-btn-inline">
                    <a href="#" class="btn btn-dark btn-air platform-btn">
                        <i class="ion-logo-android"></i>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Available on</span>
                            <span class="platform-name">Android</span>
                        </div>
                    </a>
                    <a href="#" class="btn btn-danger btn-air platform-btn">
                        <i class="ion-logo-apple"></i>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Available on</span>
                            <span class="platform-name">App Store</span>
                        </div>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End | Footer -->

        <!-- Begin | Audio Player [[ Find at scss/framework/base/audio-player/audio-player.scss ]] -->
        <div id="audioPlayer" class="player-primary">

            <!-- Begin | Audio Player Progress -->
            <div id="progress-container">
                <input type="range" class="amplitude-song-slider">
                <progress class="audio-progress audio-progress--played amplitude-song-played-progress"></progress>
                <progress class="audio-progress audio-progress--buffered amplitude-buffered-progress" value="0"></progress>
            </div>
            <!-- End | Audio Player Progress -->

            <!-- Begin | Audio -->
            <div class="audio">
                <div class="song-image"><img data-amplitude-song-info="cover_art_url" src="<?php echo base_url();  ?>assets/images/cover/small/1.jpg" alt=""></div>
                <div class="song-info pl-3">
                    <span class="song-name d-inline-block text-truncate" data-amplitude-song-info="name"></span>
                    <span class="song-artists d-block text-muted" data-amplitude-song-info="artist"></span>
                </div>
            </div>
            <!-- End | Audio -->

            <!-- Begin | Audio Controls -->
            <div class="audio-controls">
                <div class="audio-controls--left d-flex mr-auto">
                    <button class="btn btn-icon-only amplitude-repeat"><i class="ion-md-sync"></i></button>
                </div>
                <div class="audio-controls--main d-flex">
                    <button class="btn btn-icon-only amplitude-prev"><i class="ion-md-skip-backward"></i></button>
                    <button class="btn btn-air btn-pill btn-default btn-icon-only amplitude-play-pause">
                        <i class="ion-md-play"></i>
                        <i class="ion-md-pause"></i>
                    </button>
                    <button class="btn btn-icon-only amplitude-next"><i class="ion-md-skip-forward"></i></button>
                </div>
                <div class="audio-controls--right d-flex ml-auto">
                    <button class="btn btn-icon-only amplitude-shuffle amplitude-shuffle-off"><i class="ion-md-shuffle"></i></button>
                </div>
            </div>
            <!-- End | Audio Controls -->

            <!-- Begin | Audio Info -->
            <div class="audio-info d-flex align-items-center pr-4">
                    <span class="mr-4">
                        <span class="amplitude-current-minutes" ></span>:<span class="amplitude-current-seconds"></span> /
                        <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
                    </span>
                <div class="audio-volume dropdown">
                    <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ion-md-volume-low"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right volume-dropdown-menu">
                        <input type="range" class="amplitude-volume-slider" value="100">
                    </div>
                </div>

                <div class="dropleft">
                    <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-heart-o"></i> <span>Favorite</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-plus"></i> <span>Add to Playlist</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-download"></i> <span>Download</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="dropdown-link">
                                <i class="la la-share-alt"></i> <span>Share</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="song-details.html" class="dropdown-link">
                                <i class="la la-info-circle"></i>
                                <span>Song Info</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-icon-only" id="playList"><i class="ion-md-musical-note"></i></button>
            </div>
            <!-- End | Audio Info -->

        </div>
        <!-- End | Audio Player -->

    </main>
    <!-- End | Page Wrapper -->

    <!-- Begin | Right Sidebar [[ Find at scss/framework/base/sidebar/right/sidebar.scss ]] -->
    <aside id="rightSidebar">
        <div class="right-sidebar-header">Listen Special</div>
        <div class="right-sidebar-body" data-scrollable="true">
            <ul class="list-group list-group-flush">
                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="<?php echo base_url();  ?>assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">I Love You Mummy</p>
                            <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="<?php echo base_url();  ?>assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Shack your butty</p>
                            <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="<?php echo base_url();  ?>assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Do it your way(Female)</p>
                            <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="<?php echo base_url();  ?>assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Say yes</p>
                            <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="<?php echo base_url();  ?>assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Where is your letter</p>
                            <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="<?php echo base_url();  ?>assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Hey not me</p>
                            <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="<?php echo base_url();  ?>assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Deep inside</p>
                            <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.html" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->
            </ul>
        </div>
    </aside>
    <!-- End | Right Sidebar -->

</div>
<!-- End | Wrapper -->

<!-- Begin | Language Modal -->
<div class="modal fade" id="lang" tabindex="-1" role="dialog" aria-labelledby="langTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title mb-1" id="langTitle">Language</h5>
                    <p class="text-muted">Please select the language(s) of the music you listen to.</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group row">
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch1" checked>
                            <label class="custom-control-label" for="ch1">Hindi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch2">
                            <label class="custom-control-label" for="ch2">Punjabi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch3">
                            <label class="custom-control-label" for="ch3">Tamil</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch4">
                            <label class="custom-control-label" for="ch4">Bengali</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch5">
                            <label class="custom-control-label" for="ch5">Kannada</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch6">
                            <label class="custom-control-label" for="ch6">Gujarati</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch7">
                            <label class="custom-control-label" for="ch7">Urdu</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch8">
                            <label class="custom-control-label" for="ch8">Rajasthani</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch9" checked>
                            <label class="custom-control-label" for="ch9">English</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch10">
                            <label class="custom-control-label" for="ch10">Telugu</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch11">
                            <label class="custom-control-label" for="ch11">Bhojpuri</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch12">
                            <label class="custom-control-label" for="ch12">Malayalam</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch13">
                            <label class="custom-control-label" for="ch13">Marathi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch14">
                            <label class="custom-control-label" for="ch14">Haryanvi</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch15">
                            <label class="custom-control-label" for="ch15">Assamese</label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 col-sm-6">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ch16">
                            <label class="custom-control-label" for="ch16">Odia</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="modal-footer text-center d-block">
                <button type="button" class="btn btn-primary btn-pill" id="langApply">Apply</button>
            </div>
        </div>
    </div>
</div>
<!-- End | Language Modal -->


<!-- Back Drop -->
<div class="backdrop header-backdrop"></div>
<div class="backdrop sidebar-backdrop"></div>

<!-- Scripts -->
<script src="<?php echo base_url();  ?>assets/js/vendors.bundle.js"></script>
<script src="<?php echo base_url();  ?>assets/js/scripts.bundle.js"></script>
</body>
</html>