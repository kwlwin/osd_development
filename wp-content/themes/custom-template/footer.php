<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Template
 */

?>

	</div>
</main>
<!-- </div> -->
<!-- #content -->
	<footer class="page-footer stylish-color-dark text-center text-md-left mt-0 pt-4">

        <!--Footer Links-->
        <div class="container">

            <!-- Footer links -->
            
            <!-- Footer links -->


            <div class="row py-3 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-7 col-lg-8">

                    <!--Copyright-->
                    <p class="text-center text-md-left grey-text">
                    	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'custom-template' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'custom-template' ), 'WordPress' );
				?>
			</a>
                        <!-- © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a> -->
                    </p>
                    <!--/.Copyright-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 col-lg-4 ml-lg-0">

                    <!--Social buttons-->
                    <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'custom-template' ), 'custom-template', '<a href="http://underscores.me/">Khin Wai Lwin</a>' );
				?>
                    <!--/.Social buttons-->

                </div>
                <!--Grid column-->

            </div>

        </div>

    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
