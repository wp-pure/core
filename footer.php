<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	
	<footer class="footer">
		<p><strong><?php bloginfo( 'site_name' ) ?></strong><br>
			Email: <a href="mailto:<?php print $admin_email ?>"><?php print $admin_email ?></a></p>
		<p class="copyright">Copyright &copy; <?php print date( 'Y' ) ?></p>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>