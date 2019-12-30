<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kumle
 */


?>
		</div><!-- .inner-wrapper -->
    	<?php  if( !is_front_page() && !is_page_template('elementor_header_footer') ){ ?>
        </div><!-- .container -->
    	<?php } ?>
    </div><!-- #content -->

	<?php get_template_part( 'template-parts/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-footer-wrap">
				<?php 

				$copyright_text = kumle_get_option( 'copyright_text' ); 

				if ( ! empty( $copyright_text ) ) : ?>

					<div class="copyright">

						<?php echo wp_kses_data( $copyright_text ); ?>

					</div><!-- .copyright -->

					<?php 

				endif; 
				?>
			</div>
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
