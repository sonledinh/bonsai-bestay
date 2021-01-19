<div class="slide-camp slide-page wow fadeInUp" data-wow-delay=".2s">
	<?php 
		$thongtinsp = new WP_Query(array('post_type'=>'slide_campaigns'));
		while ($thongtinsp->have_posts()) {
			$thongtinsp->the_post();
		?>
		<div class="item-slide">
			<div class="item-news"><div class="avarta"><a href="<?php echo get_field('link_camp') ?>"> <img src="<?php echo get_field('avarta-camp')['url'] ?>" class="img-fluid" alt=""></a></div></div>
		</div>
		<?php } 
	 ?>
</div>
