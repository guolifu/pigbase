﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			content="width=device-width,user-scalable=no,initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title>贱人配对</title>
		<link type="text/css" href="css/game_base.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>

		<script type="text/javascript" src="js/game_base.js"></script>
		<script type="text/javascript" src="js/createjs-2013.12.12.min.js"></script>
		<script type="text/javascript" src="js/createjs_game.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

		<style type="text/css">
.follow {
	z-index: 100;
	position: absolute;
	left: -500px;
	bottom: 0px;
	width: 20%;
	opacity: 0;
}

.follow img {
	width: 100%
}

.moreGames {
	z-index: 100;
	position: absolute;
	bottom: 10px;
	margin-left: auto;
	margin-right: auto;
	width: 100%;
	text-align: center;
}

.moreGames a {
	font: 11px Arial;
	text-decoration: none;
	background-color: #C0C0C0;
	color: #FFFFFF;
	padding: 2px 10px 2px 10px;
	border-radius: 8px;
	-webkit-border-radius: 8px;
}
</style>
	</head>
	<body>
		<canvas id="stage">
		您的浏览器不支持html5, 请换用支持html5的浏览器
		</canvas>
		<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/index.html'; //更多游戏链接
		window.shareData = {
		        "imgUrl": "./img/icon.png", //分享朋友圈时的图标
		        "timeLineLink": "http://www.v918.cn/vgames/jrpd/", //分享朋友圈时的URL
		        "tTitle": "贱人配对", //分享朋友圈时的标题
		        "tContent": "贱人就是矫情……我配我配我配配配" //分享朋友圈时的内容
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function dp_share(){
			document.title = "瞧瞧！我把"+myscore+"对贱人给办了！贱人配对我最牛，你敢来挑战吗？";
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
		}
		function dp_Ranking(){
			//alert("到更多");
			window.location=mebtnopenurl;
		}

		function showAd(){
		}
		function hideAd(){
		}
		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		    
		    WeixinJSBridge.on('menu:share:appmessage', function(argv) {
		        WeixinJSBridge.invoke('sendAppMessage', {
		            "img_url": window.shareData.imgUrl,
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, onShareComplete);
		    });

		    WeixinJSBridge.on('menu:share:timeline', function(argv) {
		        WeixinJSBridge.invoke('shareTimeline', {
		            "img_url": window.shareData.imgUrl,
		            "img_width": "640",
		            "img_height": "640",
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, onShareComplete);
		    });
		}, false);
		</script>
		<div id=share style="display: none">
			<img width=100% src="img/share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';">
		</div>
		<div style="display: none;">
			<script type="text/javascript">
		
			var myData = {};
			function dp_submitScore(score){
				myscore=score;
				myData.score = score;
				myData.scoreName = score+"对贱人";
				if(score>5){
					if (confirm("真行，配成了"+score+"对贱人！要不要通知下小伙伴们呢？")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
	        }
			</script>
	</body>
</html>