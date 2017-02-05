<?php

/***  Enqueue child theme stylesheet ***/

function dorian_edge_child_enqueue_style() {
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
	
	if(is_page('account-teste')){
	    wp_enqueue_style('ibootstrap', get_stylesheet_directory_uri() . '/assets/css/ibootstrap.css');
        wp_enqueue_style( 'red-fa', plugins_url() . '/red-aguarde/assets/css/font-awesome.min.css' );
        wp_enqueue_style( 'red-boot', plugins_url() . '/red-aguarde/assets/css/bootstrap.css' );
        wp_enqueue_style( 'red-chk', get_stylesheet_directory_uri() . '/assets/css/build.css' );
        wp_enqueue_style('redForm-css', get_stylesheet_directory_uri() . '/assets/css/redForm.css');

        wp_enqueue_script( 'redForm-js', get_stylesheet_directory_uri() . '/assets/js/redForm.js', array(), '', true );
        wp_enqueue_script( 'mask-js', get_stylesheet_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array(), '', true );

        seta_caminho_partial();
        controllerUrl();

	}
}
add_action( 'wp_enqueue_scripts', 'dorian_edge_child_enqueue_style', 11);


function seta_caminho_partial() {
    ?>
    <script type="text/javascript">
        var caminho_partial = '<?php echo get_stylesheet_directory_uri() . '/partials/'; ?>';
    </script>
    <?php
}

function controllerUrl() {
    ?>
    <script type="text/javascript">
        var controller_url = '<?php echo get_stylesheet_directory_uri() . '/controller/redGlobalController.php'; ?>';
    </script>
    <?php
}


/**
 * Shortecode para pessoa Juridica do formulario
 * @return string
 */
function makeJuridica(){
    $partial = '/partials/formulario/juridica';
    ob_start();
    get_template_Part($partial, 1 );
    return ob_get_clean();
}

add_shortcode('juridica', 'makeJuridica');


/**
 * Shortecode para pessoa Fisica do formulario
 * @return string
 */
function makeFisica(){
    $partial = '/partials/formulario/fisica';
    ob_start();
    get_template_Part($partial, 1 );
    return ob_get_clean();
}

add_shortcode('fisica', 'makeFisica');