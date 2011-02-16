<div id="sidebar">
	<ul>
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
			
			<li>
				<h2><?php _e('Categories'); ?></h2>
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
			</li>
			
			<?php wp_list_pages ('depth=3&title_li=<h2>Pages</h2>'); ?>
			
			<?php wp_list_bookmarks(); ?>
			
			<li>
				<h2><?php _e('Meta'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>					
					<?php wp_meta(); ?>
				</ul>
			</li>
		
		<?php endif; ?>
	</ul>
</div>