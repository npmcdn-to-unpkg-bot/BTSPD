<?php
$keyarr[]='size';
$keyarr[]='time';
if(!isset($_GET["size"])){
	echo '先选择桌子类型';
	exit;
}else{
	$valuesarr[]=$_GET["size"];
}
$valuesarr[]=time();
switch(trim($_GET["size"])){
	case "small":
		$fhhm=bts_mysqli_insert('btspd_dl_small',$keyarr,$valuesarr,1,$bts_link_my_i);
		break;
	case "middle":
		$fhhm=bts_mysqli_insert('btspd_dl_middle',$keyarr,$valuesarr,1,$bts_link_my_i);
		break;
	case "big":
		$fhhm=bts_mysqli_insert('btspd_dl_big',$keyarr,$valuesarr,1,$bts_link_my_i);
		break;
	case "room":
		$fhhm=bts_mysqli_insert('btspd_dl_room',$keyarr,$valuesarr,1,$bts_link_my_i);
		break;
	default:
		exit('Error Size!');
		break;
}
$fhhma=bts_mysqli_insert('btspd_dl',$keyarr,$valuesarr,1,$bts_link_my_i);
$ogs=6-strlen($fhhm[1]);
$hm=$fhhm[1];
while($ogs>0){
	$hm='0'.$hm;
	$ogs=$ogs-1;
}
include_once('./template/header.php');
?>
<br />
<br />
<center><strong>您取的号码:<?php echo $hm; ?></strong></center>
<br />
<div id="output" class="text-center"></div>
<script src="jcf/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="jcf/qrcode/jquery.qrcode.js"></script>
<script type="text/javascript" src="jcf/qrcode/qrcode.js"></script>
<script>
jQuery(function(){
	jQuery('#output').qrcode({
		width: 200, //宽度
	    height:200, //高度
		text	: "<?php echo $hm; ?>"
	});	
})
</script>
<br />
<center><strong><a href="?page=cd">点此提前欣赏本店菜单</a></strong></center>
<br />
 <?php
  //作者林友哲版权所有 393562235@qq.com
  ?>