
	<!--details-page-->
	<div class="details-page main-grid-border">
		<div class="container">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="<?= site_url(); ?>">Home</a></li>
				<li><a href="<?= site_url('AllAds'); ?>">All Ads</a></li>
				<li class="active"><a href="<?= $this->mylib->category_link($Ad[0]['Maincategory']); ?>"><?= $this->mylib->category($Ad[0]['Category']); ?></a></li>
				<li class="active"><?php $this->mylib->categories_name($Ad[0]['Category']); ?></li>
			</ol>
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><?= $Ad[0]['AdTitle']; ?></h2>
					<p><i class="fa fa-map-marker"></i><?= $this->mylib->college_name($Ad[0]["College_id"]);  ?>|Added at <?= date("F j, Y g:i a", strtotime($Ad[0]["Time"])); ?>|Ad ID: <?= $Ad[0]['AdId']; ?></p>
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?= base_url('uploads/'.$Ad[0]['Image1']); ?>">
								<img src="<?= base_url('uploads/'.$Ad[0]['Image1']); ?>" />
							</li>
							<li data-thumb="<?= base_url('uploads/'.$Ad[0]['Image2']); ?>">
								<img src="<?= base_url('uploads/'.$Ad[0]['Image2']); ?>" />
							</li>
							<li data-thumb="<?= base_url('uploads/'.$Ad[0]['Image3']); ?>">
								<img src="<?= base_url('uploads/'.$Ad[0]['Image3']); ?>" />
							</li>
						</ul>
					</div>
					<!-- FlexSlider -->
					 

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						
						<h4>Views : <strong><?= $Ad[0]['Views']; ?></strong></h4>
						
						<p><strong>Summary</strong>:<br/> <?= $Ad[0]['AdDescription']; ?>.</p>
					
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Price</p>
							<h3 class="rate"> &#8377; <?= $Ad[0]['Price']; ?></h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Posted By:</p>
							<h4><?= $Ad[0]['Name']; ?> </h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">Item Type:</p>
							<h4><?php $this->mylib->categories_name($Ad[0]['Category']); ?></h4>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="interested text-center">
						<h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
						<a href="tel:<?= $Ad[0]['PhoneNo']; ?>"><p><i class="glyphicon glyphicon-earphone"></i>+91 <?= $Ad[0]['PhoneNo']; ?></p></a>
					</div>
						<div class="tips">
						<h4>Safety Tips for Buyers</h4>
							<ol>
								<li>Meet seller at a safe location</li>
								<li>Check the item before you buy</li>
								<li>Pay only after collecting item</li>


								
							</ol>
						</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//details-page-->
