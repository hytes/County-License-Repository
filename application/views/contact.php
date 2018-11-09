<div class="row">
    <div class="span2 offset2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Quick Links</li>
              <li><a href="#helpModal" role="button" data-toggle="modal">Help</a></li>
              <li><a href="#aboutModal" role="button" data-toggle="modal">About Us</a></li>
              <li><a href="<?php echo site_url('council/contactus') ?>">Comments</a></li>
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
        <?php echo form_open('council/contact_save'); ?>
        <fieldset>
            <legend>Get in Touch with us</legend>
                <div class="span5">  
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $userdetails['firstname']; ?>" class="span3 input-large" required readonly>
                    <label>Mobile Number:</label>
                    <input type="text" name="phone" value="<?php echo $userdetails['phone']; ?>" class="span3 input-large" required readonly>
                    <label>Email address:</label>
                    <input type="text" name="email" value="<?php echo $userdetails['email']; ?>" class="span3 input-large" required readonly>
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