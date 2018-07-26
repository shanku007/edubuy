
	
		<!-- content-starts-here -->
		<div class="content">
			<div class="categories.html#parent.html#parent">
				<div class="container">
					<div class="col-md-4 focus-grid">
						<a href="<?= site_url('home/categories/categories.html'); ?>">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-mobile"></i></div>
									<h4 class="clrchg">Mobiles</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 focus-grid">
						<a href="<?= site_url('home/categories/categories.html#parentVerticalTab2'); ?>">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-laptop"></i></div>
									<h4 class="clrchg"> Electronics & Appliances</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 focus-grid">
						<a href="<?= site_url('home/categories/categories.html#parentVerticalTab3'); ?>">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-pencil" aria-hidden="true"></i></div>
									<h4 class="clrchg">Stationary</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-4 focus-grid">
						<a href="<?= site_url('home/categories/categories.html#parentVerticalTab4'); ?> ">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-car"></i></div>
									<h4 class="clrchg">Transportation</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-4 focus-grid">
						<a href="<?= site_url('home/categories/categories.html#parentVerticalTab5'); ?>">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-bath"></i></div>
									<h4 class="clrchg">Furnitures</h4>
								</div>
							</div>
						</a>
					</div>
					
					<div class="col-md-4 focus-grid">
						<a href="<?= site_url('home/categories/categories.html#parentVerticalTab7'); ?>">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-book"></i></div>
									<h4 class="clrchg">Books, Sports & Hobbies</h4>
								</div>
							</div>
						</a>
					</div>	
					
					
					
					
					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				<div class="trend-ads">
					<h2>Recent Ads</h2>
							<ul id="flexiselDemo3">
								<li>
								<?php if(count($firstlist)): ?>
								<?php foreach ($firstlist as $firstlist): ?>
								
								<?php $path = $firstlist -> Image1; ?>
								
									<div class="col-md-3 biseller-column">
										<a href="<?= site_url('Ads/details/'.$firstlist->AdId); ?>">
											<img src="<?= base_url('uploads/'.$path); ?>"/>
											<span class="price">&#8377; <?= $firstlist->Price ?></span>
										</a> 
										<div class="ad-info">
											<h5><?= $firstlist->AdTitle ?></h5>
											<span><?= $this->mylib->timeago($firstlist->Time); ?></span>
										</div>
									</div>
								<?php endforeach; ?>
								

								<?php endif; ?>
								</li>
								<li>
									<?php if(count($secondlist)): ?>
								<?php foreach ($secondlist as $secondlist): ?>
								
								<?php $path = $secondlist -> Image1; ?>
								
									<div class="col-md-3 biseller-column">
										<a href="<?= site_url('Ads/details/'.$secondlist->AdId); ?>">
											<img src="<?= base_url('uploads/'.$path); ?>"/>
											<span class="price">&#8377; <?= $secondlist->Price ?></span>
										</a> 
										<div class="ad-info">
											<h5><?= $secondlist->AdTitle ?></h5>
											<span><?= $this->mylib->timeago($secondlist->Time); ?></span>
										</div>
									</div>
								<?php endforeach; ?>
								

								<?php endif; ?>
								</li>
								<li>
									<?php if(count($thirdlist)): ?>
								<?php foreach ($thirdlist as $thirdlist): ?>
								
								<?php $path = $thirdlist -> Image1; ?>
								
									<div class="col-md-3 biseller-column">
										<a href="<?= site_url('Ads/details/'.$thirdlist->AdId); ?>">
											<img src="<?= base_url('uploads/'.$path); ?>"/>
											<span class="price">&#8377; <?= $thirdlist->Price ?></span>
										</a> 
										<div class="ad-info">
											<h5><?= $thirdlist->AdTitle ?></h5>
											<span><?= $this->mylib->timeago($thirdlist->Time); ?></span>
										</div>
									</div>
								<?php endforeach; ?>
								

								<?php endif; ?>
								</li>
						</ul>
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
					   <!--This is for moving Ads -->
					   <script type="text/javascript" src="<?= base_url('js/jquery.flexisel.js'); ?>"></script>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
			
		</div>
		<!--footer section start-->		
		