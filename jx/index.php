<html>
<head>
  <title>呆呆解析-VIP视频在线解析</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="vip视频解析,vip视频在线解析,vip解析,万能vip视频解析,vip视频全能解析,vip视频,手机vip视频解析,手机在线解析vip视频,优酷vip解析,爱奇艺vip解析,腾讯vip解析,乐视vip解析,StoneTVvip解析">
  <meta name="description" content="全民解析VIP视频免费看，在线解析，vip视频解析，优酷vip解析，爱奇艺vip解析，腾讯vip解析，乐视vip解析，芒果vip解析方便广大用户VIP视频服务，">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h1 style="text-align:center;color:red;">呆呆解析-简版第二版</h1>

<?php
error_reporting(0);
include('t.php');
include('1.php');
echo "<a href='http://www.daidaijx.cn/jiaocheng.html'>URL解析使用图文指南</a><hr/>";
if($_GET['word']==""){
$_GET['word'] = '最新';
}
if($_GET['word']!='最新')
$p=$_GET['p'];
if($p=="")
$p=1;
$a=file_get_contents('http://kan.2345.com/search_'.$_GET['word'].'/?'.$p);
$a=iconv("gb2312","utf-8//IGNORE",$a);
$pn=$p-1;
$b=explode('<span class="sMark"><em class="searchWords">',$a);
$c=explode('<div class="posterCon">
            <div class="pic">',$b[0]);
$cc=count($c);
for($aa=1;$aa<$cc;$aa++){

$d=explode('//',$c[$aa]);
$e=explode('"',$d[2]);
$f=explode('title="',$d[2]);
$g=explode('"',$f[1]);
$h=explode('<div class="playNumList',$c[$aa]);
$i=explode('href="http://',$h[1]);
$k=count($i);
echo "<div style='clear:both'></div>";
echo "<h2  style='margin-top:25px;'>$g[0]</h2><img  class='rounded-circle' style='float:left;' src='http://$e[0]'>";
echo '<div class="rows">';
for($ii=1;$ii<$k;$ii++){
$j=explode('"',$i[$ii]);
$api[$aa]['url'][$ii] = $j[0];
echo " <div class=''col-sm-2' style='margin-left:20px;float:left;'><a href='play.php?url=http://$j[0]&name=$g[0]&n=$ii'>第".$ii."集</a></div>";
}
$api[$aa]['name'] = $g[0];
$api[$aa]['src'] = $e[0];
if(!preg_match('/\d集/',$c[$aa])){
$x=explode('<!-- 播放按钮 start -->',$c[$aa]);
$x=explode('href="',$x[1]);
$x=explode('"',$x[1]);
echo "<div class='col-*-*' ><a href='play.php?url=http://$x[0]&name=$g[0]'>播放</a></div>";
$api[$aa]['name'] = $g[0];
$api[$aa]['src'] = $e[0];
$api[$aa]['url'] = $x[0];
echo '</div>';
}


}
echo "<div style='clear:both'></div>";
$pn=$p-1;
echo '<ul class="pagination pagination-lg">';
if($p>1){
echo "<li class='page-item'><a class='page-link' href='index.php?word=$_GET[word]&p=$pn'>上一页</a></li>";
}
if(preg_match('/下一页/',$a)){
$pl=$p+1;

echo "<li class='page-item'><a class='page-link' href='index.php?word=$_GET[word]&p=$pl'>下一页</a></li>";

}
?>
</ul>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
本站所有资源均收集于网络，不承担任何由于内容的合法性及健康性所引起的争议和法律责任。如若冒犯你的相关权益，请联系我们，我们将在72小时内进行删除。<br/>
Email:609835464@qq.com<br/>
网站所有者:呆呆解析</div>
<script src="https://s13.cnzz.com/z_stat.php?id=1273225381&web_id=1273225381" language="JavaScript"></script>
</div>

<!--小QQ开始-->
    <style>
	 .qqanimate{display:block;position:fixed;left:10px;bottom:50px;z-index:9999999;}
	 </style>
	 <div class="indexpingbi" style="display: none; z-index: 999999; width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; background-color: rgb(0, 0, 0); opacity: 0.7; background-position: initial initial; background-repeat: initial initial;"></div>
	 <div class="indextanchu" style="cursor: pointer; display: none; position: fixed; left: 80px; bottom: 20px; width: 560px; height: 250px; z-index: 9999999; background-image: background-position: initial initial; background-repeat: no-repeat no-repeat;"></div>
	 <a href="https://temai.m.taobao.com/search.htm?pid=mm_121445574_38318088_155830071" target="_blank" class="qqanimate">
		<img src="http://www.daidaijx.cn/images/跳动QQ.gif" width="172px" height="120px">
	 </a>
	 <script>
                if(getCookie("m_qq1")!='true'){
						$(".indexpingbi").css("display","block");
						$(".indextanchu").css("display","block");
					}
            	$(".indextanchu").live('click',function(e) {
                    $(".indexpingbi").css("display","none");
					$(".indextanchu").css("display","none");
					setCookie1("m_qq1","true","d365");
                });
     </script>
<!--小QQ结束-->
</body>
</html>