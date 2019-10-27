<?php
/**
 * Pseudo Code for creating Wordpress Custom Post Types
 */

//  Add action to call your function that registers your custom post type to wordpress 'init'


// Create function to regist your custom post type

    // Create an array for your labels arguements

        // ref of all labels since WP4.4 - name, singular_name, menu_name, name_admin_bar, 

            // add_new, add_new_item, new_item, edit_item, view_item, all_items, search_items, 
            
            // parent_item_colon, not_found, not_found_in_trash, featured_image, 

            // set_featured_image, remove_featured_image, use_featured_image, archives, 
            
            // insert_into_item, filter_items_list, items_list_navigation, items_list
    
    // Create an array for all custom post type arguements - considerations for properties(below):

        // feed your labels arguements into the 'labels' assoaciative array property

        // is this going to show up in the wordpress menu?

        // does the data from this custome post type need to be accessible
        // on other areas of the dashboard and in the rest api?

        // does this custom post type have its own archive template page?

        // what wordpress editing features does this support? ex. 'title', 'thumbnail', etc... Supply in an array

    // call the wordpress register custom post type function and supply your arguments array


// OPTIONAL: If your custom post type needs its own taxonomy(categories & tags) add code below

// Add action to call your taxonomy function to wordpress 'init'

// Create function to register your taxonomy

        // create labels array

            // ref for possible labels - name, singular_name, search_items, popular_items, all_items, parent_item,

                // parent_item_colon, edit_item, update_item, add_new_item, new_item_name, separate_items_with_commas,
                
                // add_or_remove_items, choose_from_most_used, not_found, menu_name

        // create args array - see arguement considerations below

            // supply labels array in 'labels' property
            
            // is this taxonomy going to have a custom URL slug?
            
            // is this taxonomy hierarchical?

        // Use WP function to register taxonomy while supplying args array