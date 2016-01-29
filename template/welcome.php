<?php
include_once('./template/header.php');
?>
 <div class="container-fluid" id="lgjcc">
<h2><center><img src="./img/example.png" style="width:95%"></img></center></h2>
 </div>
 <div class="container-fluid text-center">
 &nbsp;<br />
 <center><button onclick="location.href='?page=pd'" class="btn btn-success" type="submit" style="width:75%;height:%90;font-size:25px;"><strong>点击取号</strong></button></center>
 <br />&nbsp;
 </div>
 <div class="container-fluid text-center" id="ulogin">
  <!--- 取号区 --->
  <div id="tuijiancai" class="text-center">  
  <div class="itemCai"><img src="./img/btspd/1.jpg" style="width:95%"></img><br />宫保鸡丁</div>  
  <div class="itemCai"><img src="./img/btspd/2.jpg" style="width:95%"></img><br />鱼香鸡丝</div>  
  <div class="itemCai"><img src="./img/btspd/3.jpg" style="width:95%"></img><br />重庆辣子鸡</div>  
  <div class="itemCai"><img src="./img/btspd/4.jpg" style="width:95%"></img><br />青椒鸡丁</div> 
  <div class="itemCai"><img src="./img/btspd/5.jpg" style="width:95%"></img><br />咖喱鸡块</div> 
  <div class="itemCai"><img src="./img/btspd/6.jpg" style="width:95%"></img><br />黄焖鸡</div> 
  <div class="itemCai"><img src="./img/btspd/7.jpg" style="width:95%"></img><br />干锅鸡</div> 
  <div class="itemCai"><img src="./img/btspd/8.jpg" style="width:95%"></img><br />芝士炸鸡</div> 
  <div class="itemCai"><img src="./img/btspd/9.jpg" style="width:95%"></img><br />轰炸大鸡排</div> 
  </div>
  <!--- 取号区 --->
 </div>
  <div class="container-fluid text-center" id="lgjcb">
  &nbsp;
  </div>
  <div class="panel panel-warning">
  <div class="panel-body">
    <?php echo $btspd_txt; ?>
  </div>
  </div>
  <div class="container-fluid text-center" id="lgjcc">
  <center><p><img src="img/btspd.png" class="img-responsive"></img></p></center>
  </div>
  <script src="jcf/jquery/jquery-2.1.4.min.js"></script>  
  <script src="jcf/masonry/masonry.pkgd.min.js"></script>
  <script src="jcf/oibcexample/welcomecai.js"></script>
 <?php
  //作者林友哲版权所有 393562235@qq.com
  ?>