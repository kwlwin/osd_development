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

                                    get_template_part( 'template-parts/content', 'single' );
                                    endwhile; // End of the loop.
                                    ?>
                                    <hr>

                                   
                                    <!--Grid row-->

                                    <!--Comments-->
                                    <section>
                                    	<?php
                                            // If comments are open or we have at least one comment, load up the comment template.
                                            if ( comments_open() || get_comments_number() ) :
                                                comments_template();
                                            endif;
                                        ?>
                                        <!--Main wrapper-->
                                       
                                        <!--/.Main wrapper-->

                                    </section>
                                    <!--/Comments-->
                                    <hr>
                                    <!--Section: Leave a reply (Not Logged In User)-->
                                  
                                    <!--/Section: Leave a reply (Not Logged In User)-->

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--/Grid row-->

                        </section>
                        <!--Section: Blog v.3-->

                    </div>
                    <!--Main listing-->

                   

                </div>
                <!--Blog-->

            </div>
    </section>
    <!--Blog section-->

    

<?php
get_sidebar();
get_footer();
