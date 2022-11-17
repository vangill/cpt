<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Elementor;

use Elementor\Plugin;
use Elementor\Element_Column;
use Elementor\Controls_Manager;
use JNews\Elementor\Normal\SocialIcon;
use JNews\Elementor\Normal\SocialCounter;
use JNews\Module\ModuleManager;
use JNews\Widget\Normal\RegisterNormalWidget;

/**
 * Class JNews VC Integration
 */
Class ModuleElementor
{
    /**
     * @var ModuleElementor
     */
    private static $instance;

    private $module_manager;

    /**
     * @return ModuleElementor
     */
    public static function getInstance()
    {
        if (null === static::$instance)
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * ModuleVC constructor.
     */
    private function __construct()
    {
        $this->setup_hook();
	    $this->setup_post_type();
	    $this->themeversion = wp_get_theme()->get('Version');
    }

    protected function get_module_instance()
    {
    	if ( ! $this->module_manager )
	    {
	    	$this->module_manager = ModuleManager::getInstance();
	    }

	    return $this->module_manager;
    }

    protected  function setup_post_type()
    {
    	add_post_type_support('footer', 'elementor');
	    add_post_type_support('custom-post-template', 'elementor');
	    add_post_type_support('custom-mega-menu', 'elementor');
        add_post_type_support('archive-template', 'elementor');
    }

    public function setup_hook()
    {
        // load script & style editor
        add_action( 'elementor/editor/after_enqueue_styles',        array( $this, 'editor_style' ) );
        add_action( 'elementor/editor/after_enqueue_scripts',       array( $this, 'editor_script') );

	    // load script & style frontend
	    add_action( 'elementor/frontend/after_enqueue_scripts',     array( $this, 'frontend_script') );

	    // register module, element, group & custom control
	    add_action( 'elementor/controls/controls_registered',       array( $this, 'register_control') );
        add_action( 'elementor/widgets/widgets_registered',         array( $this, 'register_module') );
	    add_action( 'elementor/widgets/widgets_registered',         array( $this, 'register_normal') );
        add_action( 'elementor/init',                               array( $this, 'register_group' ) );

        // register sticky sidebar option on column
		add_action( 'elementor/element/column/layout/before_section_end',           array( $this, 'register_sticky_option' ) );
	    add_action( 'elementor/element/column/section_advanced/before_section_end', array( $this, 'register_column_padding' ) );

	    // register custom css option for single page / post
	    add_action( 'elementor/element/wp-page/document_settings/before_section_end',	array( $this, 'register_custom_css_option' ) );
	    add_action( 'wp_head',															array( $this, 'render_custom_css' ) );

        // modify widget list on elementor
        add_filter( 'elementor/widgets/black_list',                 array($this, 'modify_normal_widget_list') );

        // check width of section
	    add_action('elementor/frontend/before_render',              array($this, 'register_width'));
        add_action('elementor/frontend/element/before_render',      array($this, 'register_width'));
	    add_action('elementor/editor/element/before_raw_data',      array($this, 'register_width'));
        add_action('elementor/init',                                array($this, 'register_element'));

	    // change elementor script
        add_action( 'elementor/editor/before_enqueue_scripts',  array($this, 'elementor_editor_script'), 99 );

	    add_action( 'wp_ajax_elementor_get_category',           array($this, 'elementor_get_category'));
	    add_action( 'wp_ajax_elementor_get_author',             array($this, 'elementor_get_author'));
	    add_action( 'wp_ajax_elementor_get_tag',                array($this, 'elementor_get_tag'));
    }

	public function elementor_get_tag()
	{
		if ( isset( $_REQUEST[ 'string' ] ) && ! empty( $_REQUEST[ 'string' ] ) )
		{
			$value = sanitize_text_field( $_REQUEST[ 'string' ] );
		} else {
			return false;
		}

		$data   = [];
		$values = explode( ',', $value );

		foreach ( $values as $val ) {
			if ( ! empty( $val ) ) {
				$term   = get_term( $val, 'post_tag' );
				$data[] = [
					'value' => $val,
					'text'  => $term->name,
				];
			}
		}

		wp_send_json( $data );
	}

	public function elementor_get_author() {
		if ( isset( $_REQUEST['string'] ) && ! empty( $_REQUEST['string'] ) ) {
			$value = $_REQUEST['string'];
		} else {
			return false;
		}

		$data   = [];
		$values = explode( ',', $value );

		foreach ( $values as $val ) {
			if ( ! empty( $val ) ) {
				$user   = get_userdata( $val );
				$data[] = [
					'value' => $val,
					'text'  => $user->display_name,
				];
			}
		}

		wp_send_json( $data );
	}

	public function elementor_get_category() {
		if ( isset( $_REQUEST['string'] ) && ! empty( $_REQUEST['string'] ) ) {
			$value = $_REQUEST['string'];
		} else {
			return false;
		}

		$data   = [];
		$values = explode( ',', $value );

		foreach ( $values as $val ) {
			if ( ! empty( $val ) ) {
				$term   = get_term( $val, 'category' );
				$data[] = [
					'value' => $val,
					'text'  => $term->name,
				];
			}
		}

		wp_send_json( $data );
	}

	public function elementor_editor_script() {
		if ( defined( 'ELEMENTOR_VERSION' ) ) {
			$script    = get_parent_theme_file_uri( 'assets/js' );
			$version   = (int) str_replace( '.', '', ELEMENTOR_VERSION );
			$available = [ 212, 216, 221, 224 ];

			if ( in_array( $version, $available ) ) {
				wp_deregister_script( 'elementor-editor' );

				wp_register_script(
					'elementor-editor',
					$script . '/elementor/editor-' . $version . '.min.js',
					[
						'wp-auth-check',
						'jquery-ui-sortable',
						'jquery-ui-resizable',
						'backbone-marionette',
						'backbone-radio',
						'perfect-scrollbar',
						'nprogress',
						'tipsy',
						'imagesloaded',
						'heartbeat',
						'jquery-elementor-select2',
						'flatpickr',
						'elementor-dialog',
						'ace',
						'ace-language-tools',
						'jquery-hover-intent',
					],
					ELEMENTOR_VERSION,
					true
				);
			}
		}
	}

	public function register_element() {
		Plugin::$instance->elements_manager->register_element_type( new \JNews\Elementor\Element\Section() );
		Plugin::$instance->elements_manager->register_element_type( new \Elementor\Element_Column() );
	}

	private function get_column_width( $width ) {
		if ( $width < 34 ) {
			$column = 4;
		} elseif ( $width < 67 ) {
			$column = 8;
		} else {
			$column = 12;
		}

		return $column;
	}

	/**
	 * @param Element_Column $object
	 */
	public function register_width( $object ) {
		if ( $object instanceof Element_Column ) {
			$setting = $object->get_settings();
			$column  = $this->get_column_width( $setting['_column_size'] );
			ModuleManager::getInstance()->force_set_width( $column );
		}
	}

	public function modify_normal_widget_list( $new_widgets ) {
		$widgets  = array_keys( $GLOBALS['wp_widget_factory']->widgets );
		$excluded = [ 'Social_Widget', 'Social_Counter_Widget' ];

		foreach ( $widgets as $widget ) {
			if ( in_array( $widget, $excluded ) ) {
				$new_widgets[] = $widget;
			}
		}

		/** Return black list array for filter */
		return (array) $new_widgets;
	}

	public function frontend_script() {
		$is_preview_mode = \Elementor\Plugin::$instance->preview->is_preview_mode();
		if ( $is_preview_mode ) {
			$asset_url = get_parent_theme_file_uri( 'assets/' );
			wp_enqueue_script( 'wp-mediaelement' );
			wp_enqueue_script( 'jscrollpane', $asset_url . 'js/jquery.jscrollpane.js', null, $this->themeversion, true );
			wp_enqueue_script( 'jnews-hero', $asset_url . 'js/jnewshero.js', array( 'tiny-slider-noconflict' ), $this->themeversion, null );
			wp_enqueue_script( 'jnews-overlayslider' );
			wp_enqueue_script( 'jnews-videoplaylist' );
			wp_enqueue_script( 'jnews-elementor-frontend', $asset_url . 'js/admin/elementor-frontend.js', array( 'jquery' ), $this->themeversion, null );

			wp_enqueue_style( 'wp-mediaelement' );
			wp_enqueue_style( 'jnews-overlayslider' );
			wp_enqueue_style( 'jnews-videoplaylist' );
		}
	}

	public function editor_style() {
		wp_enqueue_style( 'jnews-admin', get_parent_theme_file_uri( '/assets/css/admin/admin-style.css' ), null, $this->themeversion );
		wp_enqueue_style( 'jnews-elementor-css', get_parent_theme_file_uri( '/assets/css/elementor-backend.css' ), null, $this->themeversion );
	}

	public function editor_script() {
		wp_enqueue_script( 'jquery-ui-spinner' );
		wp_enqueue_script( 'jnews-elementor-js', get_parent_theme_file_uri( '/assets/js/admin/elementor-backend.js' ), null, $this->themeversion, true );
		wp_localize_script( 'jnews-elementor-js', 'jnews_elementor', $this->localize_script() );
	}

	public function localize_script() {
		$option = [];

		$option['widgets'] = $this->populate_widget();

		return $option;
	}

	public function populate_widget() {
		// Module Widget
		$modules = $this->get_module_instance()->populate_module();
		$widgets = [];

		foreach ( $modules as $module ) {
			if ( $module['widget'] ) {
				$widgets[] = str_replace( 'jnews', 'jnews_module', strtolower( $module['name'] ) );
			}
		}

		// Normal Widget
		$normal_modules = RegisterNormalWidget::getInstance()->get_normal_widget();

		foreach ( $normal_modules as $module ) {
			$widgets[] = 'jnews_' . str_replace( '_widget', '', strtolower( $module ) );
		}

		return $widgets;
	}

	/**
	 * @param \Elementor\Widgets_Manager $widgets_manager
	 */
	public function register_module( $widgets_manager ) {
		include get_parent_theme_file_path( 'class/Elementor/module-elementor.php' );
		do_action( 'jnews_module_elementor' );

		$modules = $this->get_module_instance()->populate_module();

		$exclude = [ 'social_icon_wrapper', 'social_icon_item', 'social_counter_wrapper', 'social_counter_item', 'widget' ];

		foreach ( $modules as $module ) {
			if ( in_array( $module['type'], $exclude ) ) {
				continue;
			}

			$classname = '\\' . $module['name'] . '_Elementor';
			$widgets_manager->register_widget_type( new $classname() );
		}
	}

	/**
	 * @param \Elementor\Widgets_Manager $widgets_manager
	 */
	public function register_normal( $widgets_manager ) {
		$widgets_manager->register_widget_type( new SocialIcon() );
		$widgets_manager->register_widget_type( new SocialCounter() );
	}

	public function register_group() {
		$groups = [
			'jnews-module'   => esc_html__( 'JNews - Module', 'jnews' ),
			'jnews-hero'     => esc_html__( 'JNews - Hero', 'jnews' ),
			'jnews-slider'   => esc_html__( 'JNews - Slider', 'jnews' ),
			'jnews-element'  => esc_html__( 'JNews - Element', 'jnews' ),
			'jnews-carousel' => esc_html__( 'JNews - Carousel', 'jnews' ),
			'jnews-footer'   => esc_html__( 'JNews - Footer', 'jnews' ),
			'jnews-post'     => esc_html__( 'JNews - Post', 'jnews' ),
			'jnews-archive'  => esc_html__( 'JNews - Archive', 'jnews' ),

		];

		foreach ( $groups as $key => $value ) {
			\Elementor\Plugin::$instance->elements_manager->add_category( $key, [ 'title' => $value ], 1 );
		}
	}

	public function register_control() {
		$controls = [
			'dynamicselect' => 'JNews\Elementor\Control\Dynamicselect',
			'alert'         => 'JNews\Elementor\Control\Alert',
		];

		foreach ( $controls as $type => $classname ) {
			\Elementor\Plugin::instance()->controls_manager->register_control( $type, new $classname() );
		}
	}

	public function register_sticky_option( $element ) {
		$element->add_control(
			'sticky_sidebar',
			[
				'label'        => esc_html__( 'Enable Sticky Sidebar', 'jnews' ),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'default'      => '',
				'description'  => esc_html__( 'Set this column as sticky sidebar. Note: Sticky Sidebar will disabled when on the editor or you should refresh the editor to see the result. It will works fine on the frontend.', 'jnews' ),
				'prefix_class' => ' jeg_sticky_sidebar jeg_sidebar ',
			]
		);
	}

	public function register_custom_css_option( $element ) {
		$element->add_control(
			'custom_css',
			[
				'label'       => esc_html__( 'Custom CSS Setting', 'jnews' ),
				'type'        => \Elementor\Controls_Manager::CODE,
				'default'     => '',
				'description' => esc_html__( 'Enter custom CSS (Note: it will be outputted only on this particular page).', 'jnews' ),
			]
		);
	}

	public function render_custom_css( $post_id = null ) {
		if ( ! is_singular() ) {
			return;
		}

		if ( ! $post_id ) {
			$post_id = get_the_ID();
		}

		if ( $post_id ) {
			$settings = get_post_meta( $post_id, '_elementor_page_settings', true );

			if ( ! empty( $settings['custom_css'] ) ) {
				echo '<style type="text/css" data-type="elementor_custom-css">';
				echo strip_tags( $settings['custom_css'] );
				echo '</style>';
			}
		}
	}

	public function register_column_padding( $element ) {
		$element->update_responsive_control(
			'padding',
			[
				'label'      => esc_html__( 'Padding', 'jnews' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .elementor-element-populated' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
	}
}
