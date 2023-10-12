<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
use App_Core\Route;
use App_Core\App;
use App_Core\Config;
use Controller\UserController;
use Controller\PlanController;

$route=new Route();
$route->get("/project/Travel_Planner/",[UserController::class,"file","signin"]);
$route->get("/project/Travel_Planner/signin.html",[UserController::class,"file","signin"]);
$route->get("/project/Travel_Planner/login.html",[UserController::class,"file","login"]);
$route->get("/project/Travel_Planner/Home.html",[PlanController::class,"show","Home"]);
$route->get("/project/Travel_Planner/plan.html",[UserController::class,"file","plan"]);
$route->get("/project/Travel_Planner/search.html",[UserController::class,"file","search"]);
$route->get("/project/Travel_Planner/guides.html",[UserController::class,"file","guides"]);
$route->get("/project/Travel_Planner/logout.html",[UserController::class,"logout"]);

$route->post("/project/Travel_Planner/",[UserController::class,"create","Home"]);
$route->post("/project/Travel_Planner/signin.html",[UserController::class,"create","Home"]);
$route->post("/project/Travel_Planner/login.html",[UserController::class,"check","Home"]);
$route->post("/project/Travel_Planner/plan.html",[PlanController::class,"add","plan"]);

$route->get("/project/Travel_Planner/Admin",[UserController::class,"file","admin_login"]);
$route->get("/project/Travel_Planner/Admin/login.html",[UserController::class,"file","admin_login"]);
$route->get("/project/Travel_Planner/Admin/admin_Home.html",[UserController::class,"show","admin_Home"]);
$route->post("/project/Travel_Planner/Admin",[UserController::class,"check","admin_Home"]);
$route->post("/project/Travel_Planner/Admin/login.html",[UserController::class,"check","Home"]);


(new App($route,
["uri" =>$_SERVER["REQUEST_URI"] ,"method"=> $_SERVER["REQUEST_METHOD"]]
,new Config($_ENV)))->run();