<script type="text/javascript">
$(document).ready(function(){
  $(document).on('click','#load_more',function(){
    var ID = $(this).data('val');
    var cat = "<?= $this->uri->segment(2) ?>";
    var search_string = $("#lookingfor").val();
    $('.load_more').hide();
    $('.loding').show();
    $.ajax({
      type:'POST',
      url:"<?= site_url('maincategory/load_more_ajax/'); ?>"+cat,
      data:{id : ID, search_query : search_string},
      success:function(html){
      	if(html == ""){
      		$('.show_more').html("No more data");
      		 $('.loding').hide();
      		$('.show_more').hide();
      	}
        $('#load_more').data('val', ($('#load_more').data('val')+1));
        $('.list').append(html);
        $('.loding').hide();
      }

    });
    
  });
});
</script>





<script>
							    $(document).ready(function(){
							    $("#min,#max,#sort_by,#lookingfor,#college_id").change(function(){
							    	var min = $("#min").val();
							        var max = $("#max").val();
							        var search_string = $("#lookingfor").val();
							        var sort = $("#sort_by").val();
							        var college_id = $("#college_id").val();
							        var cat = "<?= $this->uri->segment(2) ?>";
							        var url = "<?= site_url('maincategory/minmax/'); ?>"+cat;
							    	$(".se-pre-con").fadeIn("slow");
							    	$("#infoi").css(( "z-index" ), 10 );
							    	$.ajax({
								      type:'POST',
								      url:"<?= site_url('maincategory/minmax/'); ?>"+cat,
								      data:{min: min , max : max ,sort : sort, college:college_id, search_query : search_string},
								      success:function(html){
								        $("#load_more").data('val',1);
								        $("#lookingfor").val(search_string);
								        $(".list").html(html);
								        $(".se-pre-con").fadeOut("slow");
								        $("#infoi").css(( "z-index" ), (-1) );
							    	    
								      }

								    });
							        
							        
							        
							    });
							});
							</script>
				

			
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

						<div class="ads-display col-md-9">
					<div class="wrapper">	
						


					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">All Ads</span>
						  </a>
						</li>
						<li role="presentation" class="next">
						  <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
							<span class="text">Ads with Photos</span>
						  </a>
						
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
								<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select id="sort_by">
														<option value="3">Most recent</option>
														<option value="1">Price: Rs Low to High</option>
														<option value="2">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
							<ul class="list">
								<?php if(count($ads)): ?>
								<?php foreach ($ads as $data): ?>
								<a href="<?= site_url('Ads/details/'.$data['AdId']); ?>">
									<li>
									<img src="<?= base_url('uploads/'.$data['Image1']); ?>" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?= $data['AdTitle']; ?></h5>
									<span class="adprice">&#8377; <?= $data['Price']; ?></span>
									<p class="catpath"><?= $this->mylib->category($data['Category']); ?>»<?= $this->mylib->categories_name($data['Category']); ?> </p>
									<p class="catpath college"><?= $this->mylib->college_name($data['College_id']); ?></p>
									</section>
									<section class="list-right">
									<span class="date"><?= $this->mylib->timeago($data['Time']); ?></span>
									
									</section>
									<div class="clearfix"></div>
									</li> 

									<?php endforeach; ?>
								

								<?php endif; ?>
								
								</a>
							
							</ul>
						</div>
							</div>
						</div>
						<input type="hidden" id="search_string" value=""/>
						<div class="load_more_main" style="text-align: center" >
				<button type="button" class="btn btn-primary loadmore" id="load_more" data-val = "1">Load more..</button>
                
                <span class="loding" style="display: none;"><span class="loding_txt"><img src="<?= base_url('images/loader.gif'); ?>" align="middle" alt="loading"></span></span>
            </div>
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>