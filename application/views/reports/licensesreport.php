<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to County Council of Uasin Gishu</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  <!-- Included CSS Files (Compressed) -->
  
  	  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awsome.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tablesorter.css" />
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/easyslider.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
  <!--<link rel="stylesheet" href="<?php echo base_url(); ?>css/foundation.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/app.css">-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/quake.slider.css"  type="text/css" />
</head>
<body>


<div class="row">
    <div class="span2 offset6">
        <img src="<?php echo base_url(); ?>img/council.jpg" alt="logo"  />
    </div>
</div>
<div class="row">
      <div class="span5 offset6">
        <h2>County Council of Uasin Gishu</h2>
    </div>
</div>

<div class="row">
      <div class="span3 offset6">
        <h3><?php echo $title; ?></h3>
    </div>
</div>
    <div>
        <hr />
    </div>
<div class="row">
    <div class="span4 offset3">
        <p><img src="<?php echo base_url().'/'.'uploads/'.$userdetails['img_path']; ?>" style="cursor:pointer" height="75px" width="75px" /></p>
        <p>First Name: <?php echo $userdetails['firstname'] ?></p>
        <p>Last Name: <?php echo $userdetails['lastname'] ?></p>	
        		Pay via mpesa paybill number 2207565 or pay over the counter..carry the temp receipt
    </div>
</div>
<!--login form -->
<div class="row">   
<div class="span10 offset3">
    <?php if($message===FALSE): ?>
    <div class="row">    	
	<!-- errors -->
	<div class="span6">
		<div class="alert alert-info">
                    <a href="#" class="close" data-dismiss="alert">�</a>
			<div id="errors"><p><strong>There is Nothing to Display</strong></p>
			
			</div>
		</div>
	</div>
    </div> 
    <?php else: ?> 
<div class="row">
<div class="span11">
    <table class="table table-bordered table-striped tablesorter table-hover" id="tbllands" >
        <thead>
            <tr>
                <th><i class="icon-tags"></i>ID Number</th>
                <th><i class="icon-user"></i>License Number</th>
				        <th><i class="icon-user"></i>License Type</th>
                <th><i class="icon-user"></i>Business Name</th>
                <th><i class="icon-user"></i>Business Location</th>
                <th><i class="icon-home"></i> Date </th>
            </tr>
        </thead>
        <tbody>
	<?php foreach($licensedetails as $detail): ?>
            <tr>
                <td><?php echo $userdetails['idnumber'] ?></td>
                <td><?php echo $detail['id'] ?></td>
                <td><?php echo $detail['ltype'] ?></td>
                 <td><?php echo $detail['bname'] ?></td>
                 <td><?php echo $detail['blocation'] ?></td>
                <td><?php echo $detail['date']?></td>	
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
    <?php endif ?>
</div>
</div>


<!-- Footer -->
  <footer class="row">
    <div class="span11 offset3"><hr />
      <div class="row">
        <div class="span3">
          <p>&copy; Copyright 2017.</p>
        </div>
          <div class="span2">
              <img src="<?php echo base_url();?>img/pdf.jpg" height="48px" width="48px" alt="pdf">
             
                      <input type="submit" onclick="window.print()" value="Print Here" />
          </div> 
    </div>
  </footer>
 
    <!-- End Footer -->
  
  <!-- Included JS Files (Uncompressed) -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.8.3.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tablesorter.js"> </script>
<script>
	$(document).ready(function(){
		$("#tbllands").tablesorter();
                
		//$(".content").fadeIn(1500);       
	});
</script>


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
</body>
</html>



