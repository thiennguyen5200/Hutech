<?php
class Chi_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    	$this->load->database();
    }
   
    public function Listchi(){
        $this->db->select("*");
        $query=$this->db->get("chi");
        return $query->result_array();
    }
     public function Details_chi($id){
        $this->db->select("*");
        $this->db->where("ID_C",$id);
        $query=$this->db->get("chi");
        return $query->row_array();
    }
    public function Insert_chi($data)
    {
        return $this->db->insert("chi",$data);
    }
    public function Update_chi($data,$id){

        $this->db->where("ID_TK",$id);
        $this->db->update("taikhoan",$data);
    }
    public function Delete_chi($id){
        $this->db->where("ID_C",$id);
        $this->db->delete("chi");
    }
}
?>
