<?php
require_once('src/controller/homeController.php');
require_once('src/controller/criteriaController.php');
require_once('src/controller/djsListController.php');
require_once('src/controller/galleryController.php');
require_once('src/controller/eventController.php');
require_once('src/controller/contactController.php');

try {
    if (isset($_GET['action']) && !$_GET['action'] == '') {
        $action = strtolower(removeAccent($_GET['action']));

        switch ($action) {
            case 'accueil':
                homePage();
                break;
            case 'criteres':
                criteriaPage();
                break;
            case 'nosdjs':
                djsListController();
                break;
            case 'galerie':
                galleryPage();
                break;
            case 'evenement':
                eventPage();
                break;
            case 'contact':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    treatmentForm();
                } else
                    contactPage();
                break;
            default:
                header('Location: ?action=accueil');
        }
    } else {
        header('Location: ?action=accueil');
    }
} catch (Exception $error) {
}


function removeAccent($text)
{
    $trns = array(
        'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a',
        'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A',
        'ß' => 'B', 'ç' => 'c', 'Ç' => 'C',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e',
        'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E',
        'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
        'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
        'ñ' => 'n', 'Ñ' => 'N',
        'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o',
        'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O',
        'š' => 's', 'Š' => 'S',
        'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u',
        'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U',
        'ý' => 'y', 'Ý' => 'Y', 'ž' => 'z', 'Ž' => 'Z'
    );
    return strtr($text, $trns);
}
