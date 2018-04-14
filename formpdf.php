<?php
/*
Plugin Name: formpdf
Plugin URI: http://localhost
Description: Present Contact 7 Form before downloading PDF
Version:     1
Author: Eric L. Michalsen
Author URI:
Text Domain: wporg
Domain Path: /languages
License:     GPL2
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

// Not needed
if(admin){
  // include_once( 'includes/admin/class_formpdf_admin.php' );
}





// Going to see if the content is Advanced Content Type, and if so, appropriate
// type with pdf.
// If PDF, then we will store that PDF url within the form that will be shown.
//
// !! Caution, hardcoded goodness here in terms of field name
//
function formpdf_fid() {
  global $wp_query;
  return get_field('rm_file');
}

add_shortcode('fid', 'formpdf_fid');




