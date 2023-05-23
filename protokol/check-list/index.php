<?php
require '../tfpdf/tfpdf.php';
require '../variables.php';
require '../functions.php';
require '../data/lifti.php';
require '../data/valditaji.php';
require '../data/parbaudes.php';
$pdf = new tFPDF( 'P', 'mm', 'A4' );

// function wordpress_hash_password( $password ) {
// require_once './class-phpass.php';
// $wp_hasher       = new PasswordHash( 8, true );
// $hashed_password = $wp_hasher->HashPassword( $password );
// return $hashed_password;
// }

// var_dump( wordpress_hash_password( 'igor' ) );
// die();

$parbaude = $parbaudes[ $_GET['check-list'] ?? '04.45/151-23/02' ];
$lifts    = $lifti[ $parbaude['parbaude_lifts_reg_nr'] ];


$iela_or_bulvaris         = '';
$iela_array               = explode( ' ', $lifts['lifts_adrese_iela'] );
$last_word_in_adrese_iela = $iela_array[ count( $iela_array ) - 1 ];
if ( ( $last_word_in_adrese_iela !== 'bulvāris' ) && ( $last_word_in_adrese_iela !== 'bulvaris' ) && ( $last_word_in_adrese_iela !== 'gatve' ) && ( $last_word_in_adrese_iela !== 'prospekts' ) ) {
	$iela_or_bulvaris = 'iela';
}
$kapnu_telpa                  = $lifts['lifts_adrese_kapnu_telpa'] ? '-' . $lifts['lifts_adrese_kapnu_telpa'] : '';
$lifts_parbaudes_adrese_short = $lifts['lifts_adrese_iela'] . ' ' . $iela_or_bulvaris . ' ' . $lifts['lifts_adrese_maja'] . $kapnu_telpa;

$is_filled = true;
$is_filled = false;

// $main_font = 'OpenSansR';
// $main_font = 'FiraMono Bold';

$main_font      = 'FiraMono Medium';
$main_font_bold = 'FiraMono Bold';


$heading_font      = 'Georgia';
$heading_font_bold = 'Georgia Bold';

$main_font_size       = 8;
$main_font_size_large = 10;
$main_font_size_small = 7;

$heading_font_size       = 10;
$heading_font_size_large = 12;
$heading_font_size_small = 8;

$border_width          = 1;
$border_width_thick    = 0.7;
$border_width_thin     = 0.5;
$checklist_line_height = 5;


$accent_color       = array( 128, 128, 128 );
$accent_color_light = array( 218, 236, 236 );
$accent_color_dark  = array( 64, 64, 64 );
$color_main         = array( 32, 32, 32 );
$color_danger       = array( 200, 32, 32 );
$color_success      = array( 255, 255, 175 );
$color_info         = array( 32, 32, 255 );
$color_green        = array( 20, 167, 69 );
$padding            = ' ';

$checklist_width           = $width - 10;
$checklist_divider_width   = 2;
$checklist_left_col_width  = ( $checklist_width - $checklist_divider_width ) / 1.80;
$checklist_right_col_width = $checklist_width - $checklist_divider_width - $checklist_left_col_width;

$checklist_num_width = 7;

$checklist_left_col_one_width   = $checklist_left_col_width - $checklist_num_width;
$checklist_left_col_two_width   = ( $checklist_left_col_width - $checklist_num_width * 2 ) / 2;
$checklist_left_col_three_width = ( $checklist_left_col_width - $checklist_num_width * 3 ) / 3;
$checklist_left_col_four_width  = ( $checklist_left_col_width - $checklist_num_width * 4 ) / 4;

$checklist_right_col_one_width   = $checklist_right_col_width - $checklist_num_width;
$checklist_right_col_two_width   = ( $checklist_right_col_width - $checklist_num_width * 2 ) / 2;
$checklist_right_col_three_width = ( $checklist_right_col_width - $checklist_num_width * 3 ) / 3;
$checklist_right_col_four_width  = ( $checklist_right_col_width - $checklist_num_width * 4 ) / 4;


// var_dump( $lifts_parbaudes_adrese_short );
// die();

$pdf->SetAutoPageBreak( false, 10 );
require '../fonts.php';
$pdf->addPage();
$pdf->setLineWidth( $border_width_thin );


$prp_0   = numbered_string_to_array( $parbaude['parbaude_neatbilstibas_0'] ?? '' );
$prp_1   = numbered_string_to_array( $parbaude['parbaude_neatbilstibas_1'] ?? '' );
$prp_2   = numbered_string_to_array( $parbaude['parbaude_neatbilstibas_2'] ?? '' );
$prp_3   = numbered_string_to_array( $parbaude['parbaude_neatbilstibas_3'] ?? '' );
$prp_all = numbered_string_to_array( $parbaude['parbaude_neatbilstibas_3'] . "\n" . $parbaude['parbaude_neatbilstibas_2'] . "\n" . $parbaude['parbaude_neatbilstibas_1'] );

// require_once '../header.php';
//
// META
//
$pdf->SetDrawColor( ...$accent_color );
$pdf->SetTextColor( ...$color_main );
$pdf->SetFont( $heading_font_bold, '', $heading_font_size_large );

left_padding();
$pdf->setFillColor( 255, 255, 255 );
$pdf->cell( 0, 12, '', '', 1, 'L', true );
left_padding();
$pdf->cell( $checklist_width / 4, 8, $parbaude['parbaude_next_datums'], '', 0, 'L', true );

if ( $parbaude['parbaude_next_datums'] !== $parbaude['parbaude_next_normal_datums'] ) {
	$pdf->SetFont( $heading_font_bold, '', $heading_font_size_small );
	$pdf->cell( $checklist_width / 4, 8, 'Next norm. - ' . $parbaude['parbaude_next_normal_datums'], '', 0, 'L', true );
	$pdf->SetFont( $heading_font_bold, '', $heading_font_size_large );
} else {
	$pdf->cell( $checklist_width / 4, 8, '', '', 0, 'L', true );
}

$pdf->cell( $checklist_width / 2, 8, $lifts_parbaudes_adrese_short, '', 1, 'R', true );
left_padding();
$pdf->SetTextColor( ...$color_danger );
$pdf->cell( $checklist_width / 4, 10, 'Uzlīme', 'LRTB', 0, 'C', true );
$pdf->SetTextColor( ...$color_main );
$pdf->setLineWidth( $border_width_thick );
$pdf->SetDrawColor( ...$color_info );
$pdf->cell( $checklist_width / 4, 10, '', 'LRTB', 0, 'L', true );
$pdf->SetDrawColor( ...$accent_color );
$pdf->setLineWidth( $border_width_thin );

$pdf->SetFont( $main_font, '', $main_font_size_large );
// $pdf->cell( $checklist_width / 2, 10, $parbaude['parbaude_next_datums'], 'LRT', 0, 'L', true );
$y = $pdf->GetY();
$pdf->cell( $checklist_width / 8, $checklist_line_height, $lifts['lifts_uzstadisanas_gads'], 'RTB', 2, 'C', false );
$pdf->cell( $checklist_width / 8, $checklist_line_height, $lifts['lifts_celtspeja'], 'RTB', 0, 'C', false );
$x = $pdf->GetX();
$pdf->SetY( $y );
$pdf->SetX( $x );

$y = $pdf->GetY();
$pdf->cell( $checklist_width / 8, $checklist_line_height, $lifts['lifts_atrums'], 'LRTB', 2, 'C', true );

$pdf->cell( $checklist_width / 8, $checklist_line_height, $lifts['lifts_stavu_skaits'], 'LRTB', 0, 'C', true );
$x = $pdf->GetX();
$pdf->SetY( $y );
$pdf->SetX( $x );
$pdf->SetFont( $heading_font_bold, '', 13 );
$pdf->cell( $checklist_width / 4, 10, $parbaude['parbaude_lifts_reg_nr'], 'LRTB', 1, 'C', true );
$pdf->SetFont( $heading_font_bold, '', 12 );



// BEDRE


check_list_header( 'BEDRE' );


left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.9', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, 'B2', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.9', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_danger );
$pdf->SetFont( $main_font_bold, '', $main_font_size );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, 'S', 'B', 0, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size );
$pdf->setTextColor( ...$color_main );
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.2', 'LB', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, 'ВНУ', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '5.1', 'LB', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Image( __DIR__ . '/../img/trepes2.png', $x, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, '', 'B', 0, 'L', false );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '5.5', 'B', 0, 'L', true );
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'pretsv <==> buf', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_danger );
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'Nepietiekams', 'B', 1, 'L', true );
$pdf->setTextColor( ...$color_main );

left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.2', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, '', 'B', 0, 'L', true );
$pdf->Image( __DIR__ . '/../img/nostiepejs.png', $x, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_num_width, $checklist_line_height, '4.1', 'LB', 0, 'L', true );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, $padding . 'Zemsliekšņa aizsargs', 'B', 0, 'L', true );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '5.5', 'B', 0, 'L', true );
$pdf->cell( $checklist_right_col_two_width - 10, $checklist_line_height, 'Tapas', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '5.5', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_right_col_two_width + 10, $checklist_line_height, 'Atsperes', 'B', 1, 'L', true );
$pdf->Image( __DIR__ . '/../img/atsperes.png', $x + 15, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );

$pdf->SetFont( $main_font, '', $main_font_size );
left_padding();
$pdf->cell( $checklist_left_col_width, $checklist_line_height, '', '', 0, 'L', true );

check_list_divider();
$pdf->setFillColor( ...$color_success );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_right_col_width, $checklist_line_height, '5.3 Pretsvars                vādkurpes', '', 1, 'L', true );
$pdf->Image( __DIR__ . '/../img/brivkustiba.png', $x + 33, $y - 0.2, $checklist_line_height + 2, $checklist_line_height + 1 );
$pdf->setFillColor( 255, 255, 255 );


// KABĪNE
check_list_header( 'KABĪNE' );

// KABĪNE first row
left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.7', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_danger );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'ZVANS', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_main );
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.9', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_danger );
$pdf->SetFont( $main_font_bold, '', $main_font_size );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'STOP', 'B', 0, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size );
$pdf->setTextColor( ...$color_main );

check_list_divider();
$pdf->setFillColor( ...$color_success );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_right_col_width, $checklist_line_height, '5.3 Kabīne                   vādkurpes', '', 1, 'L', true );
$pdf->Image( __DIR__ . '/../img/brivkustiba.png', $x + 33, $y - 0.2, $checklist_line_height + 2, $checklist_line_height + 1 );
$pdf->setFillColor( 255, 255, 255 );



// KABĪNE second row
left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '4.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, 'Apdare', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '4.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, 'Grīda', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '4.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, 'Griesti', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '4.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, 'Durvis', 'B', 0, 'L', true );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.9', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_danger );
$pdf->cell( $checklist_right_col_one_width, $checklist_line_height, 'STOP jumtā', 'B', 1, 'L', true );
$pdf->setTextColor( ...$color_main );


// KABĪNE third row
left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.2', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'VA', 'B', 0, 'L', true );
$pdf->Image( __DIR__ . '/../img/paveles.png', $x + 5, $y, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_num_width, $checklist_line_height, '7.2', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_green );
$pdf->SetFont( $main_font_bold, '', $main_font_size );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, '<<REVERSE>>', 'B', 0, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size );
$pdf->setTextColor( ...$color_main );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.9', 'B', 0, 'L', true );
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'LKJ Vadības ierīce', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_danger );
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'nedarbojas', 'B', 1, 'C', true );
$pdf->setTextColor( ...$color_main );

// KABĪNE fourth row
left_padding();

$pdf->cell( $checklist_num_width, $checklist_line_height, '7.1', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_danger );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'DAS > 10mm', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_main );

$pdf->cell( $checklist_num_width, $checklist_line_height, '3.2', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->setTextColor( ...$color_danger );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, '   nepiet.', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_main );
$pdf->Image( __DIR__ . '/../img/lamp.png', $x, $y, $checklist_line_height - 1, $checklist_line_height - 1 );

check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.9', 'B', 0, 'L', true );
$pdf->cell( $checklist_right_col_one_width, $checklist_line_height, 'ВЛ (ķerājierīces sviras slēdzis)', 'B', 1, 'L', true );

// KABĪNE fifth row
left_padding();

$pdf->cell( $checklist_num_width, $checklist_line_height, '1.4', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, '   Lietošanas noteikumi', 'B', 0, 'L', true );
$pdf->Image( __DIR__ . '/../img/rules.png', $x, $y, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_num_width, $checklist_line_height, '4.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'Reģistrācijas rekviziti', 'B', 0, 'L', true );

check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.9', 'B', 0, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size_small );
$pdf->cell( $checklist_right_col_one_width, $checklist_line_height, 'СПК (Trišu atslabīnāšanas kontroles slēdzis)', 'B', 1, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size );

// KABĪNE fifth row
left_padding();

$pdf->cell( $checklist_num_width, $checklist_line_height, '4.1', '', 0, 'L', true );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'Avārijas dienesta dati', '', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '1.4', '', 0, 'L', true );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'Celtspēja', '', 0, 'L', true );

check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.9', '', 0, 'L', true );
$pdf->cell( $checklist_right_col_one_width, $checklist_line_height, 'LKD reduktors', '', 1, 'L', true );

// MAŠĪNTELPA
check_list_header( 'MAŠĪNTELPA' );

// MAŠĪNTELPA first row
left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '1.4', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width + $checklist_left_col_four_width, $checklist_line_height, 'Brīdinājums', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '', 'B', 0, 'R', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, $padding . '', 'B', 0, 'R', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, 'НКУ', 'BLT', 0, 'С', true );
$pdf->Image( __DIR__ . '/../img/kovriki.png', $x - 5, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, $padding . '', 'BTRL', 0, 'L', true );
check_list_divider();

$pdf->cell( $checklist_num_width, $checklist_line_height, '3.6', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'Bremžu atsp.', 'B', 0, 'L', true );
$pdf->Image( __DIR__ . '/../img/atsperes.png', $x + 22, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.6', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'Bremžu uzl.', 'B', 1, 'L', true );
$pdf->Image( __DIR__ . '/../img/bremzes.png', $x + 20, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );







// MAŠĪNTELPA second row
left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width + $checklist_left_col_four_width, $checklist_line_height, 'Lūka    1.4 Nekāpt', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '', 'B', 0, 'R', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, $padding . '', 'B', 0, 'R', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, 'ВУ', 'BLКT', 0, 'С', true );
$pdf->Image( __DIR__ . '/../img/kovriki.png', $x - 5, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, $padding . '', 'BTRL', 0, 'L', true );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.6', 'B', 0, 'L', true );
$pdf->cell( $checklist_right_col_one_width, $checklist_line_height, 'Rokas ritenis', 'B', 1, 'L', true );



// MAŠĪNTELPA third row


left_padding();
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.6', 'B', 0, 'L', true );
$pdf->setFillColor( ...$color_success );
$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'Eļļas noplūde', 'B', 0, 'C', true );
$pdf->setFillColor( 255, 255, 255 );
$pdf->cell( $checklist_left_col_two_width + $checklist_num_width, $checklist_line_height, '3.6 Mašīnas nol.', 'B', 0, 'L', true );
$pdf->Image( __DIR__ . '/../img/mitrums.png', $x + 10, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '9.0', 'B', 0, 'L', true );
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'Evakuācija', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.8', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, '', 'B', 1, 'L', true );
$pdf->Image( __DIR__ . '/../img/zeme.png', $x + 3, $y + 0.3, $checklist_line_height - 1, $checklist_line_height - 1 );

// MAŠĪNTELPA fourth row

left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width + $checklist_left_col_four_width, $checklist_line_height, 'El. shēma', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '', 'B', 0, 'R', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, $padding . '', 'B', 0, 'R', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, 'ОС', 'BLКT', 0, 'С', true );
$pdf->Image( __DIR__ . '/../img/manjetsi.png', $x - 5, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, $padding . '', 'BTRL', 0, 'L', true );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '', 'B', 0, 'L', true );
$pdf->cell( $checklist_right_col_one_width, $checklist_line_height, '', 'B', 1, 'L', true );


// MAŠĪNTELPA fifth row
left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_left_col_four_width + $checklist_left_col_four_width, $checklist_line_height, 'Evākuācijas instr.', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, '', 'B', 0, 'R', true );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, $padding . '', 'B', 0, 'R', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.1', 'B', 0, 'L', true );
$pdf->cell( $checklist_num_width, $checklist_line_height, 'КВШ', 'BLКT', 0, 'С', true );
$pdf->Image( __DIR__ . '/../img/manjetsi.png', $x - 5, $y + 0.5, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_left_col_four_width, $checklist_line_height, $padding . '', 'BTRL', 0, 'L', true );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.1', 'B', 0, 'L', true );
$pdf->SetTextColor( ...$color_danger );
$pdf->SetFont( $main_font_bold, '', $main_font_size );
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'Aprīkojums', 'B', 0, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size );
$pdf->SetTextColor( ...$color_main );
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.1', 'B', 0, 'L', true );
$pdf->SetTextColor( ...$color_danger );
$pdf->SetFont( $main_font_bold, '', $main_font_size );
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'Priekšmeti', 'B', 1, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size );
$pdf->SetTextColor( ...$color_main );


// MAŠĪNTELPA fifth row
left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '', '', 0, 'L', true );
$pdf->cell( $checklist_left_col_one_width, $checklist_line_height, '', '', 0, 'L', true );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '', '', 0, 'L', true );
$pdf->cell( $checklist_right_col_one_width, $checklist_line_height, '', '', 1, 'L', true );

// MAŠĪNTELPA sixth row

left_padding();

$pdf->cell( $checklist_num_width, $checklist_line_height, '', 'B', 0, 'L', true );
$pdf->SetFont( $main_font_bold, '', $main_font_size );
$pdf->cell( $checklist_left_col_one_width, $checklist_line_height, '9.0 Apgaimojumi', 'B', 0, 'C', true );
$pdf->SetFont( $main_font, '', $main_font_size );
check_list_divider();

$pdf->cell( $checklist_num_width, $checklist_line_height, '3.6', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'Vādskr.', 'B', 0, 'L', false );
$pdf->Image( __DIR__ . '/../img/skriemelis.png', $x + 13, $y, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->Image( __DIR__ . '/../img/skriemelis_nevienmerigs.png', $x + 25, $y, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_num_width, $checklist_line_height, '2.2', 'B', 0, 'L', true );
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'Nesošās troses', 'B', 1, 'L', true );



left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '8.0', 'B', 0, 'L', true );

$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'Mašīntelpas apg.   ', 'B', 0, 'R', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->setTextColor( ...$color_danger );
$pdf->cell( $checklist_left_col_two_width + $checklist_num_width, $checklist_line_height, 'Nav   Nepietiek', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_main );
$pdf->Image( __DIR__ . '/../img/lamp.png', $x - 6, $y, $checklist_line_height - 1, $checklist_line_height - 1 );


check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.2', 'B', 0, 'L', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'ОС', 'B', 0, 'L', true );
$pdf->Image( __DIR__ . '/../img/os.png', $x + 13, $y, $checklist_line_height - 1, $checklist_line_height - 1 );
$pdf->cell( $checklist_num_width, $checklist_line_height, '2.2', 'B', 0, 'L', true );
$pdf->cell( $checklist_right_col_two_width, $checklist_line_height, 'ОС trose', 'B', 1, 'L', true );



left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '8.0', '', 0, 'L', true );

$pdf->cell( $checklist_left_col_two_width, $checklist_line_height, 'Šahtas apg.   ', '', 0, 'R', true );
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->setTextColor( ...$color_danger );
$pdf->cell( $checklist_left_col_two_width + $checklist_num_width, $checklist_line_height, 'Nav   Nepietiek', '', 0, 'L', true );
$pdf->setTextColor( ...$color_main );
$pdf->Image( __DIR__ . '/../img/lamp.png', $x - 6, $y, $checklist_line_height - 1, $checklist_line_height - 1 );
check_list_divider();
$pdf->cell( $checklist_num_width, $checklist_line_height, '3.6', '', 0, 'L', true );
$pdf->cell( $checklist_right_col_one_width, $checklist_line_height, 'Mašīnas reduktors nolietots', '', 1, 'L', true );


check_list_header( 'НКУ' );
// НКУ


left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '9.0', 'B', 0, 'L', true );
$pdf->cell( ( $checklist_width - $checklist_num_width ) / 4, $checklist_line_height, 'Kontaktori', 'B', 0, 'L', true );
$pdf->SetFont( $main_font_bold, '', $main_font_size );
$pdf->cell( ( $checklist_width - $checklist_num_width ) / 4 * 3, $checklist_line_height, 'КН      КВ      КБ      КМ', 'B', 1, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size );

left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '9.0', 'B', 0, 'L', true );
$pdf->cell( ( $checklist_width - $checklist_num_width ) / 4, $checklist_line_height, 'Aizsardzības aparāti', 'B', 0, 'L', true );

$pdf->SetFont( $main_font_bold, '', $main_font_size );
$pdf->cell( ( $checklist_width - $checklist_num_width ) / 4 * 3, $checklist_line_height, 'ВА1        ВА2        ВА3', 'B', 1, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size );

left_padding();
$pdf->cell( $checklist_num_width, $checklist_line_height, '9.0', 'B', 0, 'L', true );
$pdf->cell( ( $checklist_width - $checklist_num_width ) / 4, $checklist_line_height, 'El. stacijas aprīkojums', 'B', 0, 'L', true );
$pdf->setTextColor( ...$color_danger );
$pdf->SetFont( $main_font_bold, '', $main_font_size );
$pdf->cell( ( $checklist_width - $checklist_num_width ) / 4 * 3, $checklist_line_height, 'nolietots', 'B', 1, 'L', true );
$pdf->SetFont( $main_font, '', $main_font_size );
$pdf->setTextColor( ...$color_main );

left_padding();
$pdf->cell( $checklist_width, $checklist_line_height, 'ВА1 - силовая цепь  ВА2 - цепь электропривода дверей ВА3 - цепь управления', 'B', 1, 'C', true );

left_padding();
$pdf->cell( $checklist_width, $checklist_line_height, '', 'B', 1, 'L', true );


function break_long_line( $long_line, $max_line_len = 115 ) {

	$array_of_sentences = explode( '. ', $long_line );
	$len                = count( $array_of_sentences );
	$compact_arr[]      = $array_of_sentences[0] . '.';
	$current            = 0;
	for ( $i = 1; $i < $len; $i++ ) {
		if ( mb_strlen( ( $compact_arr[ $current ] ?? '' ) . $array_of_sentences[ $i ] ) <= $max_line_len ) {
			$compact_arr[ $current ] = ( ( $compact_arr[ $current ] ?? '' ) . ' ' . $array_of_sentences[ $i ] . '.' );
		} else {
			++$current;
			$compact_arr[ $current ] = ( ( $compact_arr[ $current ] ?? '' ) . ' ' . $array_of_sentences[ $i ] . '.' );
		}
	}
	return $compact_arr;
}

if ( ( count( $prp_all ) ) >= 12 ) {
	$pdf->SetFont( 'TimesNewRomanRegular', '', 8 );
	foreach ( $prp_all as $res_index => $res_res ) {
		left_padding();
		if ( in_array( $res_res, $prp_2, true ) || in_array( $res_res, $prp_3, true ) ) {
			$pdf->SetFont( 'TimesNewRomanBold', '', 8 );
			$pdf->multicell( 0, 3, $res_index . ' - ' . $res_res, 'B', 'L', true );
			$pdf->SetFont( 'TimesNewRomanRegular', '', 8 );
		} else {
			$pdf->multicell( $checklist_width, 3, $res_index . ' - ' . $res_res, 'B', 'L', true );
		}
	}
} else {
	$pdf->SetFont( 'TimesNewRomanRegular', '', 9 );
	foreach ( $prp_all as $res_index => $res_res ) {
		left_padding();
		if ( in_array( $res_res, $prp_2, true ) || in_array( $res_res, $prp_3, true ) ) {
			$pdf->SetFont( 'TimesNewRomanBold', '', 9 );
			$pdf->multicell( $checklist_width, 4, $res_index . ' - ' . $res_res, 'B', 'L', true );
			$pdf->SetFont( 'TimesNewRomanRegular', '', 9 );
		} elseif ( strlen( $res_res ) > 130 ) {

			$breaked_arr = break_long_line( $res_res, 130 );

			$breaked_arr_size = count( $breaked_arr );
			for ( $i = 0; $i < $breaked_arr_size; $i++ ) {
				if ( $i !== 0 ) {
					left_padding();
					$pdf->multicell( $checklist_width, 4, '       ' . $breaked_arr[ $i ], 'B', 'L', true );
				} else {

					$pdf->multicell( $checklist_width, 4, $res_index . ' - ' . $breaked_arr[ $i ], 'B', 'L', true );
				}
			}
		} else {
			$pdf->multicell( $checklist_width, 4, gettype( $res_index ) === 'integer' ? ( '     ' . $res_res ) : ( $res_index . ' - ' . $res_res ), 'B', 'L', true );
		}
	}
	$pdf->SetFont( 'TimesNewRomanBold', '', 9 );
	left_padding();
	$pdf->multicell( $checklist_width, 4, '', 'B', 'L', true );
	left_padding();
	$pdf->multicell( $checklist_width, 4, $parbaude['piezimes'], 'B', 'L', true );
	$pdf->SetFont( 'TimesNewRomanRegular', '', 9 );
	$prp_all_len = count( $prp_all );
	for ( $i = 0; $i < 9 - $prp_all_len; $i++ ) {
		left_padding();
		$pdf->multicell( $checklist_width, 4, '', 'B', 'L', true );
	}
}
$footer_notes = array(
	'Sprauga š. durvīs - aiļu apmalēs > 10 mm.',
	'Sprauga starp š. durvju vertnēm > 10mm.',
	'Izsaukuma poga ir bojāta.',
	'Nolietoti izsaukuma aparāti.',
	'Šahtas durvju blīvējums ir bojāts',
	'Durvis ir bojātas.',
	'Līmeņu starpība > 50mm.',

);
$stavu_skaits = $lifts['lifts_stavu_skaits'] ? (int) $lifts['lifts_stavu_skaits'] : '12';

left_padding();
$pdf->cell( 0, 5, '', '', 1, 'L', true );

foreach ( $footer_notes as $index => $note ) {
	if ( 0 === $index % 2 ) {
		$pdf->setFillColor( ...$accent_color_light );
	} else {
		$pdf->setFillColor( 255, 255, 255 );

	}
	left_padding();
	for ( $i = 1; $i <= $stavu_skaits; $i++ ) {
		$pdf->cell( 7, $checklist_line_height, $i, '', 0, 'L', true );
	}
	$pdf->SetFont( $main_font_bold, '', $main_font_size );

	$pdf->cell( $checklist_width - 7 * $stavu_skaits, $checklist_line_height, $note, '', 1, 'L', true );
	$pdf->SetFont( $main_font, '', $main_font_size );
}




// $pdf->output( 'I', 'test.pdf', true );


$output_date = implode( '.', array_reverse( explode( '.', $parbaude['parbaude_next_datums'] ) ) );
$pdf->output( 'I', $parbaude['parbaude_next_datums'] . '_' . $lifts['lifts_reg_nr'] . '_' . $parbaude['parbaude_nr'] . '_' . $lifts_parbaudes_adrese_short . '.pdf', true );
