<!DOCTYPE html>
<html lang="zh_CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.9.0/jquery.min.js"></script>
	<title>点击下载应用</title>
	<style type="text/css">
	*{margin:0; padding:0;}
	a{text-decoration: none;}
	img{max-width: 100%; height: auto;}
	.weixin-tip{ position: fixed; left:0; top:0; bottom:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80);  height: 100%; width: 100%; z-index: 100;}
	.weixin-tip p{text-align: center; margin-top: 10%; padding:0 5%;}
	</style>
</head>
<body>
	<div class="weixin-tip">
		<p>
			微信打开
			<!-- <img src="live_weixin.png" alt="微信打开"/> -->
		</p>
	</div>
	<script type="text/javascript">
	alert(navigator.userAgent.toLowerCase());
   //      $(window).on("load",function(){
	  //       var winHeight = $(window).height();
			// function is_weixin() {
			//     var ua = navigator.userAgent.toLowerCase();
			//     if (ua.match(/MicroMessenger/i) == "micromessenger") {
			//         return true;
			//     } else {
			//         return false;
			//     }
			// }
			// var isWeixin = is_weixin();
			// if(isWeixin){
			// 	$(".weixin-tip").css("height",winHeight);
	  //           $(".weixin-tip").show();
			// }
   //      })
	</script>
</body>
</html>