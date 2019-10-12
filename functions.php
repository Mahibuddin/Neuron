<?php
if(file_exists(get_template_directory().'/inc/enqueue.php')){
require_once(get_template_directory().'/inc/enqueue.php');
}

if(file_exists(get_template_directory().'/inc/theme_support.php')){
require_once(get_template_directory().'/inc/theme_support.php');
}

if(file_exists(get_template_directory().'/inc/wp-bootstrap-navwalker.php')){
require_once(get_template_directory().'/inc/wp-bootstrap-navwalker.php');
}

if(file_exists(get_template_directory().'/inc/custom_post_type.php')){
require_once(get_template_directory().'/inc/custom_post_type.php');
}

if(file_exists(get_template_directory().'/inc/custom_widget.php')){
require_once(get_template_directory().'/inc/custom_widget.php');
}

if(file_exists(get_template_directory().'/theme-options/cs-framework.php')){
require_once(get_template_directory().'/theme-options/cs-framework.php');
}

if(file_exists(get_template_directory().'/inc/category.php')){
require_once(get_template_directory().'/inc/category.php');
}

