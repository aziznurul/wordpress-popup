<?php
namespace PopupPlugin;

require_once 'trait-singleton.php';
require_once 'interface-popup.php';

class Popup implements PopupInterface {
    use Singleton;

    public function register() {
        add_action('init', [$this, 'register_popup_cpt']);
        add_action('wp_footer', [$this, 'render_popup']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
    }

    public function register_popup_cpt() {
        register_post_type('popup', [
            'label' => 'Popups',
            'public' => true,
            'supports' => ['title', 'editor'],
            'menu_icon' => 'dashicons-welcome-widgets-menus',
        ]);
    }

    public function enqueue_assets() {
        wp_enqueue_style('popup-style', plugin_dir_url(__FILE__) . '../assets/css/style.css');
        wp_enqueue_script('popup-script', plugin_dir_url(__FILE__) . '../assets/js/popup.js', ['jquery'], false, true);
    }

    public function render_popup() {
        if (is_single()) {
            include plugin_dir_path(__FILE__) . '../templates/popup-template.php';
        }
    }
}

Popup::get_instance()->register();
