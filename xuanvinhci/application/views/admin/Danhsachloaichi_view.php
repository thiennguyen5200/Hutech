<div class="col-md-10" align="center">                             
        <div class="content">
               <p class="col-md-5 add-dm">
                       <h4  align='center' >Danh Sách Khoảng Chi </h4>              
                        <a href="http://localhost/xuanvinhci/Loaichi_controller/Them_loaichi"  ><h5>Thêm Loại Chi</h5></a>
                </p>                                                            
                        <table class="table table-striped" border="1" align='center'>
                            <thead>
                                  <tr>
                                    <th>Tên Loại Chi</th>                                                      
                                  </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($dsloaichi as $item)
                                {                           
                            ?>
                                    <tr>
                                        <td>
                                            <?php echo $item['Ten_LC']; ?>                                  
                                        </td>                       
                                                                      
                                        <td>
                                            <a href="http://localhost/xuanvinhci/Loaichi_controller/Xem_loaichi/<?php echo $item['ID_LC'] ?>" >Xem</a>
                                        </td>
                                        <td>
                                            <a href="http://localhost/xuanvinhci/Loaichi_controller/Xoa_loaichi/<?php echo $item['ID_LC'] ?>" onclick="getConfirmation();">Xóa</a>
                                        </td>
                                        <td>
                                             <a href="http://localhost/xuanvinhci/Loaichi_controller/Sua_loaichi/<?php echo $item['ID_LC'] ?>" >Sửa</a>
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
               var retVal = confirm("Bạn Có Muốn Xóa Loại Chi Này ?");
               if( retVal == true ){

                  return true;
               }
               else{

                  return false;
               }
            }
         //-->
        </script>


