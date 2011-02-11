<div id="sidebar">

<ul>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

        <li>
            <h2><?php _e('Calendar'); ?></h2>
               <?php get_calendar(); ?>
        </li>

        <li><h2><?php _e('Categories'); ?></h2>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
	</li>

        <?php wp_list_pages ('depth=3&title_li=<h2>Pages</h2>'); ?>

        <li><h2><?php _e('Archives'); ?></h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>    

        <?php wp_list_bookmarks(); ?>

         <li><h2><?php _e('Tag Cloud'); ?></h2>             			
	    <ul>                           
		<li><?php wp_tag_cloud('smallest=8&largest=18&number=35&orderby=name'); ?></li>	                                    
            </ul>
          </li>

         <li><h2><?php _e('Meta'); ?></h2>
		<ul>
			<?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>					
			<?php wp_meta(); ?>
		</ul>
	</li>		

          <li><h2><?php _e('Search'); ?></h2>
            <div class="search">          
       		<?php include ('searchform.php'); ?>
            </div>                
         </li>              
	
<?php endif; ?>

</ul>

</div>