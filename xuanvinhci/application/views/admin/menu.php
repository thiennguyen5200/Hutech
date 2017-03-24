<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
   
    position: absolute;
    background-color: #009900;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
     color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<div align='center' >
<div class="dropdown">
  <button class="dropbtn">Quản Lí Thu</button>
  <div class="dropdown-content">
    <a href="#">Thêm Khoảng Thu</a>
    <a href="#">Xem Các Khoảng Thu</a>
    <a href="#">Xóa Các Khoảng Thu</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Quản Lí Chi</button>
  <div class="dropdown-content">
    <a href="http://localhost/xuanvinhci/Chi_controller/Them_chi">Thêm Khoảng Chi</a>
    <a href="#">Xem Các Khoảng Chi</a>
    <a href="#">Xóa Các Khoảng Chi</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Tổng Kết</button>
  <div class="dropdown-content">
    <a href="#">Tổng Kết Ngày</a>
    <a href="#">Tổng Kết Tháng</a>
    <a href="#">Tổng Kết Năm</a>
    <a href="#">Tổng Kết Khoảng</a>
  </div>
</div>
</div>
