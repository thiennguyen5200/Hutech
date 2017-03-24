<?php
class Loaithu_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    	$this->load->database();
    }
   
    public function List_loaithu(){
        $this->db->select("*");
        $query=$this->db->get("loaithu");
        return $query->result_array();
    }
     public function Details_loaithu($id){
        $this->db->select("*");
        $this->db->where("ID_LT",$id);              
        $query=$this->db->get("loaithu");
        return $query->row_array();
    }
    public function Insert_loaithu($data)
    {
        return $this->db->insert("loaithu",$data);
    }
    public function Update_loaithu($data,$id){
        $this->db->where("ID_LT",$id);
        $this->db->update("loaithu",$data);
    }
    public function Delete_loaithu($id){
        $this->db->where("ID_LT",$id);
        $this->db->delete("loaithu");
    }
}
?>
