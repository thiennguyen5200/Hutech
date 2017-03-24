<?php
class TrangChu_controller extends CI_Controller
{       
    function __construct()
    {
        parent::__construct();
        $this->load->model('TrangChu_model');

    }
    function formatdate($date){
    $day = (int) substr($date, 0, 2);
    $month = (int) substr($date, 3, 2);
    $year = (int) substr($date, 6, 4);
    return checkdate($year, $month, $day);
}
    function Index()
    {
        //$this->TrangChu_model->Listtongthu($search);
        $search = $this->input->post("txtdate");    
        $this->formatdate($search);
         $data['thu']=$this->TrangChu_model->Danhsachsotienthu($search);
         $data['chi']=$this->TrangChu_model->Danhsachsotienchi($search);
         $data['tongthu']=$this->TrangChu_model->Listtongchi($search);
        $data['tongchi']=$this->TrangChu_model->Listtongthu($search);
           $data['temp']="layout/body";
         $this->load->view('layout/index',$data);

    }
}
?>