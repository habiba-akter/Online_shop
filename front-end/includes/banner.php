		<?php $banners = $obj->getAllData("SELECT * FROM slider WHERE status = 1 ORDER BY sort_order ASC"); ?>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
					<?php foreach($banners as $banner){ ?>
						<li>
							<div class="w3l_banner_nav_right_banner" style="background:url(../secure/uploads/slider/<?php echo  $banner['images']; ?>) no-repeat 0px 0px;">
								<?php echo $banner['title']; ?>
								<?php if($banner['url']!=''){ ?>
								<div class="more">
									<a href="<?php echo $banner['url']; ?>" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
								<?php } ?>
							</div>
						</li>
						<?php } ?>
						
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		