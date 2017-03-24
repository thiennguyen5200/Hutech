<div align="center">
               <div class="col-md-5 add-dm" align="center">
                       <h4>Sửa Loại Chi </h4>
               </div>            
                       <div class="form" >     
 								<form method="post">                                          
                              		<div>
										<b>Tên loại chi  &nbsp;  &nbsp; &nbsp;:</b>
										<input name="Ten_LC" type="text" value="<?php echo $ctloaichi['Ten_LC'] ?>">
											<div class="error" id="tenloaichi_erro"><?php echo form_error('Ten_LC')?></div>
											
                               		</div>
									<div>

									</div>
																
									
		               						<input name="btnSuaLC" value="Lưu" class="btn btn-primary btn-block" type="submit" onclick="getConfirmation();"> 
										&nbsp;  &nbsp; &nbsp;
								</form>
									<div>
											<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="http://localhost/xuanvinhci/Loaichi_controller"><input name="btnHuyTK" value="Quay lại"  type="submit" > </a>
									</div>
			                                                                     
			            </div>
                       
              
</div>
     <script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Bạn Có Muốn Sửa Loại Chi Này ?");
               if( retVal == true ){

                  return true;
               }
               else{

                  return false;
               }
            }
         //-->
        </script>