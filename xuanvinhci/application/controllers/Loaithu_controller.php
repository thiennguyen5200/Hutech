<?php 
class Loaithu_controller extends CI_Controller
{		
    function __construct()
    {
        parent::__construct();
        $this->load->model('Loaithu_model');

    }
    function index()
    {       
            //lấy dữ liệu từ model ra cho vao mảng tạo
            $data['dsloaithu']=$this->Loaithu_model->List_loaithu();        
            $data['temp']='admin/Danhsachloaithu_view';
            $this->load->view('admin/index',$data);
    }
    function Them_loaithu()
    {                   
            
             // kiểm tra nếu nhập button hay không
             if($this->input->post('btnThemLT')!='')          
                {
                        //Kiểm tra tính hợp lệ dữ liệu
                        $this->form_validation->set_rules("Ten_LT","Tên Loại Thu","required");                      
                 //nếu dữ liệu đã hợp lệ
                  if($this->form_validation->run()==true)
                        {
                            //khởi tạo biến lưu dữ liệu của mảng vào
                            $data_insert = array(
                                "Ten_LT"=>$this->input->post("Ten_LT"),
                                
                                );     
                             //thực hiện insert đổ dữ liệu vào mảng   
                             $this->Loaithu_model->Insert_loaithu($data_insert);                    
                        }           
                }
        //tao biến temp lưu giao diện thêm tài khoản 
        $data['temp']=('admin/Themloaithu_view');
        $this->load->view('admin/index',$data);
    }
    function Xem_loaithu($id)
    {
            //lấy dữ liệu từ model ra cho vào biến truyền id vào
            $data['ctloaithu']=$this->Loaithu_model->Details_loaithu($id);        
            $data['temp']='admin/chitietloaithu_view';
            $this->load->view('admin/index',$data);
    }
     function Xoa_loaithu($id)
    {
            //lấy dữ liệu từ model ra cho vào biến
            $this->Loaithu_model->Delete_loaithu($id);  
            $data['dsloaithu']=$this->Loaithu_model->List_loaithu();      
            $data['temp']='admin/Danhsachloaithu_view';
            $this->load->view('admin/index',$data);
    }
    function Sua_loaithu($id)
    {
        //gọi phương thức details_tai khoản để lấy thông tin
       $data['ctloaithu']=$this->Loaithu_model->Details_loaithu($id);   
           if($this->input->post('btnSuaLT')!='')          
                    {
                           
                            $this->form_validation->set_rules("Ten_LT","Tên Loại thu","required");
                            if($this->form_validation->run()==true)
                            {
                                //khởi tạo biến lưu dữ liệu của mảng vào
                                $data_update = array(
                                    "Ten_LT"=>$this->input->post("Ten_LT"),                                    
                                    );     
                                 //thực hiện insert đổ dữ liệu vào mảng   
                                 $this->Loaithu_model->Update_loaithu($data_update,$id); 
                                 $data['temp']=('admin/Suaxong_view');
                                  $this->load->view('admin/index',$data);                   
                            }     
                    }
            else
                    {

                            $data['temp']=('admin/Sualoaithu_view');
                            $this->load->view('admin/index',$data);
                    }
  

    }
}
?>