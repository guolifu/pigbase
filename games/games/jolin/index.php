
<html>
	<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,minimal-ui">
			<meta http-equiv="pragma" content="no-cache">
			<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
			<meta http-equiv="expires" content="-1">
			<title>一起寻找蔡依林</title>
			<link rel="stylesheet" type="text/css" href="m.min.css">
		</head>


		<style>
		html,body,{
			margin: 0px;
			padding: 0px;
			border:none;
			text-align: center;

		}
		#container{
		height:90%;
		
		}
		#share-wx{
			background:rgba(0,0,0,0.8);
			position:absolute;top:0px;
			left:0px;
			width:100%;
			height:100%;
			z-index:10000;
			display:none;
		}
		#wx-qr{
			background:rgba(0,0,0,0.8);
			position:absolute;top:0px;
			left:0px;
			width:100%;
			height:100%;
			z-index:10000;
			display:none;
		}
.lis{overflow: hidden;width: 100%;z-index: 99999;position: absolute;top:0;right:0;left:1}
.lis a{display: block;width:100%;color:#ffffff;font-size:14px;text-decoration: none;background:#606783;text-align: center;opacity: 0.5;line-height:30px;font-weight: bold;font-family:"微软雅黑"}
.lis a img{position: relative;top: 1px;}
.ads{overflow: hidden;width: 100%;z-index: 999999;position: absolute;bottom:0;right:1}
    </style>
<body>


<!--div class="lis">
		<div style="float: left;width:33%;"><a style="border-bottom: 3px solid #fd6766;" href="/list/">游戏列表</a></div>
		<div style="float: left;width:34%;"><a style="border-bottom: 3px solid #04fece;" href="/jump/zjkbst.do">关注收藏</a></div>
		<div style="float: left;width:33%;"><a style="width:100%;margin:0;border-bottom: 3px solid #fdcd01;" onclick="location.href=location.href;" href="javascript:;" ><img width="15" src="4.png">重玩</a></div>
</div-->

	<div id="container">
	
	</div>

 
	<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/jolin.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/jolin",
		        "tTitle": "一起寻找蔡依林，众多凤姐里找蔡依林，我果然是火眼金睛呀!",
		        "tContent": "一起寻找蔡依林，众多凤姐里找蔡依林，我果然是火眼金睛呀!"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location = "http://www.v918.cn/vgames/";
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.title ="众多凤姐里找蔡依林!哇哦，被我找到"+myData.score+"个蔡依林，你行么？";
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
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
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "djyqlzmz" };
			//window.shareData.timeLineLink = "http://www.v918.cn/vgames/gamecenter.html?gameid=" + myData.gameid + (localStorage.myuid ? "&uid=" + localStorage.myuid : "");
			function dp_submitScore(score){
				myData.score = score;
				myData.scoreName ="找到"+score+"次蔡依林";
				if(score>1){
					if (confirm("屌爆了你"+myData.scoreName+"，惊为天人不把这个游戏告诉你的小伙伴儿，那就太不厚道咯！")){
						dp_share();
					}
					else {
					dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("要将成绩分享到朋友圈吗？")) {
                         //   window.location = "http://wx.9g.com/rank/submit2.jsp?gameid=" + myData.gameid + "&uid=" + localStorage.myuid + "&score=" + myData.score + "&scorename=" + encodeURIComponent(myData.scoreName);
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
<script id="tpl" type="text/html">
<div class="grid">
        <div class="page hide" id="loading">
            <div class="loading-txt"><%=loading%></div>
        </div>
        <div class="page hide" id="index">
            <h1><%=title%></h1>

            <div id="help"><%=help_txt%></div>
            <div class="btns">
                <button data-type="color" class="btn play-btn">
                    <%=btn_start%>
                </button>
				<a href="javascript:void(0);"  onclick="clickMore();" class="btn btn-boyaa">
								<%=btn_more_game%>
				</a>
            </div>
        </div>
        <div class="page hide" id="room">
            <header>
                <span class="lv">
                    <%=score%>
                    <em>
                        1
                    </em>
                </span>
                <span class="time">
                </span>
               <span class="btn btn-pause">
                    <%=btn_pause%>
                </span>
				
            </header>
            <div id="box" class="lv1">
            </div>
        </div>
        <div class="page hide" id="dialog">
        <div class="inner">
                <div class="content gameover">
                    <div class="inner-content">
                        
                        <h3></h3>
                        <div class="btn-wrap">
                            <button class="btn btn-restart">
                                <%=btn_reTry%>
                            </button>
							<a href="javascript:void(0);" onclick="clickMore();" class="btn btn-boyaa">
								<%=btn_more_game%>
							</a>
                        </div>
						
						
                    </div>
                </div>
                <div class="content pause">
                    <div class="inner-content">
                        
                        <h3>
                            <%=game_pause%>
                        </h3>
                        <div class="btn-wrap">
                            <button class="btn btn-resume">
                                <%=btn_resume%>
                            </button>
							<a href="javascript:void(0);" onclick="clickMore();" class="btn btn-boyaa">
								<%=btn_more_game%>
							</a>

                        </div>
						
                    </div>
                </div>
            </div>
    </ins>
        </div>
    </div>
	<div id=share style="display: none">
			<img width=100% src="share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
	</div>
</script>
<script src="libs.min.js"></script>
<script src="main.min.js"></script>


<!--百度-->
<div style="display: none;">
 
</div>
<!--百度-->