<?php
namespace Model;
use App_Core\Instance;
class PropertieModel extends Instance{
    public function show($name,$clause){
        $data=$this->db->show("properties",["*"],["$clause"=> $name]);
        return $data;
    }
    public function display(){
        $val=$this->db->prepare("Select * from properties");
        $val->execute();
        $data=$val->FetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }
    public function create(string $name,string $type,string $destination,string $Price,int $id):int|bool{
        $id=$this->db->insert("properties","name,type,destination,Price,id",[$name,$type,$destination,$Price,$id]);
        return $id!=null ? $id : false;
    }
    public function remove($id){
        $data=$this->db->delete("properties",["id"=> $id]);
        return $data;
    }
}