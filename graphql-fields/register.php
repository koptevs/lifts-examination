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
