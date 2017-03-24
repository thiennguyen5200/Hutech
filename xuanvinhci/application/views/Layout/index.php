<!DOCTYPE html>
<html>
<head>
 <?php $this->load->view("layout/head") ?>
</head>
<body class="nav-md">
 <div class="container body">
  <div class="main_container">

      
  <?php $this->load->view("layout/menu"); ?>
  <?php $this->load->view("layout/body"); ?>
  </div>

</div>
  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>


 <?php $this->load->view("layout/script.php"); ?>
</body>

</html>
