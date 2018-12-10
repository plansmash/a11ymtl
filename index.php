<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package a11yMTL
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
			<section id="about">
			<h2>About a11yMTL</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed placeat vero aperiam optio, veritatis laudantium consectetur obcaecati, voluptas beatae temporibus ullam iusto odit est praesentium quae, quam deleniti similique dicta.</p>
			</section>
			<section>
				<h2>Posts</h2>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h3 class="page-title screen-reader-text"><?php single_post_title(); ?></h3>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</section>









<section class="event" id="events">
	<h2 class="text-center text-uppercase text-secondary mb-0">Events</h2>
	<div class="container">
		<div class="row">


<?php

$args = array( 'post_type' => 'event', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <section class="col-md-6 col-lg-4">
			<a class="event-item d-block mx-auto" href="#event-modal-1">
				<div class="event-item-caption d-flex position-absolute h-100 w-100">
				<div class="event-item-caption-content my-auto w-100 text-center text-white">
				</div>
				</div>
				<?php the_post_thumbnail('full', array('class' => 'img-fluid'));?>
				<h3 class="h5"><?php the_title(); ?></h3>
				<?php if( get_field('event_date') ): ?>
					<p><?php the_field('event_date'); ?></p>
				<?php endif; ?>
			</a>
		</section>



<?php

endwhile;

?>
</div>
</div>

</section>

			<section id="contact">
				<h2>Contact us</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt id assumenda unde, suscipit fuga perspiciatis commodi, sed necessitatibus quidem minima ipsam corrupti neque, facilis aspernatur non nobis perferendis numquam asperiores?</p>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
