 <div id="container">
              <div id="leftContainer">
                  <div id="topLeftContainer">
                      
                      <?php if(!empty($query))
                      {
     foreach ($query as $data)
     {
         if(strlen($data->image)>0){
         ?>
         <div id="rates">
             <img style="float: left;" src="<?php echo base_url().'contents/uploads/images/'.$data->image; ?>" width="50" height="50" />
                       <?php
    if (strlen($data->post_title) <= 12) {
        ?>   <h1><?php echo $data->post_title; ?></h1><?php }else { ?>
       <h1><?php  echo mb_strimwidth($data->post_title, 0, 12, ".."); ?></h1>
                        <?php }
                        ?>
                          <?php
    if (strlen($data->post_content) <= 100) {
        ?>   <p><?php echo $data->post_content; ?></p><?php }else { ?>
       <p><?php  echo mb_strimwidth($data->post_content, 0, 100, "..."); ?></p>
                        <?php }
                        ?>
                      </div>
    <?php }
    else{ ?>
        <div id="rates">
                       <?php
    if (strlen($data->post_title) <= 12) {
        ?>   <h1><?php echo $data->post_title; ?></h1><?php }else { ?>
       <h1><?php  echo mb_strimwidth($data->post_title, 0, 12, ".."); ?></h1>
                        <?php }
                        ?>
                          <?php
    if (strlen($data->post_content) <= 100) {
        ?>   <p><?php echo $data->post_content; ?></p><?php }else { ?>
       <p><?php  echo mb_strimwidth($data->post_content, 0, 100, "..."); ?></p>
                        <?php }
                        ?>
                      </div>
  <?php  }
    }
                      }
?>
                      

                  </div>
                  
                  <!-- best rates, friendliness, location is closed here-->
                  
                   <div class="clear"></div>
                  
                  
                  <div id="bottomLeftContainer">
                      <div id="leftBottomLeftContainer">
                          <h2>Welcome to Chitwan Gaida Lodge</h2>
                          <p>
                              Experiencing tourism history of the 3 decades, Chitwan Gaida Lodge is the pioneer in this field. It spreads over an area of 72,000 sq ft. The lodge is centrally located at the northern edge of the RCNP, a well-known site for the wildlife and hardly 3-4min walk up to the park entrance office from the CGL. It has a peaceful and tranquil area by the bank of Rapti river and just beside the park entrance. It is easily accessed from the east-west national highway which is only 6km away from the small town called Tandi Bazaar or Sauraha Chowk, where the roads get forked and turn towards the south. CGL has fully furnished rooms (a/c or normal) with attached bathrooms, including 24hours of hot/cold water. It has a cool shady garden with mature flora's which provides food for the different feeding bird parties. We can watch them feed every morning and in the late afternoons from the balcony of the private rooms provided by the CGL giving the feeling of being in the wild environment itself.
                          </p>
                      </div>
                      <!-- Chitwan gaida lodge home closed-->
                      
                      <div id="rightBottomLeftContainer">
<!--                         <img src="<?php echo base_url(); ?>contents/images/testimonials.png" /> --> 
 
 <div id="TA_selfserveprop86" class="TA_selfserveprop">
<ul id="8dDniCu3NlR" class="TA_links 4p71jMEhH5T">
<li id="D5YdVRcL2P" class="21BjNw556">
<a target="_blank" href="http://www.tripadvisor.com/"><img src="http://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=86&amp;locationId=2083553&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true"></script>

                     </div>
                      
                      <!-- testimonials is closed here-->
                      
                      <div class="clear"></div>
                  </div>
              
                  <!-- testimonials and chitwan gaida lodge home closed here-->
              
              
              
              </div>
              
              <!-- Leftside container is closed here-->
              
              
                 
              <div id="rightContainer">
               <?php if(!empty($event)){ ?>   
                  <a style="color: #000;" href="<?php echo base_url()."index.php/home/events"?>"><div class="event"><h3>Events</h3></div></a> 
                       <?php foreach ($event as $sideEvent){
        $date=date("Y-m-d", strtotime($sideEvent->date));
        $time=date("h:i A", strtotime($sideEvent->date));
        $setTime=date("G:i:s", strtotime($sideEvent->date));
         $noTime="0:00:00";      
        		                ?>
                  <a style="color:#000; text-decoration: none;" href="<?php echo base_url()."index.php/home/eventDetails/".$sideEvent->id ?>">
                  <div class="event-list">
                
                
                <?php if (strlen($sideEvent->image)>0){ ?>
	<div class="eventTitle">	                   
		                       <img style="float:left;" src="<?php echo base_url().'contents/uploads/images/'.$sideEvent->image; ?>" width="51" height="51"  />
		                       
                                        <h4 style="margin:0px; padding:0px; " ><?php echo mb_strimwidth($sideEvent->title, 0, 37, "..."); ?></h4>
                                        <p style="margin:0px; padding:0px; color: #555;">On <?php echo $date;  ?> <?php if($setTime!==$noTime){ echo'at'. $time;} else{}  ?></p>
                                       
                                       
                                        
		                    </div>  
                <?php }else { ?>
		                     
                                    <div class="eventTitle">
		                       
                                        <h4 style="margin:0px; padding:0px;"><?php echo mb_strimwidth($sideEvent->title, 0, 37, "..."); ?></h4>
                                        <p style="margin:0px; padding:0px;">On <?php echo $date;  ?> <?php if($setTime!==$noTime){ echo'at'. $time;} else{}  ?></p>
                                       
                                       
                                        
		                    </div> 
		           <?php } ?>          
                                          
		                
       </div>
          </a>                  <?php }}else {}  ?>
                   
                  
                  
              <div class="event"><h3>Find Us On Facebook</h3></div>     
                  
                  <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fchitwangaidalodge&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px; width: 100%;" allowTransparency="true"></iframe>         
                  
 <div class="event"><h3>Rate On Tripadvisor</h3></div> 

                  <div id="TA_cdswritereviewlg691" class="TA_cdswritereviewlg">
<ul id="iz4U9Q18BmO" class="TA_links EvFsAuef">
<li id="Kury4aW28BPK" class="mRpP46JIt4Gr">
<a target="_blank" href="http://www.tripadvisor.com/"><img src="http://www.tripadvisor.com/img/cdsi/img2/branding/medium-logo-12097-2.png" alt="TripAdvisor"/></a>
</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=cdswritereviewlg&amp;uniq=691&amp;locationId=2083553&amp;width&amp;height=290&amp;lang=en_US&amp;border=true"></script>

                  
                  
                  
                  
                  
                  
              </div>
              <div class="clear"></div>    
          </div> 
          <div class="clear"></div>
          <!-- container div closed -->
          
         
