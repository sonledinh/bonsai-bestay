<div class="row">
	<?php 
		$thongtinsp = new WP_Query(array('post_type'=>'thong_tin_product'));
		while ($thongtinsp->have_posts()) {
			$thongtinsp->the_post();
		?>
		<div class="col-md-6 wow fadeInUp" data-wow-delay=".2s">
			<div class="item-prd">
				<div class="avarta"><a href=""><img src="<?php echo get_field('hinh_anh')['url'] ?>" class="img-fluid" alt=""></a></div>
				<div class="info">
					<h3><a href=""><?php the_title() ?></a></h3>
					<div class="btn-more"><a href="">See More <i class="fa fa-caret-right"></i></a></div>
				</div>
			</div>
		</div>
		<?php }
	 ?>
</div>