<!DOCTYPE>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" /> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="referrer" content="never">
<meta http-equiv="X-Frame-Options" content="SAMEORIGIN / DENY "> 
<title><?php echo $_GET['name'];?></title>
<style>
html,body{height:100%;text-align:center;margin-left:auto; margin-right:auto;}
</style>
<script>
function qie(data){
window.parent.document.getElementById("ifplayer").src=data;
document.getElementById('ifplayer').contentWindow.location.replace(data);
}
window.onload=function(){
setTimeout(jz(),1000);
} 
function jz(){
document.getElementById('ifplayer').contentWindow.location.replace("http://www.ibb6.com/jx/v.php?url=<?php echo $_GET['url'];?>"); 
}
</script>
<body>
<?php
error_reporting(0);
include('t.php');
$url=$_GET['url'];
if(preg_match('/http:\/\/http:/',$url)){
$url=explode('//',$url);
$url='http://'.$url[2];
}
$_GET['url'] = $url;
?>
<font color="red">(如不能播放请切换线路：<a href="http://www.daidaijx.top/vip/">返回主页</a>：<?php echo $_GET['name'].'-'.$_GET['n'];?>:</font><input type="button" value="线路一" onclick='qie("http://www.daidaijx.cn/v1/v/1.php?url=<?php echo $_GET['url'];?>");return false;'>
<input type="button" value="线路二" onclick='qie("http://www.daidaijx.cn/v1/v/2.php?url=<?php echo $_GET['url'];?>");return false;' >
<input type="button" value="线路三" onclick='qie("http://www.daidaijx.cn/v1/v/3.php?url=<?php echo $_GET['url'];?>");return false;'>
<input type="button" value="线路四" onclick='qie("http://www.daidaijx.cn/v1/v/4.php?url=<?php echo $_GET['url'];?>");return false;' >
<input type="button" value="线路五" onclick='qie("http://www.daidaijx.cn/v1/v/5.php?url=<?php echo $_GET['url'];?>");return false;'>

<input type="button" value="线路六" onclick='qie("http://www.daidaijx.cn/v1/v/6.php?url=<?php echo $_GET['url'];?>");return false;'>

<input type="button" value="线路七" onclick='qie("http://www.daidaijx.cn/v1/v/7.php?url=<?php echo $_GET['url'];?>");return false;'>

<input type="button" value="线路八" onclick='qie("http://www.daidaijx.cn/v1/v/8.php?url=<?php echo $_GET['url'];?>");return false;'>

<input type="button" value="线路九" onclick='qie("http://www.daidaijx.cn/v1/v/9.php?url=<?php echo $_GET['url'];?>");return false;'>

<input type="button" value="线路十" onclick='qie("http://www.daidaijx.cn/v1/v/10.php?url=<?php echo $_GET['url'];?>");return false;'>

<input type="button" value="线路十一" onclick='qie("http://www.daidaijx.cn/v1/v/11.php?url=<?php echo $_GET['url'];?>");return false;'>

<input type="button" value="线路十二" onclick='qie("http://www.daidaijx.cn/v1/v/12.php?url=<?php echo $_GET['url'];?>");return false;'>


<font color="red">)</font>
<iframe src="http://www.daidaijx.cn/v1/v/1.php?url=<?php echo $_GET[url];?>" name="ifplayer" width="100%"height="93%" id="ifplayer" allowTransparency="true" allowfullscreen="true" allowtransparency="true" frameborder="0"scrolling="no"></iframe>
 
<script>

</script>
<div style="display:none">

<!--要发移动顶部悬浮广告-->
<script type="text/javascript" src="http://www.daidaijx.cn/广告js/ggdl6.js"></script>

</body>