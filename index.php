<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
use App_Core\Route;
use App_Core\App;
use App_Core\Config;
use Controller\UserController;
use Controller\PlanController;
use Controller\PropertieController;
use Controller\LinkController;

$route=new Route();
$route->get("/project/Travel_Planner/",[UserController::class,"file","signin"]);
$route->get("/project/Travel_Planner/signin.html",[UserController::class,"file","signin"]);
$route->get("/project/Travel_Planner/login.html",[UserController::class,"file","login"]);
$route->get("/project/Travel_Planner/Home.html",[PlanController::class,"show","Home"]);
$route->get("/project/Travel_Planner/plan.html",[UserController::class,"file","plan"]);
$route->get("/project/Travel_Planner/search.html",[UserController::class,"file","search"]);
$route->get("/project/Travel_Planner/guides.html",[UserController::class,"file","guides"]);
$route->get("/project/Travel_Planner/logout.html",[UserController::class,"logout"]);
$route->get("/project/Travel_Planner/delete.html",[PlanController::class,"remove","Home"]);
$route->get("/project/Travel_Planner/fillter.html",[PropertieController::class,"fillter","fillter"]);
$route->get("/project/Travel_Planner/link.html",[LinkController::class,"show","link"]);
$route->get("/project/Travel_Planner/detail.html",[LinkController::class,"detail","detail"]);

$route->post("/project/Travel_Planner/",[UserController::class,"create","Home"]);
$route->post("/project/Travel_Planner/signin.html",[UserController::class,"create","Home"]);
$route->post("/project/Travel_Planner/login.html",[UserController::class,"check","Home"]);
$route->post("/project/Travel_Planner/plan.html",[PlanController::class,"add","plan"]);
$route->post("/project/Travel_Planner/search.html",[PropertieController::class,"search","searching"]);
$route->post("/project/Travel_Planner/link.html",[LinkController::class,"add","Home"]);

$route->get("/project/Travel_Planner/Admin_logout.html",[UserController::class,"logout","Admin"]);
$route->get("/project/Travel_Planner/Admin",[UserController::class,"file","Admin_login"]);
$route->get("/project/Travel_Planner/Admin_login.html",[UserController::class,"file","Admin_management"]);
$route->get("/project/Travel_Planner/Admin_management.html",[PropertieController::class,"show","Admin_management"]);
$route->get("/project/Travel_Planner/Admin_add_plan.html",[UserController::class,"file","Admin_add_plan"]);
$route->get("/project/Travel_Planner/Admin_add_properties.html",[UserController::class,"file","Admin_add_properties"]);
$route->get("/project/Travel_Planner/Admin_delete.html",[PropertieController::class,"remove","Admin_management"]);

$route->post("/project/Travel_Planner/Admin_add_plan.html",[PlanController::class,"add","Admin_add_plan"]);
$route->post("/project/Travel_Planner/Admin_add_properties.html",[PropertieController::class,"add","Admin_add_properties"]);
$route->post("/project/Travel_Planner/Admin",[UserController::class,"check","Admin_management"]);
$route->post("/project/Travel_Planner/Admin_login.html",[UserController::class,"check","Admin_management"]);


(new App($route,
["uri" =>$_SERVER["REQUEST_URI"] ,"method"=> $_SERVER["REQUEST_METHOD"]]
,new Config($_ENV)))->run();