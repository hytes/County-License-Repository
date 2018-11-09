
<!--login form -->
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
        <div class="span8">
		<?php echo form_open('council/updateProfile'); ?>
                <fieldset>
                <legend>Update Profile </legend>
                    <div class="span4">
                        <label>First Name</label>
                        <input type="text" name="firstname" class="input-large"  value="<?php echo $userdetails['firstname'];?>" readonly required>
                        <label>Last Name</label>
                        <input type="text" name="lastname" class="input-large"  value="<?php echo $userdetails['lastname'];?>" readonly required>
                        <label>Mobile Number:</label>
                        <input type="text" name="phone" class="input-large"  value="<?php echo $userdetails['phone'];?>" required numeric>
                        <label>ID Number:</label>
                        <input type="text" name="idnumber" class="input-large"  value="<?php echo $userdetails['idnumber'];?>" readonly required>
                        <label>Physical Address:</label>
                        <input type="text" name="address" class="input-large"  value="<?php echo $userdetails['address'];?>" required>
                                              
                    </div>
                    
                    <div class="span4">
                        <label>Email address:</label>
                        <input type="text" name="email" class="input-large"  value="<?php echo $userdetails['email'];?>" required>                        
                    <label>Username:</label>
                    <input type="text" name="username" value="<?php echo $userdetails['username'];?>" data-provide="typeahead" class="input-large" readonly required>
                    
                    <label>Password:</label>
                    <input type="password" name="password" value="<?php echo $userdetails['password'];?>" data-provide="typeahead" class="input-large" required>
                    <label>Confirm Password:</label>
                    <input type="password" name="confpassword" value="<?php echo $userdetails['password'];?>" data-provide="typeahead" class="input-large" required>
                    
                        <br />
                        <button class="btn-primary btn-large">Update Profile</button>                         
                    </div>
            </fieldset>
        </form>
    </div>
</div>
    </div>
</div>



