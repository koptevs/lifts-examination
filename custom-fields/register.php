<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function crb_attach_lift_fields() {

	Container::make( 'post_meta', 'Custom Data' )
	->where( 'post_type', '=', 'lifts' )
	->add_fields(
		array(

			Field::make( 'text', 'crb_lifts_reg_nr', 'Bir Reg. Nr.' )->set_width( 50 )->set_classes( 'test-class-1 test-class-2' ),
			// Field::make( 'text', 'crb_tips', 'Tips' )->set_width( 50 ),
			Field::make( 'radio', 'crb_lifts_tips', 'Tips' )
			->set_options(
				array(
					'elektriskais'  => 'Elektriskais',
					'hidrauliskais' => 'Hidrauliskais',
				)
			)->set_width( 25 ),
			Field::make( 'radio', 'crb_lifts_kategorija', 'Kategorija' )
			->set_options(
				array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
				)
			)->set_width( 25 ),

			Field::make( 'text', 'crb_lifts_uzstaditajs', 'uzstaditajs' )->set_width( 50 ),
			Field::make( 'text', 'crb_lifts_razotajs', 'razotajs' )->set_width( 50 ),

			Field::make( 'text', 'crb_lifts_rupn_nr', 'rupn_nr' )->set_width( 33.33 ),
			Field::make( 'text', 'crb_lifts_uzstadisanas_gads', 'uzst_gads' )->set_width( 33.33 ),
			Field::make( 'text', 'crb_lifts_celtspeja', 'celtspeja' )->set_width( 33.33 ),

			Field::make( 'text', 'crb_lifts_stavu_skaits', 'stavu_skaits' )->set_width( 25 ),
			Field::make( 'text', 'crb_lifts_atrums', 'atrums' )->set_width( 25 ),
			Field::make( 'text', 'crb_lifts_modelis', 'modelis' )->set_width( 25 ),

			Field::make( 'separator', 'crb_separator', 'Adrese' ),

			Field::make( 'text', 'crb_lifts_adrese_pilseta', 'Pilseta' )->set_attribute( 'placeholder', 'Rīga' )->set_width( 10 ),
			Field::make( 'text', 'crb_lifts_adrese_iela', 'Iela' )->set_width( 40 ),
			Field::make( 'text', 'crb_lifts_adrese_maja', 'Māja' )->set_width( 5 ),
			Field::make( 'text', 'crb_lifts_adrese_kapnu_telpa', 'Kapņu telpa' )->set_width( 10 ),
			Field::make( 'text', 'crb_lifts_adrese_indeks', 'Indeks' )->set_width( 20 ),
			Field::make( 'text', 'crb_lifts_adrese_novads', 'Novads' )->set_width( 33.33 ),
			Field::make( 'text', 'crb_lifts_adrese_pagasts', 'Pagasts' )->set_width( 33.33 ),
			Field::make( 'textarea', 'crb_lifts_piezimes', 'Piezīmes' )->set_rows( '3' ),

		)
	);
}

function crb_attach_valditajs_fields() {

	Container::make( 'post_meta', 'Custom Data' )
	->where( 'post_type', '=', 'valditajs' )
	->add_fields(
		array(
			Field::make( 'text', 'crb_valditajs_nosaukums', 'Nosaukums' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_adrese', 'Adrese' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_reg_nr', 'Reģistrācijas numurs' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_liguma_nr', 'Līguma numurs' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_liguma_datums', 'valditajs_liguma_datums' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_kontakt_person', 'valditajs_kontakt_person' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_kontakt_person_talrunis', 'valditajs_kontakt_person_talrunis' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_kontakt_person_talrunis_rekinam', 'valditajs_kontakt_person_talrunis_rekinam' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_bankas_nosaukums', 'valditajs_bankas_nosaukums' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_bankas_kods', 'valditajs_bankas_kods' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_bankas_konts', 'valditajs_bankas_konts' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_rekina_apmaksas_dienas', 'valditajs_rekina_apmaksas_dienas' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_piezimes', 'valditajs_piezimes' )->set_width( 50 ),
			Field::make( 'text', 'crb_valditajs_protokols_ar_merijumiem', 'valditajs_protokols_ar_merijumiem' )->set_width( 50 ),
		)
	);
}

function crb_attach_parbaude_fields() {

	Container::make( 'post_meta', 'Custom Data' )
	->where( 'post_type', '=', 'parbaude' )
	->add_fields(
		array(

			Field::make( 'text', 'crb_parbaude_nr', 'Pārbaudes Reg. Nr.' )->set_width( 25 ),

			Field::make( 'radio', 'crb_parbaude_veids', 'Pārbaudes veids' )
			->set_options(
				array(
					'pirmreizeja'         => 'Pirmreizējā',
					'karteja'             => 'Kārtējā',
					'atkartota'           => 'Atkārtotā',
					'arpuskartas'         => 'Ārpuskārtas',
					'drosuma_novertesana' => 'Drošuma novērtēšana',
				)
			)->set_width( 25 ),

			Field::make( 'radio', 'crb_parbaude_next_veids', 'Nākamās pārbaudes veids' )
			->set_options(
				array(
					'karteja'   => 'Kārtējā',
					'atkartota' => 'Atkārtotā',
				)
			)->set_width( 25 ),

			Field::make( 'radio', 'crb_parbaude_vertejums', 'Pārbaudes vērtējums' )
			->set_options(
				array(
					'0' => 0,
					'1' => 1,
					'2' => 2,
					'3' => 3,
				)
			)->set_width( 25 ),

			Field::make( 'association', 'crb_association_lifts', 'Lifta reģ.nr.' )
			->set_types(
				array(
					array(
						'type'      => 'post',
						'post_type' => 'lifts',
					),
				)
			)->set_width( 40 ),

			Field::make( 'association', 'crb_association_valditajs', 'Valditajs' )
			->set_types(
				array(
					array(
						'type'      => 'post',
						'post_type' => 'valditajs',
					),
				)
			)->set_width( 60 ),

			Field::make( 'date', 'crb_parbaude_datums_start', 'Pārbaudes sākums' )->set_input_format( 'd.m.Y', 'd.m.Y' )->set_storage_format( 'd.m.Y' )->set_width( 25 ),
			Field::make( 'date', 'crb_parbaude_datums_end', 'Pārbaudes beigums' )->set_input_format( 'd.m.Y', 'd.m.Y' )->set_storage_format( 'd.m.Y' )->set_width( 25 ),
			Field::make( 'date', 'crb_parbaude_next_datums', 'Nākamā' )->set_input_format( 'd.m.Y', 'd.m.Y' )->set_storage_format( 'd.m.Y' )->set_width( 25 ),
			Field::make( 'date', 'crb_parbaude_next_normal_datums', 'Nakamā normāla' )->set_input_format( 'd.m.Y', 'd.m.Y' )->set_storage_format( 'd.m.Y' )->set_width( 25 ),

			Field::make( 'text', 'crb_parbaude_zimes_nr', 'Pārbaudes zīmes nr.' )->set_width( 33.33 ),
			Field::make( 'text', 'crb_parbaude_bir_reg_nr', 'BIR reg.nr.' )->set_width( 33.33 ),

			Field::make( 'text', 'crb_parbaude_mehanikis_vards_uzvards', 'parbaude_mehanikis_vards_uzvards' )->set_width( 50 ),
			Field::make( 'text', 'crb_parbaude_mehanika_kompanija', 'parbaude_mehanika_kompanija' )->set_width( 50 ),

			Field::make( 'complex', 'crb_parbaude_atkartotas_parbaudes_iemesls', 'Atkartotās pārbaudes iemesls' )
			->add_fields(
				array(
					Field::make( 'text', 'content', 'String' ),
				)
			)->set_conditional_logic(
				array(
					'relation' => 'AND',
					array(
						'field'   => 'crb_parbaude_veids',
						'value'   => 'atkartota',
						'compare' => '=',
					),
				)
			),

			Field::make( 'separator', 'crb_separator', 'Arkārtotās pārbaudes iemesls - noverstās kārtējās pārbaudes neatbilstības ar vērtējumu 3 (Nav izvērtēšanas vadības ierīces uz kabīnes jumta.)' )->set_classes( 'separator' )->set_conditional_logic(
				array(
					'relation' => 'AND',
					array(
						'field'   => 'crb_parbaude_veids',
						'value'   => 'atkartota',
						'compare' => '=',
					),
				)
			),

			Field::make( 'textarea', 'crb_parbaude_neatbilstibas_1', 'Neatbilstības ar vertējumu 1' )->set_conditional_logic(
				array(
					'relation' => 'AND',
					array(
						'field'   => 'crb_parbaude_vertejums',
						'value'   => 1,
						'compare' => '>=',
					),
				)
			),

			Field::make( 'textarea', 'crb_parbaude_neatbilstibas_2', 'Neatbilstības ar vertējumu 2' )->set_conditional_logic(
				array(
					'relation' => 'AND',
					array(
						'field'   => 'crb_parbaude_vertejums',
						'value'   => 2,
						'compare' => '>=',
					),
				)
			),

			Field::make( 'textarea', 'crb_parbaude_neatbilstibas_3', 'Neatbilstības ar vertējumu 3' )->set_conditional_logic(
				array(
					'relation' => 'AND',
					array(
						'field'   => 'crb_parbaude_vertejums',
						'value'   => 3,
						'compare' => '=',
					),
				)
			),

			Field::make( 'textarea', 'crb_parbaude_netika_parbaudits', 'Netika pārbaudīts' )->set_conditional_logic(
				array(
					'relation' => 'AND',
					array(
						'field'   => 'crb_parbaude_veids',
						'value'   => 'atkartota',
						'compare' => '=',
					),
				)
			),

			Field::make( 'textarea', 'crb_parbaude_neatbilstibas_0', 'Neatbilstības ar vertējumu 0' ),
			Field::make( 'separator', 'crb2_separator', 'Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. Piezīmes long long text. ' )->set_classes( 'separator' ),
			Field::make( 'textarea', 'crb_parbaude_piezimes', 'Piezimes' )->set_rows( '3' ),
		)
	);
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once plugin_dir_path( __DIR__ ) . 'vendors/carbon-fields/vendor/autoload.php';
	\Carbon_Fields\Carbon_Fields::boot();
}
