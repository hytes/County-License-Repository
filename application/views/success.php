<div class="row">
    <div class="span2 offset2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Quick Links</li>
              <li class="active"><a href="#">Help</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Comments</a></li>
              <li><a href="<?php echo site_url('council/contactus') ?>">Contact us</a></li>
            </ul>
          </div><!--/.well -->
   </div><!--/span-->  
    <div class="span8">

        <div class="row">    
    	<?php if($message===TRUE): ?>	
	<!-- errors -->
	<div class="span6">
		<div class="alert alert-block alert-success">
                    <a href="#" class="close" data-dismiss="alert">×</a>
			<div id="errors"><p><strong>Success!</strong></p>
                            <h2><small>The details have been submitted Successfully</small></h2>
			</div>
		</div>
	</div>
	<!--end errors-->
	<?php endif; ?> 
        </div>  
   </div>
</div>	