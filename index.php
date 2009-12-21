<?php get_header(); ?>

<div id="content">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<div class="post" id="post-<?php the_ID(); ?>">
			
					<div class="entry">
						<?php the_content('Read more...'); ?></div></div>
<p><?php the_tags(); ?></p>
<?php endwhile; ?><br /><br />
<div id="next"><?php next_posts_link('Older posts') ?></div><div id="previous"><?php previous_posts_link('Newer posts') ?></div>
<?php endif; ?>
</div>
<?php get_footer(); ?>