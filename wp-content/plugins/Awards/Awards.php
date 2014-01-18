<?php
/*
Plugin Name: Awards
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying Oakwood Worldwide's Awards
Version: 1.0
Author: Melanie McGanney
Author URI: http:melaniemcganney.com/
License: GPLv2
*/

add_action( 'init', 'create_award' );
add_action( 'admin_init', 'my_admin_award' );
add_action( 'save_post', 'add_award_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_aw', 1 );
add_action( 'init', 'create_my_taxonomies_aw', 0 );



function create_award() {
    register_post_type( 'awards',
        array(
            'labels' => array(
                'name' => 'Awards',
                'singular_name' => 'Award',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Award',
                'edit' => 'Edit',
                'edit_item' => 'Edit Award',
                'new_item' => 'New Award',
                'view' => 'View',
                'view_item' => 'View Award',
                'search_items' => 'Search Awards',
                'not_found' => 'No Awards found',
                'not_found_in_trash' => 'No Awards found in Trash',
                'parent' => 'Parent Award'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}
function my_admin_award() {
    add_meta_box( 'award_meta_box',
        'Awards Details',
        'display_award_meta_box',
        'awards', 'normal', 'high'
    );
}
?>
<?php
function display_award_meta_box( $award ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $award_director = esc_html( get_post_meta( $award->ID, 'award_director', true ) );
    $award_rating = intval( get_post_meta( $award->ID, 'award_rating', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Movie Director</td>
            <td><input type="text" size="80" name="award_director_name" value="<?php echo $award_director; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 150px">Movie Rating</td>
            <td>
                <select style="width: 100px" name="award_rating">
                <?php
                // Generate all items of drop-down list
                for ( $rating = 5; $rating >= 1; $rating -- ) {
                ?>
                    <option value="<?php echo $rating; ?>" <?php echo selected( $rating, $award_rating ); ?>>
                    <?php echo $rating; ?> stars <?php } ?>
                </select>
            </td>
        </tr>
    </table>
    <?php
}
?>
<?php
function add_award_fields( $award_id, $award ) {
    // Check post type for movie reviews
    if ( $award->post_type == 'awards' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['award_director_name'] ) && $_POST['award_director_name'] != '' ) {
            update_post_meta( $award_id, 'award_director', $_POST['award_director_name'] );
        }
        if ( isset( $_POST['award_rating'] ) && $_POST['award_rating'] != '' ) {
            update_post_meta( $award_id, 'award_rating', $_POST['award_rating'] );
        }
    }
}
?>
<?php
function include_template_function_aw( $template_path ) {
    if ( get_post_type() == 'awards' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-awards.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-awards.php';
            }
        }
        
        elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-awards.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-awards.php';
 
			}
		}
    }
    return $template_path;
}
?>
<?php
function create_my_taxonomies_aw() {
    register_taxonomy(
        'awards_tags',
        'awards',
        array(
            'labels' => array(
                'name' => 'Award Type',
                'add_new_item' => 'Add New Award Type',
                'new_item_name' => "New Award Type"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}
?>