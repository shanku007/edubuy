  <script>
                              

                              $(document).ready(function() {
                                        var url = "<?= $this->uri->segment(1) ?>";
                                        if(url == "Useraccount"){
                                        $(".account").css("display","none");
                                    }
                                    });
</script>

<script type="text/javascript">
$(document).ready(function(){
  $(document).on('click','#load_more',function(){

    var ID = $(this).data('val');
    $('.load_more').hide();
    $('.loding').show();
    console.log(ID);
    $.ajax({
      type:'POST',
      url:'<?= site_url('useraccount/loadmore'); ?>',
      data:{id: ID},
      success:function(html){
        $('#load_more').data('val', ($('#load_more').data('val')+1));
        $('.list').append(html);
        $('.loding').hide();
      }

    });
    
  });
});
</script>






<div class="container">


	<div class="ads-grid">
				<div class="side-bar col-md-3">
					
				
				<a href="<?= site_url('useraccount/logout'); ?>"><div class="floating-box"><div class="icon"><i class="glyphicon glyphicon-log-out" style="font-size:30px;"></i><br/> Log Out</div></div>
				<a href="<?= site_url('useraccount/passwordreset'); ?>"><div class="floating-box"><div class="icon"><i class="fa fa-key" style="font-size:30px;"></i> <br/>Change Password</div></div></a>
				
				
				
				</div>
			</div>


						<div class="ads-display col-md-9">
					<div class="wrapper">	
						


					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">My Ads</span>
						  </a>
						</li>
						
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
								<div id="container">
									 <div id="infoi" >
    			<img class="loading_image"  src="<?= base_url('images/pageloader.gif'); ?>" height="20" width="32" />
  				</div>
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								
								
								<div class="clearfix"></div>
							<ul class="list">
								<?php if(count($ads)): ?>
								<?php foreach ($ads as $data): ?>
								
									<li>
										<a href="<?= site_url('useraccount/delete_ad/'.$data['AdId']); ?>" class="confirmation"><button type="button" class="btn-danger delete"  id="delete" onclick="return confirm('Are you sure?')" >Delete</button></a>
										<a href="<?= site_url('Ads/details/'.$data['AdId']); ?>">
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
								</a>
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
			