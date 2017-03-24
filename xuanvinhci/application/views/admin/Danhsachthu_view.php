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
						      
						      <?php foreach ($dsthu as $item)
							 {							
							?>
								<tr>
								<td><?php echo $item['SoTien_T']; ?></td>						
						        <td><?php echo $item['LiDo_T']; ?></td>
						        <td><?php echo $item['Date_T']; ?></td>		
						        <td><a href="http://localhost/xuanvinhci/Thu_controller/Chitiet_thu/<?php echo $item['ID_T'] ?>" >Xem</a></td>
						        <td><a href="http://localhost/xuanvinhci/Thu_controller/Xoa_thu/<?php echo $item['ID_T'] ?>" >Xóa</a></td>
						        <td><a href="" >Sửa</a></td>
						         </tr>  			        
						        <?php
								}
							?>
						       
						    </tbody>
						</table>                                          
                          
        </div><!--end .content-->
</div>