<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer class="site-footer" role="contentinfo">
	
			<p class="footer-info">&copy;<?php echo date("Y"); ?> <?php bloginfo('name') ?></p>
			
			<p class="footer-info">Email</p>
			<p class="footer-info">Phone</p>

			<p class="footer-info">location</p>

			<p class="footer-info">Socials</p>
			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>

