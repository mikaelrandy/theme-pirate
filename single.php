<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		

		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="date"><h2><?php the_title(); ?></h2>
                        <?php the_author_posts_link(); ?> on <?php the_time(__('F j, Y')); ?>  in <?php the_category(', ') ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?></div>
			    <div class="entry">
                             			   
                            <?php the_content('Read the rest of this entry &raquo;'); ?>
			    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>				
				<div class="postmetadata"><?php if (function_exists('the_tags')) { the_tags('Tags: ', ', ', '<br/>'); } ?></div>

			</div>
		</div>	

	<?php endwhile; ?>

              <div class="navigation">
			<div class="alignleft"><?php previous_post_link('%link') ?></div>
			<div class="alignright"><?php next_post_link('%link') ?></div>
		</div>

<?php else : ?>
		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php comments_template(); ?>

	</div>
	
<?php include('sidebar.php');?>

<?php get_footer(); ?>