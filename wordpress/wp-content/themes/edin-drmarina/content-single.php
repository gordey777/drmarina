<?php
/**
 * @package Edin
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?>&nbsp;<a href="tel:+<?php the_field('phone_link', 14); ?>"><i class="fa fa-phone"></i> <?php the_field('phone', 14); ?></a>&nbsp;(м. Голосеевская)</h1>
		<div class="entry-meta">
			<?php edin_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php edin_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'edin' ),
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edin_entry_meta(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
