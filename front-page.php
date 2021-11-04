<?php get_header(); ?>

<main class="front-page-wrapper">
	<section class="front-page_title">
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h2>
	</section>

	<section class="front-page-tl">
		<ul class="tl-entries-wrapper">
		<?php
		$p = new WP_Query(array(
			'post_type' => 'presidents',
			'order' => 'ASC',
			'orderby' => 'ID')
		);
		if ($p->have_posts()) {
			while ($p->have_posts()) {
				$p->the_post(); ?>
				<li class="tl-entry">
					<h2 class="tl-entry__title">
						<span><?php the_field('number'); ?>. </span><?php the_title(); ?>
					</h2>
					<div class="tl-entry__img">
						<?php presidents_project_post_thumbnail(); ?>
					</div>
					<div class="tl-entry__meta">
						<div class="tl-meta__party"><span>Party: </span> <span><?php the_field('party'); ?></span></div>
						<div class="tl-meta__elections"><span>Winning Elections: </span> <span><?php the_field('elections'); ?></span></div>
						<div class="tl-meta__term"><span>Served: </span> <span><?php the_field('served_from'); ?> &ndash; <?php the_field('served_until'); ?></span></div>
						<div class="tl-meta__age"><span>Age at Inauguration: </span> <span><?php the_field('age'); ?></span></div>
						<div class="tl-meta__vp"><span>Vice President(s): </span> <span><?php the_field('vice_president'); ?></span></div>
					</div>
					<article class="tl-entry__achieve">
						<?php the_content(); ?>
					</article>
				</li><?php
			}
		  }	
		?> <!-- end entry -->
		</ul> <!-- end list -->
	</section> <!-- end timeline wrapper -->

	<section class="front-page-lines">

	</section>

	<section class="front-page-tl">
		<div class="tl__line"></div>
	</section>