<div class="rightSide">
    
<div id="body">
    <p id="sucessmsg">
  <?php echo $this->session->flashdata('message'); ?>
    </p>
    <h2>Media Libraries</h2>
    <hr class="hr-gradient"/>
     <?php
     if(isset($error))
  {
     echo $error;
  }
    
         if(!empty($query)){
             ?>
    <table border="1" cellpadding="10">
        <tr>
            
            <th>Media Name</th>
            <th>Media Type</th>
           
            <th>Media Link</th>
            <th>Activity</th>
        </tr>
    
   <?php
            foreach ($query as $data){
            ?>
          <tr>
            
            <td><?php echo $data->media_name ?></td>
            <td><?php echo $data->media_type ?></td>
            
            <td> <img src='<?php echo base_url().'contents/uploads/images/'.$data->media_type; ?>' style="height: 60px; width: 60px"/> </td>
            <td><?php echo anchor('album/editmedia/'.$data->id,'Edit'); ?> / 
            <?php echo anchor('album/delmedia/'.$data->id,'Delete'); ?></td>
        </tr>
            <?php    
            }
        }
 else {
     echo '<h3>Sorry Library is unavailable</h3>';
 }
    ?>
    </table>
    <?php echo $links; ?>
</div>
</div>
<div class="clear"></div>
</div>

