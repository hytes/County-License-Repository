<!--new  menu-->
<!--logo and Banner -->
<div class="row">
    <div class="span2 offset2">
        <img src="<?php echo base_url(); ?>img/council.jpg" alt="logo" />
    </div>
    <div style="height:12px;">
        
    </div>
    <div class="span4 offset4">
        Welcome:<a href="#"><?php echo $this->session->userdata('username'); ?></a>			
    </div>
    
    <div class="span1">
        <a href="<?php echo site_url('admin/logout') ?>" class="btn  btn-success small radius">Logout</a>
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
              <li><a href="<?php echo site_url('admin') ?>">Home</a></li>
             
              <li><a href="<?php echo site_url('admin/getLicenses') ?>">Licenses Reports</a></li>
              <li><a href="<?php echo site_url('admin/getLands') ?>">Permit Report</a></li>
              <li><a href="<?php echo site_url('admin/getMessages') ?>">Messages/Comments</a></li>
              <li><a href="<?php echo site_url('admin/getUsers') ?>">Users Report</a></li>              
            </ul>
          </div>
        </div>
      </div>
    </div>
        
    </div>
</div>

<div style="height:15px;">
    
</div>
<!-- end new menu-->
