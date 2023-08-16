<?php

/**
 * Exemplo de documentação
 *
 * Exemplo de descrição
 *
 * @link https://developer.wordpress.org/coding-standards/inline-documentation-standards/php/#6-file-headers
 *
 * @package Testing
 * @subpackage Component
 * @since 1.0
 */

// Adicionando um comentário para teste
require 'vendor/autoload.php';


function myTest( $abc ) {
	if ( 'xyz' == $abc ) {
		echo 'xyz';
	} else {
		echo esc_html( $abc );
	}
}
