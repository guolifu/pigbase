<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<title>商城说明介绍</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/tpl/static/storenew/css/oder.css?r=1430970616"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />
<meta name="mobileOptimized" content="width" />
<meta name="handheldFriendly" content="true" />
<meta http-equiv="Cache-Control" content="max-age=0" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link href="/tpl/static/storenew/css/bottom.css?x=150317X2" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="/tpl/static/storenew/css/foundation.css?v=3132323">
 <link rel="stylesheet" type="text/css" href="/tpl/static/storenew/css/common-v4.0.css?v=3133233">
<style>
.main-box{padding:15px 5%;}
.rule-detail{ width: 100%; background-color: white;   padding: 15px;}
.border-box{-webkit-box-sizing: border-box;box-sizing: border-box;}
</style>
</head>
<div class="panel memberhead">
    <div class="header-l">
	<img class="icon-level-p1" src="<?php echo ($fans["portrait"]); ?>"/>
    </div>

    <div class="header-r">
        <ul class="distributor-infor">

            <li><span class="distributor-infor-label">昵称：</span><span class="distributor-infor-c"><?php echo ($fans["truename"]); ?></span></li>

            <li><span class="distributor-infor-label">等级：</span><span class="distributor-infor-c">会员(<a
                    class="txt-link" href="#"> 分享微店赚佣金</a>)</span>
            </li>
            <li><span class="distributor-infor-label">注册日期：</span><span class="distributor-infor-c">
                   <?php echo (date("Y-m-d",$weiuser)); ?></span>
            </li>
        </ul>

    </div>
</div>
</div>
<!--head end-->
<!--count begin-->
<div class="row count">
    <div class="small-4 large-3 columns mid">

        <a href="#" class="count-a">
            <p class="count-dis-mony"><?php echo ($fans["total_score"]); ?></p>
            <span class="count-title">总积分</span></a>

    </div>
    <div class="small-4 large-3 columns mid">

        <a href="#" class="count-a">
            <p class="count-dis-mony"><?php echo ($fans["balance"]); ?></p>
            <span class="count-title">账户余额</span></a>

        <!-- -->
    </div>

    <div class="small-4 large-3 columns last">
        <a href="#" class="count-a">
            <p class="count-dis-mony"><?php echo (($count['total'])?($count['total']):0); ?>元</p>
            <span class="count-title">累计佣金</span></a>
    </div>

</div>
<body  class="body-gray my-memvers">
<section class="main animated fadeInDown">
	<div class="main-box">
	
		<div class="rule-detail border-box">
			<?php echo ($note); ?>
		</div>
	</div>
</section>

</div>
	

<footer style="width:100%;min-width:300px;margin-top:10px;margin-bottom:50px;padding:10px 0;color:#555;text-align:center;"><a style="color:#555;margin:0 3px;" href="">&copy; 优一果</a></footer>
<!--页面底部-->
<div class="foot30"></div>
<div class="wx_nav">
	<a href="<?php echo U('Storenew/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'cid' => $cid, 'twid' => $twid));?>" data-href="###" class="nav_index on">首页</a>
	<!-- <a href="<?php echo U('Storenew/jingpai',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'cid' => $cid, 'twid' => $twid));?>"  class="nav_search" style="display:">限时竞拍</a>
	 -->
	 <a href="tel:<?php echo ($com['tel']); ?>"  class="nav_search" style="display:">客服电话</a>
	<a href="<?php echo U('Storenew/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'cid' => $cid, 'twid' => $twid));?>"  class="nav_shopcart">购物车</a>
	
	<?php if($is_sub == 2): ?><a href="<?php echo U('Storenew/myinfo',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'cid' => $cid, 'twid' => $twid));?>"  class="nav_me">个人中心</a>
	<a href="<?php echo ($gzhurl); ?>"  class="nav_fav">一键关注</a>
	<?php else: ?>
	<a href="<?php echo U('Storenew/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'cid' => $cid, 'twid' => $twid));?>"  class="nav_shopping_guide">我的订单</a>
	<a href="<?php echo U('Storenew/myinfo',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'cid' => $cid, 'twid' => $twid));?>"  class="nav_me">个人中心</a><?php endif; ?>
</div>
<!--页面底部-->
</html>