<!DOCTYPE html>
<html lang="en">
<head>
     <?php foreach ($headertitle as $header) {
                    ?>
        <title><?php echo $header->description ; ?></title>
<?php } ?>
        <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>contents/uploads/styles/stylesForView.css" type="text/css" />
        
        
        <?php if ($meta)
{
    $i=0;
    foreach ($meta as $data)
    {        
       $meta_data[$i] = $data->value;
       $i++;      
    }
 }
                     ?>
    <meta charset="utf-8">
    <meta content="initial-scale=1.0, user-scalable=no" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>Welcome | Chitwan Gaida Lodge</title>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>contents/uploads/styles/styles.css" />
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>contents/uploads/images/favicon.png"/>
    <meta content="widht=device-widht, initial-scale=1" name="viewport">

        <script src="<?php echo base_url() . "contents/uploads/scripts/popup.js"; ?>"></script>
        <script src="<?php echo base_url() . "contents/uploads/scripts/jquery.js"; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url() . "contents/uploads/styles/tableStyles.css"; ?>"> 
        <link rel="stylesheet" href="<?php echo base_url() . "contents/uploads/styles/pop-up-booking.css"; ?>"> 
       
        

</head>

    <body>
        <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '798589833503780',
          status     : true,
          xfbml      : true
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
        
        
        
        <div id="full">
            <!--slider is called here-->
            <div id="slider">
                    <!-- Start WOWSlider.com BODY section -->
                    <div id="wowSlider">
                        <div class="ws_images"><ul>
                                      
                                 <?php foreach ($slidequery as $data) {
                                    ?>  
                                
                                <li><div class='ws-title' ><?PHP echo $data->slide_name."<br/>".$data->slide_content; ?></div> <img src="<?php echo base_url(); ?>contents/uploads/images/<?php echo $data->slide_image; ?>" /> </li> <?php } ?>
                                
                                
                                
<!--                                    <li> <img src="<?php //echo base_url(); ?>contents/uploads/images/birdWatching.png" /> </li> 
                                    <li> <img src="<?php //echo base_url(); ?>contents/uploads/images/riverBank.png" /> </li> 
                                     
                                    <li> <img src="<?php //echo base_url(); ?>contents/uploads/images/sunsetView.png" /> </li> 
                                    <li> <img src="<?php //echo base_url(); ?>contents/uploads/images/rhino.png" /> </li>-->
                            </ul>
                        </div>
                        
                    </div>
                    <!--<script type="text/javascript" src="<?php //echo base_url(); ?>content/scripts/wowslider.js"></script>-->
                    <!--<script type="text/javascript" src="<?php //echo base_url(); ?>content/scrips/script.js"></script>-->
                    <!-- End WOWSlider.com BODY section --> 
                    
           
            <div id="header">
                
                   <?php foreach ($headerlogo as $header) {
                    ?>
    
               
                    <img src="<?php echo base_url().'contents/uploads/images/'.$header->description ; ?>"  />
              
                <?php } ?>
                
<!--                <img src="<?php //echo base_url(); ?>contents/uploads/images/logofinalfromweb.png" />-->
            
            </div>
            
          
            
            
            
            <div id="facebookLikeButton">
                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fchitwangaidalodge&amp;width&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:55px; height:65px;" allowTransparency="true"></iframe>
                
                
            </div>   
                
                
            
            
            
        
          
            <div id="home"><img src="<?php echo base_url(); ?>contents/uploads/images/desktop.png" /> </div>
            <div id="navigation">
                <ul>
                  <?php   $this->load->helper('menumaker_helper');

            fetch_menu (query(0)); ?>
<!--                    <a href="http://www.chitwannationalpark.gov.np/" target="_blank"><li>Chitwan National Park</li></a>
                    <a href="<?php echo base_url().'index.php/home/reservation' ?>"><li>Reservation</li></a>
                    <a href="<?php echo base_url().'index.php/home/wildlife' ?>"><li>Wildlife</li></a>
                    <a href="<?php echo base_url().'index.php/home/services' ?>"><li>Services</li></a>
                    <a href="<?php echo base_url().'index.php/home/gallery' ?>"><li>Gallery</li></a>
                    <a href="<?php echo base_url().'index.php/home/location' ?>"><li>Location</li></a>-->
                                   </ul>
            </div>         
            <div id="search"><img src="<?php echo base_url(); ?>contents/uploads/images/ic_action_search.png" /> </div>
        </div>
            
         <!-- slider div with navigation and header image is closed here-->   
          
       
         <div class="clear"></div>
         
          <!-- Check in check out div is closed here-->   
            
         