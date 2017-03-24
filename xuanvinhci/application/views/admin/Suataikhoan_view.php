<div align="center">
               <div class="col-md-5 add-dm" align="center">
                       <h4>Sửa Tài Khoản </h4>
               </div>            
                       <div class="form" >     
 								<form method="post">                                          
                              		<div>
										<b>Tên tài khoản  &nbsp;  &nbsp; &nbsp;:</b>
										<input name="Ten_TK" type="text" value="<?php echo $cttaikhoan['Ten_TK'] ?>">
											<div class="error" id="tentaikhoan_erro"><?php echo form_error('Ten_TK')?></div>
											
                               		</div>
									<div>

									</div>
									<div>
											<b>Số tiền tài khoản :</b>
											
									 		<input name="SoTien_TK" type="number" value="<?php echo $cttaikhoan['SoTien_TK'] ?>">
											<div class="error" id="sotien_error"><?php echo form_error('SoTien_TK')?></div>
                                       
                               		</div>									
									
		               						<input name="btnSuaTK" value="Lưu" class="btn btn-primary btn-block" type="submit"> 
										&nbsp;  &nbsp; &nbsp;
								</form>
									<div>
											<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="http://localhost/xuanvinhci/taikhoan_controller"><input name="btnHuyTK" value="Hủy"  type="submit" > </a>
									</div>
			                                                                     
			            </div>
                       
              
</div>