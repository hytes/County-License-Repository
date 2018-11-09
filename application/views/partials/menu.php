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
        <img src="<?php echo base_url().'/'.'uploads/'.$userdetails['img_path']; ?>" style="cursor:pointer" onclick="showImage('<?php echo base_url().'/'.'uploads/'.$userdetails['img_path']; ?>');" height="75px" width="75px" />			
    </div>
    
    <div class="span1">
        <a href="<?php echo site_url('council/logout') ?>" class="btn  btn-success small radius">Logout</a>
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
              <li><a href="<?php echo site_url('council/home') ?>">Home</a></li>
              
              <li><a href="<?php echo site_url('council/licenses') ?>">Licenses</a></li>
              <li><a href="<?php echo site_url('council/permit') ?>">Permits</a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account<b class="caret"></b></a>
              
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('council/getProfile'); ?>">Profile</a></li>
                       
                        <li><a href="<?php echo site_url('council/getLicenses'); ?>">Licenses</a></li>
                        <li><a href="<?php echo site_url('council/getLands'); ?>">Permit</a></li>
                    </ul>
              </li>
               <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports<b class="caret"></b></a>
              
                    <ul class="dropdown-menu">
                        
						<li><a href="<?php echo site_url('council/getLicenseReport'); ?>">Licenses Report</a></li>
						<li><a href="<?php echo site_url('council/getLandsReport'); ?>">Permit Report</a></li>

                    </ul>
              </li>             
              
              <li><a href="<?php echo site_url('council/contactus') ?>">Contact us</a></li>
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
<!-- end new menu-->