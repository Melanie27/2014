<?php
/*
Plugin Name: Vision and Leadership
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW Leadership Team
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com
License: GPLv2
*/
add_action( 'init', 'create_vision_and_leadership' );
add_action( 'admin_init', 'my_admin_vision_leadership' );
//add_action( 'save_post', 'add_committee_member_fields', 10, 2 );
//add_filter( 'template_include', 'include_template_function_ec', 1 );
function create_vision_and_leadership() {
    register_post_type( 'vision_leadership',
        array(
            'labels' => array(
                'name' => 'Vision and Leadership',
                'singular_name' => 'Committee Member',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Committee Member',
                'edit' => 'Edit',
                'edit_item' => 'Edit Committee Member',
                'new_item' => 'New Committee Member',
                'view' => 'View',
                'view_item' => 'View Committee Member',
                'search_items' => 'Search Executive Committee',
                'not_found' => 'No Executive Committee found',
                'not_found_in_trash' => 'No Executive Committee found in Trash',
                'parent' => 'Parent Committee Member'
            ),
 
            'public' => true,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'oww-dashboard.png', __FILE__ ),
            'has_archive' => true,
            'show_in_nav_menus' => true
        )
    );
}
function my_admin_vision_and_leadership() {
    add_meta_box( 'vision_and_leadership_meta_box',
        'Committee Member Details',
        'display_vision_and_leadership_meta_box',
        'vision_leadership', 'normal', 'high'
    );
}
?>
<?php
/*function display_vision_and_leadership_meta_box( $committee_member ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $committee_title = esc_html( get_post_meta( $committee_member->ID, 'committee_title', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Positon Title</td>
            <td><input type="text" size="80" name="committee_title_name" value="<?php echo $committee_title; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_committee_member_fields( $committee_member_id, $committee_member ) {
    // Check post type for movie reviews
    if ( $committee_member->post_type == 'vision_and_leadership' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['committee_title_name'] ) && $_POST['committee_title_name'] != '' ) {
            update_post_meta( $committee_member_id, 'committee_title', $_POST['committee_title_name'] );
        }
    }
}
?>
<?php
function include_template_function_ec( $template_path ) {
    if ( get_post_type() == 'vision_and_leadership' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-executive-committee.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-executive-committee.php';
            }
        }
        elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-executive-committee.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-executive-committee.php';
 
            }
        }
    }
    return $template_path;
}
?>*/