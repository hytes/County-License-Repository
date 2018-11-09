<!-- Help Modal-->
<div style="display: none;" class="modal" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Help </h3>
    </div>
    <div class="modal-body">
        <div class="alet alert-success">
        <p>This system is to aid in online payments.</p>
        <p>Once you have logged in, You can make transactions and print receipts for the services provided.</p>
        <p>You also have the ability to edit your profile by going to MyAccount Tab then select Profile.</p>
        <p>To view your payments statements go to MyAccount, the select the Service you want to view Statements</p>
        
        <p>When you make a payment, you will be redirected to 
            A page where you will view various payments mode, 
            Select your preferred mode of payment and submit your payment      </p>
        </div>
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
        <p>City Council Call Centre <br />Tel: +254 (020) 4999 999
+254 (020) 4998 000 
<br />Cell: +254 (0711) 099 999
<br />Email: callcentre@eldoretcouncil.go.ke
<br />Website: www.eldoretcouncil.co.ke</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>      
    </div>
</div>
<!-- End about modal -->
<!-- Footer -->
  <footer class="row">
    <div class="span12"><hr />
      <div class="row">
 
        <div class="span3 offset2">
          <p>&copy; Copyright 2017.</p>
        </div>
 
        <div class="span5 offset1">
            <ul class="nav nav-pills">
                <li><a href="<?php echo site_url('council/home') ?>">Home</a></li>
                <li><a href="<?php echo site_url('council/housing') ?>">Housing</a></li>
                <li><a href="<?php echo site_url('council/lands') ?>">Land Rates</a></li>
                <li><a href="<?php echo site_url('council/licenses') ?>">Licenses</a></li>
                <li><a href="<?php echo site_url('council/contactus') ?>">Contact us</a></li>
            </ul>            
        </div>
 
      </div>
    </div>
  </footer>
 
    <!-- End Footer -->
  
  <!-- Included JS Files (Uncompressed) -->
  <script src="<?php echo base_url(); ?>js/jquery.js"></script>
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
        
	<!--->

			<!-- Quake Slider-->
	<script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/quake.slider-min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.quake-slider').quake({ effects: ['fade','swirlFadeIn', 'swirlFadeOut', 'swirlFadeIn', 'linearPealReverse', 'slideIn', 'swirlFadeIn', 'explodeFancy'],
                thumbnails: true,
                captionOpacity: '0.3',
                captionsSetup: [
                                 {
                                     "orientation": "bottom",
                                     "slides": [0, 1],
                                     "callback": captionAnimateCallback
                                 },
                                  {
                                      "orientation": "top",
                                      "slides": [2, 3],
                                      "callback": captionAnimateCallback
                                  }
                                  ,
                                  {
                                      "orientation": "left",
                                      "slides": [4, 5],
                                      "callback": captionAnimationCallback1
                                  }
                                  ,
                                  {
                                      "orientation": "right",
                                      "slides": [6, 7],
                                      "callback": captionAnimationCallback1
                                  }
                                ]

            });

            function captionAnimateCallback(captionWrapper, captionContainer, orientation) {
                captionWrapper.css({ left: '-990px' }).stop(true, true).animate({ left: 0 }, 500);
                captionContainer.css({ left: '-990px' }).stop(true, true).animate({ left: 0 }, 500);
            }
            function captionAnimationCallback1(captionWrapper, captionContainer, orientation) {
                captionWrapper.css({ top: '-330px' }).stop(true, true).animate({ top: 0 }, 500);
                captionContainer.css({ top: '-330px' }).stop(true, true).animate({ top: 0 }, 500);
            }

        });
    </script>
    
  

</body>
</html>