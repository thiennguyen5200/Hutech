<div class="col-md-10" align="center">                             
        <div class="content">
               <p class="col-md-5 add-dm">
                       <h4  align='center' >Danh Sách Khoảng Chi </h4>              
						<a href="http://localhost/xuanvinhci/Taikhoan_controller/Them_taikhoan"  ><h5>Thêm tài khoản</h5></a>
				</p>                                                            
						<table class="table table-striped" border="1" align='center'>
						    <thead>
							      <tr>
							        <th>Tên Tài Khoản</th>
							        <th>Số Tiền Tài Khoản</th>				        
							      </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($dstaikhoan as $item)
							 	{							
							?>
									<tr>
										<td>
											<?php echo $item['Ten_TK']; ?>									
										</td>						
								        <td>
								        	<?php echo $item['SoTien_TK']; ?>						        	
								        </td>					        	
								        <td>
								        	<a href="http://localhost/xuanvinhci/Taikhoan_controller/Xem_taikhoan/<?php echo $item['ID_TK'] ?>" >Xem</a>
								        </td>
								        <td>
								        	<a href="http://localhost/xuanvinhci/Taikhoan_controller/Xoa_taiKhoan/<?php echo $item['ID_TK'] ?>" onclic="getConfirmation();" onclick="getConfirmation();">Xóa</a>
								        </td>
								        <td>
								       		 <a href="http://localhost/xuanvinhci/Taikhoan_controller/Sua_taikhoan/<?php echo $item['ID_TK'] ?>" >Sửa</a>
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
               var retVal = confirm("Bạn Có Muốn Xóa Tài Khoản Này ?");
               if( retVal == true ){

                  return true;
               }
               else{

                  return false;
               }
            }
         //-->
        </script>


