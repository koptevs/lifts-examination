<?php

function graphql_register_lift_fields() {

	register_graphql_field(
		'lifts',
		'crb_lifts_reg_nr',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta Reg. Nr. BIRā', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_reg_nr', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_tips',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta tips', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_tips', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_kategorija',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta kategorija', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_kategorija', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_uzstaditajs',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta uzstādītājs', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_uzstaditajs', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_razotajs',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta uzstādītājs', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_razotajs', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_rupn_nr',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta uzstādīšanas gads', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_rupn_nr', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_uzstadisanas_gads',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta uzstādīšanas gads', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_uzstadisanas_gads', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_celtspeja',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta celtspeja', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_celtspeja', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_stavu_skaits',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta apkalpojamo stāvu skaits', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_stavu_skaits', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_atrums',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta ātrums', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_atrums', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_modelis',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta modelis', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_modelis', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_adrese_pilseta',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta adrese pilsets', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_adrese_pilseta', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_adrese_iela',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta adrese iela', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_adrese_iela', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_adrese_maja',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta adrese maja', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_adrese_maja', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_adrese_kapnu_telpa',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta adrese kapņu telpa', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_adrese_kapnu_telpa', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_adrese_indeks',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta adrese indeks', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_adrese_indeks', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_adrese_novads',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta adrese novads', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_adrese_novads', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_adrese_pagasts',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta adrese pagasts', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_adrese_pagasts', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'lifts',
		'crb_lifts_piezimes',
		array(
			'type'        => 'String',
			'description' => __( 'Piezimes', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$field_data = get_post_meta( $lifts->databaseId, '_crb_lifts_piezimes', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
}

function graphql_register_valditajs_fields() {

	register_graphql_field(
		'valditajs',
		'crb_valditajs_nosaukums',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja nosaukums', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_nosaukums', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_adrese',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja adrese', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_adrese', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_reg_nr',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja reg_nr', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_reg_nr', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_liguma_nr',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja liguma_nr', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_liguma_nr', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_liguma_datums',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja liguma_datums', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_liguma_datums', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_kontakt_person',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja kontakt_person', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_kontakt_person', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_kontakt_person_talrunis',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja kontakt_person_talrunis', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_kontakt_person_talrunis', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_kontakt_person_talrunis_rekinam',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja kontakt_person_talrunis_rekinam', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_kontakt_person_talrunis_rekinam', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_bankas_nosaukums',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja bankas_nosaukums', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_bankas_nosaukums', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_bankas_kods',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja bankas_kods', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_bankas_kods', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_bankas_konts',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja bankas_konts', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_bankas_konts', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_rekina_apmaksas_dienas',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja rekina_apmaksas_dienas', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_rekina_apmaksas_dienas', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_piezimes',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja piezimes', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_piezimes', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'valditajs',
		'crb_valditajs_protokols_ar_merijumiem',
		array(
			'type'        => 'String',
			'description' => __( 'Valdītāja protokols_ar_merijumiem', 'skriemelis' ),
			'resolve'     => function( $valditajs ) {
				$field_data = get_post_meta( $valditajs->databaseId, '_crb_valditajs_protokols_ar_merijumiem', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
}
function graphql_register_parbaude_fields() {

	register_graphql_field(
		'parbaude',
		'crb_parbaude_nr',
		array(
			'type'        => 'String',
			'description' => __( 'Pārbaudes Reg. Nr.', 'skriemelis' ),
			'resolve'     => function( $parbaude ) {
				$field_data = get_post_meta( $parbaude->databaseId, '_crb_parbaude_nr', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'parbaude',
		'crb_parbaude_veids',
		array(
			'type'        => 'String',
			'description' => __( 'Pārbaudes veids', 'skriemelis' ),
			'resolve'     => function( $parbaude ) {
				$field_data = get_post_meta( $parbaude->databaseId, '_crb_parbaude_veids', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'parbaude',
		'crb_parbaude_next_veids',
		array(
			'type'        => 'String',
			'description' => __( 'Nākamās pārbaudes veids', 'skriemelis' ),
			'resolve'     => function( $parbaude ) {
				$field_data = get_post_meta( $parbaude->databaseId, '_crb_parbaude_next_veids', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'parbaude',
		'crb_parbaude_vertejums',
		array(
			'type'        => 'String',
			'description' => __( 'Pārbaudes vērtējums', 'skriemelis' ),
			'resolve'     => function( $parbaude ) {
				$field_data = get_post_meta( $parbaude->databaseId, '_crb_parbaude_vertejums', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'parbaude',
		'crb_association_lifts_reg_nr',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta reģ.nr.', 'skriemelis' ),
			'resolve'     => function( $parbaude ) {
				$lift_id = get_post_meta( $parbaude->databaseId, '_crb_association_lifts|||0|id', true );
				$field_data = get_post_meta( $lift_id, '_crb_lifts_reg_nr', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
	register_graphql_field(
		'parbaude',
		'crb_association_valditajs_nosaukums',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta reģ.nr.', 'skriemelis' ),
			'resolve'     => function( $parbaude ) {
				$valditajs_id = get_post_meta( $parbaude->databaseId, '_crb_association_valditajs|||0|id', true );
				$field_data = get_post_meta( $valditajs_id, '_crb_valditajs_nosaukums', true );
				return ! empty( $field_data ) ? $field_data : null;
			},
		)
	);
}
// post:lifts:53
// _crb_association_lifts|||0|value
