<?php 
/*
Plugin name: Custom Menu driven Prev/Next links.
Description: Shows prev/next links based on custom menu according to custom menu.
Plugin URI: http://crowdbee.net/wordpress/wordpress-plugins/custom-menu-driven-prev-next-links/
Version: 0.2
Author: Susheel Kumar
License: GPL
*/

function CMD_prev_next($name=''){ 
global $post;
?>
	<?php $args = array(
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'post_type'              => 'nav_menu_item',
        'post_status'            => 'publish',
        'output'                 => 'ARRAY_A',
        'output_key'             => 'menu_order',
        'nopaging'               => true,
        'update_post_term_cache' => false );
		
$categories = get_the_category($post->ID); //get the first category as we need only one for links
$menu =$categories[0]->slug;?>
	
	
	
<?php $menu_items = wp_get_nav_menu_items( $menu, $args );
if($menu_items){ 
	foreach($menu_items as $key => $menu_item ) {
	    $title 		= $menu_item->title;
	    $url 		= $menu_item->url;
	    $object_id 	= $menu_item->object_id;
	    $menu_order = $menu_item->menu_order;
		if($object_id==$post->ID){ 
			$order = $menu_item->menu_order-1;//reduce the order by 1 as we have removed the custom menuitem
			
				$prev_url 	= $menu_items[$order-1]->url;
				if($prev_url=='#'){
					$prev_title	= $menu_items[$order-2]->title;
					$prev_url 	= $menu_items[$order-2]->url;
				} else {
					$prev_url 	= $menu_items[$order-1]->url;
					$prev_title	= $menu_items[$order-1]->title;
				}
			
			if($order==count($menu_items)){
				$next_url 	= '';
				$next_title = '';
			}else{
				$next_url 	= $menu_items[$order+1]->url;
				if($next_url=='#'){
					$next_url 	= $menu_items[$order+2]->url;
					$next_title = $menu_items[$order+2]->title;
				} else {
					$next_url 	= $menu_items[$order+1]->url;
					$next_title = $menu_items[$order+1]->title;
				}
			}
		}
	}
	
 ?>
	<ul class="cmd_post_nav">
			<?php if($prev_url!=''){?>
				<li class="cmd_previous">
					<a href="<?php echo $prev_url;?>" rel="prev">
						<span class="meta-nav">&lt;</span>
						<div class="cmd_left">
							<strong>Previous <?php echo $name;?></strong><br> 
							<span><?php echo $prev_title;?></span>
						</div>
					</a>
				</li>
			<?php } ?>
			<?php if($next_url!=''){?>
				<li class="cmd_next">
					<a href="<?php echo $next_url;?>" rel="next">
						<span class="meta-nav">&gt;</span>
						<div class="cmd_right">
							<strong>Next <?php echo $name;?></strong> <br>
							<span><?php echo $next_title;?></span> 
						</div>
						
					</a>
				</li>
			<?php } ?>
	 </ul>

<?php } else { ?>
	
<ul class="cmd_post_nav group">
	<li class="cmd_next">
		<?php next_post_link('%link', '<span class="meta-nav">&gt;</span><div class="cmd_right"><strong>'.__('Next Post', 'hueman').'</strong> <br><span>%title</span></div>', true); ?></li>
	<li class="cmd_previous"><?php previous_post_link('%link', '<span class="meta-nav">&lt;</span><div class="cmd_left"><strong>'.__('Previous Post', 'hueman').'</strong> <br><span>%title</span></div>', true); ?></li>
</ul>
<?php } 
} //function
?>