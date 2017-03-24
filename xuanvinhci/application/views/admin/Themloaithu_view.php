<div align="center">
               <div class="col-md-5 add-dm" align="center">
                       <h4>Thêm Khoảng Thu </h4>
               </div>            
                       <div class="form" >     
 								<form method="post">                                          
                              		<div>
										<b>Tên tài khoản  &nbsp;  &nbsp; &nbsp;:</b>
										<input name="Ten_LT" type="text" SoTien_TK>
											<div class="error" id="tentaikhoan_error"><?php echo form_error('Ten_LT')?></div>
											
                               		</div>
									<div>

									</div>
															
									
		               						<input name="btnThemLT" value="Lưu" class="btn btn-primary btn-block" type="submit" onclick="getConfirmation();"> 
										&nbsp;  &nbsp; &nbsp;
								</form>
									<div>
											<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="http://localhost/xuanvinhci/Loaithu_controller"><input name="btnHuyLT" value="Quay Lại"  type="submit" > </a>
									</div>
			                                                                     
			            </div>
                       
              
</div>
 <script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Bạn Có Muốn Thêm Loại Thu Này ?");
               if( retVal == true ){

                  return true;
               }
               else{

                  return false;
               }
            }
         //-->
        </script>