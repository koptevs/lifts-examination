<?php
$left_padding       = 5;
$total_width        = 190;
$width              = $total_width - $left_padding;
$is_filled          = false;
$default_line_width = 0.2;

$font_family_default         = 'ArialRegular';
$font_family_default_bold    = 'ArialBold';
$font_family_emphasized      = 'TimesNewRomanRegular';
$font_family_emphasized_bold = 'TimesNewRomanBold';
$font_size_title             = 10;
$font_size_default           = 9;
$font_size_s                 = 8;
$font_size_xs                = 7;

$space_for_header = 15;

//
// VALDITAJS
//
$section_valditajs_height         = 8;
$section_valditajs_left_col_width = 100;

$section_reg_nr_height      = 3.5;
$section_reg_nr_label_width = 20;
$section_reg_nr_line_width  = 0.1;
$section_reg_nr_digit_width = ( $section_valditajs_left_col_width - $section_reg_nr_label_width ) / 11;

//
// PARBAUDES VEIDS
//
$parbaudes_veids_line_width  = $default_line_width;
$parbaudes_veids_cell_height = 5;

$parbaudes_veids_font_family = $font_family_default;
$parbaudes_veids_font_size   = 9;

$parbaudes_veids_label_font_family = 'ArialBold';
$parbaudes_veids_label_font_size   = 9;

$parbaudes_veids_mark_font_family = 'ArialBold';
$parbaudes_veids_mark_font_size   = $font_size_s;

$parbaudes_veids_1col_width      = 30;
$parbaudes_veids_mark_cell_width = 5;

$parbaudes_veids_2col_width = ( $width - $parbaudes_veids_mark_cell_width * 4 - $parbaudes_veids_1col_width ) / 4;
$parbaudes_veids_3col_width = $parbaudes_veids_mark_cell_width;
$parbaudes_veids_4col_width = ( $width - $parbaudes_veids_mark_cell_width * 4 - $parbaudes_veids_1col_width ) / 4;
$parbaudes_veids_5col_width = $parbaudes_veids_mark_cell_width;
$parbaudes_veids_6col_width = ( $width - $parbaudes_veids_mark_cell_width * 4 - $parbaudes_veids_1col_width ) / 4;
$parbaudes_veids_7col_width = $parbaudes_veids_mark_cell_width;
$parbaudes_veids_8col_width = ( $width - $parbaudes_veids_mark_cell_width * 4 - $parbaudes_veids_1col_width ) / 4;
$parbaudes_veids_9col_width = $parbaudes_veids_mark_cell_width;

//
// TEHNISKAS PARBAUDES NORMATIVI
//
$tehniskas_parbaudes_normativi_cell_height       = 5;
$tehniskas_parbaudes_normativi_label_cell_width  = 45;
$tehniskas_parbaudes_normativi_font_family       = 'ArialRegular';
$tehniskas_parbaudes_normativi_font_size         = 8;
$tehniskas_parbaudes_normativi_label_font_family = 'ArialBold';
$tehniskas_parbaudes_normativi_label_font_size   = 8;

//
// ZINAS PAR
//
$zinas_par_line_width        = $default_line_width;
$zinas_par_cell_height       = 4;
$zinas_par_font_family       = 'ArialRegular';
$zinas_par_font_size         = 8;
$zinas_par_label_font_family = 'ArialBold';
$zinas_par_label_font_size   = 9;

$zinas_par_label_cell_width             = 17;
$zinas_par_reg_nr_label_cell_width      = 18;
$zinas_par_reg_nr_cell_width            = 35;
$zinas_par_uzstaditajs_label_cell_width = 30;
$zinas_par_uzstaditajs_cell_width       = 0;

//
// LIFTU
//

$liftu_line_width        = $default_line_width;
$liftu_cell_height       = $zinas_par_cell_height;
$liftu_font_family       = $zinas_par_font_family;
$liftu_font_size         = $zinas_par_font_size;
$liftu_label_font_family = $zinas_par_label_font_family;
$liftu_label_font_size   = $zinas_par_label_font_size;

$liftu_label_cell_width             = $zinas_par_label_cell_width;
$liftu_reg_nr_label_cell_width      = $zinas_par_reg_nr_label_cell_width;
$liftu_reg_nr_cell_width            = $zinas_par_reg_nr_cell_width;
$liftu_gads_cell_width              = 5;
$liftu_uzstadisanas_gads_cell_width = $width - $liftu_label_cell_width - $liftu_reg_nr_label_cell_width - $liftu_reg_nr_cell_width - $liftu_gads_cell_width * 4;

//
// LIFTA TIPS
//

$lifta_tips_cell_height = 5;

$lifta_tips_label_font_family = 'ArialBold';
$lifta_tips_label_font_size   = 9;
$lifta_tips_label_cell_width  = 25;


$lifta_tips_font_family = 'ArialRegular';
$lifta_tips_font_size   = 9;
$lifta_tips_cell_width  = 31;

$lifta_tips_line_width = $default_line_width;

$lifta_tips_mark_font_size  = 9;
$lifta_tips_mark_cell_width = $lifta_tips_cell_height;

//
// CELTSPEJA
//

//
// PARBAUDES REZULTATI
//


$parbaudes_rezultati_cell_height       = 3.5;
$parbaudes_rezultati_column_spacer     = 7;
$parbaudes_rezultati_mark_column_width = 5;
$parbaudes_rezultati_text_column_width = ( $width - $parbaudes_rezultati_column_spacer - $parbaudes_rezultati_mark_column_width * 8 ) / 2;
$parbaudes_rezultati_label_font_size   = 8;
$parbaudes_rezultati_text_font_size    = 7;

//
// VERTEJUMI
//
$vertejumi_row_height       = 3.5;
$vertejumi_first_col_width  = 20;
$vertejumi_second_col_width = ( $width - $vertejumi_first_col_width ) / 2;
$vertejumi_third_col_width  = ( $width - $vertejumi_first_col_width ) / 2;

//
// PARBAUDES VEIDS
//
$derigs_ekspluatacijai_line_width  = $default_line_width;
$derigs_ekspluatacijai_cell_height = 4.5;

$derigs_ekspluatacijai_font_family      = $font_family_default;
$derigs_ekspluatacijai_font_size        = 9;
$derigs_ekspluatacijai_mark_font_family = 'ArialBold';
$derigs_ekspluatacijai_mark_font_size   = 9;

$derigs_ekspluatacijai_mark_cell_width = 5;

$derigs_ekspluatacijai_1col_width = $derigs_ekspluatacijai_mark_cell_width;
$derigs_ekspluatacijai_2col_width = ( $width - $derigs_ekspluatacijai_mark_cell_width * 3 - $derigs_ekspluatacijai_1col_width ) / 3 - 10;
$derigs_ekspluatacijai_3col_width = $derigs_ekspluatacijai_mark_cell_width;
$derigs_ekspluatacijai_4col_width = ( $width - $derigs_ekspluatacijai_mark_cell_width * 3 - $derigs_ekspluatacijai_1col_width ) / 3 + 20;
$derigs_ekspluatacijai_5col_width = $derigs_ekspluatacijai_mark_cell_width;
$derigs_ekspluatacijai_6col_width = ( $width - $derigs_ekspluatacijai_mark_cell_width * 3 - $derigs_ekspluatacijai_1col_width ) / 3;

//
// NAKOSA PARBAUDE
//

$nakosa_parbaude_1col_width = 30;
$nakosa_parbaude_2col_width = 30;
$nakosa_parbaude_3col_width = $width - 130;
$nakosa_parbaude_4col_width = 35;
$nakosa_parbaude_5col_width = 25;
$nakosa_parbaude_6col_width = 10;

//
// IEKARTA MARKETA
//

$iekarta_marketa_1col_width = 60;
$iekarta_marketa_2col_width = 25;
$iekarta_marketa_3col_width = $width - 175;
$iekarta_marketa_4col_width = 15;
$iekarta_marketa_5col_width = 50;
$iekarta_marketa_6col_width = 30;

//
// PARBAUDE PIEDALIJAS
//

$parbaude_piedalijas_1col_width = 33;
$parbaude_piedalijas_2col_width = 85;
$parbaude_piedalijas_3col_width = $width - 175;
$parbaude_piedalijas_4col_width = 30;
$parbaude_piedalijas_5col_width = 25;


//
// El merijumi
//

$el_merijumi_first_table_row_height = 5;
$el_merijumi_table_width            = 150;
$el_merijumi_automargin             = ( $width - $el_merijumi_table_width ) / 2;


$el_merijumi_first_table_row_1_width = 40;
$el_merijumi_first_table_row_2_width = $el_merijumi_first_table_row_1_width;
$el_merijumi_first_table_row_3_width = $el_merijumi_table_width - $el_merijumi_first_table_row_1_width - $el_merijumi_first_table_row_2_width;

$el_merijumi_second_table_row_height     = 5;
$el_merijumi_second_table_col_1_width    = 7;
$el_merijumi_second_table_col_2_width    = 60;
$el_merijumi_second_table_col_data_width = ( $el_merijumi_table_width - $el_merijumi_second_table_col_1_width - $el_merijumi_second_table_col_2_width ) / 6;
$el_merijumi_red_fill_color              = 204;
$el_merijumi_green_fill_color            = 192;
$el_merijumi_blue_fill_color             = 217;

$checkbox_image_width  = 4;
$checkbox_image_height = 4;

$el_merijumi_sledziens_row_height         = 4;
$el_merijumi_sledziens_line_distance      = 3;
$el_merijumi_sledziens_col_1_width        = 37;
$el_merijumi_sledziens_col_2_width        = 8;
$el_merijumi_sledziens_col_checkbox_width = 10;
$el_merijumi_sledziens_col_4_width        = 11;
$el_merijumi_sledziens_col_5_width        = 11;
$el_merijumi_sledziens_col_lines_width    = 150;


$lift_id      = carbon_get_post_meta( get_the_ID(), 'crb_association_lifts' )[0]['id'];
$valditajs_id = carbon_get_post_meta( get_the_ID(), 'crb_association_valditajs' )[0]['id'];

$parbaude_nr         = carbon_get_the_post_meta( 'crb_parbaude_nr' );
$parbaude_veids      = carbon_get_the_post_meta( 'crb_parbaude_veids' );
$parbaude_next_veids = carbon_get_the_post_meta( 'crb_parbaude_next_veids' );
$parbaude_vertejums  = carbon_get_the_post_meta( 'crb_parbaude_vertejums' );

$parbaude_datums_start       = carbon_get_the_post_meta( 'crb_parbaude_datums_start' );
$parbaude_datums_end         = carbon_get_the_post_meta( 'crb_parbaude_datums_end' );
$parbaude_next_datums        = carbon_get_the_post_meta( 'crb_parbaude_next_datums' );
$parbaude_next_normal_datums = carbon_get_the_post_meta( 'crb_parbaude_next_normal_datums' );

$parbaude_zimes_nr                     = carbon_get_the_post_meta( 'crb_parbaude_zimes_nr' );
$parbaude_bir_reg_nr                   = carbon_get_the_post_meta( 'crb_parbaude_bir_reg_nr' );
$parbaude_mehanikis_vards_uzvards      = carbon_get_the_post_meta( 'crb_parbaude_mehanikis_vards_uzvards' );
$parbaude_mehanika_kompanija           = carbon_get_the_post_meta( 'crb_parbaude_mehanika_kompanija' );
$parbaude_atkartotas_parbaudes_iemesls = carbon_get_the_post_meta( 'crb_parbaude_atkartotas_parbaudes_iemesls' );
$parbaude_neatbilstibas_0              = carbon_get_the_post_meta( 'crb_parbaude_neatbilstibas_0' );
$parbaude_neatbilstibas_1              = carbon_get_the_post_meta( 'crb_parbaude_neatbilstibas_1' );
$parbaude_neatbilstibas_2              = carbon_get_the_post_meta( 'crb_parbaude_neatbilstibas_2' );
$parbaude_neatbilstibas_3              = carbon_get_the_post_meta( 'crb_parbaude_neatbilstibas_3' );
$parbaude_netika_parbaudits            = carbon_get_the_post_meta( 'crb_parbaude_netika_parbaudits' );
$parbaude_piezimes                     = carbon_get_the_post_meta( 'crb_parbaude_piezimes' );

$lifts_reg_nr             = carbon_get_post_meta( $lift_id, 'crb_lifts_reg_nr' );
$lifts_tips               = carbon_get_post_meta( $lift_id, 'crb_lifts_tips' );
$lifts_uzstaditajs        = carbon_get_post_meta( $lift_id, 'crb_lifts_uzstaditajs' );
$lifts_razotajs           = carbon_get_post_meta( $lift_id, 'crb_lifts_razotajs' );
$lifts_rupn_nr            = carbon_get_post_meta( $lift_id, 'crb_lifts_rupn_nr' );
$lifts_uzstadisanas_gads  = carbon_get_post_meta( $lift_id, 'crb_lifts_uzstadisanas_gads' );
$lifts_celtspeja          = carbon_get_post_meta( $lift_id, 'crb_lifts_celtspeja' );
$lifts_stavu_skaits       = carbon_get_post_meta( $lift_id, 'crb_lifts_stavu_skaits' );
$lifts_atrums             = carbon_get_post_meta( $lift_id, 'crb_lifts_atrums' );
$lifts_modelis            = carbon_get_post_meta( $lift_id, 'crb_lifts_modelis' );
$lifts_adrese_pilseta     = carbon_get_post_meta( $lift_id, 'crb_lifts_adrese_pilseta' );
$lifts_adrese_iela        = carbon_get_post_meta( $lift_id, 'crb_lifts_adrese_iela' );
$lifts_adrese_maja        = carbon_get_post_meta( $lift_id, 'crb_lifts_adrese_maja' );
$lifts_adrese_kapnu_telpa = carbon_get_post_meta( $lift_id, 'crb_lifts_adrese_kapnu_telpa' );
$lifts_adrese_indeks      = carbon_get_post_meta( $lift_id, 'crb_lifts_adrese_indeks' );
$lifts_adrese_novads      = carbon_get_post_meta( $lift_id, 'crb_lifts_adrese_novads' );
$lifts_adrese_pagasts     = carbon_get_post_meta( $lift_id, 'crb_lifts_adrese_pagasts' );
$lifts_piezimes           = carbon_get_post_meta( $lift_id, 'crb_lifts_piezimes' );

$valditajs_nosaukums                       = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_nosaukums' );
$valditajs_adrese                          = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_adrese' );
$valditajs_reg_nr                          = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_reg_nr' );
$valditajs_liguma_nr                       = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_liguma_nr' );
$valditajs_liguma_datums                   = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_liguma_datums' );
$valditajs_kontakt_person                  = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_kontakt_person' );
$valditajs_kontakt_person_talrunis         = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_kontakt_person_talrunis' );
$valditajs_kontakt_person_talrunis_rekinam = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_kontakt_person_talrunis_rekinam' );
$valditajs_bankas_nosaukums                = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_bankas_nosaukums' );
$valditajs_bankas_kods                     = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_bankas_kods' );
$valditajs_bankas_konts                    = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_bankas_konts' );
$valditajs_rekina_apmaksas_dienas          = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_rekina_apmaksas_dienas' );
$valditajs_piezimes                        = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_piezimes' );
$valditajs_protokols_ar_merijumiem         = carbon_get_post_meta( $valditajs_id, 'crb_valditajs_protokols_ar_merijumiem' );
$eksperts                                  = wp_get_current_user()->data->display_name;
