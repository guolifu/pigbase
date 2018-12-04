
<!DOCTYPE html>
<html lang="en">
<head>
	<title>气球砰砰砰</title>
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no,width=device-width,minimal-ui" />
	
	<link rel="shortcut icon" href="icon.png">
<link rel="icon" href="icon.png">
	<style>
		body {
			margin: 0px;
			padding: 0px;
			width: 100%;
			background-color:black;
		}

		canvas {
			image-rendering: -o-crisp-edges;
			image-rendering: optimize-contrast;
			-ms-interpolation-mode: nearest-neighbor;
			-webkit-tap-highlight-color: rgba(0,0,0,0);
			-moz-tap-highlight-color: rgba(0,0,0,0);
			tap-highlight-color: rgba(0,0,0,0);
			user-select: none;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
		}
	</style>

	<script src="js/viewporter.js"></script>

    <script>
    // Kaisergames API development prototype
    // make sure this code is executed before the game calls any kaisergames.* methods!
    if (typeof window !== "undefined" && !window.kaisergames){
        window.kaisergames = new function(){
            return {
                /**
                 * @param level string[optional]
                 * @param score number[optional]
                 */
                gameOver: function(level, score) {
                    if (!level) level = "-";
                },

                /**
                 * @param level string[optional]
                 * @param score number[optional]
                 */
                levelUp: function(level, score) {
                    if (!level) level = "-";
                },

                /**
                 * @param level string
                 * @param score number
                 */
                submitHighscore: function(level, score) {
                    if (!level) level = "-";
                    
                }
            }
        }
    }
    </script>
</head>

	<body>
		<div id="viewporter">
		   <canvas id="canvas" moz-opaque></canvas>
		</div>
		<input id="bt-game-id" type="hidden" value="8-ball">
		<div id="moregame" style="position:fixed;z-index:99; bottom:20px; left:0px; font-size:20px; width:100%; text-align:center;">
		<a href="javascript:void(0);" onClick="dp_share();">炫耀一下</a>
		<a href="javascript:void(0);" onClick="clickMore();">更多游戏</a>
	</div>
	</body>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/howler.js"></script>
	<script src="js/app.min.js"></script>
	<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/index.html';
var thegameurl ="http://www.v918.cn/vgames/games/qqppp/"; 
var guanzhuurl ="http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd";
		window.shareData = {
		        "imgUrl": "http://mmbiz.qpic.cn/mmbiz/2zpp2iaH4HWH1yXgxEqLG0UslEPjMCgyiaPwtk7cgdzTZGz2hylQv3Jz3yAEtXDyVh5NOdYJaF6M8kU86RlpFAmQ/640",
		        "timeLineLink": thegameurl,
		        "tTitle": "气球砰砰砰",
		        "tContent": "气球砰砰砰"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("f=zf",1)>0){
				window.location =mebtnopenurl;
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.getElementById("share").style.display="";
			
		}
		function dp_Ranking(){
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
			<img width="100%" src="share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
			<script type="text/javascript">
            var myData = { gameid: "qqppp" };
			 // var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
			window.shareData.timeLineLink = mebtnopenurl;
			function dp_submitScore(score){
						myData.score = parseInt(score);
						myData.scoreName ="获得"+score+"分";		
						document.title = window.shareData.tTitle = "我玩《气球砰砰砰》得了"+score+"分，气球爱消除，快来一起玩吧！";
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("？")) {
                            window.location =mebtnopenurl;
                        }
                        else {
                            document.location.href = mebtnopenurl;
                        }
                    }, 500);
                }
				else {
		        	document.location.href = guanzhuurl ;
				}
	        }
			</script>
			<div style="display: none;">
			<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script>
			</div>
</html>