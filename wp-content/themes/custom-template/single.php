<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Custom_Template
 */

get_header();
?>
<section>
        <div class="container-fluid">
            <hr class="my-5">
            <div class="container">

                <!-- Cover photo -->
                <div class="row mb-2 mt-1">

                    <div class="col-md-12">

                        <!--Image-->
                        <div class="view">
                            <!-- <img src="https://mdbootstrap.com/img/Photos/Others/city10.jpg" class="img-fluid z-depth-1 wow fadeIn" data-wow-delay="0.2s"> -->
                        </div>

                    </div>

                </div>
                <!--/ Cover photo -->

                <!--Blog-->
                <div class="row mt-4 pt-3">

                    <!--Main listing-->
                    <div class="col-lg-9 col-12 mt-1">

                        <!--Section: Blog v.3-->
                        <section class="extra-margins pb-5 text-lg-left">

                            <!--Grid row-->
                            <div class="row mb-4">

                                <!--Grid column-->
                                <div class="col-md-12">
                                    <?php
                                    while ( have_posts() ) :
                                    ?>


  
                                    <?php
                                    the_post();

                                    get_template_part( 'template-parts/content', get_post_type() );
                                    endwhile; // End of the loop.
                                    ?>
                                    <hr>

                                   
                                    <!--Grid row-->

                                    <!--Comments-->
                                    <section>

                                        <!--Main wrapper-->
                                        <div class="comments-list text-center text-md-left">
                                            <div class="text-center my-5">
                                                <h3 class="font-weight-bold">Comments
                                                    <span class="badge indigo">3</span>
                                                </h3>
                                            </div>
                                            <!--First row-->
                                            <div class="row mb-5">
                                                <!--Image column-->
                                                <div class="col-sm-2 col-12 mb-3">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (8).jpg" class="avatar rounded-circle z-depth-1-half" alt="sample image">
                                                </div>
                                                <!--/.Image column-->

                                                <!--Content column-->
                                                <div class="col-sm-10 col-12">
                                                    <a>
                                                        <h5 class="user-name font-weight-bold">John Doe</h5>
                                                    </a>
                                                    <div class="card-data">
                                                        <ul class="list-unstyled">
                                                            <li class="comment-date font-small">
                                                                <i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        </ul>
                                                    </div>
                                                    <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                                </div>
                                                <!--/.Content column-->
                                            </div>
                                            <!--/.First row-->

                                            <!--Second row-->
                                            <div class="row mb-5">
                                                <!--Image column-->
                                                <div class="col-sm-2 col-12">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" class="avatar rounded-circle z-depth-1-half" alt="sample image">
                                                </div>
                                                <!--/.Image column-->

                                                <!--Content column-->
                                                <div class="col-sm-10 col-12 mb-3">
                                                    <a>
                                                        <h5 class="user-name font-weight-bold">Lily Brown</h5>
                                                    </a>
                                                    <div class="card-data">
                                                        <ul class="list-unstyled">
                                                            <li class="comment-date font-small">
                                                                <i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        </ul>
                                                    </div>
                                                    <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                                </div>
                                                <!--/.Content column-->
                                            </div>
                                            <!--/.Second row-->

                                            <!--Third row-->
                                            <div class="row mb-5">
                                                <!--Image column-->
                                                <div class="col-sm-2 col-12 mb-3">
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (28).jpg" class="avatar rounded-circle z-depth-1-half" alt="sample image">
                                                </div>
                                                <!--/.Image column-->
                                                <!--Content column-->
                                                <div class="col-sm-10 col-12">
                                                    <a>
                                                        <h5 class="user-name font-weight-bold">Martha Smith</h5>
                                                    </a>
                                                    <div class="card-data">
                                                        <ul class="list-unstyled">
                                                            <li class="comment-date font-small">
                                                                <i class="fa fa-clock-o"></i> 05/10/2015</li>
                                                        </ul>
                                                    </div>
                                                    <p class="dark-grey-text article">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                                </div>
                                                <!--/.Content column-->
                                            </div>
                                            <!--/.Third row-->
                                        </div>
                                        <!--/.Main wrapper-->

                                    </section>
                                    <!--/Comments-->
                                    <hr>
                                    <!--Section: Leave a reply (Not Logged In User)-->
                                    <section class="mb-4 wow fadeIn" data-wow-delay="0.2s">
                                        <h3 class="font-weight-bold text-center my-5">Leave a reply</h3>

                                        <!--Grid row-->
                                        <div class="row">

                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-12 mb-4">

                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text" id="basic-addon8">1</span>
                                                    </div>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Name" aria-describedby="basic-addon9">
                                                </div>

                                            </div>
                                            <!--Grid column-->

                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <div class="input-group-prepend">   
                                                        <span class="input-group-text white black-text" id="basic-addon9">2</span>
                                                    </div>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Email" aria-describedby="basic-addon9">
                                                </div>

                                            </div>
                                            <!--Grid column-->

                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <div class="input-group md-form form-sm form-3 pl-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text white black-text" id="basic-addon10">3</span>
                                                    </div>
                                                    <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Website" aria-describedby="basic-addon9">
                                                </div>

                                            </div>
                                            <!--Grid column-->

                                        </div>
                                        <!--Grid row-->

                                        <!--Grid row-->
                                        <div class="row">

                                            <div class="col-12 mt-1">
                                                <div class="form-group basic-textarea rounded-corners shadow-textarea">

                                                    <textarea class="form-control" id="exampleFormControlTextarea6" rows="5" placeholder="Write something here..."></textarea>
                                                </div>

                                                <div class="text-right">
                                                    <button class="btn btn-grey btn-sm">Submit</button>
                                                </div>

                                            </div>

                                        </div>
                                        <!--Grid row-->

                                    </section>
                                    <!--/Section: Leave a reply (Not Logged In User)-->

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--/Grid row-->

                        </section>
                        <!--Section: Blog v.3-->

                    </div>
                    <!--Main listing-->

                    <!--Sidebar-->
                    <div class="col-lg-3 col-12 mt-1 wow fadeIn" data-wow-delay="0.2s">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/20.jpg" class="card-img-top" alt="">
                                <a>
                                    <div class="mask  rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">
                                    <strong>Anna Doe</strong>
                                </h5>

                                <!--Description-->
                                <p class="mt-3 dark-grey-text font-small text-center">
                                    <em>Hello, I'm Anna. I love travel around the world and take photos of landscapes and local
                                        people.
                                    </em>
                                </p>

                                <ul class="list-unstyled list-inline-item circle-icons list-unstyled flex-center">
                                    <!--Facebook-->
                                    <li>
                                        <a class="fb-ic">
                                            <i class="fa fa-facebook"> </i>
                                        </a>
                                    </li>
                                    <!--Twitter-->
                                    <li>
                                        <a class="tw-ic">
                                            <i class="fa fa-twitter mx-3"> </i>
                                        </a>
                                    </li>
                                    <!--Google +-->
                                    <li>
                                        <a class="gplus-ic">
                                            <i class="fa fa-google-plus"> </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                        <!-- Section: Featured posts -->
                        <section class="section widget-content mt-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>POPULAR POSTS</strong>
                                    </p>

                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo13.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="fa fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>

                                <div class="single-post">
                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo12.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="fa fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>

                                <div class="single-post">
                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo10.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="fa fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>

                                <div class="single-post">
                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo15.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="fa fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->
                                </div>

                                <div class="single-post">
                                    <!-- Grid row -->
                                    <div class="row mb-4">
                                        <div class="col-5">

                                            <!-- Image -->
                                            <div class="view overlay">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                <a>
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Excerpt -->
                                        <div class="col-7">
                                            <h6 class="mt-0 font-small">
                                                <a>
                                                    <strong>Title of the news</strong>
                                                </a>
                                            </h6>

                                            <div class="post-data">
                                                <p class="font-small grey-text mb-0">
                                                    <i class="fa fa-clock-o"></i> 18/08/2017</p>
                                            </div>
                                        </div>
                                        <!--/ Excerpt -->
                                    </div>
                                    <!--/ Grid row -->

                                </div>
                            </div>
                        </section>
                        <!--/ Section: Featured posts -->

                        <!-- Section: Categories -->
                        <section class="section my-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>CATEGORIES</strong>
                                    </p>

                                    <ul class="list-group my-4">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="">
                                                <p class="mb-0">Travel</p>
                                            </a>
                                            <span class="badge teal badge-pill font-small">4</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="">
                                                <p class="mb-0">Lifestyle</p>
                                            </a>
                                            <span class="badge teal badge-pill">2</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="">
                                                <p class="mb-0">Photography</p>
                                            </a>
                                            <span class="badge teal badge-pill">1</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="">
                                                <p class="mb-0">Culinary</p>
                                            </a>
                                            <span class="badge teal badge-pill">2</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="">
                                                <p class="mb-0">Fashion</p>
                                            </a>
                                            <span class="badge teal badge-pill">1</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="">
                                                <p class="mb-0">Work</p>
                                            </a>
                                            <span class="badge teal badge-pill">2</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="">
                                                <p class="mb-0">Business</p>
                                            </a>
                                            <span class="badge teal badge-pill">5</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </section>
                        <!-- Section: Categories -->

                        <!--Newsletter-->
                        <section class="my-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>NEWSLETTER</strong>
                                    </p>

                                    <!--Grid row-->
                                    <div class="row mt-4">
                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="input-group md-form form-sm form-3 pl-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text white black-text" id="basic-addon9">@</span>
                                                </div>
                                                <input type="text" class="form-control mt-0 black-border rgba-white-strong" placeholder="Username" aria-describedby="basic-addon9">
                                            </div>

                                            <button type="button" class="btn btn-grey btn-block mb-4 mt-4">Sign up</button>

                                        </div>
                                        <!--Grid column-->
                                    </div>
                                    <!--Grid row-->

                                </div>
                            </div>

                        </section>
                        <!--Newsletter-->

                        <!--Archive-->
                        <section class="archive mb-5">

                            <!--/ Card -->
                            <div class="card card-body pb-0">
                                <div class="single-post">

                                    <p class="font-weight-bold dark-grey-text text-center spacing grey lighten-4 py-2 mb-4">
                                        <strong>ARCHIVE</strong>
                                    </p>

                                    <!--Grid row-->
                                    <div class="row mb-4">

                                        <!--Grid column-->
                                        <div class="col-md-12 text-center">

                                            <!--List-->
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="mb-1 mt-2">
                                                        <a href="#!" class="dark-grey-text">August 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">July 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">June 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">May 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">April 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-1">
                                                        <a href="#!" class="dark-grey-text">March 2016</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-0">
                                                        <a href="#!" class="dark-grey-text">Febuary 2016</a>
                                                    </p>
                                                </li>
                                            </ul>
                                            <!--List-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                </div>

                            </div>
                            <!--/ Card -->

                        </section>
                        <!--Archive-->

                    </div>
                    <!--Sidebar-->

                </div>
                <!--Blog-->

            </div>
    </section>
    <!--Blog section-->
<!--Blog section-->
    <section>
        <div class="container-fluid grey lighten-4">
            <hr class="my-5">
            <div class="container">

                <!--Blog-->
                <div class="row mt-5 pt-3">

                    <!--Main listing-->
                    <div class="col-lg-8 col-12 mt-1 mx-lg-4">

                        <!--Section: Blog v.3-->
                        <section class="extra-margins pb-5  text-lg-left">

                            <!--Grid row-->
                            <div class="row mb-4">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="http://mdbootstrap.com/img/Photos/Slides/img%20(29).jpg" class="img-fluid" alt="">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <h4 class="card-title">
                                                <strong>Lorem ipsum dolor sit amet</strong>
                                            </h4>
                                            <hr>
                                            <!--Text-->
                                            <p class="dark-grey-text mb-3 mt-4 mx-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                                et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                            <!--Grid row-->
                                            <div class="row mx-4 mt-3">

                                                <p class="dark-grey-text article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                                    id est laborum.</p>

                                                
                                            </div>

												<?php
												while ( have_posts() ) :
													the_post();

													get_template_part( 'template-parts/content', get_post_type() );
												endwhile; // End of the loop.
												?>
                                            <?php the_post_navigation(); ?>

                                        </div>
                                        <!--/.Card content-->
                                    </div>
                                    <hr/>
                                    <div class="card">
                                        <div class="card-body">
                                            <?php
                                                // If comments are open or we have at least one comment, load up the comment template.
                                                if ( comments_open() || get_comments_number() ) :
                                                    comments_template();
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                    <!--/.Card-->

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--/Grid row-->

                        </section>
                        <!--Section: Blog v.3-->

                    </div>
                    <!--Main listing-->

                    <!--Sidebar-->
                    <div class="col-lg-3 col-12 mt-1">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Others/images/20.jpg" class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">
                                    <strong>Anna Doe</strong>
                                </h5>

                                <!--Description-->
                                <p class="mt-3 dark-grey-text font-small text-center">
                                    <em>Hello, I'm Anna. I love travel around the world and take photos of landscapes and local
                                        people.
                                    </em>
                                </p>

                                <ul class="list-unstyled list-inline-item circle-icons list-unstyled flex-center">
                                    <!--Facebook-->
                                    <li>
                                        <a class="fb-ic">
                                            <i class="fa fa-facebook"> </i>
                                        </a>
                                    </li>
                                    <!--Twitter-->
                                    <li>
                                        <a class="tw-ic">
                                            <i class="fa fa-twitter mx-3"> </i>
                                        </a>
                                    </li>
                                    <!--Google +-->
                                    <li>
                                        <a class="gplus-ic">
                                            <i class="fa fa-google-plus"> </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->



                    </div>
                    <!--Sidebar-->

                </div>
                <!--Blog-->

            </div>

    </section>
    

<?php
get_sidebar();
get_footer();
