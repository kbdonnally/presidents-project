<?php get_header(); ?>

<main class="single-pres-wrapper">
	<section class="single-pres__title">
		<h1><span><?php the_field('number'); ?>. </span><?php the_title(); ?></h1>
	</section>

	<section class="single-pres__pic">
		<?php presidents_project_post_thumbnail(); ?>
	</section>

	<section class="single-pres__meta">
		<h2 class="single-pres-meta-title">Quick Facts:</h2>
		<div class="single-pres-meta__party"><span>Party: </span> <span><?php the_field('party'); ?></span></div>
		<div class="single-pres-meta__elections"><span>Winning Elections: </span> <span><?php the_field('elections'); ?></span></div>
		<div class="single-pres-meta__term"><span>Served: </span> <span><?php the_field('served_from'); ?> &ndash; <?php the_field('served_until'); ?></span></div>
		<div class="single-pres-meta__age"><span>Age at Inauguration: </span> <span><?php the_field('age'); ?></span></div>
		<div class="single-pres-meta__vp"><span>Vice President(s): </span> <span><?php the_field('vice_president'); ?></span></div>
	</section>

	<section class="single-pres__achievements">
		<h2 class="single-pres-achievements__title">Achievements:</h2>
		<article class="single-pres-achievements__content">
		<?php the_content(); ?>
		</article>
	</section>

	<section class="single-pres__nav">
	<?php the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'presidents-project' ) . '</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'presidents-project' ) . '</span> <span class="nav-title">%title</span>',
		)
	); ?>
	</section>
</main>

<?php get_footer(); ?>
