<style type="text/css">
    /* popup_box DIV-Styles*/
    #popup_box { 
        display:none; /* Hide the DIV */
        position:fixed;  
        _position:absolute; /* hack for internet explorer 6 */  
        height:400px;  
        width:500px;  
        background:#FFFFFF;  
        left: 300px;
        top: 50px;
        z-index:100; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
        margin-left: 15px;  

        /* additional features, can be omitted */
         	
        padding:25px;  
        font-size:15px;  
        -moz-box-shadow: 0 0 3px #ccc;
        -webkit-box-shadow: 0 0 3px #ccc;
        box-shadow: 0 0 3px #ccc;

    }
    a{  
        cursor: pointer;  
        text-decoration:none;  
    } 

    /* This is for the positioning of the Close Link */
    #popupBoxClose {
        font-size:20px;  
        line-height:15px;  
        right:5px;  
        top:5px;  
        position:absolute;  
        color:#6fa5e2;  
        font-weight:500;  	
    }</style>
<script type="text/javascript">

    $(document).ready( function() {
        // When site loaded, load the Popupbox First
        $('.srcimage').click(function(){
            $('#popup_box').fadeIn(2500);
            var srcimg = $(this).attr('src');
			
            $("#pqr").attr({
                src: srcimg
			
            });
            $('#popup_box').css({"display":"Block"});
			
            //$('#pqr').fadeIn(3000);
            $('#photodiv').css({"opacity":".3"});
			
        });
		
        $('#popupBoxClose').click( function() {
            unloadPopupBox();
        });
		
        function unloadPopupBox() {	// TO Unload the Popupbox
            $('#popup_box').fadeOut("slow");
            $("#photodiv").css({ // this is just for style		
                "opacity": "1"  
            }); 
        }		
		
		
		
        /**********************************************************/
		
    });
	
	
</script>


<?php
if(isset($selectedalbumquery))
{
    foreach ($albumdata as $album)
    {
        $title = $album->album_name;
    }
    ?>
 <div class="title-background">
    <h1 class="page_title"><?php echo $title.'>> '; ?>Photos</h1>
 </div>
<div class="content">
    <?php
foreach ($selectedalbumquery as $data) {
    
    ?>    



<div id="photodiv">
   
    

    <img class="srcimage" src="<?php echo base_url(); ?>contents/uploads/images/<?php echo $data->media_type; //echo $image; ?>" id="galleryimage" />
        <div id="imagetitle"> <?php echo $data->media_name; ?>
            
        </div>
</div> 
<?php
}
}
else
{  ?>
<div class="xyz" style="width:200px; height:150px; float:left; margin-right:5px;">
 <p>No any photos found</p>   
 </div>
 <?php }
?>
<div id="popup_box">	<!-- OUR PopupBox DIV-->
<img  src="" width="500" height="400" id="pqr"  />
 <a id="popupBoxClose">Close</a>
 <div ><a id="next">Next</a>
 <a id="previous">Previous</a></div>
</div>
<div class="clear"></div>
</div>

            <div class="clear"></div>
            <!class full is closed here>
