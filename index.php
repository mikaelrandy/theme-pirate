<?php get_header(); ?>
	
<div id="content">
   <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>                       
	 <div class="post" id="post-<?php the_ID(); ?>">                          
	    <div class="date"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	        <?php the_author_posts_link(); ?> on <?php the_time(__('F j, Y')); ?> in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?></div>
			<div class="entry">
			     <?php the_content('Read the rest of this entry &raquo;'); ?>
			 </div>
		<div class="postmetadata"><?php if (function_exists('the_tags')) { the_tags('Tags: ', ', ', '<br/>'); } ?></div>                             
	     </div>
    <?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include ('searchform.php'); ?>
	<?php endif; ?>
   </div>

<?php include('sidebar.php');?>

<?php get_footer(); ?>
