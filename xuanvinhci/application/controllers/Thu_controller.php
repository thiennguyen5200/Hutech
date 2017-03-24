<?php 
class Thu_controller extends CI_Controller
{		
    function __construct()
    {
        parent::__construct();
        $this->load->model('Thu_model');
    }
    
    function Danhsach_thu()
    {
        $this->load->model("Thu_model");
        $data['dsthu']=$this->Thu_model->Listthu();        
        $data['temp']='admin/Danhsachthu_view';
        $this->load->view('admin/index',$data);
    }
    function Chitiet_thu($id)
    {
      $this->load->model("Thu_model");
        $data['ctthu']=$this->Thu_model->Details_thu($id);        
        $data['temp']='admin/Chitietthu_view';
        $this->load->view('admin/index',$data);   
    }
    function Xoa_thu($id)
    {
        $this->load->model('Thu_model');
        $this->Thu_model->Delete_thu($id);
        $data['temp']='admin/Xoathu_view';
        $this->load->view('admin/index',$data);
    }
}
?>