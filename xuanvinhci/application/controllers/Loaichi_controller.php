<?php 
class Loaichi_controller extends CI_Controller
{		
    function __construct()
    {
        parent::__construct();
        $this->load->model('Loaichi_model');

    }
    function index()
    {       
            //lấy dữ liệu từ model ra cho vao mảng tạo
            $data['dsloaichi']=$this->Loaichi_model->List_loaichi();        
            $data['temp']='admin/Danhsachloaichi_view';
            $this->load->view('admin/index',$data);
    }
    function Them_loaichi()
    {                   
            
             // kiểm tra nếu nhập button hay không
             if($this->input->post('btnThemLC')!='')          
                {
                        //Kiểm tra tính hợp lệ dữ liệu
                        $this->form_validation->set_rules("Ten_LC","Tên Loại Chi","required");                      
                 //nếu dữ liệu đã hợp lệ
                  if($this->form_validation->run()==true)
                        {
                            //khởi tạo biến lưu dữ liệu của mảng vào
                            $data_insert = array(
                                "Ten_LC"=>$this->input->post("Ten_LC"),
                                
                                );     
                             //thực hiện insert đổ dữ liệu vào mảng   
                             $this->Loaichi_model->Insert_loaichi($data_insert);                    
                        }           
                }
        //tao biến temp lưu giao diện thêm tài khoản 
        $data['temp']=('admin/Themloaichi_view');
        $this->load->view('admin/index',$data);
    }
    function Xem_loaichi($id)
    {
            //lấy dữ liệu từ model ra cho vào biến truyền id vào
            $data['ctloaichi']=$this->Loaichi_model->Details_loaichi($id);        
            $data['temp']='admin/Chitietloaichi_view';
            $this->load->view('admin/index',$data);
    }
     function Xoa_loaichi($id)
    {
            //lấy dữ liệu từ model ra cho vào biến
            $this->Loaichi_model->Delete_loaichi($id);  
            $data['dsloaichi']=$this->Loaichi_model->List_loaichi();      
            $data['temp']='admin/Danhsachloaichi_view';
            $this->load->view('admin/index',$data);
    }
    function Sua_loaichi($id)
    {
        //gọi phương thức details_tai khoản để lấy thông tin
       $data['ctloaichi']=$this->Loaichi_model->Details_loaichi($id);   
           if($this->input->post('btnSuaLC')!='')          
                    {
                           
                            $this->form_validation->set_rules("Ten_LC","Tên Loại Chi","required");
                            if($this->form_validation->run()==true)
                            {
                                //khởi tạo biến lưu dữ liệu của mảng vào
                                $data_update = array(
                                    "Ten_LC"=>$this->input->post("Ten_LC"),                                    
                                    );     
                                 //thực hiện insert đổ dữ liệu vào mảng   
                                 $this->Loaichi_model->Update_loaichi($data_update,$id); 
                                 $data['temp']=('admin/Suaxong_view');
                                  $this->load->view('admin/index',$data);                   
                            }     
                    }
            else
                    {

                            $data['temp']=('admin/Sualoaichi_view');
                            $this->load->view('admin/index',$data);
                    }
  

    }
}
?>