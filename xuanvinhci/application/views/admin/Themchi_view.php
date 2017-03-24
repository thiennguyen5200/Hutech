<div class="col-md-10">                             
        <div class="content">
               <div class="col-md-5 add-dm">
                       <h4>Thêm Khoảng Chi </h4>
               </div>
               <form method="post">
                       <div class="form">   
                                       
                               <table class="table">
                             <tbody>
								<tr>
                                    <th><p>Tên khoảng chi </p></th>
                               <td>
                                      <input name="LiDo_C" class="form-control" type="text" value="<?php echo set_value('LiDo_C') ?>" >
										<div class="error" id="Lido_error"><?php echo form_error('LiDo_C')?></div> 
                               </td>
								</tr>
								<tr>
                                    <th><p>Số tiền chi</p></th>
                               <td>
                                    <input name="SoTien_C" class="form-control" type="text" value="<?php echo set_value('SoTien_C') ?>" >
									<div class="error" id="sotien_error"><?php echo form_error('SoTien_C')?></div> 
                               </td>
								</tr>
								<tr>
                                    <th><p>Ngày Chi </p></th>
                               <td>
                                    <input name="Ngay_C" class="form-control" type="text" value="<?php echo set_value('Ngay_C') ?>">
									<div class="error" id="ngaychi_error"><?php echo form_error('Ngay_C')?></div> 
                               </td>
								</tr>
								<tr>
                                    <th><p>Tháng  chi</p></th>
                               <td>
                                    <input name="Thang_C" class="form-control" type="text" value="<?php echo set_value('Thang_C')?>">
									<div class="error" id="thangchi_error"><?php echo form_error('Thang_C')?></div> 
                               </td>
								</tr>
								<tr>
                                    <th><p>Năm  chi</p></th>
                               <td>
                                    <input name="Nam_C" class="form-control" type="text" value="<?php echo set_value('Nam_C')?>">
									<div class="error" id="namchi_error"><?php echo form_error('Nam_C')?></div> 
                               </td>
								</tr>
								<tr>
                                    <th><p>Date  chi</p></th>
                               <td>
                                    <input name="Date_C" class="form-control" type="text" value="<?php echo set_value('Date_C')?>">
									<div class="error" id="datechi_error"><?php echo form_error('Date_C')?></div> 
                               </td>
								</tr>
								<tr>
                                    <th><p> tài khoản chi</p></th>
                               <td>
                                    <input name="ID_TK" class="form-control" type="text" value="<?php echo set_value('ID_TK')?>">
									<div class="error" id="idtaikhoan_error"><?php echo form_error('ID_TK')?></div> 
                               </td>
                             </tr>
                         </tbody></table>                                                    
                       </div>
                       <div class="col-md-3 form-group pull-right">
               					<input name="btnThemChi" value="saves" class="btn btn-primary btn-block" type="submit" onclick="getConfirmation();">
                       </div>
               </form>
        </div><!--end .content-->
</div>
<script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Bạn Có Muốn Thêm Khoảng Chi Này ?");
               if( retVal == true ){

                  return true;
               }
               else{

                  return false;
               }
            }
         //-->
</script>