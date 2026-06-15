<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://bmlt.app
 * @since      1.0.0
 *
 * @package    Bread_Custom_Fonts
 * @subpackage Bread_Custom_Fonts/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Bread_Custom_Fonts
 * @subpackage Bread_Custom_Fonts/public
 * @author     Ron Barack <otrok7@yahoo.com>
 */
class Bread_Custom_Fonts_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bread_Custom_Fonts_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bread_Custom_Fonts_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bread-custom-fonts-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {


		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bread-custom-fonts-public.js', array( 'jquery' ), $this->version, false );

	}
	public function mpdf_init_options( $options ) {
		$fontDirs = array_merge($options['fontDir']??[], [ __DIR__ . '/../includes/fonts' ]);
		$fontData = array_merge($options['fontdata']??[], [ // lowercase letters only in font key
			'roboto' => [
				'R' => 'Roboto-Regular.ttf',
				'B' => 'Roboto-Bold.ttf',
				'I' => 'Roboto-Italic.ttf',
				'BI' => 'Roboto-BoldItalic.ttf',
				'useOTL' => 0xff,
				'useKashida' => 75,
			],
			'rubik' => [
				'R' => 'Rubik-Regular.ttf',
				'B' => 'Rubik-Bold.ttf',
				'I' => 'Rubik-Italic.ttf',
				'BI' => 'Rubik-BoldItalic.ttf',
				'useOTL' => 0xff,
				'useKashida' => 75,
			],
			'cairo' => [
				'R' => 'Cairo-Regular.ttf',
				'B' => 'Cairo-Bold.ttf',
				'I' => 'Cairo-Regular.ttf',
				'BI' => 'Cairo-Bold.ttf',
				'useOTL' => 0xff,
				'useKashida' => 75,
			],
			'riyaz' => [
				'R' => 'XB_Riyaz.ttf',
				'B' => 'XB_RiyazBd.ttf',
				'I' => 'XB_RiyazBdIt.ttf',
				'BI' => 'XB_RiyazBdIt.ttf',
				'useOTL' => 0xFF,
				'useKashida' => 75,
			],
			'bnazanin' => [
				'R' => 'BNazanin.ttf',
				'B' => 'BNazaninBd.ttf',
				'I' => 'BNazanin.ttf',
				'BI' => 'BNazaninBd.ttf',
				//'useOTL' => 0xFF,
				'useKashida' => 75,
			],
			'tahoma' => [
				'R' => 'Wine_Tahoma.ttf',
				'B' => 'Wine_TahomaBd.ttf',
				'I' => 'BNazanin.ttf',
				'BI' => 'BNazaninBd.ttf',
				//'useOTL' => 0xFF,
				'useKashida' => 75,
			],
			'arimo' => [
				'R' => 'Arimo-Regular.ttf',
				'B' => 'Arimo-Bold.ttf',
				'I' => 'Arimo-Italic.ttf',
				'BI' => 'Arimo-BoldItalic.ttf',
				'useOTL' => 0xFF,
				'useKashida' => 75,
			],
			'amiri' => [
				'R' => 'Tajawal-Regular.ttf',
				'B' => 'Tajawal-Bold.ttf',
				//'I' => 'Amiri-Italic.ttf',
				//'BI' => 'Amiri-BoldItalic.ttf',
				'useOTL' => 0xFF,
				'useKashida' => 75,
			],
		]);
		$options['fontDir' ] = $fontDirs;
		$options['fontdata' ] = $fontData;
		return $options;
	}
}
