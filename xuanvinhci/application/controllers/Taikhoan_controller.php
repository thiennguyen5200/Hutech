<?php 
class Taikhoan_controller extends CI_Controller
{		
    function __construct()
    {
        parent::__construct();
        $this->load->model('Taikhoan_model');

    }
    function index()
    {       
            //lấy dữ liệu từ model ra cho vao mảng tạo
            $data['dstaikhoan']=$this->Taikhoan_model->Listtaikhoan();        
            $data['temp']='admin/Danhsachtaikhoan_view';
            $this->load->view('admin/index',$data);
    }
    function Them_taikhoan()
    {                   
            
             // kiểm tra nếu nhập button hay không
             if($this->input->post('btnThemTK')!='')          
                {
                        //Kiểm tra tính hợp lệ dữ liệu
                        $this->form_validation->set_rules("Ten_TK","Tên Tài Khoản","required");
                        $this->form_validation->set_rules("SoTien_TK","Số Tiền Tài Khoản","required");
                 //nếu dữ liệu đã hợp lệ
                  if($this->form_validation->run()==true)
                        {
                            //khởi tạo biến lưu dữ liệu của mảng vào
                            $data_insert = array(
                                "Ten_TK"=>$this->input->post("Ten_TK"),
                                 "SoTien_TK"=>$this->input->post("SoTien_TK")
                                );     
                             //thực hiện insert đổ dữ liệu vào mảng   
                             $this->Taikhoan_model->Insert_taikhoan($data_insert);                    
                        }           
                }
        //tao biến temp lưu giao diện thêm tài khoản 
        $data['temp']=('admin/Themtaikhoan_view');
        $this->load->view('admin/index',$data);
    }
    function Xem_taikhoan($id)
    {
            //lấy dữ liệu từ model ra cho vào biến truyền id vào
            $data['cttaikhoan']=$this->Taikhoan_model->Details_taikhoan($id);        
            $data['temp']='admin/Chitiettaikhoan_view';
            $this->load->view('admin/index',$data);
    }
     function Xoa_taikhoan($id)
    {
            //lấy dữ liệu từ model ra cho vào biến
            $this->Taikhoan_model->Delete_taikhoan($id);        
            $data['temp']='admin/Xoataikhoan_view';
            $this->load->view('admin/index',$data);
    }
    function Sua_taikhoan($id)
    {
        //gọi phương thức details_tai khoản để lấy thông tin
       $data['cttaikhoan']=$this->Taikhoan_model->Details_taikhoan($id);   
           if($this->input->post('btnSuaTK')!='')          
                    {
                            $this->form_validation->set_rules("Ten_TK","Tên Tài Khoản","required");
                            $this->form_validation->set_rules("SoTien_TK","Số Tiền Tài Khoản","required");
                            if($this->form_validation->run()==true)
                            {
                                //khởi tạo biến lưu dữ liệu của mảng vào
                                $data_update = array(
                                    "Ten_TK"=>$this->input->post("Ten_TK"),
                                     "SoTien_TK"=>$this->input->post("SoTien_TK")
                                    );     
                                 //thực hiện insert đổ dữ liệu vào mảng   
                                 $this->Taikhoan_model->Update_taikhoan($data_update,$id); 
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