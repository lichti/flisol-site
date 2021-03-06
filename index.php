<?php
/**
 * index.php
 *
 * Script responsável por carregar as páginas.
 *
 * Aqui está também a configuração do site.
 *
 * @author GCCSD <http://gccsd.com.br>
 */

define('URL', 'http://flisol/');

// Definindo a página a ser exibida
if (isset($_GET['pagina'])) {
    switch ($_GET['pagina']) {
        case 'principal':
            $pagina = 'principal.php';
            $titulo = 'Flisol Santos 2011';
            break;
        case 'programacao':
            $pagina = 'programacao.php';
            $titulo = 'Programação - Flisol Santos 2011';
            break;
        case 'data_hora':
            $pagina = 'data_hora.php';
            $titulo = 'Onde e Quando - Flisol Santos 2011';
            break;
        case 'prepare-se':
            $pagina = 'prepare-se.php';
            $titulo = 'Prepare-se! - Flisol Santos 2011';
            break;
        case 'organizadores':
            $pagina = 'organizadores.php';
            $titulo = 'Organizadores - Flisol Santos 2011';
            break;
        case 'fotos':
            $pagina = 'fotos.php';
            $titulo = 'Fotos - Flisol Santos 2011';
            break;
        default:
            $pagina = '404.php';
            $titulo = 'Ops! Página não encontrada!';
            break;
    }
}
else {
    $pagina = 'principal.php';
    $titulo = 'Flisol Santos 2011';
}

include('template.php');

/* Fim do arquivo index.php */
