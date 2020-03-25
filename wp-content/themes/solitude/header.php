<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>" >
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>



<script>

/* Script slide's about us page */

    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>



    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
   <header class="sticky-top">
   <!--
   <div class="container">

       <?php /*wp_nav_menu (
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'navigation'
            )
        ); */?>
   </div>
    -->
   <div class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
    <a class="navbar-brand" href="<?php echo site_url()?>"><img  class="myLogo" src="<?php echo get_theme_file_uri('assets/img/soltitude.png') ?>" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            
            <?php
            /*
            wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
            ));
            */
            ?>

            <!--
            <li class="nav-item ml-2 active">
                <a class="nav-link" href="<?php echo site_url()?>">Home <span class="sr-only">(current)</span></a>
            </li>
             -->

             
            <li class="nav-item  ml-2">
                <a class="nav-link" href="<?php echo get_post_type_archive_link('event');?>">Events</a>
            </li>
            <li class="nav-item  ml-2">
                <a class="nav-link" href="<?php echo get_post_type_archive_link('music');?>">Music</a>
            </li>
            <li class="nav-item  ml-2">
                <a class="nav-link" href="<?php echo get_post_type_archive_link('art');?>">Art</a>
            </li>
            <li class="nav-item  ml-2">
                <a class="nav-link" href="<?php echo site_url('/?page_id=42')?>">Blog</a>
            </li>
            <li class="nav-item  ml-2">
                <a class="nav-link" href="<?php echo site_url('/?page_id=62')?>">about us</a>
            </li>
            <li class="nav-item  ml-2">
                <a class="nav-link" href="<?php echo site_url('/?page_id=73')?>">Contact us</a>
            </li>
            <div class="site-header__util">
                <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
<!--
            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Artists</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1">
                            <li class="dropdown-item"><a href="http://www.youtube.com" target="_blank">Action 1 - Youtube</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                    <li class="dropdown-item"><a href="#">Action 1.1</a></li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1.1</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                            <li class="dropdown-item"><a target="_blank" href="http://www.google.com">Action 1.1.1 - Google</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2">
                            <li class="dropdown-item"><a href="#">Action 2 A</a></li>
                            <li class="dropdown-item"><a href="#">Action 2 B</a></li>
                            <li class="dropdown-item"><a href="#">Action 2 C</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                    <li class="dropdown-item"><a href="#">Action 2.1 A</a></li>
                                    <li class="dropdown-item"><a href="#">Action 2.1 B</a></li>
                                    <li class="dropdown-item"><a href="#">Action 2.1 C</a></li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.1</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                            <li class="dropdown-item"><a href="#">Action 2.1.1 A</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.1 B</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.1 C</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.2</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                            <li class="dropdown-item"><a href="#">Action 2.1.2 A</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.2 B</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.2 C</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
        -->
        </ul>
        <!--
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        -->
        <div class="login-container">
            <form class="form-inline mt-2 mt-md-0" action="/action_page.php">
                <input class="form-control ml-2" type="text" placeholder="Username" name="username">
                <input  class="form-control ml-2"type="text" placeholder="Password" name="psw">
                <button  class="form-control ml-2"type="submit">Login</button>
                <a  class="form-control signUp" href="<?php echo site_url('/?page_id=60')?>">sign up</a>
            </form>
        </div>
    </div>
</div>


<!-- nav end -->

<!-- 

<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
            <a class="navbar-brand" href="#">Bootstrap NavBar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://fontenele.github.io/bootstrap-navbar-dropdowns/" target="_blank">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1">
                            <li class="dropdown-item"><a href="http://www.youtube.com" target="_blank">Action 1 - Youtube</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                    <li class="dropdown-item"><a href="#">Action 1.1</a></li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1.1</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                            <li class="dropdown-item"><a target="_blank" href="http://www.google.com">Action 1.1.1 - Google</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2">
                            <li class="dropdown-item"><a href="#">Action 2 A</a></li>
                            <li class="dropdown-item"><a href="#">Action 2 B</a></li>
                            <li class="dropdown-item"><a href="#">Action 2 C</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                    <li class="dropdown-item"><a href="#">Action 2.1 A</a></li>
                                    <li class="dropdown-item"><a href="#">Action 2.1 B</a></li>
                                    <li class="dropdown-item"><a href="#">Action 2.1 C</a></li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.1</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                            <li class="dropdown-item"><a href="#">Action 2.1.1 A</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.1 B</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.1 C</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.2</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                            <li class="dropdown-item"><a href="#">Action 2.1.2 A</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.2 B</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.2 C</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
</header>
 end -->

