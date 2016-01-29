<?php
include_once('run.php');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $btspd_title; ?>BTSPD在线排号系统</title>

    <!-- Bootstrap -->
    <link href="jcf/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="jcf/oibcexample/example.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
if(isset($_GET["page"])){
	$page=$_GET["page"];
  }else{
	  $page='index';
  }
  switch($page){
	  case "index":
		  include_once('./template/welcome.php');
		  break;
	  case "pd":
		  include_once('./template/pdindex.php');
		  break;
	  case "qh":
		  include_once('./template/qh.php');
		  break;
	  case "cd":
		  include_once('./template/caidan.php');
		  break;
	  case "aqh":
		  include_once('./template/admin.php');
		  break;
	  default:
          include_once('./template/pdindex.php');
		  break;
  }
  if(!isset($btsnofoot)){
	  include_once('./template/footer.php');
  }
?>
  </body>
</html>
 <?php
  //作者林友哲版权所有 393562235@qq.com
  ?>