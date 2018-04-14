<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

/**
 *  FormPDF_Admin
 *  Admin Class
 *  Presents admin form for creating PURL's
 */
class FormPDF_Admin {

  /**
   *
   */
  public function __construct() {
    add_action('admin_menu', array($this, 'admin_menu'));
    add_action('admin_init', array($this, 'admin_scripts_style'));
  }

  /**
   *
   */
  public function admin_scripts_style() {
   if (isset($_REQUEST['page'])) {
     if ($_REQUEST['page'] == "purl-form") {

      }
    }
  }

  /**
   *
   */
  public function admin_menu() {
    $page = add_management_page('FormPDF', 'FormPDF ', 'manage_options', 'formpdf', array( $this,'wp_formpdf_settings_page'));
  }

  /**
   *
   */
  function wp_purlform_admin_init() {
    if(is_admin()){
       add_action( 'wp_ajax_my_action', 'formpdf_action' );
    }
  }



  /**
   *
   */
  public function wp_formpdf_settings_page(){
    include('functions.php');
    include('formpdf_admin.tpl.php');
  }

}

return new FormPDF_Admin();
