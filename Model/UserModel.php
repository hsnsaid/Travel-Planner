<?php
namespace Model;
use App_Core\Instance;
class UserModel extends Instance{
    public function create(string $email,string $password,string $type):int|bool{
        $result=$this->db->show("user",["*"],["email"=>$email]);
        if(!$result){
        $id=$this->db->insert("user","email,password,type",[$email,$password,$type]);
        return $id;
        }  
        return false;
    }
    public function check(string $email,string $password,string $type){
        $result=$this->db->show("user",["id"],["password"=>$password,"email"=>$email,"type"=>$type]);
        return $result[0]['id'];
    }
}