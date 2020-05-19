<?php
/**
 * Created by PhpStorm.
 * User: Samuel Maculuve
 * Date: 2020/03/28
 * Time: 17:25
 */

 function custom_membro_type() {
        // Set UI labels for Custom Post Type
         $labels = array(
             'name'                => _x( 'Membros da AMEA', 'Post Type General Name', 'twentytwenty' ),
             'singular_name'       => _x( 'Membro', 'Post Type Singular Name', 'twentytwenty' ),
             'menu_name'           => __( 'Membros', 'twentytwenty' ),
             'parent_item_colon'   => __( 'Parent Membro', 'twentytwenty' ),
             'all_items'           => __( 'All Membros', 'twentytwenty' ),
             'view_item'           => __( 'View Membro', 'twentytwenty' ),
             'add_new_item'        => __( 'Add New Membro', 'twentytwenty' ),
             'add_new'             => __( 'Add New Member', 'twentytwenty' ),
             'edit_item'           => __( 'Edit Membro', 'twentytwenty' ),
             'update_item'         => __( 'Update Membro', 'twentytwenty' ),
             'search_items'        => __( 'Search Membro', 'twentytwenty' ),
             'not_found'           => __( 'Not Found', 'twentytwenty' ),
             'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
         );

            // Set other options for Custom Post Type

             $args = array(
             'label'               => __( 'Membros', 'twentytwenty' ),
             'description'         => __( 'Membro news and reviews', 'twentytwenty' ),
             'labels'              => $labels,
             // Features this CPT supports in Post Editor
             'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
             // You can associate this CPT with a taxonomy or custom taxonomy.
             'taxonomies'          => array( 'genres','category', 'post_tag','lang'  ),
             /* A hierarchical CPT is like Pages and can have
             * Parent and child items. A non-hierarchical CPT
             * is like Posts.
             */
             'hierarchical'        => false,
             'public'              => true,
             'show_ui'             => true,
             'show_in_menu'        => true,
             'show_in_nav_menus'   => true,
             'show_in_admin_bar'   => true,
             'menu_position'       => 5,
             'lang' => '',
             'can_export'          => true,
             'has_archive'         => true,
             'exclude_from_search' => false,
             'publicly_queryable'  => true,
             'capability_type'     => 'post',
             'show_in_rest' => true,

         );
         // Registering your Custom Post Type
         register_post_type( 'membros', $args );
     }
     /* Hook into the 'init' action so that the function
     * Containing our post type registration is not
     * unnecessarily executed.
     */
     add_action( 'init', 'custom_membro_type', 0 );

     function custom_slider_type() {
            // Set UI labels for Custom Post Type
             $labels = array(
                 'name'                => _x( 'Slider da AMEA', 'Post Type General Name', 'twentytwenty' ),
                 'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'twentytwenty' ),
                 'menu_name'           => __( 'Slider', 'twentytwenty' ),
                 'parent_item_colon'   => __( 'Slider', 'twentytwenty' ),
                 'all_items'           => __( 'Slider', 'twentytwenty' ),
                 'view_item'           => __( 'Ver 	Slider', 'twentytwenty' ),
                 'add_new_item'        => __( 'Adicionar nova Slider', 'twentytwenty' ),
                 'add_new'             => __( 'Adicionar nova Slider', 'twentytwenty' ),
                 'edit_item'           => __( 'Editar Slider', 'twentytwenty' ),
                 'update_item'         => __( 'Update Slider', 'twentytwenty' ),
                 'search_items'        => __( 'Search Slider', 'twentytwenty' ),
                 'not_found'           => __( 'Not Found', 'twentytwenty' ),
                 'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
             );

                // Set other options for Custom Post Type

                 $args = array(
                 'label'               => __( 'Slider', 'twentytwenty' ),
                 'description'         => __( 'Slider news and reviews', 'twentytwenty' ),
                 'labels'              => $labels,
                 // Features this CPT supports in Post Editor
                 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
                 // You can associate this CPT with a taxonomy or custom taxonomy.
                 'taxonomies'          => array( 'genres','category', 'post_tag','lang'  ),
                 /* A hierarchical CPT is like Pages and can have
                 * Parent and child items. A non-hierarchical CPT
                 * is like Posts.
                 */
                 'hierarchical'        => false,
                 'public'              => true,
                 'show_ui'             => true,
                 'show_in_menu'        => true,
                 'show_in_nav_menus'   => true,
                 'show_in_admin_bar'   => true,
                 'menu_position'       => 5,
                 'lang' => '',
                 'can_export'          => true,
                 'has_archive'         => true,
                 'exclude_from_search' => false,
                 'publicly_queryable'  => true,
                 'capability_type'     => 'post',
                 'show_in_rest' => true,

             );
             // Registering your Custom Post Type
             register_post_type( 'slider', $args );
         }
         /* Hook into the 'init' action so that the function
         * Containing our post type registration is not
         * unnecessarily executed.
         */
         add_action( 'init', 'custom_slider_type', 0 );
         function custom_projectos_type() {
                // Set UI labels for Custom Post Type
                 $labels = array(
                     'name'                => _x( 'Projectos da AMEA', 'Post Type General Name', 'twentytwenty' ),
                     'singular_name'       => _x( 'projectos', 'Post Type Singular Name', 'twentytwenty' ),
                     'menu_name'           => __( 'Projectos', 'twentytwenty' ),
                     'parent_item_colon'   => __( 'Parent Projectos', 'twentytwenty' ),
                     'all_items'           => __( 'All Projectos', 'twentytwenty' ),
                     'view_item'           => __( 'View Projectos', 'twentytwenty' ),
                     'add_new_item'        => __( 'Add New Projectos', 'twentytwenty' ),
                     'add_new'             => __( 'Add New Projectos', 'twentytwenty' ),
                     'edit_item'           => __( 'Edit Projectos', 'twentytwenty' ),
                     'update_item'         => __( 'Update Projectos', 'twentytwenty' ),
                     'search_items'        => __( 'Search Projectos', 'twentytwenty' ),
                     'not_found'           => __( 'Not Found', 'twentytwenty' ),
                     'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
                 );

                    // Set other options for Custom Post Type

                     $args = array(
                     'label'               => __( 'Projectos', 'twentytwenty' ),
                     'description'         => __( 'Projectos news and reviews', 'twentytwenty' ),
                     'labels'              => $labels,
                     // Features this CPT supports in Post Editor
                     'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
                     // You can associate this CPT with a taxonomy or custom taxonomy.
                     'taxonomies'          => array( 'genres','category', 'post_tag','lang'  ),
                     /* A hierarchical CPT is like Pages and can have
                     * Parent and child items. A non-hierarchical CPT
                     * is like Posts.
                     */
                     'hierarchical'        => false,
                     'public'              => true,
                     'show_ui'             => true,
                     'show_in_menu'        => true,
                     'show_in_nav_menus'   => true,
                     'show_in_admin_bar'   => true,
                     'menu_position'       => 5,
                     'lang' => '',
                     'can_export'          => true,
                     'has_archive'         => true,
                     'exclude_from_search' => false,
                     'publicly_queryable'  => true,
                     'capability_type'     => 'post',
                     'show_in_rest' => true,

                 );
                 // Registering your Custom Post Type
                 register_post_type( 'Projectos', $args );
             }
             /* Hook into the 'init' action so that the function
             * Containing our post type registration is not
             * unnecessarily executed.
             */
             add_action( 'init', 'custom_projectos_type', 0 );

             function custom_publicacao_type() {
                    // Set UI labels for Custom Post Type
                     $labels = array(
                         'name'                => _x( '	Publicações da AMEA', 'Post Type General Name', 'twentytwenty' ),
                         'singular_name'       => _x( 'Publicações', 'Post Type Singular Name', 'twentytwenty' ),
                         'menu_name'           => __( 'Publicações', 'twentytwenty' ),
                         'parent_item_colon'   => __( 'Parent Projectos', 'twentytwenty' ),
                         'all_items'           => __( 'Todas 	Publicação', 'twentytwenty' ),
                         'view_item'           => __( 'Ver 	Publicação', 'twentytwenty' ),
                         'add_new_item'        => __( 'Adicionar nova 	Publicação', 'twentytwenty' ),
                         'add_new'             => __( 'Adicionar nova 	Publicação', 'twentytwenty' ),
                         'edit_item'           => __( 'Editar 	Publicação', 'twentytwenty' ),
                         'update_item'         => __( 'Update 	Publicação', 'twentytwenty' ),
                         'search_items'        => __( 'Search 	Publicação', 'twentytwenty' ),
                         'not_found'           => __( 'Not Found', 'twentytwenty' ),
                         'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
                     );

                        // Set other options for Custom Post Type

                         $args = array(
                         'label'               => __( '	Publicação', 'twentytwenty' ),
                         'description'         => __( '	Publicação news and reviews', 'twentytwenty' ),
                         'labels'              => $labels,
                         // Features this CPT supports in Post Editor
                         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
                         // You can associate this CPT with a taxonomy or custom taxonomy.
                         'taxonomies'          => array( 'genres','category', 'post_tag','lang'  ),
                         /* A hierarchical CPT is like Pages and can have
                         * Parent and child items. A non-hierarchical CPT
                         * is like Posts.
                         */
                         'hierarchical'        => false,
                         'public'              => true,
                         'show_ui'             => true,
                         'show_in_menu'        => true,
                         'show_in_nav_menus'   => true,
                         'show_in_admin_bar'   => true,
                         'menu_position'       => 5,
                         'lang' => '',
                         'can_export'          => true,
                         'has_archive'         => true,
                         'exclude_from_search' => false,
                         'publicly_queryable'  => true,
                         'capability_type'     => 'post',
                         'show_in_rest' => true,

                     );
                     // Registering your Custom Post Type
                     register_post_type( 'Publicacao', $args );
                 }
                 /* Hook into the 'init' action so that the function
                 * Containing our post type registration is not
                 * unnecessarily executed.
                 */
                 add_action( 'init', 'custom_publicacao_type', 0 );

                 function custom_revista_cientifica_type() {
                        // Set UI labels for Custom Post Type
                         $labels = array(
                             'name'                => _x( 'Revista Científica da AMEA', 'Post Type General Name', 'twentytwenty' ),
                             'singular_name'       => _x( 'Revista Científica', 'Post Type Singular Name', 'twentytwenty' ),
                             'menu_name'           => __( 'Revista Científica', 'twentytwenty' ),
                             'parent_item_colon'   => __( 'Parent Revista Científica', 'twentytwenty' ),
                             'all_items'           => __( 'Todas 	Revistas Científicas', 'twentytwenty' ),
                             'view_item'           => __( 'Ver 	Revista Científica', 'twentytwenty' ),
                             'add_new_item'        => __( 'Adicionar nova Revista Científica', 'twentytwenty' ),
                             'add_new'             => __( 'Adicionar nova Revista Científica', 'twentytwenty' ),
                             'edit_item'           => __( 'Editar Revista Científica', 'twentytwenty' ),
                             'update_item'         => __( 'Update Revista Científica', 'twentytwenty' ),
                             'search_items'        => __( 'Search Revista Científica', 'twentytwenty' ),
                             'not_found'           => __( 'Not Found', 'twentytwenty' ),
                             'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
                         );

                            // Set other options for Custom Post Type

                             $args = array(
                             'label'               => __( '	Revista Científica', 'twentytwenty' ),
                             'description'         => __( '	Revista Científica news and reviews', 'twentytwenty' ),
                             'labels'              => $labels,
                             // Features this CPT supports in Post Editor
                             'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
                             // You can associate this CPT with a taxonomy or custom taxonomy.
                             'taxonomies'          => array( 'genres','category', 'post_tag','lang'  ),
                             /* A hierarchical CPT is like Pages and can have
                             * Parent and child items. A non-hierarchical CPT
                             * is like Posts.
                             */
                             'hierarchical'        => false,
                             'public'              => true,
                             'show_ui'             => true,
                             'show_in_menu'        => true,
                             'show_in_nav_menus'   => true,
                             'show_in_admin_bar'   => true,
                             'menu_position'       => 5,
                             'lang' => '',
                             'can_export'          => true,
                             'has_archive'         => true,
                             'exclude_from_search' => false,
                             'publicly_queryable'  => true,
                             'capability_type'     => 'post',
                             'show_in_rest' => true,

                         );
                         // Registering your Custom Post Type
                         register_post_type( 'revista_cientifica', $args );
                     }
                     /* Hook into the 'init' action so that the function
                     * Containing our post type registration is not
                     * unnecessarily executed.
                     */
                     add_action( 'init', 'custom_revista_cientifica_type', 0 );


                     function custom_noticia_type() {
                            // Set UI labels for Custom Post Type
                             $labels = array(
                                 'name'                => _x( 'Notícias da AMEA', 'Post Type General Name', 'twentytwenty' ),
                                 'singular_name'       => _x( 'Notícias', 'Post Type Singular Name', 'twentytwenty' ),
                                 'menu_name'           => __( 'Notícias', 'twentytwenty' ),
                                 'parent_item_colon'   => __( 'Parent Notícias', 'twentytwenty' ),
                                 'all_items'           => __( 'Todas 	Notícias', 'twentytwenty' ),
                                 'view_item'           => __( 'Ver 	Notícias', 'twentytwenty' ),
                                 'add_new_item'        => __( 'Adicionar nova 	Notícia', 'twentytwenty' ),
                                 'add_new'             => __( 'Adicionar nova 	Notícia', 'twentytwenty' ),
                                 'edit_item'           => __( 'Editar 	Notícia', 'twentytwenty' ),
                                 'update_item'         => __( 'Update 	Notícia', 'twentytwenty' ),
                                 'search_items'        => __( 'Search 	Notícia', 'twentytwenty' ),
                                 'not_found'           => __( 'Not Found', 'twentytwenty' ),
                                 'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
                             );

                                // Set other options for Custom Post Type

                                 $args = array(
                                 'label'               => __( '	Notícia', 'twentytwenty' ),
                                 'description'         => __( '	Notícia news and reviews', 'twentytwenty' ),
                                 'labels'              => $labels,
                                 // Features this CPT supports in Post Editor
                                 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
                                 // You can associate this CPT with a taxonomy or custom taxonomy.
                                 'taxonomies'          => array( 'genres','category', 'post_tag','lang'  ),
                                 /* A hierarchical CPT is like Pages and can have
                                 * Parent and child items. A non-hierarchical CPT
                                 * is like Posts.
                                 */
                                 'hierarchical'        => false,
                                 'public'              => true,
                                 'show_ui'             => true,
                                 'show_in_menu'        => true,
                                 'show_in_nav_menus'   => true,
                                 'show_in_admin_bar'   => true,
                                 'menu_position'       => 5,
                                 'lang' => '',
                                 'can_export'          => true,
                                 'has_archive'         => true,
                                 'exclude_from_search' => false,
                                 'publicly_queryable'  => true,
                                 'capability_type'     => 'post',
                                 'show_in_rest' => true,

                             );
                             // Registering your Custom Post Type
                             register_post_type( 'noticia', $args );
                         }
                         /* Hook into the 'init' action so that the function
                         * Containing our post type registration is not
                         * unnecessarily executed.
                         */
                         add_action( 'init', 'custom_noticia_type', 0 );
