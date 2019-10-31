<?php

final class wee_Elementor_my_Extencion {

	/**
	 * Plugin Version
	 *
	 * @since 1.0.0
	 *
	 * @var string The plugin version.
	 */
	const VERSION = '1.0.0';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const MINIMUM_PHP_VERSION = '7.0';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var wee_Elementor_my_ExtencionThe single instance of the class.
	 */
    private static $_instance = null;

	/**
	 * Instance
	 *
	 * Indicador para saber si debe o no inicializar el admin.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return string or int  An instance of the class.
	 */
    public static $estado = "ok";
    
    public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {

		add_action( 'init', [ $this, 'i18n' ] );
        add_action( 'plugins_loaded', [ $this, 'init' ] );
        add_action( 'admin_menu', [$this, 'wee_Add_My_Admin_Link'] );

	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 *
	 * Fired by `init` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function i18n() {

		load_plugin_textdomain( 'wee_elementor-test-extension' );

	}

	/**
	 * Initialize the plugin
	 *
	 * Load the plugin only after Elementor (and other plugins) are loaded.
	 * Checks for basic plugin requirements, if one check fail don't continue,
	 * if all check have passed load the files required to run the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init() {

		// Check if Elementor installed and activated
		if (  !did_action( 'elementor/loaded' ) ) {
            add_action( 'admin_notices', [ $this, 'wee_admin_notice_no_existe_elementor' ] );
            self::$estado = 1;
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'wee_admin_notice_Elementor_version_antigua' ] );
            return;
            self::$estado = 2;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
            add_action( 'admin_notices', [ $this, 'wee_admin_notice_version_php_antigua' ] );
            self::$estado = 3;
			return;
		}

		// Add Plugin actions
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'wee_init_widgets' ] );
        add_action( 'elementor/controls/controls_registered', [ $this, 'wee_init_controls' ] );
        add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'wee_widget_styles' ] );

    }
    public function wee_widget_styles() {

		wp_register_style( 'header-elementor-boostrap', plugins_url( 'css/', __FILE__ ) );
		wp_register_style( 'header-elementor-my-estilos', plugins_url( 'css/widget-2.css', __FILE__ ) );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */

	public function wee_admin_notice_no_existe_elementor() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'elementor-test-extension' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'elementor-test-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-extension' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }
    
	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function wee_admin_notice_Elementor_version_antigua() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-extension' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'elementor-test-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'elementor-test-extension' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function wee_admin_notice_version_php_antigua() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'elementor-test-extension' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'elementor-test-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'elementor-test-extension' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

    }
    
    // agregar un nuevo top  menu link para el ACP
    public function wee_Add_My_Admin_Link(){
        add_menu_page(
            'Extencion para elementor by necrowolf', // Title of the page
            'Elementor Extencion', // Text to show on the menu link
            'manage_options', // Capability requirement to see the link
            plugin_dir_path(__FILE__) . '/admin/wee-acp-page.php' // The 'slug' - file to display when clicking the link
        );
    }

	/**
	 * Init Widgets
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function wee_init_widgets() {

		// Include Widget files
        //require_once(  '../widgets/test-widget.php' );
       require_once  WEE_DIR_PATH . '/widgets/test-widget.php';

		// Register widget
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Test_Widget() );

	}

	/**
	 * Init Controls
	 *
	 * Include controls files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function wee_init_controls() {

		// Include Control files
       // require_once( '../controls/test-control.php' );
       require_once  WEE_DIR_PATH  . '/controls/test-control.php';

		// Register control
		\Elementor\Plugin::$instance->controls_manager->register_control( 'control-type-', new \Test_Control() );

	}

}

wee_Elementor_my_Extencion::instance();

if(wee_Elementor_my_Extencion::$estado=="ok"){
    //require_once plugin_dir_path() . 'templates/wee_functions_templates.php';
}

?>