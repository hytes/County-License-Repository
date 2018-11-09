	<div class="row" style="height:40px">
	
	</div>
	
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
        <div class="span10">
		<?php echo form_open('council/lands_pay'); ?>
                <fieldset>
                <legend>Permits Application Details</legend>
                    <div class="span4">
                        <label>First Name</label>
                        <input type="text" name="firstname" class="input-large"  value="<?php echo $userdetails['firstname'];?>" required readonly>
                        <label>Last Name</label>
                        <input type="text" name="lastname" class="input-large"  value="<?php echo $userdetails['lastname'];?>" required readonly>
                        <label>Mobile Number:</label>
                        <input type="text" name="phone" class="input-large"  value="<?php echo $userdetails['phone'];?>" required numeric readonly>
                        <label>ID Number:</label>
                        <input type="text" name="idnumber" class="input-large"  value="<?php echo $userdetails['idnumber'];?>" required readonly>
                        <label>Email address:</label>
                        <input type="text" name="email" class="input-large"  value="<?php echo $userdetails['email'];?>" required readonly>
                                              
                    </div>
                    
                    <div class="span4">
                        <input type="text" name="type" value="MERCHANT" readonly="readonly" style="display: none;"/>	
			<input type="text" name="description" value="Order Description" style="display: none;" />
			<input type="text" name="reference" value="001" style="display: none;"/>
                          <label>Choose License Type</label>
                        <select name="ltype">
                            
                             <option>Chain Store License ksh1,000</option>
                                  
                              <option>      Construction License ksh1,000
                              <option>      Liquor License Renewals and Transfers ksh2,000
                              <option>      Peddlers License ksh1,000
                              <option>      Scrap Metal Processor Junk Dealer and Agent License ksh1,000
                              <option>      Storage Warehouse License ksh3,000
                              <option>      Traders License ksh1,000
                              <option>      Transient Vendors License ksh1,000
                               <option>     Vending Machine License ksh4,000
                               <option>     Slot Machine Licenses ksh1,000
                            </option>
                        </select>
                        
                           <label>Business Name:</label>
                        <input type="text" name="bname" class="input-large" data-provide="typeahead" required>
                        <br />
                        
                           <label>Business Location:</label>
                        <input type="text" name="blocation" class="input-large" data-provide="typeahead" required>
                        <br />
                       
                        <br />
                        <button class="btn-primary btn-large">Submit</button>                         
                    </div>
            </fieldset>
        </form>
    </div>
</div>
    </div>
</div>




