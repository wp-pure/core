<?php

get_header();

the_showcase();

?>

<div class="content-wide" role="main">
	<?php 
	
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); 
			if ( get_cmb_value( 'layout-title-hide' ) != 'on' ) {
				?>
	<h1 class="post-title"><?php the_title(); ?></h1>
				<?php
			}
			the_content();
		endwhile;
	endif;

	?>
</div><!-- #content -->

	<?php the_boxes(); ?>

<?php

get_footer();

?>