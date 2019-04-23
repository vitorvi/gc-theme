<?php

//======================= ADICIONA  A OPTIONS
acf_add_options_page('Cursos');
acf_add_options_page('Footer');
acf_add_options_page('Geral');
acf_add_options_page('Sobre');

if(function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
  add_image_size( $name = 'img_conteudo', $width = 1000, $crop = false );
  add_image_size( $name = 'img_destak', $width = 1250, $crop = false );
  add_image_size( $name = 'img_destak_min', $width = 560, $height = 280, $crop = true );
}

/** Paginação */
function pagination_funtion() {

global $wp_query;
$total = $wp_query->max_num_pages;

if ( $total > 1 )  {
    if ( !$current_page = get_query_var('paged') )
        $current_page = 1;

        $big = 999999999;

        $permalink_structure = get_option('permalink_structure');
        $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => $format,
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 4,
            'type' => 'plain',
            'paged' => $paged,
            'prev_text' => ('Anterior'),
      'next_text' => ('Próxima')
        ));
    }

}
/** END Paginação */

/**Quebra de Texto**/

function limita_caracteres($texto, $limite, $quebra = true){
   $tamanho = strlen($texto);
   if($tamanho <= $limite){ //Verifica se o tamanho do texto é menor ou igual ao limite
      $novo_texto = $texto;
   }else{ // Se o tamanho do texto for maior que o limite
      if($quebra == true){ // Verifica a opção de quebrar o texto
         $novo_texto = trim(substr($texto, 0, $limite))."...";
      }else{ // Se não, corta $texto na última palavra antes do limite
         $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o útlimo espaço antes de $limite
         $novo_texto = trim(substr($texto, 0, $ultimo_espaco))."..."; // Corta o $texto até a posição localizada
      }
   }
   return $novo_texto; // Retorna o valor formatado
}
/** **/

add_filter('show_admin_bar', '__return_false');

function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Flag',
        'id'            => 'flag',
        'before_widget' => '<li class="flag">',
        'after_widget'  => '</li>',
        'before_title'  => '<span class="hidden">',
        'after_title'   => '</span>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
  'primary' => __( 'Primary Menu', '_s' ),
  'secondary' => __( 'Secondary Menu', '_s' )
) );

function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyBZoqXnvE_7G_9PFrT2RuLZt1jMW3T6zGI');
}

add_action('acf/init', 'my_acf_init');

function hs_image_editor_default_to_gd( $editors ) {
$gd_editor = 'WP_Image_Editor_GD';
$editors = array_diff( $editors, array( $gd_editor ) );
array_unshift( $editors, $gd_editor );
return $editors;
}
add_filter( 'wp_image_editors', 'hs_image_editor_default_to_gd' );

function my_custom_file_name( $filename ) {

    $info = pathinfo( $filename );
    $ext = empty( $info['extension'] ) ? '' : '.' . $info['extension'];
    $name = basename( $filename, $ext );
    if ( isset( $_REQUEST['post_id'] ) && is_numeric( $_REQUEST['post_id'] ) ) {
        $postObj = get_post( $_REQUEST['post_id'] );
        $postSlug = sanitize_title( $postObj->post_title );
    }
    if(isset($postSlug) && !empty($postSlug) && $postSlug != 'rascunho-automatico')
        $finalFileName = $postSlug; // File name will be the same as the post slug.
    else
        $finalFileName = sanitize_title ($name ); // File name will be the same as the image file name, but sanitized.
    return $finalFileName . $ext;

}
add_filter( 'sanitize_file_name', 'my_custom_file_name', 100 );
