<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package a11yMTL
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php a11ymtl_post_thumbnail(); ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				a11ymtl_posted_on();
				a11ymtl_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<dl>
		<dt>Date:</dt>
		<?php if( get_field('event_date') ): ?>
		<dd><?php the_field('event_date'); ?></dd>
		<?php endif; ?>
		<dt>Start time:</dt>
		<?php if( get_field('event_start') ): ?>
		<dd><?php the_field('event_start'); ?></dd>
		<?php endif; ?>
		<dt>Start time:</dt>
		<?php if( get_field('event_end') ): ?>
		<dd><?php the_field('event_end'); ?></dd>
		<?php endif; ?>
	</dl>
	
	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'a11ymtl' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'a11ymtl' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php a11ymtl_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
