<!--logo and Banner -->
<div class="row">
    <div class="span2 offset2">
        <img src="<?php echo base_url(); ?>img/council.jpg" alt="logo" />
    </div>
</div>
<div class="row">
        <div class="span12 offset2">
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">County Council of Eldoret</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">Housing</a></li>
              <li><a href="#about">Licenses</a></li>
              <li><a href="#about">Land Rates</a></li>
              <li><a href="#contact">Contact us</a></li>
              <li><a href="#about">Help</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
        
    </div>
</div>

<div style="height:15px;">
    
</div>

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
    	<?php if($message===FALSE): ?>	
	<!-- errors -->
	<div class="span6">
		<div class="alert alert-error">
                    <a href="#" class="close" data-dismiss="alert">×</a>
			<div id="errors"><p><strong>Error!</strong></p>
			<?php echo validation_errors();?>
			</div>
		</div>
	</div>
	<!--end errors-->
	<?php endif; ?> 
        </div>        
        
        <div class="row">
            <div class="span5">
        <?php echo form_open('council'); ?>
        <fieldset>
            <legend>Get in Touch with us</legend>
                <div class="span5">  
                    <label>Name</label>
                    <input type="text" name="name" class="span3 input-large" required>
                    <label>Mobile Number:</label>
                    <input type="text" name="phone" class="span3 input-large" required>
                    <label>Email address:</label>
                    <input type="text" name="email" class="span3 input-large" required>
                    <label>Message:</label>
                    <textarea rows="4" cols="12" class="span4"> </textarea>
                    
                    <br />
                    <button class="btn btn-primary btn-large span2">Submit</button>
		</div>                 
        </fieldset> 
    </form>
        </div>
    </div>
   </div>
</div>	

    <!-- Footer -->
  <footer class="row">
    <div class="span12 offset2"><hr />
      <div class="row">
 
        <div class="span3">
          <p>&copy; Copyright 2014.</p>
        </div>
 
        <div class="span4 offset2">
            <ul class="nav nav-pills">
                <li><a href="<?php echo site_url('council'); ?>">Home</a></li>
            </ul>            
        </div>
 
      </div>
    </div>
  </footer>
 
    <!-- End Footer -->

