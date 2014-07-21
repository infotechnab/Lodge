<?php
$upcommingEvent = TRUE;
$todayEvent = TRUE;
$earlierEvent = TRUE;
$currentDate = date("Y-m-d");
?>
<div class="title-background">
                            <h1> Events </h1>
                            
                        </div>
<div class='content'>
    <!-- from slider starts-->
    <?php foreach ($events as $allEvents) {
        
        //$year=date_parse($allEvents->date);
        
        $date=date("Y-m-d", strtotime($allEvents->date));
        $time=date("h:i A", strtotime($allEvents->date));
       $setTime=date("G:i:s", strtotime($allEvents->date));
         $noTime="0:00:00"; 
        if ($date > $currentDate)
        {
            if($upcommingEvent == TRUE)
            {
           ?>
            <div class='eventHeader'>       
                <h3> Upcoming Events</h3>
            </div>
        <?php
            }
            
            $upcommingEvent = FALSE; ?>
            
            <div class="eventContainer">
<?php if (strlen($allEvents->image)>0) {
    ?>
                <div class='eventImage'>
                <img src="<?php echo base_url() . "contents/uploads/images/" . $allEvents->image; ?>" alt=""/>   
            </div>

<?php } ?>
                <div class='eventDetails'>
                    <h4><?php echo $allEvents->title; ?></h4>
                    <h5>Date:<?php echo $date ?> <?php if($setTime!==$noTime){ echo "Time:".$time; } else{}?></h5>
                    <h5>Location: <?php echo $allEvents->location; ?></h5>
                    
                </div>
<?php if(strlen($allEvents->details)<=100)                                       
                                       {
                                       ?>
                                        <p><?php echo $allEvents->details; ?></p>
                                       <?php } else { ?>
                                           <p><b><?php echo mb_strimwidth($allEvents->details, 0, 100, "..."); ?></b></p>
                                     <?php  } ?>
                   
                    <a style="color: blue; text-decoration: underline;" href='<?php echo base_url()."index.php/home/eventDetails/".$allEvents->id;?>'>View more</a>



    </div>
            
   <?php     } ?>
     
     <!-- for today event   --> 
   <?php    if ($date == $currentDate)
        {
            if($todayEvent == TRUE)
            {
           ?>
            <div class='eventHeader'>       
                <h3> Today's Events</h3>
            </div>
        <?php
            }
            $todayEvent = FALSE; ?>
            
            <div class="eventContainer">
<?php if (strlen($allEvents->image)>2) {
    ?>
                <div class='eventImage'>
                <img src="<?php echo base_url() . "contents/uploads/images/" . $allEvents->image; ?>" alt=""/>   
            </div>

<?php } ?>
                <div class='eventDetails'>
                    <h4><?php echo $allEvents->title; ?></h4>
                   <h5>Date:<?php echo $date ?> <?php if($setTime!==$noTime){ echo "Time:".$time; } else{}?></h5>
                   <h5>Location: <?php echo $allEvents->location; ?></h5>
                   
                </div>
 <?php if(strlen($allEvents->details)<=100)                                       
                                       {
                                       ?>
                                        <p><?php echo $allEvents->details; ?></p>
                                       <?php } else { ?>
                                           <p><?php echo mb_strimwidth($allEvents->details, 0, 100, "..."); ?></b></p>
                                     <?php  } ?>
                    <a style="color: blue; text-decoration: underline;" href='<?php echo base_url()."index.php/home/eventDetails/".$allEvents->id;?>'>View more</a>



    </div>
            
   <?php     } ?>
     
     <!-- for earlier events   --> 
   <?php 
        
        /*  */
   if ( $date < $currentDate)
        {
            if($earlierEvent == TRUE)
            {
           ?>
            <div class='eventHeader'>       
                <h3> Earlier Events</h3>
            </div>
        <?php
            }
            $earlierEvent = FALSE; ?>
            
            <div class="eventContainer">
<?php if (strlen($allEvents->image)>2) {
    ?>
                <div class='eventImage'>
                <img src="<?php echo base_url() . "contents/uploads/images/" . $allEvents->image; ?>" alt=""/>   
            </div>

<?php } ?>
                <div class='eventDetails'>
                    <h4><?php echo $allEvents->title; ?></h4>
                    <h5>Date:<?php echo $date ?> <?php if($setTime!==$noTime){ echo "Time:".$time; } else{}?></h5>
                    <h5>Location: <?php echo $allEvents->location; ?></h5>
                    
                </div>
<?php if(strlen($allEvents->details)<=100)                                       
                                       {
                                       ?>
                                        <p><?php echo $allEvents->details; ?></p>
                                       <?php } else { ?>
                                           <p><?php echo mb_strimwidth($allEvents->details, 0, 100, "..."); ?></b></p>
                                     <?php  } ?>
                    <a style="color: blue; text-decoration: underline;" href='<?php echo base_url()."index.php/home/eventDetails/".$allEvents->id;?>'>View more</a>



    </div>
            
   <?php     } ?>
    
 <?php   }
    ?>

    <!-- the slider ends here-->

    

   
<?php//  ?>
<div style="margin: 10px 0px 5px 0px; background-color: #999; color: #3399ff; border-radius:5px; width:95%; ">
    <?php// echo $links; ?>
    </div>
<?php //} ?>
</div>
<div class="clear"></div>
<!-- left side content closed here -->
 