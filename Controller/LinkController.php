<?php
declare(strict_types=1);
namespace Controller;
class LinkController{
    use \App_Core\SessionManger;
    public function file($file){
        $view = new \Views\Views($file);
    }
    public function show($file){
        $this->isAuthentified();
        $plan = new \Model\PlanModel();
        $option=$plan->show($_SESSION['user_id'],"user_id");
        $propertie= new \Model\PropertieModel();
        $name=$propertie->show($_GET['id'],"id");
        $view = new \Views\Views($file,["name"=>$name,"option"=>$option]);
    }
    public function add($file){
        $this->isAuthentified();
        $link=new \Model\LinkModel();
        $plan = new \Model\PlanModel();
        $plan_id=$plan->show($_POST['title'],"title");
        $link->create($plan_id[0]['id'],$_POST['propertie_id'],$_SESSION['user_id']);
        $view = new \Views\Views($file);
    }
    public function detail($file){
        $this->isAuthentified();
        $link=new \Model\LinkModel();
        $plan = new \Model\PlanModel();
        $plan=$plan->show($_GET['id'],"id");
        $propertie=$link->show($_GET['id'],$_SESSION['user_id']);
        $view = new \Views\Views($file,["data"=>$propertie,"plan"=>$plan]);
    }
}