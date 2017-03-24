<?php
class Thu_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    	$this->load->database();
    }
   
    public function Listthu(){
        $this->db->select("*");
        $query=$this->db->get("thu");
        return $query->result_array();
    }
     public function Details_thu($id){
        $this->db->select("*");
        $this->db->where("ID_T",$id);
        $query=$this->db->get("thu");
        return $query->row_array();
    }
    public function Insert_thu($data)
    {
        return $this->db->insert("thu",$data);
    }
    public function Update_thu($data,$id){
        $this->db->where("ID_T",$id);
        $this->db->update("thu",$data);
    }
    public function Delete_thu($id){
        $this->db->where("ID_T",$id);
        $this->db->delete("thu");
    }
}
?>
