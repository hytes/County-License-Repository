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
          <a class="brand" href="#">County Council of Uasin Gishu</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
                <li class="active"><a href="<?php echo site_url('council'); ?>">Home</a></li>
              <li><a href="#housingModal" role="button" data-toggle="modal">Housing</a></li>
              <li><a href="#licenseModal" role="button" data-toggle="modal">Licenses</a></li>
              <li><a href="#landsModal" role="button" data-toggle="modal">Land Rates</a></li>
              <li><a href="#contactModal" role="button" data-toggle="modal">Contact us</a></li>
              <li><a href="#aboutModal" role="button" data-toggle="modal">About us</a></li>
              <li><a href="#aboutModal" role="button" data-toggle="modal">Help</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>     
    </div>
</div>

<div style="height:15px;">
    
</div>
<!--login form -->
<div class="row">
    <div class="span2 offset2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Quick Links</li>
              <li><a href="#aboutModal" role="button" data-toggle="modal">About us</a></li>
              <li><a href="#contactModal" role="button" data-toggle="modal">Contact us</a></li>
              <li><a href="#helpModal" role="button" data-toggle="modal">Help</a></li>
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
        <?php echo form_open_multipart('council/process'); ?>
        <fieldset>
            <legend>Create Account</legend>
                <div class="span3">
                    <label>First Name</label>
                    <input type="text" name="firstname" class="input-large" required>

                    <label>Last Name</label>
                    <input type="text" name="lastname" class="input-large" required>                    
                    
                    <label>Mobile Number:</label>
                    <input type="text" name="phone" class="input-large" required>
                    <label>ID Number:</label>
                    <input type="text" name="idnumber" class="input-large" required numeric>
                    <label>Email address:</label>
                    <input type="text" name="email" class="input-large" required>
                    <label>Address</label>
                    <input type="text" name="address" class="input-large" placeholder="Physical (e.g. P.o Box 23, NBI)" required>		
		</div>

                <div class="span3">
                    <label>Username:</label>
                    <input type="text" name="username" data-provide="typeahead" class="input-large" required>
                    <label>Password:</label>
                    <input type="password" name="password" data-provide="typeahead" class="input-large" required>
                    <label>Confirm Password:</label>
                    <input type="password" name="confpassword" data-provide="typeahead" class="input-large" required>
                    <label>Recent Passport photo:</label>
                    <input type="file" name="userfile" class="input-large" data-provide="typeahead" required><br />
                    <button class="btn btn-primary btn-large span2">Submit</button>
                </div>                  
        </fieldset> 
    </form>
    </div>
   </div>
</div>	

<!-- Modals Area -->

<!-- Housing Modal-->
<div style="display: none;" class="modal" id="housingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<!-- End housing modal -->

<!-- License Modal-->
<div style="display: none;" class="modal" id="licenseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<br />Email: callcentre@countyycouncil.go.ke
<br />Website: www.Ugcouncil.co.ke</p>
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

<!-- End Modals Area -->
    <!-- Footer -->
  <footer class="row">
    <div class="span11 offset3"><hr />
      <div class="row">
 
        <div class="span3">
         <p>&copy; Copyright 2017.</p>
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
	<!--bootstrap-->
	<!--bootstrap-->
             <script src="<?php echo base_url(); ?>js/jquery.js"></script>
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
