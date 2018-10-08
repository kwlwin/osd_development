<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Template
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
	<!-- Navbar -->
  	<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
	    <div class="container">

	      <!-- Brand -->
	      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank">
	        <strong>
	        	<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<?php bloginfo( 'name' ); ?>
					<?php
				else :
					?>
					<?php bloginfo( 'name' ); ?>
					<?php
				endif;
				$custom_template_description = get_bloginfo( 'description', 'display' );
				if ( $custom_template_description || is_customize_preview() ) :
					?>
					<!-- <p class="site-description"><small><?php echo $custom_template_description; /* WPCS: xss ok. */ ?></small></p> -->
				<?php endif; ?>
	        </strong>
	      </a>

	      <!-- Collapse -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
	        aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <!-- Links -->
	      <div class="collapse navbar-collapse" id="navbarSupportedContent">

	        <!-- Left -->
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	            <a class="nav-link" href="#">Home
	              <span class="sr-only">(current)</span>
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">About MDB</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="https://mdbootstrap.com/getting-started/" target="_blank">Free download</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank">Free tutorials</a>
	          </li>
	        </ul>
	      </div>

	    </div>
  	</nav>
<!-- <div class="content">	 -->
    <!--Intro-->
    <?php if ( is_home() && is_front_page() ) : ?>
    <section>

        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-half" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class=""></li>
                <li data-target="#carousel-example-1z" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-1z" data-slide-to="2" class="active"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city13.jpg" alt="First slide">
                        <div class="mask rgba-indigo-light">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <h1 class="h1-responsive font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                                    </li>
                                    <li>
                                        <p>Tempora incidunt ut labore et dolore veritatis et quasi architecto beatae</p>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item h-100">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city10.jpg" alt="Second slide">
                        <div class="mask rgba-stylish-light">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <h1 class="h1-responsive font-weight-bold">Nemo enim ipsam voluptatem quia voluptas sit </h1>
                                    </li>
                                    <li>
                                        <p>Nemo enim ipsamvoluptatem quia veritatis et quasi architecto beatae</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item active">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/city12.jpg" alt="Third slide">
                        <div class="mask rgba-black-light">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <h1 class="h1-responsive font-weight-bold">Sed ut perspiciatis unde omnis iste natus sit voluptatem</h1>
                                    </li>
                                    <li>
                                        <p>Unde omnis iste natus sit voluptatem veritatis et quasi architecto beatae</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

    </section>
    <?php endif; ?>
 <main class="pt-4">
    <!--/Intro-->
 	<div class="container-fluid">


        <!--/Latest posts-->

