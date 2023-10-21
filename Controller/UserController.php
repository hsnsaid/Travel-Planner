<?php
declare(strict_types=1);
namespace Controller;
class UserController{
    use \App_Core\SessionManger;
    public function file($file){
        $view = new \Views\Views($file);
    }
    public function create($file){
        if(\App_Core\Validator::Email($_POST['email'],8,50) && \App_Core\Validator::Password($_POST['password'],6,20)){
            $user=new \Model\UserModel();
            $id=$user->create($_POST['email'],$_POST['password']);
            if($id==false){
                $view = new \Views\Views("404");
            }
            session_start();
            $_SESSION['user_id']=$id;
            $_SESSION['status']=true;
            header("Location: $file.html");
        }
    }
    public function check($file){
        $user=new \Model\UserModel();
        $id=$user->check($_POST['email'],$_POST['password'],$_POST['type']);
        if($id==false){
            $view = new \Views\Views("404");
            exit();
        }
        session_start();
        $_SESSION['user_id']=$id;
        $_SESSION['status']=true;
        header("Location: $file.html");    
    }
    public function show($file){
        $this->isAuthentified();
        $view = new \Views\Views($file);
    }
    public function add($file){
        $note=new \Model\Model();
        $id=$note->add();
        $view = new \Views\Views($file);
    }
    public function delete($file){
        $note=new \Model\Model();
        $note->delete($_GET['id']);
        $data=$note->show($_SESSION['user_id']);
        $category=$note->show_category($_SESSION['user_id']);
        $view = new \Views\Views($file,["category"=>$category,"data"=>$data]);
    }
    public function update($file){
        session_start();
        if(!isset($_SESSION['status'])){
            header("Location: signin.html");    
            exit();
        }
        else{
        $note=new \Model\Model();
        $data=$note->update($_GET['id'],$_GET['status']);
        $data=$note->show($_SESSION['user_id']);
        $category=$note->show_category($_SESSION['user_id']);
        $view = new \Views\Views($file,["category"=>$category,"data"=>$data]);
        }
    }
	public function logout($file=""){
		session_start();
		session_unset();
		session_destroy();
		header("Location: ./$file");
		exit;
	}
}