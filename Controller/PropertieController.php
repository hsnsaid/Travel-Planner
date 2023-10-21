<?php
declare(strict_types=1);
namespace Controller;
class PropertieController{
    use \App_Core\SessionManger;
    public function file($file){
        $view = new \Views\Views($file);
    }
    public function show($file){
        $this->isAuthentified();
        $propertie=new \Model\PropertieModel();
        $data=$propertie->display();
        $view = new \Views\Views($file,["data"=>$data]);
    }
    public function search($file){
        $this->isAuthentified();
        $propertie=new \Model\PropertieModel();
        $search=$propertie->show($_POST['name'],"destination");
        $view = new \Views\Views($file,["search"=>$search]);
    }
    public function fillter($file){
        $this->isAuthentified();
        $propertie=new \Model\PropertieModel();
        $search=$propertie->show($_GET['name'],"destination");
        $fillter=$propertie->show($_GET['fillter'],"type");
        $view = new \Views\Views($file,["search"=>$search,"fillter"=>$fillter]);
    }
    public function add($file){
        $this->isAuthentified();
        $propertie=new \Model\PropertieModel();
        $id=$propertie->create($_POST['name'],$_POST['type'],$_POST['destination'],$_POST['Price'],$_SESSION['user_id']);
        $view = new \Views\Views($file);
    }
    public function remove($file){
        $this->isAuthentified();
        $propertie=new \Model\PropertieModel();
        $data=$propertie->remove($_GET['id']);
        header("location: $file.html");
    }

}