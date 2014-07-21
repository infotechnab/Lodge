 <div class="title-background">
<h1 class="page_title" >Gallery </h1>
</div>

 
<div class="content">  
<?php
if($albumquery){
foreach ($albumquery as $data)
{
	$aid = $data->id;	
        
                  
	$result = $this->viewmodel->get_media_image($aid); 
        if($result)
        { ?>
<div id="photodiv">
   <ul id="gallery">
       <?php foreach( $result as $abc)
{
   ?>
<li>
<img src="<?php echo base_url().'contents/uploads/images/'.$abc->media_type; ?>" alt="" /></li>
<?php } ?>	<!--<li><img src="<?php //echo base_url().'contents/uploads/images/'.$abc->media_type; ?>" id="galleryimage" /></li>-->
</ul>
  <img src="<?php echo base_url().'contents/uploads/images/'.$abc->media_type; ?>" id="galleryimage" alt="" /> 
    
   <!-- from here-->


   <!-- till here-->
    
        <div id="imagetitle">
            <?php echo anchor('home/photo/'.$data->id,$data->album_name); ?> 
        </div>
<!--            <a href="<?php echo base_url();?>index.php/album/delete_album/<?php echo $aid; ?> " id="<?php echo $aid; ?>" class="delbutton">
        <img src="<?php echo base_url();?>contents/bmw/images/delete.png" id="close"/></a>-->
        
    
</div> 


<?php }
else 
 {  
    
 ?>     
<div id="photodiv"> 
    
   
        <div id="imagetitle">
            <?php echo anchor('view/photo/'.$data->id,$data->album_name); ?> 
        </div>
<!--            <a href="<?php echo base_url();?>index.php/album/delete_album/<?php echo $aid; ?> " id="<?php echo $aid; ?>" class="delbutton">
        <img src="<?php echo base_url();?>contents/bnw/images/delete.png" id="close"/></a>-->
        
    
</div> 



 <?php    
 }}?> 
 <?php  } ?>
            </div>

            <div class="clear"></div>
            <!class full is closed here>