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
<div class="col-lg-12 col-md-12 mb-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <h4 class="mb-2 mt-4 font-weight-bold">
    	<?php
		if ( is_singular() ) :
			the_title();
		else :
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		endif;
		?>
    </h4>
    <hr>

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