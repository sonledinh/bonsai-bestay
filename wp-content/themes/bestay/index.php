<?php
/*
	Template Name: Trang chủ
*/
?>

<?php get_header();?>  

<main>
	<!-- <div class="square square-left">
		 <img src="<?php echo __BASE_URL__ ?>/images/v-1.png" class="img-square-left square-1" alt="">
		 <img src="<?php echo __BASE_URL__ ?>/images/v-2.png" class="img-square-left square-2" alt="">
		 <img src="<?php echo __BASE_URL__ ?>/images/v-3.png" class="img-square-left square-3" width="200" height="200" alt="">
		<div class="sq-right">
			 <img src="<?php echo __BASE_URL__ ?>/images/v-4.png" class="img-square-right square-4" alt="">
			 <img src="<?php echo __BASE_URL__ ?>/images/v-3.png" class="img-square-right square-5" width="200" height="200" alt="">
		</div>
	</div>    -->
	<?php 
		$dong1 = get_field('heading_h1');
	?> 
	<section class="box-about">
		<div class="container">
			<div class="row">   
				<div class="col-md-5">
					<div class="txt-about">
						<h1 class="wow fadeInUp" data-wow-delay=".2s"><?php echo get_field('heading_h1') ?></h1>
						<div class="desc wow fadeInUp" data-wow-delay=".3s">
							<?php echo get_field('dong_so_2') ?>
						</div>
						<h3 class="wow fadeInUp" data-wow-delay=".4s"><a href="<?php echo get_field('don_so_3_link_') ?>">Whitepaper <i class="fa fa-caret-right"></i></a></h3>
						<div class="btn-about wow fadeInUp" data-wow-delay=".55s">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="<?php echo get_field('link_nut_1') ?>" class="ab-camp btn-grad"><?php echo get_field('ten_nut_1') ?></a></li>
								<li class="list-inline-item"><a href="<?php echo get_field('link_nut_2') ?>" class="ab-news"><?php echo get_field('ten_nut_2') ?></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="avarta wow fadeInUp" data-wow-delay=".2s"> <img src="<?php echo get_field('avarta_banner_')['url'] ?>" class="img-fluid" alt=""></div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-prd"> 
		<div class="container">
			<div class="title text-center">
				<h2><span><?php echo get_field('title_box'); ?></span></h2>
				<p class="wow fadeInUp" data-wow-delay=".2s"><?php echo get_field('description_product'); ?></p>
			</div>
			<div class="list-prod">
				<?php echo get_template_part( 'content', 'product' ); ?>
			</div>
		</div>
	</section>
	<section class="box-campaign">
		<div class="container">
			<div class="title text-center">
				<h2><span><?php echo get_field('title_campaigns'); ?></span></h2>
				<p class="wow fadeInUp" data-wow-delay=".2s"><?php echo get_field('desc_campaigns'); ?></p>
			</div>
			<div class="slide-news slide-page">
				<?php echo get_template_part( 'content', 'campaign' ) ?> 
			</div>
		</div>
	</section>
	<section class="box-news">
		<div class="container">
			<div class="title text-center">
				<h2><span><?php echo get_field('title_new'); ?></span></h2>
				<p class="wow fadeInUp" data-wow-delay=".2s"><?php echo get_field('desc-new-home'); ?></p>
			</div>
			<div class="slide-camp slide-page wow fadeInUp" data-wow-delay=".2s">
				<div class="item-slide">
					<div class="item-news">
						<div class="avarta"><a href=""> <img src="<?php echo __BASE_URL__ ?>/images/home-1.png" class="img-fluid" alt=""></a></div>
						<div class="info">
							<div class="date">AUG. 12, 2020</div>
							<h3><a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h3>
						</div>
					</div>
				</div>
				<div class="item-slide">
					<div class="item-news">
						<div class="avarta"><a href=""> <img src="<?php echo __BASE_URL__ ?>/images/home-2.png" class="img-fluid" alt=""></a></div>
						<div class="info">
							<div class="date">AUG. 12, 2020</div>
							<h3><a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h3>
						</div>
					</div>
				</div>
				<div class="item-slide">
					<div class="item-news">
						<div class="avarta"><a href=""> <img src="<?php echo __BASE_URL__ ?>/images/home-3.png" class="img-fluid" alt=""></a></div>
						<div class="info">
							<div class="date">AUG. 12, 2020</div>
							<h3><a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h3>
						</div>
					</div>
				</div>
				<div class="item-slide">
					<div class="item-news">
						<div class="avarta"><a href=""> <img src="<?php echo __BASE_URL__ ?>/images/home-2.png" class="img-fluid" alt=""></a></div>
						<div class="info">
							<div class="date">AUG. 12, 2020</div>
							<h3><a href="">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-partner">
		<div class="container">
			<div class="title text-center">
				<h2><span>Partners</span></h2>
			</div>
			<div class="list-partner">
				<ul>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-1.png" class="img-fluid" alt=""></a></li>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-2.png" class="img-fluid" alt=""></a></li>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-3.png" class="img-fluid" alt=""></a></li>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-4.png" class="img-fluid" alt=""></a></li>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-5.png" class="img-fluid" alt=""></a></li>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-6.png" class="img-fluid" alt=""></a></li>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-7.png" class="img-fluid" alt=""></a></li>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-8.png" class="img-fluid" alt=""></a></li>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-9.png" class="img-fluid" alt=""></a></li>
					<li><a href="javascript:void(0)" class="wow zoomIn" data-wow-delay=".2s"> <img src="<?php echo __BASE_URL__ ?>/images/part-10.png" class="img-fluid" alt=""></a></li>
				</ul>
			</div>
		</div>
	</section>
	<section class="subcribe">
		<div class="container">
			<div class="title text-center">
				<h2><span>Stay Tuned for Updates from Bestay</span></h2>
			</div>
			<div class="box-sub wow fadeInUp" data-wow-delay=".2s">
				<input type="text" placeholder="Email Address">
				<button type="submit" class="btn-grad">Subcribe</button>
			</div>
		</div>
	</section>
</main>

<?php 

get_footer(); 
