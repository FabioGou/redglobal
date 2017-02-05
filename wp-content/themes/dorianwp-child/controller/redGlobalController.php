<?php

if ( !defined('ABSPATH')){
    $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
    require_once( $parse_uri[0] . 'wp-load.php' );
}

//require_once( ABSPATH . '/wp-includes/pluggable.php' );

$controller = new FormularioController;

class FormularioController
{
    public function __construct()
    {

        $action = $_POST['action'];

        call_user_func([$this, $action]);
    }


    public function cep()
    {
        $cep = $_POST['cep'];

        $resultado = @file_get_contents('http://api.postmon.com.br/v1/cep/'.urlencode($cep));

//        $resultado = ! $resultado ? false : json_decode($resultado);

//        echo $resultado;die;

        echo $resultado;
    }



}