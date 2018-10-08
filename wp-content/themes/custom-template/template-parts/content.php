<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Template
 */

?>
<!--Grid column-->
<div class="col-lg-4 col-md-12 mb-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!--Featured image-->
    <div class="">
    	<?php 
    		if ( has_post_thumbnail() ) {
				the_post_thumbnail('medium',array('class' => 'img-fluid'));
			} 
    	?>
        <!-- <img src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" class="img-fluid" alt="First sample image"> -->
        <a>
            <div class="mask rgba-white-slight waves-effect waves-light"></div>
        </a>
    </div>

    <h4 class="mb-2 mt-4 font-weight-bold">
    	<?php
		if ( is_singular() ) :
			the_title();
		else :
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		endif;
		?>
    </h4>

    <!--Grid row-->
    <div class="row">
    	
        <!--Grid column-->
        <div class="col-lg-8 col-md-8 text-lg-left ">
            <p class="grey-text">
                <i class="fa fa-clock-o" aria-hidden="true"></i> 
                <?php echo get_the_date( 'M d, Y' ); ?>
            </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-4 text-lg-left">
            <p class="grey-text">
                <i class="fa fa-commenting-o" aria-hidden="true"></i> 
                <?php
                custom_template_posted_by();
                ?>
            </p>
        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->
    <p class="dark-grey-text">
    	<?php 
    		the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'custom-template' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
    	?>
    </p>
    <hr class="mt-1" style="max-width: 90px">
</div>
<!--Grid column-->
<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
	<!-- <header class="entry-header"> -->
		<?php
		// if ( is_singular() ) :
		// 	the_title( '<h1 class="entry-title">', '</h1>' );
		// else :
		// 	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		// endif;

		//if ( 'post' === get_post_type() ) :
			?>
			<!-- <div class="entry-meta"> -->
				<?php
				//custom_template_posted_on();
				//custom_template_posted_by();
				?>
			<!-- </div> -->
			<!-- .entry-meta -->
		<?php //endif; ?>
	<!-- </header> -->
	<!-- .entry-header -->

	<?php //custom_template_post_thumbnail(); ?>

	<!-- <div class="entry-content"> -->
		<?php
		// the_content( sprintf(
		// 	wp_kses(
		// 		/* translators: %s: Name of current post. Only visible to screen readers */
		// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'custom-template' ),
		// 		array(
		// 			'span' => array(
		// 				'class' => array(),
		// 			),
		// 		)
		// 	),
		// 	get_the_title()
		// ) );

		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'custom-template' ),
		// 	'after'  => '</div>',
		// ) );
		?>
	<!-- </div> -->
	<!-- .entry-content -->

	<!-- <footer class="entry-footer"> -->
		<?php //custom_template_entry_footer(); ?>
	<!-- </footer> -->
	<!-- .entry-footer -->
<!-- </article> -->
<!-- #post-<?php the_ID(); ?> -->
