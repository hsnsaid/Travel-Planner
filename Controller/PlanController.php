<?php
declare(strict_types=1);
namespace Controller;
class PlanController{
    use \App_Core\SessionManger;
    public function file($file){
        $view = new \Views\Views($file);
    }
    public function add($file){
        $this->isAuthentified();
        $plan=new \Model\PlanModel();
        $id=$plan->create($_POST['title'],$_POST['start_date'],$_POST['end_date'],$_POST['description'],$_SESSION['user_id']);
        $view = new \Views\Views($file);
    }
    public function show($file){
        $this->isAuthentified();
        $plan=new \Model\PlanModel();
        $data=$plan->show($_SESSION['user_id']);
        $view = new \Views\Views($file,["data"=>$data]);
    }
}