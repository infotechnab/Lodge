<?php
    $this->load->helper('footer_helper'); 
     $type = get_gadget_footer();
?> 
<div id ="footer" >
    
    
    <div style="alignment-adjust: central">
    
    <!--for default gadget start -->
    <?php
    foreach ($recentPost as $data)
    {
    if($data->display == 'Footer')
    {
        ?>
             <div class="subgadget">
        <div id='title'><?php echo $data->name; ?></div>
          <div id='description'>
        <?php
          foreach($noOfRecentPost as $recent_post)
         {
             // var_dump($recent_post);
        $post_id = $recent_post->id;
        
        echo anchor('view/post/'.$post_id , $recent_post->post_title)."<br>"; 
         }
         ?>
          </div>  
             </div>
         <?php
            }
           }
        
    ?>
    <!--for default gadget close -->
    
    
    <div class="gadget_collection">
     <?php
        if(empty($type))  //checking whether $type is null or not that is coming from database and header_helper.php and if its null then handling error.
                {
                    echo " ";
                }
                else {
                    
                
        foreach ($type as $dat){ 
            if($dat['defaultGadget'] != 'recent post') {
     ?>
        <div class="subgadget">
        <div id='title' style="color: #ffffff;"><?php echo $dat['name']; ?></div>
        <div id='description'><?php echo $dat['type']; ?> </div>
         </div>
    <?php        
            }
    }
                }
                
    ?>
    </div>
    
</div>
        <div class="clear"></div>   
        
        
        
        
<!--                <div  id="copyright">  Copyright &copy;  2013. B&W </div> 

                <div class="credit"> Designed By: 
                    <img src="<?php echo base_url(); ?>content/images/salyaniTech.png" alt="salyani logo"  /> 
                </div>
                <div class="clear" > </div>-->
              
<!--              <div id="sitemap">
                  <h3>Site Map</h3>
                  <ul>
                      <a href="#"><li>Home</li></a>
                      <a href="#"><li>Reservation</li></a>
                      <a href="#"><li>Services</li></a>
                      <a href="#"><li>Gallery</li></a>
                  </ul>
              </div> 
              
              <div id="sitemap">
                  <h3>Social Presence</h3>
                  <ul>
                      <a href="https://www.facebook.com/chitwangaidalodge" target="_blank"><li>Facebook</li></a>
                      <a href="https://www.youtube.com" target="_blank"><li>Youtube</li></a>
                      <a href="#"><li>Skype</li></a>
                      <a href="#"><li>Google+</li></a>
                  </ul>
              </div> 
              
              <div id="sitemap">
                  <h3>Useful Links</h3>
                  <ul>
                      <a href="#"><li>Chitwan Gaida Lodge</li></a>
                      <a href="http://www.tripadvisor.com/Hotel_Review-g1367591-d2083553-Reviews-Chitwan_Gaida_Lodge-Sauraha_Chitwan_District_Narayani_Zone_Central_Region.html" target="_blank"><li>Tripadvisor</li></a>
                      <a href="http://www.chitwannationalpark.gov.np/" target="_blank"><li>Chitwan National Park</li></a>
                     
                  </ul>
              </div>
              
              <div id="sitemap">
                  <h3>Quick Contact</h3>
                  <ul>
                      <a href="#"><li>Chitwan Gaida Lodge</li></a>
                      <a href="#"><li>Sauraha, Chitwan, Nepal</li></a>
                      
                  </ul>
              </div> -->
              
              
          </div>
          <div class="clear"></div>
            <div id="footerNote"><p>&copy All rights reserved - 2014 Chitwan Gaida Lodge</p></div>  
          </div>
        </div>  
    </body>
</html>