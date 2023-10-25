<?php
namespace Model;
use App_Core\Instance;
class PlanModel extends Instance{
    public function create(string $title,string $start_date,string $end_date,string $description,int $user_id):int|bool{
        $id=$this->db->insert("plans","title,start_date,end_date,description,user_id",[$title,$start_date,$end_date,$description,$user_id]);
        return $id!=null ? $id : false;
    }
    public function show($name,$clause){
        $data=$this->db->show("plans",["*"],["$clause"=> $name]);
        return $data;
    }
    public function remove($id){
        $data=$this->db->delete("plans",["id"=> $id]);
        return $data;
    }
}