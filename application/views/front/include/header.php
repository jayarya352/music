<!-- Favicon -->
<link rel="icon" href="<?php echo base_url(); ?>assets/img/core-img/favicon.ico">

<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css.map"> -->

<header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="<?php echo base_url(); ?>assets/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?php echo base_url();?>index.php/home/index">Home</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/home/albums">Albums</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url();?>index.php/home/index">Home</a></li>
                                            <li><a href="<?php echo base_url();?>index.php/home/albums">Albums</a></li>
                                            <li><a href="<?php echo base_url();?>index.php/home/events">Events</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Even Dropdown</a></li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                    <li><a href="#">Even Dropdown</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url();?>index.php/home/newReleasesong">New Release</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/home/blog">News</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/home/contact">Contact</a></li>
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <?php 
                                        
                                        
                                        if($this->session->userdata('userDetail')){?>   
                                         <div class="login-register-btn mr-50">
                                        <a href="<?php echo base_url();?>index.php/home/myAccount" id="loginBtn">My Account </a>||<a href="<?php echo base_url();?>index.php/login/logout" id="logoutBtn">Logout </a>
                                        
                                         </div>
                                        <?php } else {?>
                                    <div class="login-register-btn mr-50">
                                        <a href="<?php echo base_url(); ?>index.php/home/login_page" id="loginBtn">Login </a> ||
                                        <a href="<?php echo base_url(); ?>index.php/home/register_page" id="loginBtn">Register</a>
                                    </div>
                                        <?php  } ?>

                                    <!-- Cart Button -->
                                    <div class="cart-btn">
                                        <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>