<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/ManageListController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);


// Manage List
$route->get("/managelist", [ManageListController::class, 'index']);


$route->route();