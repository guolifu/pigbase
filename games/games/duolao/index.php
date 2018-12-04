<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="icon" type="image/GIF" href="res/favicon.ico"/>
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="viewport" content="user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="full-screen" content="yes"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    <title>看看你有多老</title> 
    <script type="text/javascript" src="static/cocos2d-3.0rc1.canvas.v2.min.js"></script>
</head>
<body>	 
    <canvas id="gameCanvas" width="480" height="800" style="background:#fff"></canvas>
    <script src="static/weixinapi.min.js"></script>
    <script type="text/javascript">
          window.onload = function(){
              cc.game.onStart = function(){
                  cc.view.enableAutoFullScreen(false);
                  cc.view.setDesignResolutionSize(720, 1280, cc.ResolutionPolicy.SHOW_ALL);
                  cc.view.resizeWithBrowserSize(true);
                  cc.director.setDisplayStats(cc.game.config.showFPS);
                  //load resources
                  cc._loaderImage = "";
                  cc.LoaderScene.preload([], function () {
                      cc.director.runScene(new HelloWorldScene());
                  }, this);
              };
              cc.game.run("gameCanvas");
          };
    </script>
   
<img src="http://img.tongji.linezing.com/3455448/tongji.gif">
</body>
</html>