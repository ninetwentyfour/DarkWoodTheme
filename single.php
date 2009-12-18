<?php get_header(); ?>

<div id="content">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<div class="post" id="post-<?php the_ID(); ?>">
			
					<div class="entry">
						<?php the_content('Read more...'); ?></div></div>
<?php comments_template(); ?><br />
<div id="moreposts1">
<?php
$categories = get_the_category($post->ID);
if ($categories) {
	$category_ids = array();
	foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

	$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'orderby' => 'rand',
		'showposts'=>3, // Number of related posts that will be shown.
		'caller_get_posts'=>1
	);
$my_query = new wp_query($args);
	if( $my_query->have_posts() ) {
		echo '<h3>Read More Posts</h3><ul>';
		while ($my_query->have_posts()) {
			$my_query->the_post();
		?>
			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
		<?php
		}
		echo '</ul>';
	}
}
?>
</div>

<?php endwhile; ?><br /><br />
<div id="next"><?php next_posts_link('Older posts') ?></div><div id="previous"><?php previous_posts_link('Newer posts') ?></div>
<?php endif; ?>
</div>
<?php get_footer(); ?>