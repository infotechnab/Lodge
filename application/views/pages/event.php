<?php
if(!empty($events)){
    foreach($events as $event){
        $title=$event->title;
        $time=$event->date;
        $location= $event->location;
        $details= $event->details;
        $image= $event->image;
        
         $date=date("Y-m-d", strtotime($time));
        $fullTime=date("h:i A", strtotime($time));
         
}}
 else {
    $title="Sorry !";
    $date="";
    $fullTime="";
    $time="";
    $location="";
    $details="The details are not available.";
    $image="";
}

?>
<div class="title-background">
                            <h1> <?php echo $title; ?> </h1>
                            
                        </div>

<div class='content'>
       <?php if (strlen($image)>2) {
    ?>
                <div class='eventSingleImage'>
                <img src="<?php echo base_url() . "contents/uploads/images/" .$image; ?>" alt=""/>   
            </div>

<?php } ?> 
         <div class="eventTitleSingle">    
            
        <h3> <?php echo $title; ?></h3>
        
    </div>
    
    <div class="eventTime">    
            
       <h4><?php echo $date; ?> <?php echo $fullTime; ?></h4>
        
    </div>
    
     <div class="eventTitleSingle">    
            
      <h4><?php echo $location; ?></h4>
                    <p><?php echo $details; ?></p>
        
    </div>
      
   

   
      
</div>
<div class="clear"></div>
<!-- left side content closed here -->
 