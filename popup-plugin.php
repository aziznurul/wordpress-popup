<?php
/**
 * Plugin Name: Popup Plugin
 * Description: Plugin untuk menampilkan pop-up menggunakan modal.
 * Version: 1.0
 * Author: Aziz Nurul Hidayat
 * License: GPL2
 */

 if (!defined('ABSPATH')) {
    exit; // Hindari akses langsung
}

ob_start();

// Autoload semua file di folder includes
require_once plugin_dir_path(__FILE__) . 'includes/class-popup.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-api.php';

ob_end_clean(); // Bersihkan buffer output sebelum plugin aktif

// Inisialisasi plugin
function run_popup_plugin() {
    \PopupPlugin\Popup::get_instance();
}

add_action('plugins_loaded', 'run_popup_plugin');

function popup_register_post_type() {
    $args = array(
        'public'        => true,
        'label'         => 'Popups',
        'menu_icon'     => 'dashicons-format-chat',
        'supports'      => array('title', 'editor', 'custom-fields'),
    );
    register_post_type('popup', $args);
}
add_action('init', 'popup_register_post_type');




