<?php
/**
 * Use the PHP for https://dev.azure.com/xpinvestimentos/ContentCommerce/_git/Expert.WordPressPluginBoilerplate
 *
 * @package   Plugin_Name
 * @copyright 2022 Seu Nome
 *
 * @wordpress-plugin
 * Plugin Name:       @TODO
 * Plugin URI:        @TODO
 * Description:       @TODO
 * Version:           1.0.0
 * Author:            Seu nome
 * Author URI:        https://www.seusite.com.br/
 * Text Domain:       plugin-name-locale
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/aleemerich/wp-plugin-boilerplate.git
 */

if ( ! defined( 'ABSPATH' ) )
    exit; // Exit if accessed directly.

/**
 * Plugin_Name
 *
 * @since 1.0.0
 */
class Plugin_Name {
    /**
     * Instance of this class.
     *
     * @var object
     * @since 1.0.0
     */
    protected static $instance = null;

    /**
     * Prefix plugin
     *
     * @var string
     */
    private $prefix = 'plugin-name';

    /**
     * Prefix plugin
     *
     * @var array
     */
    private $global_params = [];

    /**
     * Initialize the plugin
     */
    private function __construct() {
        $this->global_params = array(
            'ajax_url'	=> admin_url( 'admin-ajax.php' ),
            'home_url'  => home_url()
        );

        // Load plugin text domain
        add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );

        // Load admin global styles and script
        add_action( 'admin_enqueue_scripts', array( $this, 'load_admin_styles_and_scripts' ) );
        
        // Load public global styles and script
        add_action( 'wp_enqueue_scripts', array( $this, 'load_styles_and_scripts' ) );
    }

    /**
     * Return an instance of this class.
     *
     * @return object A single instance of this class.
     * @since 1.0.0
     */
    public static function get_instance() {
        // If the single instance hasn't been set, set it now.
        if ( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * Load the plugin text domain for translation.
     *
     * @return void
     * @since 1.0.0
     */
    public function load_plugin_textdomain() {
        load_plugin_textdomain( $this->prefix, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }

    /**
     * Load admin styles and scripts
     *
     */
    public function load_admin_styles_and_scripts(){
        wp_register_style( $this->prefix . '_admin_css_main', plugins_url( '/admin/assets/css/main.css', __FILE__ ), array(), null, 'all' );
        wp_enqueue_style( $this->prefix . '_admin_css_main' );
        
        wp_register_script( $this->prefix . '_admin_js_main', plugins_url( '/admin/assets/js/main.js', __FILE__ ), array( 'jquery' ), null, true );
        wp_enqueue_script( $this->prefix . '_admin_js_main' );
        wp_localize_script( $this->prefix . '_admin_js_main', 'global_params', $this->global_params );
    }

    /**
     * Load styles and scripts
     *
     */
    public function load_styles_and_scripts(){
        wp_register_style( $this->prefix . '_css_main', plugins_url( '/public/assets/css/main.css', __FILE__ ), array(), null, 'all' );
        wp_enqueue_style( $this->prefix . '_css_main' );
        
        wp_register_script( $this->prefix . '_js_main', plugins_url( '/public/assets/js/main.js', __FILE__ ), array( 'jquery' ), null, true );
        wp_enqueue_script( $this->prefix . '_js_main' );
        wp_localize_script( $this->prefix . '_js_main', 'global_params', $this->global_params );
    }
}

add_action( 'plugins_loaded', array( 'Plugin_Name', 'get_instance' ), 0 );