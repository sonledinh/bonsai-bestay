<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bestay
 */

?>

<footer> 
	<div class="footer-content">
		<div class="square-ft"><img src="images/v-5.png" class="img-fluid" width="67" height="67" alt=""></div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="logo"><a href=""><img src="images/logo-ft.png" class="img-fluid" alt=""></a></div>
				</div>
				<div class="col-md-8">
					<div class="footer-right">
						<div class="menu-ft">
							<div class="row">
								<div class="col-md-2">
									<div class="item-ft">
										<h3>Products</h3>
										<ul>
											<li><a href="">Platform</a></li>
											<li><a href="">DApp</a></li>
											<li><a href="">Exchanges</a></li>
											<li><a href="">Payment</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-2">
									<div class="item-ft">
										<h3>People</h3> 
										<ul>
											<li><a href="">Team</a></li>
											<li><a href="">Advisors</a></li>
											<li><a href="">Partners</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-2">
									<div class="item-ft">
										<h3>Trade</h3>
										<ul>
											<li><a href="">ProBit</a></li>
											<li><a href="">VinDAX</a></li>
											<li><a href="">CoinGecko</a></li>
											<li><a href="">CoinMarketCap</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-2">
									<div class="item-ft">
										<h3>Airdrop</h3>
										<ul> 
											<li><a href="">Airdrop</a></li>
											<li><a href="">Trading Competition</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-2">
									<div class="item-ft">
										<h3>Guide</h3>
										<ul>
											<li><a href="">FAQs</a></li>
											<li><a href="">Contacts</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-2">
									<div class="item-ft">
										<h3>Lastest News</h3>
										<ul>
											<li><a href="">Lastest News 1</a></li>
											<li><a href="">Lastest News 2</a></li>
											<li><a href="">Lastest News 3</a></li>
										</ul>
									</div>
								</div>  
							</div> 
						</div>
						<div class="social">
							<ul class="list-inline">
								<li class="list-inline-item"><a href=""><img src="images/sc-1.png" class="img-fluid" alt=""></a></li>
								<li class="list-inline-item"><a href=""><img src="images/sc-2.png" class="img-fluid" alt=""></a></li>
								<li class="list-inline-item"><a href=""><img src="images/sc-3.png" class="img-fluid" alt=""></a></li>
								<li class="list-inline-item"><a href=""><img src="images/sc-4.png" class="img-fluid" alt=""></a></li>
								<li class="list-inline-item"><a href=""><img src="images/sc-5.png" class="img-fluid" alt=""></a></li>
								<li class="list-inline-item"><a href=""><img src="images/sc-6.png" class="img-fluid" alt=""></a></li>
								<li class="list-inline-item"><a href=""><img src="images/sc-7.png" class="img-fluid" alt=""></a></li>
								<li class="list-inline-item"><a href=""><img src="images/sc-8.png" class="img-fluid" alt=""></a></li>
								<li class="list-inline-item"><a href=""><img src="images/sc-9.png" class="img-fluid" alt=""></a></li>
								<li class="list-inline-item"><a href=""><img src="images/sc-10.png" class="img-fluid" alt=""></a></li>
							</ul>
						</div>
						<div class="coppyright">© 2018 - 2020 ≪BSY≫. ALL RIGHTS RESERVED.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="back-top"><a href="javascript:0"><i class="fa fa-angle-up"></i></a></div> -->
</footer>

<?php wp_footer(); ?>
<script>
	var rect = $('.box-about .avarta')[0].getBoundingClientRect();
	var mouse = {x: 0, y: 0, moved: false};

	$(".box-about .avarta").mousemove(function(e) {
	  mouse.moved = true;
	  mouse.x = e.clientX - rect.left;
	  mouse.y = e.clientY - rect.top; 
	});
	 
	TweenLite.ticker.addEventListener('tick', function(){
	  if (mouse.moved){    
	    parallaxIt(".box-about .avarta img", -20); 
	  }
	  mouse.moved = false;
	});

	function parallaxIt(target, movement) {
	  TweenMax.to(target, 1, {
	    x: (mouse.x - rect.width / 2) / rect.width * movement,
	    y: (mouse.y - rect.height / 2) / rect.height * movement
	  });
	}

	$(window).on('resize scroll', function(){
	  rect = $('.box-about .avarta')[0].getBoundingClientRect();
	})

</script>
</body>
</html>
</body>
</html>
