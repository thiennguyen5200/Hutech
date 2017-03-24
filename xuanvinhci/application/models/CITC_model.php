<?php
class CITC_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    	$this->load->database();
    }
   
    public function List_ci(){
        $this->db->select("*");
        $query=$this->db->get("loaichi");
        return $query->result_array();
    }
     public function Details_ci($id){
        $this->db->select("*");
        $this->db->where("ID_LC",$id);
        $query=$this->db->get("loaichi");
        return $query->row_array();
    }
    public function Insert_ci($data)
    {
        return $this->db->insert("chi",$data);
    }
    public function Update_ci($data,$id){
      /* $this->db->where("chi.ID_C",$id);
        $this->db->where("taikhoan.SoTien_TK=chi.SoTienChi+taikhoan.SoTien_TK");
        $this->db->from("chi");
        $this->db->join("taikhoan", 'taikhoan.ID_TK = chi.ID_TK'); */
        $this->db->update("taikhoan",$data);
       
       

    }
    public function Delete_ci($id){
        $this->db->where("ID_LC",$id);
        $this->db->delete("loaichi");
    }
}
?>
