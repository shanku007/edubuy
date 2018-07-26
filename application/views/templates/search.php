<div class="total-ads main-grid-border">
		<div class="container">
			

			


			
			<div class="select-box">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your college to see local ads</label>
						<?= $this->mylib->collegeselect(); ?>
				</div>
				<div class="browse-category ads-list">
					<label>Browse Categories</label>
					<select class="selectpicker show-tick" data-live-search="true" id="category" name="category" onchange="location = this.value;">
						<optgroup label="Mobiles">
													<option selected style="display:none;color:#eee;" value="" >Select Categoy</option>
													<option value="<?= site_url('Mobiles-Phones/1'); ?>">Mobiles Phone</option>
													<option value="<?= site_url('Tablets/2'); ?>">Tablets</option>
													<option value="<?= site_url('Mobile-Accessories/3'); ?>">Accessories</option>
													
						</optgroup>


                       
					    <optgroup label="Electronics and Appliances">
													
													<option value="<?= site_url('Computers-Accessories/4'); ?>">Computers & Accessories</option>
                                                    <option value="<?= site_url('Tv-Video-Audio/5'); ?>">Tv-Video-Audio</option>
                                                    <option value="<?= site_url('Cameras-Accessories/6'); ?>">Cameras & Accessories</option>
                                                    <option value="<?= site_url('Games-Entertainment/7'); ?>">Games and Entertainment</option>
                                                    <option value="<?= site_url('Fridge-AC-Washing Machine/8'); ?>">Fridge-AC-Washing Machine</option>
                                                    <option value="<?= site_url('Kitchen-other-Appliances/9'); ?>">Kitchen and other Appliances</option>
					
					    </optgroup>



					     <optgroup label="Stationarys">
													
													<option value="<?= site_url('Drafter-Sheet-Holder/10'); ?>">Drafter and Sheet Holder</option>
                                                    <option value="<?= site_url('Calculator/11'); ?>">Calculator</option>
                                                    <option value="<?= site_url('Lab-Coat/12'); ?>">Lab Coat</option>
                                                     <option value="<?= site_url('Notes/27'); ?>">Notes</option>
                                                   
					
					     </optgroup>




					     <optgroup label="Transportation">
													
													<option value="<?= site_url('MotorCycles/13'); ?>">MotorCycles</option>
                                                    <option value="<?= site_url('Scooters/14'); ?>">Scooters</option>
                                                    <option value="<?= site_url('Bicycles/15'); ?>">Bicycles</option>
                                                    <option value="<?= site_url('Cars/16'); ?>">Cars</option>
                                                    <option value="<?= site_url('Spare-Parts/17'); ?>">Spare Parts</option>
                                                   
					
					    </optgroup>




					     <optgroup label="Furnitures">
													
													<option value="<?= site_url('Sofa-Dining/18'); ?>">Sofa and Dining</option>
                                                    <option value="<?= site_url('Beds-Wardrobes/19'); ?>">Beds and Wardrobes</option>
                                                    <option value="<?= site_url('Home_Decor-Garden/20'); ?>">Home Decor and Garden</option>
                                                    <option value="<?= site_url('Other_Household_item/21'); ?>">Other Household item</option>
                                                    
					
					    </optgroup>






					     <optgroup label="Books Sports and Hobbies">
													
													<option value="<?= site_url('Books-Magazines/22'); ?>">Books and Magazines</option>
                                                    <option value="<?= site_url('Sports_Equipment/23'); ?>">Sports Equipment</option>
                                                    <option value="<?= site_url('Gym-Fitness/24'); ?>">Gym and Fitness</option>
                                                    <option value="<?= site_url('Musical_Instrument/25'); ?>">Musical Instrument</option>
                                                    <option value="<?= site_url('Other-Hobbies/26'); ?>">Other Hobbies</option>
                                                   
					
					    </optgroup>					  
					</select>
				</div>
				<div class="search-product ads-list">
					<label>Search for a specific product</label>
					<div class="search">
						<div id="custom-search-input">
						<div class="input-group">
                          <?php    $data = array(
        'name'          => 'lookingfor',
        'id'            => 'lookingfor',
        'maxlength'     => '100',
        'size'          => '50',
        'value'         => "",
        'type'          => 'text',
        'class'         => 'form-control input-lg',
        'placeholder'   => 'What are you looking for'
); ?>

				<?= form_input($data); ?>
								<button type="submit" class="btn btn-default">
                    <i class="fa fa-search"></i> Search
                </button>
							</span>
						</div>
					</div>
					</div>

				</div>
				<div class="clearfix"></div>
			</div>

			


			<ol class="breadcrumb" style="margin-bottom: 5px;">
			  <li><a href="<?= site_url(); ?>">Home</a></li>
			  <li class="active">All Ads</li>
			</ol>

			


			<div class="ads-grid">
				<div class="side-bar col-md-3">
					
				
				<div class="range">
					<h3 class="sear-head">Price range</h3>
						<input list="min" name="minimum_price" type="number" placeholder="Price From" id="min" class="min_price"/><br/>
										<datalist id="min">
										  <option value="&#8377;100">
										  <option value="&#8377;500">
										  <option value="&#8377;1000">
										  <option value="&#8377;2000">
										  <option value="&#8377;5000">
										  <option value="&#8377;10000">
										  <option value="&#8377;25000">
										</datalist>
									
                                        <p id="asc"><i class="fa fa-sort" style="font-size:32px;color: #8080ff"></i></p>  
                                         

										<input list="max" type="number" name="maximum_price" placeholder="Price To" id="max" class="min_price" />
									<datalist id="max">
									  <option value="&#8377;100">
										  <option value="&#8377;500">
										  <option value="&#8377;1000">
										  <option value="&#8377;2000">
										  <option value="&#8377;5000">
										  <option value="&#8377;10000">
										  <option value="&#8377;25000">
									</datalist>
									

								
							<!---->
							

							
						
							
				</div>

<div class="featured-ads">
					<h2 class="sear-head fer">Featured Ads</h2>
					<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=qf_sp_asin_til&ad_type=product_link&tracking_id=edubuy-21&marketplace=amazon&region=IN&placement=B0034BAQS8&asins=B0034BAQS8&linkId=86b0a1bf8bb91f5a39ea8492c77131c3&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
				
					<div class="clearfix"></div>
				</div>
				
				</div>
			</div>
					