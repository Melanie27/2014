<?php
/*
Plugin Name: Videos
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a metabox for displaying Videos for Oakwood Worldwide
Version: 1.0
Author: Melanie McGanney
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/
?>

<?php add_meta_box( 'my-meta-box-id', 'My First Meta Box', 'cd_meta_box_cb', 'post', 'normal', 'high' ); ?> 
<?php  
    add_action( 'add_meta_boxes', 'cd_meta_box_add' );  
    function cd_meta_box_add()  
    {  
        add_meta_box( 'my-meta-box-id', 'My First Meta Box', 'cd_meta_box_cb', 'post', 'normal', 'high' );  
    }  
?> 
    <?php  
    function cd_meta_box_cb()  
    {  
        echo 'What you put here, show\'s up in the meta box';     
    }  
    ?>   