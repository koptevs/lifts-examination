<?php
function graphql_register_lift_fields() {
	register_graphql_field(
		'lifts',
		'crb_lifts_uzstadisanas_gads',
		array(
			'type'        => 'String',
			'description' => __( 'Lifta uzstādīšanas gads', 'skriemelis' ),
			'resolve'     => function( $lifts ) {
				$gads = get_post_meta( $lifts->databaseId, '_crb_lifts_uzstadisanas_gads', true );
				return ! empty( $gads ) ? $gads : null;
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
				$rupn_nr = get_post_meta( $lifts->databaseId, '_crb_lifts_rupn_nr', true );
				return ! empty( $rupn_nr ) ? $rupn_nr : null;
			},
		)
	);

	// crb_lifts_rupn_nr
}
