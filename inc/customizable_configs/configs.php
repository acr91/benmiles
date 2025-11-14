<?php
/**
 * Customizable Configs
 * 
 * Personalization options for contact information
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Add customizer settings for contact information
 */
function benmiles_contact_customizer($wp_customize) {
    // Add Contact Information Section
    $wp_customize->add_section('benmiles_contact_section', array(
        'title'       => __('Contact Information', 'benmiles'),
        'priority'    => 30,
        'description' => __('Update your contact details', 'benmiles')
    ));

    // Email Setting
    $wp_customize->add_setting('benmiles_email', array(
        'default'           => 'contact@example.com',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control('benmiles_email', array(
        'label'    => __('Email Address', 'benmiles'),
        'section'  => 'benmiles_contact_section',
        'type'     => 'email',
        'priority' => 10
    ));

    // Phone Setting
    $wp_customize->add_setting('benmiles_phone', array(
        'default'           => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control('benmiles_phone', array(
        'label'    => __('Phone Number', 'benmiles'),
        'section'  => 'benmiles_contact_section',
        'type'     => 'tel',
        'priority' => 20
    ));

    // Address Setting
    $wp_customize->add_setting('benmiles_address', array(
        'default'           => '123 Main Street, City, State 12345',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control('benmiles_address', array(
        'label'    => __('Address', 'benmiles'),
        'section'  => 'benmiles_contact_section',
        'type'     => 'textarea',
        'priority' => 30
    ));
}
add_action('customize_register', 'benmiles_contact_customizer');

/**
 * Helper functions to retrieve contact information
 */
function benmiles_get_email() {
    return get_theme_mod('benmiles_email', 'contact@example.com');
}

function benmiles_get_phone() {
    return get_theme_mod('benmiles_phone', '+1 (555) 123-4567');
}

function benmiles_get_address() {
    return get_theme_mod('benmiles_address', '123 Main Street, City, State 12345');
}

/**
 * Add customizer settings for social media links
 */
function benmiles_social_customizer($wp_customize) {
    // Add Social Media Section
    $wp_customize->add_section('benmiles_social_section', array(
        'title'       => __('Social Media Links', 'benmiles'),
        'priority'    => 31,
        'description' => __('Add your social media profile URLs', 'benmiles')
    ));

    // Facebook Setting
    $wp_customize->add_setting('benmiles_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control('benmiles_facebook', array(
        'label'    => __('Facebook URL', 'benmiles'),
        'section'  => 'benmiles_social_section',
        'type'     => 'url',
        'priority' => 10
    ));

    // Instagram Setting
    $wp_customize->add_setting('benmiles_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control('benmiles_instagram', array(
        'label'    => __('Instagram URL', 'benmiles'),
        'section'  => 'benmiles_social_section',
        'type'     => 'url',
        'priority' => 20
    ));

    // Spotify Setting
    $wp_customize->add_setting('benmiles_spotify', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control('benmiles_spotify', array(
        'label'    => __('Spotify URL', 'benmiles'),
        'section'  => 'benmiles_social_section',
        'type'     => 'url',
        'priority' => 30
    ));

    // X (Twitter) Setting
    $wp_customize->add_setting('benmiles_x', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh'
    ));

    $wp_customize->add_control('benmiles_x', array(
        'label'    => __('X (Twitter) URL', 'benmiles'),
        'section'  => 'benmiles_social_section',
        'type'     => 'url',
        'priority' => 40
    ));
}
add_action('customize_register', 'benmiles_social_customizer');

/**
 * Helper functions to retrieve social media links
 */
function benmiles_get_facebook() {
    return get_theme_mod('benmiles_facebook', '');
}

function benmiles_get_instagram() {
    return get_theme_mod('benmiles_instagram', '');
}

function benmiles_get_spotify() {
    return get_theme_mod('benmiles_spotify', '');
}

function benmiles_get_x() {
    return get_theme_mod('benmiles_x', '');
}