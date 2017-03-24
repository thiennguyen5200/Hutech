<div class="col-md-10">                             
        <div class="content">
               <div class="col-md-5 add-dm">
                       <h4  align='center' >Danh Sách Khoảng Chi </h4>
               </div>
                                                                                        
						<table class="table table-striped" border="1" align='center'>
						    <thead>
						      <tr>
						        <th>Số Tiền Thu</th>
						        <th>Khoảng Thu</th>
						        <th>Date Thu</th>
						        
						      </tr>
						    </thead>
						    <tbody>
						      
						      <?php foreach ($dschi as $item)
							 {							
							?>
								<tr>
								<td><?php echo $item['SoTien_C']; ?></td>						
						        <td><?php echo $item['LiDo_C']; ?></td>
						        <td><?php echo $item['Date_C']; ?></td>		
						        <td><a href="http://localhost/xuanvinhci/Chi_controller/Chitiet_chi/<?php echo $item['ID_C'] ?>" >Xem</a></td>
						        <td><a href="http://localhost/xuanvinhci/Chi_controller/Xoa_chi/<?php echo $item['ID_C'] ?>" onclic="getConfirmation();">Xóa</a></td>
						        <td><a href="" >Sửa</a></td>
						         </tr>  			        
						        <?php
								}
							?>
						       
						    </tbody>
						</table>                                          
                          
        </div><!--end .content-->
</div>


