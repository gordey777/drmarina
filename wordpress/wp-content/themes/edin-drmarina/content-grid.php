<?php
/**
 * The template used for displaying featured page content in page-templates/front-page.php
 *
 * @package Edin
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php edin_post_thumbnail(); ?>
<header class="entry-header"><h1 class="entry-title"><a href="%s" rel="bookmark">
	<?php the_title( ); ?>
</a><br><a href="tel:+<?php the_field('phone_link', 14); ?>"><i class="fa fa-phone"></i> <?php the_field('phone', 14); ?></a>&nbsp;(м. Голосеевская)</h1></header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<p><a class="more-link" href="<?php the_permalink(); ?>" rel="bookmark">
			<?php
				/* translators: %s: Name of page. Visible to screen readers only. */
				printf( __( 'Read more %s', 'edin' ), the_title( '<span class="screen-reader-text">', '</span>', false ) );
			?>
		</a>&nbsp;<a href="tel:+<?php the_field('phone_link', 14); ?>"><i class="fa fa-phone"></i> <?php the_field('phone', 14); ?></a>&nbsp;(м. Голосеевская)</p>
	</div><!-- .entry-summary -->

	<?php edit_post_link( __( 'Edit', 'edin' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
