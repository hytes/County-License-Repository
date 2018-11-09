 <div class="row">
     <div class="span6 offset2">
         <div class="quake-slider">
            <div class="quake-slider-images">
                    <img src="<?php echo base_url(); ?>img/1.jpg"  />
                    <img src="<?php echo base_url(); ?>img/2.jpg"  />
                    <img src="<?php echo base_url(); ?>img/3.jpg" />
                    <img src="<?php echo base_url(); ?>img/4.jpg" />
                    <img src="<?php echo base_url(); ?>img/5.jpg" />
                    <img src="<?php echo base_url(); ?>img/6.jpg" />
                    <img src="<?php echo base_url(); ?>img/9.jpg" />
                    <img src="<?php echo base_url(); ?>img/16.jpg"/>            
            </div>
             <div class="quake-slider-captions">
                <div class="quake-slider-caption">
                    Clean Business, <span class='quake-highlight'><a target="_blank" href="">
                        </a></span> My County, My Town.
                </div>
                <div class="quake-slider-caption">
                    Mission & Vision, <span class='quake-highlight'><a target="_blank" href="">
                        </a></span> To provide and manage basic licensing services to Uasin Gishu Residents.
                </div>               
             
                <div class="quake-slider-caption">
                    Our Vision <span class='quake-highlight'><a target="_blank" href="">
                         </a></span> To be recognized as one of the most attractive cities of the world.
                </div>                
                <div class="quake-slider-caption">
                    Mission, <span class='quake-highlight'><a target="_blank" href="">
                        </a></span>To facilitate coordinated development and improved service delivery.
                </div>             
                
				 <div class="quake-slider-caption">
                    Our Vision <span class='quake-highlight'><a target="_blank" href="">
                         </a></span> To be recognized as one of the most attractive cities of the world.
                </div> 
                
                <div class="quake-slider-caption">
                    Mission & Vision, <span class='quake-highlight'><a target="_blank" href="">
                        </a></span> To provide and manage basic social & physical infrastructure services to Uasin Gishu Residents.
                </div> 
				
                <div class="quake-slider-caption">
                    Clean Business, <span class='quake-highlight'><a target="_blank" href="">
                        </a></span> My County, My Town.
                </div>
				
                <div class="quake-slider-caption">
                    Mission, <span class='quake-highlight'><a target="_blank" href="">
                        </a></span>To facilitate coordinated development and improved service delivery.
                </div> 
			
            </div>
        </div>
     </div>
  </div>
  <br>
 
  <div class="row">
      <div class="span11 offset2">
          <div class="hero-unit">
            <h3>Hello, <?php echo $this->session->userdata('username'); ?></h3>
          <p>City Council of Eldoret is a government parastatal in Kenya that 
              is allocated the duties of County Management, Garbage Collection, Housing Management .
              Its headquarters is located in the CBD of Eldoret town at Town Hall. 
              All people who need either a new Business license must go to Town Hall to attain one. </p>
            
          </div>      
      </div>
  </div>
    <div id="largeImgPanel" onclick="hideMe(this);">
            <img id="largeImg" style="height: 100%; margin: 0; padding: 0;" />
    </div>
  <script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
  <script>
            function showImage(imgName) {
                document.getElementById('largeImg').src = imgName;
                showLargeImagePanel();
                unselectAll();
            }
            function showLargeImagePanel() {
                document.getElementById('largeImgPanel').style.visibility = 'visible';
            }
            function unselectAll() {
                if(document.selection) document.selection.empty();
                if(window.getSelection) window.getSelection().removeAllRanges();
            }
            function hideMe(obj) {
                obj.style.visibility = 'hidden';
            }
 </script>