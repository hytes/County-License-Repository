<!--logo and Banner -->
<div class="row">
    <div class="span2 offset3">
        <img src="<?php echo base_url(); ?>img/council.jpg" alt="logo" />
    </div>
</div>
<div class="row">
        <div class="span11 offset3">
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">County Council of Uasin Gishu</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
                <li class="active"><a href="<?php echo site_url('council');?>">Home</a></li>
              <li><a a href="<?php echo site_url('council/housingHome');?>" role="button" data-toggle="modal">Housing</a></li>
              <li><a href="#licenseModal" role="button" data-toggle="modal">Licenses</a></li>
              <li><a href="#landsModal" role="button" data-toggle="modal">Land Rates</a></li>
              <li><a href="#contactModal" role="button" data-toggle="modal">Contact us</a></li>
              <li><a href="#aboutModal" role="button" data-toggle="modal">About us</a></li>
              <li><a href="#helpModal" role="button" data-toggle="modal">Help</a></li>
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
        <div class="span3 offset3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Quick Links</li>
              <li><a href="#aboutModal" role="button" data-toggle="modal">About us</a></li>
              <li><a href="#contactModal" role="button" data-toggle="modal">Contact us</a></li>
              <li><a href="#helpModal" role="button" data-toggle="modal">Help</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
    
    <div class="span6 hide-for-small">
        <div id="slider">
            <ul>
                <li><img src="<?php echo base_url(); ?>img/1.jpg"/></li>
		<li><img src="<?php echo base_url(); ?>img/2.jpg" /></li>
		<li><img src="<?php echo base_url(); ?>img/3.jpg" /></li>
		<li><img src="<?php echo base_url(); ?>img/4.jpg" /></li>
		<li><img src="<?php echo base_url(); ?>img/5.jpg" /></li>			
            </ul>
        </div>
    </div>
</div>

<!--login form -->
<div class="row">
    <div class="span6 offset3">
    <div class="row">
         <div class="span3">
          <h2>Welcome</h2>
          <p>County Council of Uasin Gishu which deals with licensing, Rent and Garbage Collection Fees.
          This Saves ones time based on the fact that there is less traffic.</p>
          <p>To use this Service, One must have logged in</p>
        </div>   

            <div class="span3">
            <form name="frmlogin" class="well" action="<?php echo site_url('council/authenticate'); ?>" id="frmlogin" method="post" accept-charset="utf-8">
			<fieldset>
				<legend>Login</legend>
                                <input type="text" name="username" class="span2 input-large" required data-provide="typeahead" placeholder="username"/>
				<input type="password" name="password" class="span2 input-large" required data-provide="typeahead" placeholder="password"/>
				
				<button class="span2 btn btn-primary btn-large radius">Login</button>
			</fieldset>
            </form>
            </div>
    </div>
    </div>
    
        <div class="span4">

	<?php if($message===FALSE): ?>	
	<!-- errors -->
	<div class="alert alert-error alert-block fade in span4">
            <a href="#" class="close" data-dismiss="alert">×</a>
		<h4>Login error!</h4>
                <p><strong>Please check that you have entered the correct Username and Password.</strong></p>
	</div>
	<!--end errors-->
	<?php endif; ?>
	
<!-- Footer -->            
         <div class="span3">
          <h2>No account yet?</h2>
          <p><a class="btn btn-primary" href="<?php echo site_url('council/signup'); ?>">Sign up Now &raquo;</a></p>
    </div>
	</div>
    
</div>
<!-- Modals area -->


<!-- Admin Modal-->
<div style="display: none;" class="modal" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><small>Administrator Login</small></h3>
    </div>
    <div class="modal-body">
        <div class="span4">
               <?php echo form_open('admin/authenticate'); ?>
                <fieldset>
                    <input type="text" name="username" class="span3 input-large" required data-provide="typeahead" placeholder="username"/>
                    <input type="password" name="password" class="span3 input-large" required data-provide="typeahead" placeholder="password"/>
                    <button class="span2 btn btn-primary btn-large radius">Login</button>
                </fieldset>
            </form>
        </div>
        <div id="success" class="row" style="display: none">
            <div class="span4">
                <div id="successMessage" class="alert alert-success"></div>
            </div>
        </div>
        <div id="error" class="row" style="display: none">
            <div class="span4">
                <div id="errorMessage" class="alert alert-error"></div>
            </div>
        </div>  
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>

<!-- End admin modal -->

<!-- Help Modal-->
<div style="display: none;" class="modal" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Help </h3>
    </div>
    <div class="modal-body">
        <p>For one to use the System, You must Create an account with us.</p>
        <p>Once you have created an account you can pay for your services online and print receipts.</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>      
    </div>
</div>
<!-- End help modal -->

<!-- Housing Modal-->
<div style="display: none;" class="modal" id="housingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <div class="alert alert-error alert-block">
            <p>For a user to pay online, one is required to have Logged in</p>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>      
    </div>
</div>
<!-- End housing modal -->

<!-- License Modal-->
<div style="display: none;" class="modal" id="licenseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <div class="alert alert-error alert-block">
           <p>For a user to pay online, one is required to have Logged in</p>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>      
    </div>
</div>
<!-- End License modal -->

<!-- Lands Modal-->
<div style="display: none;" class="modal" id="landsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
        <div class="alert alert-error alert-block">
            <p>Please Create Account to use this Service</p>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>      
    </div>
</div>
<!-- End lands modal -->

<!-- About Modal-->
<div style="display: none;" class="modal" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">About Us</h3>
    </div>
    <div class="modal-body">
        <p>County Council Call Centre <br />Tel: +254 (020) 4999 999
+254 (020) 4998 000 
<br />Cell: +254 (0711) 099 999
<br />Email: callcentre@countycouncil.go.ke
<br />Website: www.ugcouncil.co.ke</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>      
    </div>
</div>
<!-- End about modal -->

<!-- Contact Modal-->
<div style="display: none;" class="modal" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    </div>
    <div class="modal-body">
    <div class="span4">

        <div class="row">    
    	<?php if($message===FALSE): ?>	
	<!-- errors -->
	<div class="span4">
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
            <div class="span4">
        <?php echo form_open('council/contact_saveHome'); ?>
        <fieldset>
            <legend>Get in Touch with us</legend>
                <div class="span4">  
                    <input type="text" name="name" class="span3 input-large" placeholder="your name" required>
                    <input type="text" name="phone"  class="span3 input-large" placeholder="phone number" required>
                    <input type="text" name="email" class="span3 input-large" placeholder="email" required>
                    <label>Message:</label>
                    <textarea name="message" rows="4" cols="12" class="span4" required data-provide="typeahead"> </textarea>
                    
                    <br />
                    <button class="btn btn-primary btn-large span2">Submit</button>
		</div>                 
        </fieldset> 
    </form>
        </div>
    </div>
   </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>      
    </div>
</div>
<!-- End contact modal -->


<!-- end Modals -->


    <!--footer-->
  <footer class="row">
    <div class="span11 offset3"><hr />
      <div class="row">
 
        <div class="span3">
          <p>&copy; Copyright 2017.</p>
        </div>
 
        <div class="span5 offset3">
            <ul class="nav nav-pills">
                <li><a href="<?php echo site_url('council') ?>">Home</a></li>
                <li><a href="#adminModal" role="button" data-toggle="modal">Admin Login</a></li>
            </ul>            
        </div>
 
      </div>
    </div>
  </footer>
 
    <!-- End Footer -->
  <!--Easy slider-->
     <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/easySlider1.5.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
				continuous: true 
			});
		});	
    </script>	

	<!--bootstrap-->
        <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-affix.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-alert.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-button.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-carousel.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-collapse.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-dropdown.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-popover.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-scrollspy.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-tab.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-tooltip.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-transition.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>
        

