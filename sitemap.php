<?php 
/*
Template name: Sitemap
*/
?>

<?php get_header(); ?>

<div id="content">


<br />
		<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2><br />

		<h3>Pages:</h3>		
		<ul>
			<?php wp_list_pages('depth=3&title_li='); ?>
		</ul>		
		<br />	

		<h3>Posts by category:</h3>		
		<?php $cats= get_categories(); ?>		
		<?php foreach ($cats as $cat) { ?>		
			<?php query_posts('cat=' . $cat->cat_ID); ?>		
			<h4><?php echo $cat->cat_name; ?></h4>			
			<ul>	
				<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>/#content" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						(<?php echo $post->comment_count ?> Comments)
					</li>
				<?php endwhile; ?>
			</ul>
		<?php } ?>		
		<br />	

		<h3>Posts:</h3>			
			<ul>	
				<?php $my_query = new WP_Query('showposts=1000000'); ?>
				<?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; ?>
					<li><a href="<?php the_permalink(); ?>/#content" title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
				<?php endwhile; ?>	
			</ul>			
	
</div>

<?php include('sidebar.php');?>

<?php get_footer(); ?>