<?php
class Loaichi_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    	$this->load->database();
    }
   
    public function List_loaichi(){
        $this->db->select("*");
        $query=$this->db->get("loaichi");
        return $query->result_array();
    }
     public function Details_loaichi($id){
        $this->db->select("*");
        $this->db->where("ID_LC",$id);
        $query=$this->db->get("loaichi");
        return $query->row_array();
    }
    public function Insert_loaichi($data)
    {
        return $this->db->insert("loaichi",$data);
    }
    public function Update_loaichi($data,$id){
        $this->db->where("ID_LC",$id);
        $this->db->update("loaichi",$data);
    }
    public function Delete_loaichi($id){
        $this->db->where("ID_LC",$id);
        $this->db->delete("loaichi");
    }
}
?>
