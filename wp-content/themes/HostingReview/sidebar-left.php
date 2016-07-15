<div class="sidecont">
		<div class="sidebar sidebar-left">
		
			<ul>
				<?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) : ?>
	
					<li><h2><?php _e('Недавние записи'); ?></h2>
				               <ul>
						<?php wp_get_archives('type=postbypost&limit=5'); ?>  
				               </ul>
					</li>
                    
				<?php wp_list_categories('hide_empty=1&show_count=0&depth=1&title_li=<h2>Рубрики</h2>'); ?>
				
					
					
					
					<?php include (TEMPLATEPATH . '/recent-comments.php'); ?>
				<?php if (function_exists('get_recent_comments')) { get_recent_comments(); } ?>
				
						
					
					
				<?php endif; ?>
			</ul>
			
		
		</div>
</div>