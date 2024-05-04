<?php
require_once('src/controller/homeController.php');

try {
    if (isset($_GET['action']) && $_GET['action'] == '') {
    } else {
        homePage();
    }
} catch (Exception $error) {
}
