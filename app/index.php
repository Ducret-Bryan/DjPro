<?php
require_once('src/controller/homeController.php');
require_once('src/controller/criteriaController.php');
require_once('src/controller/djsListController.php');

try {
    if (isset($_GET['action']) && !$_GET['action'] == '') {
        $action = $_GET['action'];

        switch ($action) {
            case 'Critères':
                criteriaPage();
                break;
            case 'NosDjs':
                djsListController();
                break;
            default:
                header('Location: /');
        }
    } else {
        homePage();
    }
} catch (Exception $error) {
}
