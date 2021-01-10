<?php
/** File: functions.php
 *
 * **** THIS IS A CORE STRUCTR FILE, DO NOT EDIT ITS CONTENTS
 * **** FOR MAKING CUSTOM CODE CHANGES, PLEASE USE A CHILD THEME
 * **** LEARN MORE HERE - https://codex.wordpress.org/Child_Themes
 * ****************************************************************
 *
 * @package Structr
 * @since Structr 1.0
 */

// This initializes everthing if there's no child theme.
require_once dirname( __FILE__ ) . '/inc/init.php';

add_action('wp_ajax_get_states_by_ajax', 'get_states_by_ajax_callback');
add_action('wp_ajax_nopriv_get_states_by_ajax', 'get_states_by_ajax_callback');
function hide_edit_delete_buttom($object,$table_id){
foreach($object->dataTableParams->buttons as $text => $button){
if(is_array($button)){
$button_type = $button['text'];
}
if($button_type == 'Löschen' && ($table_id == 3 || $table_id == 27) )
{
unset($object->dataTableParams->buttons[$text]);
}
}
return $object;
}
add_filter('wpdatatables_filter_table_description', 'hide_edit_delete_buttom', 10, 2);

// include files via shortcode
function include_file($atts) {
	extract(shortcode_atts(array('filepath' => 'NULL'), $atts));
	if ($filepath!='NULL' && file_exists(TEMPLATEPATH.$filepath)){
	ob_start();
	include(TEMPLATEPATH.$filepath);
	$content = ob_get_clean();
	return $content;
	}
}

add_shortcode('include', 'include_file');

add_filter('wp_mail','custom_mails', 10,1);


function remove_header() {
   if (!in_category( 'popup')) {
      return;
   }
   
  echo "<style>";
   echo " header {";
    echo  "  display:none; }";
    echo "nav {";
       echo "display:none;}"; 
 echo "  .top-navigation {";
   echo "clear: none;";
    echo "display: none;}";	
      echo "  </style>";
   
   
}
add_action('wp_head', 'remove_header');



class MySettingsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        // This page will be under "Settings"
        add_options_page(
            'Settings Admin', 
            'EKlasse Einstellungen', 
            'manage_options', 
            'my-setting-admin', 
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'my_option_name' );
        ?>
        <div class="wrap">
            <h1>Eklasse Einstellungen</h1>
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'my_option_group' );
                do_settings_sections( 'my-setting-admin' );
                submit_button();
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {        
        register_setting(
            'my_option_group', // Option group
            'my_option_name' // Option name
           // array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'setting_section_id', // ID
            'EKLasse DB Settings', // Title
            array( $this, 'print_section_info' ), // Callback
            'my-setting-admin' // Page
        );  

        add_settings_field(
            'DB_HOST', // ID
            'DB Host', // Title 
            array( $this, 'DB_HOST_callback' ), // Callback
            'my-setting-admin', // Page
            'setting_section_id' // Section           
        );      

        add_settings_field(
            'DB_USER', 
            'DB User', 
            array( $this, 'DB_USER_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        ); 
		add_settings_field(
            'DB_PASS', // ID
            'DB Passwort', // Title 
            array( $this, 'DB_PASS_callback' ), // Callback
            'my-setting-admin', // Page
            'setting_section_id' // Section           
        );      

        add_settings_field(
            'DB_NAME', 
            'DB Name', 
            array( $this, 'DB_NAME_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        );      
    }
	

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['id_number'] ) )
            $new_input['id_number'] = absint( $input['id_number'] );

        if( isset( $input['tite'] ) )
            $new_input['tite'] =  sanitize_text_field( $input['tite'] );

        return $new_input;
    }

    /** 
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Bitte die Datenbank-Verbindung der EKlasse-Datenbank hier eintragen:';
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function DB_HOST_callback()
    {
        printf(
            '<input type="text" id="DB_HOST" name="my_option_name[DB_HOST]" value="%s" />',
            isset( $this->options['DB_HOST'] ) ? esc_attr( $this->options['DB_HOST']) : ''
        );
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function DB_USER_callback()
    {
        printf(
            '<input type="text" id="DB_USER" name="my_option_name[DB_USER]" value="%s" />',
            isset( $this->options['DB_USER'] ) ? esc_attr( $this->options['DB_USER']) : ''
        );
    }
	  public function DB_PASS_callback()
    {
        printf(
            '<input type="text" id="DB_PASS" name="my_option_name[DB_PASS]" value="%s" />',
            isset( $this->options['DB_PASS'] ) ? esc_attr( $this->options['DB_PASS']) : ''
        );
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function DB_NAME_callback()
    {
        printf(
            '<input type="text" id="DB_NAME" name="my_option_name[DB_NAME]" value="%s" />',
            isset( $this->options['DB_NAME'] ) ? esc_attr( $this->options['DB_NAME']) : ''
        );
    }
}

if( is_admin() )
    $my_settings_page = new MySettingsPage();