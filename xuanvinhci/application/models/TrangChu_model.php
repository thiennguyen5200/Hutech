<?php
class TrangChu_model extends My_model
{
    function __construct()
    {
        parent::__construct();
    $this->table='thu';
    $this->table='chi';
    $this->table='taikhoan';
    }
    public function Listtongthu($search){    
        $this->db->select("Date_T,sum(SoTien_T) AS so_tien_thu");
        $this->db->where("Date_T",$search);
        $this->db->group_by("Date_T");
        $query=$this->db->get("thu");
        return $query->row_array();
    }
     public function Listtongchi($search){    
        $this->db->select("Date_C,sum(SoTien_C) AS so_tien_chi");
        $this->db->where("Date_C",$search);
        $this->db->group_by("Date_C");
        $query=$this->db->get("chi");
        return $query->row_array();
    }
    public function Danhsachsotienchi($search)
    {
        
         $this->db->select("Date_C,LiDo_C,SoTien_C");
         $this->db->where("Date_C",$search);
        $query=$this->db->get("chi");
        return $query->result_array();
    }
    public function Danhsachsotienthu($search)
    {
        
          $this->db->select("Date_T,LiDo_T,SoTien_T");
          $this->db->where("Date_T",$search);
        $query=$this->db->get("thu");
        return $query->result_array();
    }
   
}
?>
Kết thúc cuộc trò chuyện
