	<div class="row" style="height:20px">
	
	</div>
	
<!--login form -->
<div class="row">
    
<div class="span10 offset2">
    <?php if($message===FALSE): ?>
    <div class="row">    	
	<!-- errors -->
	<div class="span6">
		<div class="alert alert-info">
                    <a href="#" class="close" data-dismiss="alert">×</a>
			<div id="errors"><p><strong>There is Nothing to Display</strong></p>
			
			</div>
		</div>
	</div>
    </div> 
    <?php else: ?> 
    <div class="row">
<div class="span10">
    <table class="table table-bordered table-striped tablesorter table-hover" id="tbllands" >
        <thead>
            <tr>
                <th><i class="icon-tags"></i>ID Number</th>
                <th><i class="icon-user"></i>House Number</th>
                <th><i class="icon-envelope"></i> Fraction</th>
                <th><i class="icon-envelope"></i> Location</th>
                <th><i class="icon-home"></i> Date </th>
            </tr>
        </thead>
        <tbody>
	<?php foreach($paymentdetails as $detail): ?>
            <tr>
                <td><?php echo $userdetails['idnumber'] ?></td>
                <td><?php echo $detail['houseno'] ?></td>
                <td><?php echo $detail['fraction'] ?></td>
                <td><?php echo $detail['location'] ?></td>
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
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.8.3.min.js"> </script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tablesorter.js"> </script>
<script>
	$(document).ready(function(){
		$("#tbllands").tablesorter();
                
		//$(".content").fadeIn(1500);       
	});
</script>


