<div align="center">
               <div class="col-md-5 add-dm" align="center">
                       <h4>Thêm Khoảng Chi </h4>
               </div>            
                       <div class="form" >     
 								<form method="post">                                          
                              		<div>
										<b>Tên tài khoản  &nbsp;  &nbsp; &nbsp;:</b>
										<input name="Ten_TK" type="text" SoTien_TK>
											<div class="error" id="tentaikhoan_error"><?php echo form_error('Ten_TK')?></div>
											
                               		</div>
									<div>

									</div>
									<div>
											<b>Số tiền tài khoản :</b>
											
									 		<input name="SoTien_TK" type="number" SoTien_TK>
											<div class="error" id="sotien_error"><?php echo form_error('SoTien_TK')?></div>
                                       
                               		</div>									
									
		               						<input name="btnThemTK" value="Lưu" class="btn btn-primary btn-block" type="submit" onclick="getConfirmation();"> 
										&nbsp;  &nbsp; &nbsp;
								</form>
									<div>
											<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="http://localhost/xuanvinhci/taikhoan_controller"><input name="btnHuyTK" value="Quay Lại"  type="submit" > </a>
									</div>
			                                                                     
			            </div>
                       
              
</div>
 <script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Bạn Có Muốn Thêm Tài Khoản Này ?");
               if( retVal == true ){

                  return true;
               }
               else{

                  return false;
               }
            }
         //-->
        </script>