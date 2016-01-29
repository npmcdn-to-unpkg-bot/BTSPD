<?php
include_once('./template/header.php');
?>
 <div class="container-fluid text-center">
 <h4><strong>欢迎使用BTSPD在线排队叫号系统</strong></h4><br />
 </div>
 <div class="container-fluid text-center" id="ulogin">
  <div class="row">
 <div class="col-md-3 col-sm-1 col-xs-1">&nbsp;</div>
  <div class="col-md-6 col-sm-10 col-xs-10">
  <!--- 取号区 --->
     <div class="container-fluid text-center">
      <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6">
	  <button onclick="location.href='?page=qh&size=small'" class="btn btn-success" type="submit" style="width:130px;height:130px;font-size:25px;"><strong>小桌</strong></button>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6">
	  <button onclick="location.href='?page=qh&size=middle'" class="btn btn-success" type="submit" style="width:130px;height:130px;font-size:25px;"><strong>中桌</strong></button>
      </div>
	  </div>
      <div class="row">
	  &nbsp;<br />&nbsp;
	  </div>
	  <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6">
	  <button onclick="location.href='?page=qh&size=big'" class="btn btn-success" type="submit" style="width:130px;height:130px;font-size:25px;"><strong>大桌</strong></button>
      </div>
	  <div class="col-md-6 col-sm-6 col-xs-6">
	  <button onclick="location.href='?page=qh&size=room'" class="btn btn-success" type="submit" style="width:130px;height:130px;font-size:25px;"><strong>包间</strong></button>
      </div>
	  </div>
     </div>
  <!--- 取号区 --->
  </div>
<div class="col-md-3">&nbsp;
</div>
  </div>
 </div>
  <div class="container-fluid text-center" id="lgjcb">
  &nbsp;
  </div>
  <div class="container-fluid text-center" id="lgjcc">
  <center><p><img src="img/btspd.png" class="img-responsive"></img></p></center>
  </div>
   <?php
  //作者林友哲版权所有 393562235@qq.com
  ?>