<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://bmlt.app
 * @since      1.0.0
 *
 * @package    Bread_Custom_Fonts
 * @subpackage Bread_Custom_Fonts/includes
 */
define('BREAD_CUSTOM_FONTS_OPTION', 'BreadCustomFontOption');
/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Bread_Custom_Fonts
 * @subpackage Bread_Custom_Fonts/includes
 * @author     Ron Barack <otrok7@yahoo.com>
 */
class Bread_Custom_Fonts
{

	private $options = [];
	private $custom_fonts = [
		'roboto' => [
			'name' => 'Roboto',
			'stack' => 'Sans-Serif - Neo-Grotesque',
			'scripts' => ['latin', 'latin-ext', 'cyrillic', 'cyrillic-ext', 'greek', 'greek-ext'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Roboto" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'Roboto_Condensed-Regular.ttf',
				'B' => 'Roboto_Condensed-Bold.ttf',
				'I' => 'Roboto_Condensed-Italic.ttf',
				'BI' => 'Roboto_Condensed-BoldItalic.ttf',
			],
			'configuration' => [
				'useOTL' => 0xFF,
				'kashida' => 75,
			]
		],
		'rubik' => [
			'name' => 'Rubik',
			'stack' => 'Sans-Serif - Neo-Grotesque',
			'scripts' => ['latin', 'latin-ext', 'cyrillic', 'cyrillic-ext', 'arabic'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Rubik" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'Rubik-Regular.ttf',
				'B' => 'Rubik-Bold.ttf',
				'I' => 'Rubik-Italic.ttf',
				'BI' => 'Rubik-BoldItalic.ttf',
			],
			'configuration' => [
				'useOTL' => 0xFF,
				'kashida' => 75,
			]
		],
		'oswald' => [
			'name' => 'Oswald',
			'stack' => 'Sans-Serif - Neo-Grotesque',
			'scripts' => ['latin', 'latin-ext', 'cyrillic', 'cyrillic-ext'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Oswald" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'Oswald-Regular.ttf',
				'B' => 'Oswald-Bold.ttf',
			],
			'configuration' => [
				'useOTL' => 0xFF,
				'kashida' => 75,
			]
		],
		'opensans' => [
			'name' => 'Open Sans Condensed',
			'stack' => 'Sans-Serif - Humanist',
			'scripts' => ['latin', 'latin-ext', 'cyrillic', 'cyrillic-ext', 'greek'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Open+Sans" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'OpenSans_Condensed-Regular.ttf',
				'B' => 'OpenSans_Condensed-Bold.ttf',
				'I' => 'OpenSans_Condensed-Italic.ttf',
				'BI' => 'OpenSans_Condensed-BoldItalic.ttf',
			],
			'configuration' => [
				'useOTL' => 0xFF,
				'kashida' => 75,
			]
		],
		'arimo' => [
			'name' => 'Arimo',
			'stack' => 'Sans-Serif - Arial-like',
			'scripts' => ['latin', 'latin-ext', 'cyrillic', 'cyrillic-ext', 'greek', 'hebrew'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Animo" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'Arimo-Regular.ttf',
				'B' => 'Arimo-Bold.ttf',
				'I' => 'Arimo-Italic.ttf',
				'BI' => 'Arimo-BoldItalic.ttf',
			],
			'configuration' => [
				'useOTL' => 0xFF,
				'kashida' => 75,
			]
		],
		'arvo' => [
			'name' => 'Arvo',
			'stack' => 'Slab-Serif',
			'scripts' => ['latin', 'latin-ext'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Arvo" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'Arvo-Regular.ttf',
				'B' => 'Arvo-Bold.ttf',
				'I' => 'Arvo-Italic.ttf',
				'BI' => 'Arvo-BoldItalic.ttf',
			],
			'configuration' => []
		],
		'cairo' => [
			'name' => 'Cairo',
			'stack' => 'Sans-Serif - Superellipse',
			'scripts' => ['latin', 'latin-ext', 'arabic'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Cairo" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'Cairo-Regular.ttf',
				'B' => 'Cairo-Bold.ttf',
			],
			'configuration' => [
				'useOTL' => 0xFF,
				'kashida' => 75,
			]
		],
		'riyaz' => [
			'name' => 'XB Riyaz',
			'stack' => 'Sans-Serif - Superellipse',
			'scripts' => ['latin', 'latin-ext', 'arabic'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Cairo" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'XB_Riyaz.ttf',
				'B' => 'XB_RiyazBd.ttf',
				'I' => 'XB_RiyazBdIt.ttf',
				'BI' => 'XB_RiyazBdIt.ttf',
			],
			'configuration' => [
				'useOTL' => 0xFF,
				'kashida' => 75,
			]
		],
		'bnazanin' => [
			'name' => 'B Nazanin',
			'stack' => 'Sans-Serif - Superellipse',
			'scripts' => ['latin', 'latin-ext', 'arabic'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Cairo" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'BNazanin.ttf',
				'B' => 'BNazaninBd.ttf',
				'I' => 'BNazanin.ttf',
				'BI' => 'BNazaninBd.ttf',
			],
			'configuration' => [
				'kashida' => 75,
			]
		],
		'tahoma' => [
			'name' => 'B Nazanin',
			'stack' => 'Sans-Serif - Superellipse',
			'scripts' => ['latin', 'latin-ext', 'arabic'],
			'specimen' => '<a href="https://fonts.google.com/specimen/Cairo" target="_blank">Google Fonts</a>',
			'local' => [
				'R' => 'Wine_Tahoma.ttf',
				'B' => 'Wine_TahomaBd.ttf',
				'I' => 'BNazanin.ttf',
				'BI' => 'BNazaninBd.ttf',
				//'useOTL' => 0xFF,
				'useKashida' => 75,
			],
			'configuration' => [
				'kashida' => 75,
			]
		],
	];
	public function __construct()
	{
		$this->options = get_option(BREAD_CUSTOM_FONTS_OPTION, ['active' => []]);
		foreach ($this->custom_fonts as $key => &$font) {
			$font['actions'] = $this->calcActions($key);
		}
		$this->addAdminHooks();
		$this->addPublicHooks();
	}
	public function addAdminHooks()
	{
		add_filter('bread_custom_fonts', [$this, 'bread_custom_fonts']);
		add_filter('bread_content_style', [$this, 'bread_content_style']);
		add_filter('Bread_active_fonts', [$this, 'bread_active_fonts']);
	}
	public function addPublicHooks()
	{
		add_filter("Bread_Mpdf_Init_Options", [$this, 'mpdf_init_options']);
	}
	public function bread_custom_fonts($fonts)
	{
		return array_merge($fonts, $this->custom_fonts);
	}
	private function getLocalDirectory($url = false)
	{
		$dir = $url ? plugin_dir_url(__FILE__) : __DIR__;
		return trailingslashit($dir) . 'fonts';
	}
	public function bread_active_fonts(array $fonts): array
	{
		foreach(array_keys($this->custom_fonts) as $key) {
			$i = array_search($key, $fonts);
			if ($i !== false) {
				array_splice($fonts, $i, 1);
			}
		}
		return array_merge($fonts, $this->getActiveFonts());
	}
	private function getActiveFonts()
	{
		return $this->options['active'];
	}
	public function activateFont(string $fontFamily)
	{
		if (!current_user_can('manage_options')) {
			$this->outputWarning("You must be an administrator to activate fonts");
			return;
		}
		if (!isset($this->custom_fonts[$fontFamily])) {
			$this->outputWarning("$fontFamily not in list of defined fonts");
			return;
		}
		if (in_array($fontFamily, $this->getActiveFonts())) {
			$this->outputWarning("$fontFamily already active");
			return;
		}
		$this->options['active'][] = $fontFamily;
		update_option(BREAD_CUSTOM_FONTS_OPTION, $this->options);
		$this->outputSuccess("Font $fontFamily activated");
	}
	private function outputWarning($str)
	{
		wp_redirect(admin_url('admin.php?page=bmlt-enabled-bread&fontAction=warning&message=' . rawurlencode($str) . '&nonce=' . wp_create_nonce('bread_font_action')));
		exit;
	}
	private function outputSuccess($str)
	{
		wp_redirect(admin_url('admin.php?page=bmlt-enabled-bread&fontAction=success&message=' . rawurlencode($str) . '&nonce=' . wp_create_nonce('bread_font_action')));
		exit;
	}
	public function deactivateFont($fontFamily)
	{
		if (!current_user_can('manage_options')) {
			$this->outputWarning("You must be an administrator to deactivate fonts");
			return;
		}
		unset($this->options['active'][$fontFamily]);
		update_option(BREAD_CUSTOM_FONTS_OPTION, $this->options);
		$this->outputSuccess("Font $fontFamily removed.");
	}
	public function bread_content_style($content_style)
	{
		foreach ($this->getActiveFonts() as $font) {
			$fontInfo = $this->custom_fonts[$font];
			$dir = trailingslashit($this->getLocalDirectory(true));
			foreach (['R', 'B', 'I', 'BI'] as $key) {
				if (!isset($fontInfo['local'][$key])) {
					continue;
				}
				$loc = $dir . rawurlencode($fontInfo['local'][$key]);
				$content_style .= "@font-face {";
				$content_style .= "font-family: $font;";
				$content_style .= "src:url($loc) format('truetype');";
				$content_style .= "font-display: block;";
				if ($key == 'B' || $key == 'BI') {
					$content_style .= "font-weight: bold;";
				}
				if ($key == 'I' || $key == 'BI') {
					$content_style .= "font-style: italic;";
				}
				$content_style .= "}";
			}
		}
		return $content_style;
	}
	function calcActions($font)
	{
		if (in_array($font, $this->getActiveFonts())) {
			return [
				'deactivatefont' => [
					'text' => __('deactivate', 'bread'),
					'action' => 'deactivatefont',
					'lambda' => [$this, 'deactivateFont']
				]
			];
		} else {
			return [
				'activatefont' => [
					'text' => __('Activate', 'bread'),
					'action' => 'activatefont',
					'lambda' => [$this, 'activateFont']
				]
			];
		}
	}
	public function mpdf_init_options($options)
	{
		$fontDirs = $options['fontDir'] ?? [];
		$fontdata = $options['fontdata'] ?? [];
		foreach ($this->getActiveFonts() as $fontKey) {
			$fontDirs[] = $this->getLocalDirectory();
			$info = $this->custom_fonts[$fontKey];
			$fontdata[$fontKey] = [];
			foreach (['R', 'B', 'I', 'BI'] as $style) {
				if (isset($info['local'][$style])) {
					$fontdata[$fontKey][$style] = $info['local'][$style];
				}
			}
			if (isset($info['configuration'])) {
				foreach ($info['configuration'] as $key => $value) {
					$fontdata[$fontKey][$key] = $value;
				}
			}
		}
		$options['fontDir'] = $fontDirs;
		$options['fontdata'] = $fontdata;
		return $options;
	}
}
