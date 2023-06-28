<?php
/*
 * Plugin Name:       Lifts' Examination
 * Plugin URI:
 * Description:       Plugin for creating custom post types and custom fields for lifts' examination data.
 * Version:           1.0.0
 * Author:            Igors Koptevs
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       skriemelis
 * Domain Path:       /languages
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . '/post-types/register.php';
require_once plugin_dir_path( __FILE__ ) . '/custom-fields/register.php';
require_once plugin_dir_path( __FILE__ ) . '/graphql-fields/register.php';

add_action( 'init', 'skriemelis_register_lifts_type' );
add_action( 'carbon_fields_register_fields', 'crb_attach_lift_fields' );
add_action( 'graphql_register_types', 'graphql_register_lift_fields' );

add_action( 'init', 'skriemelis_register_parbaude_type' );
add_action( 'carbon_fields_register_fields', 'crb_attach_parbaude_fields' );
add_action( 'graphql_register_types', 'graphql_register_parbaude_fields' );

add_action( 'init', 'skriemelis_register_valditajs_type' );
add_action( 'carbon_fields_register_fields', 'crb_attach_valditajs_fields' );
add_action( 'graphql_register_types', 'graphql_register_valditajs_fields' );


// add_action( 'init', 'skriemelis-register_parvaldnieks_type' );
// add_action( 'init', 'skriemelis-register_parbaude_type' );


// require_once plugin_dir_path( __FILE__ ) . '/taxonomies/register.php';
// add_action( 'init', 'skriemelis-register_rajons_taxonomy' );
