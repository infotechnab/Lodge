<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 function query($parent_id) { //function to run a query  
     
    $query = mysql_query ( "SELECT * FROM navigation WHERE parent_id=$parent_id");
    return $query;
}
function has_child($query) { //This function checks if the menus has childs or not
    $rows = mysql_num_rows ( $query );
    if ($rows >0){
        return true;
    } else {
        return false;
    }
}


function fetch_menu($query) {
    while ( $result = mysql_fetch_array ( $query ) ) {
        $menu_id = $result ['id'];
        $menu_name = $result ['navigation_name'];
        $menu_link = $result ['navigation_link'];
                
                ?>
<li class="has-sub"><a href="<?php echo $menu_link; ?>" style="color: #ffffff;"><?php echo $menu_name; ?></a>
    <?php
        if (has_child ( query ( $menu_id))) {
            echo "<ul>";
            fetch_menu ( query ( $menu_id) );
            echo "</ul>";
        }
        echo "</li>";
    }
}