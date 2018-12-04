<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="description" content="Common form elements and layouts">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>绑定公众号流程_<?php echo ($f_siteName); ?></title>

<link href="<?php echo ($staticPath); ?>/tpl/static/demo/application-d2.css" media="all" rel="stylesheet" type="text/css">
<link href="<?php echo ($staticPath); ?>/tpl/static/demo/application_1.css" media="all" rel="stylesheet" type="text/css">
<link href="<?php echo ($staticPath); ?>/tpl/static/demo/ace.css" media="all" rel="stylesheet" type="text/css">
<link href="<?php echo ($staticPath); ?>/tpl/static/demo/application_2.css" media="all" rel="stylesheet" type="text/css">
 <meta content="authenticity_token" name="csrf-param">

</head>

<body data-spy="scroll" data-target="#nav-sidebar" class="gl-body">
  <div class="gl-top"></div>

  <div class="gl-main row" style="margin:0">
    <div class="gl-content col-sm-12">
      <div class="gl-ct-inner2">
  <div class="step" id="step">
    <div class="step-bar">
      <div class="step-bar-cont active">
        <span class="title">进入开发者中心</span>

        <div class="step-num">
          <span class="count">1</span>
        </div>
      </div>
      <div class="step-bar-cont ">
        <span class="title">启用服务器配置</span>

        <div class="step-num">
          <span class="count">2</span>
        </div>
      </div>
      <div class="step-bar-cont">
        <span class="title">确定启用服务器配置</span>

        <div class="step-num">
          <span class="count">3</span>
        </div>
      </div>
      <div class="step-bar-cont">
        <span class="title">修改服务器配置</span>

        <div class="step-num">
          <span class="count">4</span>
        </div>
      </div>
      <div class="step-bar-cont">
        <span class="title">验证绑定结果</span>

        <div class="step-num">
          <span class="count">5</span>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="step-content">
      <div class="details show">
        <div class="title">第一步 登录您的微信公众平台，登录后点击左侧菜单的“开发者中心”<a href="https://mp.weixin.qq.com/" class="pull-right font-size13" target="_blank" style="margin-left:20px;font-weight:normal">点击进入公众平台</a></div>
        <div class="pic">
          <img src="/tpl/static/demo/3.jpg">
        </div>
      </div>
      <div class="details">
        <div class="title">第二步 进入开发者中心之后，点击下图中绿色的“启用”按钮（如果按钮是红色的就忽略这个直接进入下一步）</div>
        <div class="pic">
        <br><br>
          <img src="/tpl/static/demo/4.jpg">
        </div>
      </div>
      <div class="details">
        <div class="title">第三步 点击确定开启（如果已开启就进入下一步）</div>
        <div class="pic">
          <img src="/tpl/static/demo/5.jpg">
        </div>
      </div>
      <div class="details">
        <div class="title">第四步 点击“修改配置”，按照下面要求填写接口配置信息，填写后提交即可</div>
        <div class="pic">
          <img src="/tpl/static/demo/6.jpg">
        </div>

        <div class="group"><label class="green" style="width:125px;">URL：</label>
          <input value="<?php echo ($f_siteUrl); ?>/index.php?g=Home&m=Weixin&a=index&token=<?php echo ($wxuser["token"]); echo ($wxuser["urlsubfix"]); ?>" type="text"><input id="copy-button1" data-clipboard-text="<?php echo ($f_siteUrl); ?>/index.php?g=Home&m=Weixin&a=index&token=<?php echo ($wxuser["token"]); echo ($wxuser["urlsubfix"]); ?>" class="btn btn-sm btn-default" value="复制" type="button">
        </div>
        <div class="group"><label class="green" style="width:125px;">Token：</label>
          <input value="<?php if($wxuser['pigsecret']){echo $wxuser['pigsecret'];}else{echo $wxuser['token'];} ?>" type="text"><input id="copy-button2" data-clipboard-text="<?php if($wxuser['pigsecret']){echo $wxuser['pigsecret'];}else{echo $wxuser['token'];} ?>" class="btn btn-sm btn-default" value="复制" type="button">
        </div>
        <div class="group"><label class="green" style="width:125px;">AESEncodingKey：</label>
          <input value="<?php echo ($wxuser["aeskey"]); ?>" type="text"><input id="copy-button3" data-clipboard-text="<?php echo ($wxuser["aeskey"]); ?>>" class="btn btn-sm btn-default" value="复制" type="button">
        </div>
        <div class="group"><label class="green" style="width:125px;">消息加解密方式：</label>
         <input value="<?php echo ($wxuser["encodetype"]); ?>" type="text"> <input id="copy-button4" data-clipboard-text="<?php echo ($wxuser["aeskey"]); ?>>" class="btn btn-sm btn-default" value="推荐" type="button">
        </div>

      </div>
      <div class="details last ">
        <div class="pic ">
          <img class="pull-left" src="/tpl/static/demo/7.png">

          <div class="up-success" style="line-height:200%">用个人微信账号往您的公众账号发送一条消息<span class="green">“帮助”</span>，如收到回复，说明您已经设置成功。
          </div>
          <div class="tools align-center" style="line-height:200%">
            <label class="grey">未收到回复？<a href="<?php echo U('Index/bindEdit');?>">重新绑定</a></label>
            <br>
             <br>
            <a href="<?php echo U('Function/index',array('id'=>$wxuser['id'],'token'=>$wxuser['token']));?>" class="btn btn-primary form-control">设置完成了，进入管理中心</a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="pull-right margin-top-20 tools">
        <a href="<?php echo U('Index/bindHelp');?>">返回</a>
        <a href="javascript:;" data-toggle="prev" data-target="#step" class="hide">上一步</a>
        <a href="javascript:;" data-toggle="next" data-target="#step">下一步</a>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

</div>


    </div>
  </div>

  <script src="/tpl/static/demo/application7.js" type="text/javascript"></script><a style="display: none; position: fixed; z-index: 2147483647;" title="" href="#top" id="scrollTop"></a>

  <script type="text/javascript">
      $(function(){

      });
  </script>

  <script type="text/javascript">
    $(function() {
    });
</script>

  <script>
  $(function(){
    var clip1 = new ZeroClipboard( document.getElementById("copy-button1"), {
      moviePath: "/tpl/static/demo/ZeroClipboard.swf"
    });
    clip1.on( "load", function(client) {
      client.on( "complete", function(client, args) {
        showTip("success","链接已复制到剪贴板");
      });
    } );

    var clip2 = new ZeroClipboard( document.getElementById("copy-button2"), {
      moviePath: "/tpl/static/demo/ZeroClipboard.swf"
    });
    clip2.on( "load", function(client) {
      client.on( "complete", function(client, args) {
        showTip("success","链接已复制到剪贴板");
      });
    } );
    
    
     var clip3 = new ZeroClipboard( document.getElementById("copy-button3"), {
      moviePath: "/tpl/static/demo/ZeroClipboard.swf"
    });
    clip3.on( "load", function(client) {
      client.on( "complete", function(client, args) {
        showTip("success","链接已复制到剪贴板");
      });
    } );
  });
</script>
</body></html>