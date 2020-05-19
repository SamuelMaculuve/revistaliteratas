<?php
/**
 * Created by PhpStorm.

 */

if (is_single()):
        /** Loop for Single Post **/
    require trailingslashit(get_template_directory()).'/assets/templates/content-single.php';
elseif(is_page()):
        /** Loop for Page **/
    require trailingslashit(get_template_directory()).'/assets/templates/content-page.php';
elseif (is_search()):
        /** Loop for Search **/
    require trailingslashit(get_template_directory()).'/assets/templates/content-search.php';
elseif (is_category()):
      /** Loop for category **/
    require trailingslashit(get_template_directory()).'/assets/templates/content-category.php';
endif;