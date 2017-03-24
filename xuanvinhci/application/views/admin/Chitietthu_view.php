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
						        <th>Tài Khoản Chi Thu</th>
						      </tr>
						    </thead>
						    <tbody>
						      
						      <?php foreach ($ctthu as $item)
							 {							
							?>
								<tr>
								<td><?php echo $item['SoTien_T']; ?></td>						
						        <td><?php echo $item['LiDo_T']; ?></td>
						        <td><?php echo $item['Date_T']; ?></td>		
						        <td><?php echo $item['ID_TK']; ?></td>
						         </tr>  			        
						        <?php
								}
							?>
						       
						    </tbody>
						</table>                                          
                          
        </div><!--end .content-->
</div>