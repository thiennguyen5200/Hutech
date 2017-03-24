<div class="col-md-10" align="center">                             
        <div class="content">
               <p class="col-md-5 add-dm">
                       <h4  align='center' >Danh Sách Khoảng thu </h4>              
                        <a href="http://localhost/xuanvinhci/Loaithu_controller/Them_loaithu"  ><h5>Thêm Loại thu</h5></a>
                </p>                                                            
                        <table class="table table-striped" border="1" align='center'>
                            <thead>
                                  <tr>
                                    <th>Tên Loại thu</th>                                                      
                                  </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($dsloaithu as $item)
                                {                           
                            ?>
                                    <tr>
                                        <td>
                                            <?php echo $item['Ten_LT']; ?>                                  
                                        </td>                       
                                                                      
                                        <td>
                                            <a href="http://localhost/xuanvinhci/Loaithu_controller/Xem_loaithu/<?php echo $item['ID_LT'] ?>" >Xem</a>
                                        </td>
                                        <td>
                                            <a href="http://localhost/xuanvinhci/Loaithu_controller/Xoa_loaithu/<?php echo $item['ID_LT'] ?>" onclick="getConfirmation();">Xóa</a>
                                        </td>
                                        <td>
                                             <a href="http://localhost/xuanvinhci/Loaithu_controller/Sua_loaithu/<?php echo $item['ID_LT'] ?>" >Sửa</a>
                                        </td>
                                     </tr>                      
                            <?php
                                }
                            ?>
                               
                            </tbody>
                        </table>                                          
                          
        </div><!--end .content-->
</div>
     <script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Bạn Có Muốn Xóa Loại thu Này ?");
               if( retVal == true ){

                  return true;
               }
               else{

                  return false;
               }
            }
         //-->
        </script>


