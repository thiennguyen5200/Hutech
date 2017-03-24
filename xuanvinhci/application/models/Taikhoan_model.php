<?php
class Taikhoan_model extends My_model
{
    function __construct()
    {
        parent::__construct();
    $this->table='taikhoan';
    }
    public function Listtaikhoan(){
        $this->db->select("*");
        $query=$this->db->get("taikhoan");
        return $query->result_array();
    }
     public function Details_taikhoan($id){
        $this->db->select("*");
        $this->db->where("ID_TK",$id);
        $query=$this->db->get("taikhoan");
        return $query->row_array();
    }
    public function Insert_taikhoan($data)
    {
        return $this->db->insert("taikhoan",$data);
    }
    public function Update_taikhoan($data,$id){
        $this->db->where("ID_TK",$id);
        $this->db->update("taikhoan",$data);
    }
    public function Delete_taikhoan($id){
        $this->db->where("ID_TK",$id);
        $this->db->delete("taikhoan");
    }
}
?>