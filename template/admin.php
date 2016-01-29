<?php
include_once('./template/header.php');
if(isset($_GET["username"],$_GET["password"])){
	$akeyarr[]="username";
	$akeyarr[]="pwd";
	$akeyarr[]="zt";
	$avaluesarr[]=trim($_GET["username"]);
	$avaluesarr[]=md5(trim($_GET["password"]));
	$avaluesarr[]="1";
	if($admin=bts_mysqli_select('btspd_admin',$akeyarr,$avaluesarr,1,$bts_link_my_i)){
		$_SESSION["btspdadmin"]="admin";
	}else{
			echo md5(trim($_GET["password"]));
	}
}
if(!isset($_SESSION["btspdadmin"])){
	include_once('./template/login.php');
	exit;
}
if($_SESSION["btspdadmin"]!="admin"){
	include_once('./template/login.php');
	exit;
}
$valuesarr[]="1";
$keyarr[]="zt";
if(!isset($_GET["size"])){
	$size='dea';
}else{
	$size=trim($_GET["size"]);
}
switch($size){
	case "small":
		if($qdh=bts_mysqli_select('btspd_dl_small',$keyarr,$valuesarr,1,$bts_link_my_i,'id',0,1,'id',1)){
		$shm=bts_mysqli_fo($qdh,"id");
	    }else{
			$hm="无";
        }
		break;
	case "middle":
		if($qdh=bts_mysqli_select('btspd_dl_middle',$keyarr,$valuesarr,1,$bts_link_my_i,'id',0,1,'id',1)){
		$mhm=bts_mysqli_fo($qdh,"id");
	    }else{
			$hm="无";
        }
		break;
	case "big":
		if($qdh=bts_mysqli_select('btspd_dl_big',$keyarr,$valuesarr,1,$bts_link_my_i,'id',0,1,'id',1)){
		$bhm=bts_mysqli_fo($qdh,"id");
	    }else{
			$hm="无";
        }
		break;
	case "room":
		if($qdh=bts_mysqli_select('btspd_dl_room',$keyarr,$valuesarr,1,$bts_link_my_i,'id',0,1,'id',1)){
		$rhm=bts_mysqli_fo($qdh,"id");
	    }else{
			$hm="无";
        }
		break;
	default:
		if($qdh=bts_mysqli_select('btspd_dl_small',$keyarr,$valuesarr,1,$bts_link_my_i,'id',0,0,'id',1)){
		$shm= bts_mysqli_nr($qdh);
	    }else{
			$shm="无";
        }
		if($qdh=bts_mysqli_select('btspd_dl_middle',$keyarr,$valuesarr,1,$bts_link_my_i,'id',0,0,'id',1)){
		$mhm=bts_mysqli_nr($qdh);;
	    }else{
			$mhm="无";
        }
		if($qdh=bts_mysqli_select('btspd_dl_big',$keyarr,$valuesarr,1,$bts_link_my_i,'id',0,0,'id',1)){
		$bhm=bts_mysqli_nr($qdh);
	    }else{
			$bhm="无";
        }
		if($qdh=bts_mysqli_select('btspd_dl_room',$keyarr,$valuesarr,1,$bts_link_my_i,'id',0,0,'id',1)){
		$rhm=bts_mysqli_nr($qdh);;
	    }else{
			$rhm="无";
        }
		break;
}
?>
 <div class="container-fluid text-center">
 <h4><strong>点击叫号</strong></h4><br />
 </div>
 <div class="container-fluid text-center" id="ulogin">
  <div class="row">
 <div class="col-md-3 col-sm-1 col-xs-1">&nbsp;</div>
  <div class="col-md-6 col-sm-10 col-xs-10">
  <!--- 取号区 --->
     <div class="container-fluid text-center">
      <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6">
	  <button onclick="location.href='?page=aqh&size=small'" class="btn btn-success" type="submit" style="width:130px;height:130px;font-size:25px;"><strong>小桌:<?php echo $shm; ?></strong></button>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6">
	  <button onclick="location.href='?page=aqh&size=middle'" class="btn btn-success" type="submit" style="width:130px;height:130px;font-size:25px;"><strong>中桌:<?php echo $mhm; ?></strong></button>
      </div>
	  </div>
      <div class="row">
	  &nbsp;<br />&nbsp;
	  </div>
	  <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6">
	  <button onclick="location.href='?page=aqh&size=big'" class="btn btn-success" type="submit" style="width:130px;height:130px;font-size:25px;"><strong>大桌:<?php echo $bhm; ?></strong></button>
      </div>
	  <div class="col-md-6 col-sm-6 col-xs-6">
	  <button onclick="location.href='?page=aqh&size=room'" class="btn btn-success" type="submit" style="width:130px;height:130px;font-size:25px;"><strong>包间:<?php echo $rhm; ?></strong></button>
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