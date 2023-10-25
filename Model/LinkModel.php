<?php
namespace Model;
use App_Core\Instance;
class LinkModel extends Instance{
    public function create(int $id_plans,string $id_properties,int $user_id):int|bool{
        $id=$this->db->insert("link","id_plans,id_properties,user_id",[$id_plans,$id_properties,$user_id]);
        return $id!=null ? $id : false;
    }
    public function show(string $id_plans,int $user_id){
        $result=$this->db->prepare("Select properties.name,properties.type FROM properties JOIN link JOIN plans JOIN user WHERE link.user_id=user.id AND link.id_properties=properties.id AND link.id_plans=plans.id AND link.user_id=$user_id AND link.id_plans=$id_plans");
        $result->execute();
        $data=$result->FetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }
    public function remove($name,$clause){
        $data=$this->db->delete("link",["$clause"=> $name]);
        return $data;
    }
}