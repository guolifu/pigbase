
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />  
<link rel="stylesheet" type="text/css" href="css/css.css?v=20140614"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/createjs.min.js"></script>
<script type="text/javascript" src="js/common.js?v=20140614"></script>
<title>微时代管家</title>
</head>
<body>
<div class="wrap">
    <div class="P_layer start">
        <div class="P_layer loading" id="loading"><div class="f"></div><div class="P_layer fs"></div><div class="P_layer ft">0%</div></div>
    	<div class="box zoom">
            <img src="images/start/bg.jpg" width="100%"/>
            <div class="P_layer footballtarget"></div>
            <div class="P_layer logo"></div>
            <div class="P_layer txt-star"></div>
            <div class="P_layer txt-1"></div>
            <div class="P_layer txt-2"></div>
            <div class="P_layer prize"></div>
        </div>
        <div class="P_layer cbox zoom">
                <div class="P_layer selecttype" id="selecttype">
                    <div class="P_layer t1"></div>
                    <div class="P_layer t2"></div>
                    <div class="P_layer t3"></div>
                </div>
                <!--div class="P_layer prosess"><div style="width:50%;"></div></div-->
                <div class="P_layer tip" style="zoom:0.99">开始游戏</div>
                <div class="P_layer hand"></div>
                <div class="P_layer halo"></div>
                <div class="P_layer football"></div>
                
                <div class="P_layer speedup">
                    <div class="P_layer txt"></div>
                    <div class="P_layer txt-s"><div class="num" style="zoom:0.99">5</div><div class="go" style="zoom:0.99">GO!</div><div class="ready" style="zoom:0.99">Ready!</div></div>
                    <div class="P_layer prosess1">
                        <span class="b"><span style="width:0%;"></span></span>
                    </div>
                    <div class="P_layer hand1"></div>
                </div>
        </div>
    </div>
    <div class="gaming">
        <div class="sky"></div>
    	<div class="P_layer box zoom">
            <div class="P_layer footballflightnum" style="zoom:0.99"><span class="num" style="zoom:0.99">0</span>km</div>
            <div class="P_layer football">
                <div class="shock"></div>
                <div class="shock-1"></div>
                <div class="shock-2"></div>
                <div class="ball"></div>
                <div class="fire"></div>
                <div class="P_layer condoms"></div>
            </div>
            <div class="P_layer superman"></div>
        </div>
    </div>
    <div class="P_layer gend">
    	<div class="box zoomh">
        	<div class="P_layer yuan"></div>
        	<div class="P_layer football"></div>
        	<div class="P_layer xh"></div>
            <div class="P_layer t1"></div>
            <div class="P_layer t2">
            	<div class="txt"><span style="zoom:0.99">你创造了</span><b style="zoom:0.99">3200km</b></div>
            </div>
            <div class="P_layer t3"></div>
            
            <div class="P_layer c2" onclick="goHome();"></div>            
            <div class="P_layer b3"></div>
        </div>
    </div>
</div>
<audio src="mp3/2.mp3" preload="auto"></audio>
<div class="sceentip" style="zoom:0.99">为了给您提供最佳游戏体验，请竖屏体验吧！~</div>
<script type="text/javascript">
// if((window.location+"").indexOf("zf",1)>0){
// 	if(confirm("游戏说明：两种游戏模式进行发射，5秒内猛戳手机或猛摇手机。关注软灵通，并回复【大力射手】可永久保存此游戏，点取消可先试玩。")){
// 		window.location = "http://www.v918.cn/vgames";
// 	}
// }		



var _smq = _smq || [];
_smq.push(['_setAccount', 'c9930ed8', new Date()]);
_smq.push(['pageview']);
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29156015-1']);
  _gaq.push(['_addOrganic', 'soso', 'w']);
  _gaq.push(['_addOrganic', 'sogou', 'query']);
  _gaq.push(['_addOrganic', 'yodao', 'q']);
  _gaq.push(['_trackPageview']);
</script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/dlss.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/dlss",
		        "tTitle": "大力射手-软灵通",
		        "tContent": "想要射得突破天际？大力才能出奇迹！"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function dp_share(){
			document.title = "简直不敢相信，我一下射出"+myscore+"km，你敢来挑战吗？";
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
			<img width=100% src="http://www.v918.cn/vgames/games/dlss/share.png" style="position: fixed;z-index:9999; top: 0; left: 0; display: " ontouchstart="document.getElementById('share').style.display='none';"/>
		</div>
		<script src="http://www.v918.cn/vgames/dlss/auth/api.js"></script>
		<div style="display: none;">
			<script type="text/javascript">
			var auth = new Auth9G("dlss");
			var myData = {};
			auth.identify = function() {
				if (auth.user) {
					window.shareData.timeLineLink += ((window.shareData.timeLineLink.indexOf("?") == -1 ? "?" : "&") + "uid=" + auth.myuid);
				}
			}
			auth.ready = function() {
				
			}
			auth.check();
		
			function dp_submitScore(score){
				myscore=score;
				myData.score = score;
				myData.scoreName = score+"km";
				if(score>1000){
					if (confirm("哇塞，这一射"+score+"km！要不要通知下小伙伴们呢？")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
				if (auth.user && myData.score != undefined) {
					setTimeout(function(){
						if (confirm("要将成绩提交到软灵通排行榜吗？")) {
							auth.submit(myData.score, myData.scoreName, function(){
					        	auth.gotoRank("24h");
							});
						}
						else {
				        	document.location.href = mebtnopenurl;
						}
					}, 500);
				}
				else {
		        	document.location.href = mebtnopenurl;
				}
	        }
			</script>
</body>
</html>