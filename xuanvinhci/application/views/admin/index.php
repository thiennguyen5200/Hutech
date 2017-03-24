<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Quản Lí Thu Chi</title>
</head>
<body>
	<div id="warper">
        <div id="top">
        <?php $this->load->view('admin/top') ?>
        </div>     
        <div>
            <?php $this->load->view('admin/menu') ?>
        </div>
        <div class="right">
         <?php $this->load->view($temp) ?>
        </div>
    </div>
</body>
</html>