<?php
require_once('src/controller/homeController.php');
require_once('src/controller/criteriaController.php');

try {
    if (isset($_GET['action']) && !$_GET['action'] == '') {
        $action = $_GET['action'];

        switch ($action) {
            case 'criteria':
                criteriaPage();
                break;
            default:
                header('Location: /');
        }
    } else {
        homePage();
    }
} catch (Exception $error) {
}
