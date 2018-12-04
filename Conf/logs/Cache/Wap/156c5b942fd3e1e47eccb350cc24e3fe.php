<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">

        <title>支付密码</title>
		<script src="tpl/Wap/default/common/js/card/jquery.js"></script>
		
		<style>
			body {
				background:#555;
				font-family:"microsoft YaHei";
			}
			.box {
				height:250px;
				margin:20px auto;
				background:#fff;
				padding:20px;
				text-align:center;
			}
			.tit {
				font-size:20px;
				color:#666;
				font-weight:bold;
				border-bottom:1px solid #ccc;
				height:35px;
				line-height:35px;
			}
			.cont {
				margin:30px;
			}
			.inp {
				border: 1px solid #AAAAAA;
				color: #AAAAAA;
				margin-right: 5px;
				padding: 3px;
				border-radius: 2px 2px 2px 2px;
				height:30px;
				line-height:30px;
			}
			button {
				border: 1px solid #3d810c;
				box-shadow: 0 1px #CCCCCC;
				-moz-box-shadow: 0 1px #CCCCCC;
				-webkit-box-shadow: 0 1px #CCCCCC;
				cursor: pointer;
				display: inline-block;
				text-align: center;
				vertical-align: bottom;
				overflow: visible;
				border-radius: 3px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				background-color: #f1f1f1;
				background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%);
				background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%);
				background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%);
				color: #000;
				border: 1px solid #AAA;
				padding: 2px 8px 2px 8px;
				text-shadow: 0 1px #FFFFFF;
				font-size: 14px;
				line-height: 1.5;
				width:80px;

			}
		</style>
		
		
	</head>
	
	<body>
	
		<article class="box">
			<div class="tit">请输入会员卡支付密码</div>
			<div class="cont">
				<h2>￥ <?php echo ($_REQUEST['price']); ?></h2>
				<form action="#" method="post" name="payform">
					<input type="password" name="pass" class="inp" id="pass" placeholder="支付密码" />
				</form>
			</div>	
			<footer>
				<button onclick="javascript:history.go(-1)">取消</button>
				<button id="topay" style="color:red">支付</button>
			</footer>
		</article>
	
	</body>
	
<script>

	jQuery(function($) {
		$('#topay').click(function(){
			$('form[name=payform]').submit();
		});
		
		
		
		
		
		
	});  

			
	
</script>
	
</html>