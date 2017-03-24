<div align="center">
               <div class="col-md-5 add-dm" align="center">
                       <h4>Sửa Loại thu </h4>
               </div>            
                       <div class="form" >     
 								<form method="post">                                          
                              		<div>
										<b>Tên loại thu  &nbsp;  &nbsp; &nbsp;:</b>
										<input name="Ten_LT" type="text" value="<?php echo $ctloaithu['Ten_LT'] ?>">
											<div class="error" id="tenloaithu_erro"><?php echo form_error('Ten_LT')?></div>
											
                               		</div>
									<div>

									</div>
																
									
		               						<input name="btnSuaLT" value="Lưu" class="btn btn-primary btn-block" type="submit" onclick="getConfirmation();"> 
										&nbsp;  &nbsp; &nbsp;
								</form>
									<div>
											<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="http://localhost/xuanvinhci/Loaithu_controller"><input name="btnHuyTK" value="Quay lại"  type="submit" > </a>
									</div>
			                                                                     
			            </div>
                       
              
</div>
     <script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Bạn Có Muốn Sửa Loại thu Này ?");
               if( retVal == true ){

                  return true;
               }
               else{

                  return false;
               }
            }
         //-->
        </script>