<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<title><?php echo ($Research["title"]); ?></title>
<link href="<?php echo RES;?>/css/guajiang/css/activity-style.css?<?php echo date('Y-m-d',time());?>" rel="stylesheet" type="text/css">
<script src="<?php echo RES;?>/css/guajiang/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/guajiang/js/alert.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/guajiang/js/wScratchPad.js" type="text/javascript"></script>
</head>
<body data-role="page" class="activity-scratch-card-winning">

<div class="main">
<div class="content">
	<?php if($Research['usenums'] != 2 AND $Research['zjl'] == 0): ?><div class="boxcontent boxwhite">
		<div class="box">
			<div class="title-brown"><span>获奖信息：</span></div>
			<div class="Detail">
            	<p><?php echo ($Research["winprize"]); ?></p>
			</div>
		</div>
	</div>
	<?php else: ?>
	<!--zjl start-->
	<div id="zjl" class="boxcontent boxwhite">
		<div class="box">
			<div class="title-brown"><span>获奖信息：</span></div>
			<!-- <div class="title-red"><span><?php if($Research['usenums'] != 2): ?>恭喜你中奖了<?php else: ?>您已经中过奖了<?php endif; ?></span></div> -->
			<div class="Detail">
				<p>您中了：<span class="red"><?php echo ($Research["winprize"]); ?></span></p>
				<p class="red"> <?php echo ($Research["sttxt"]); ?> </p>
			<?php if($record["phone"] == ''): ?><p>
	            <input name=""  class="px" id="tel" value="" type="text" placeholder="请输入您的<?php echo ($Research["renametel"]); ?>">
	            <input name=""  class="px" id="wechaname" value="" type="text" placeholder="请输入您的微信号">
	            <input name=""  id="wechaid" value="<?php echo ($record["wecha_id"]); ?>" type="hidden">
	            <input name=""  id="lid" value="<?php echo ($record["lid"]); ?>" type="hidden">
	            <input name=""  id="winprize" value="" type="hidden">
	            <input name=""  id="rid" value="<?php echo ($record["id"]); ?>" type="hidden">
	            </p>
	            <p>
	            <input class="pxbtn" name="提 交"  id="save-btn" type="button" value="用户提交">
	            </p>
            <?php else: ?>
            	<?php echo ($record["phone"]); endif; ?>
            <?php if($record["sendstutas"] == 0): ?><p><input name="" class="px" id="parssword" value="" placeholder="商家输入兑奖密码" type="password"></p>
	            <p><input class="pxbtn" name="提 交" id="save-btnn" value="商家提交" type="button"></p>
            <?php else: ?>
            	<p>已于<?php echo (date("Y-m-d",$record["sendtime"])); ?>兑奖</p><?php endif; ?>
			</div>
		</div>
	</div>
	<!--zjl end--><?php endif; ?>
	<div class="boxcontent boxwhite">
		<div class="box">
			<div class="title-brown"><span>奖项说明：</span></div>
			<div class="Detail">
			<p>每人最多有<?php echo ($Research["canrqnums"]); ?>次机会</p>
			 <?php echo $prizeStr;?>
			</div>
		</div>
	</div>
	<div class="boxcontent boxwhite">
		<div class="box">
			<div class="title-brown">活动说明：</div>
			<div class="Detail"><?php echo ($Research["info"]); ?>
				<p>活动时间:<?php echo (date("Y-m-d",$Research["statdate"])); ?>至<?php echo (date("Y-m-d",$Research["enddate"])); ?></p>
				<p><?php echo ($Research["txt"]); ?></p>				
							
			</div>
		</div>
	</div>
</div>
<div style="clear:both;"></div>
</div>	
<div style="height:60px;"></div>
<style type="text/css">
#txt {
	color: #000000;
}
.footFix{width:100%;text-align:center;position:fixed;left:0;bottom:0;z-index:99;}
#footReturn a, #footReturn2 a {
display: block;
line-height: 41px;
color: #fff;
text-shadow: 1px 1px #282828;
font-size: 14px;
font-weight: bold;
}
#footReturn, #footReturn2 {
z-index: 89;
display: inline-block;
text-align: center;
text-decoration: none;
vertical-align: middle;
cursor: pointer;
width: 100%;
outline: 0 none;
overflow: visible;
Unknown property name.-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 0;
height: 41px;
opacity: .95;
border-top: 1px solid #181818;
box-shadow: inset 0 1px 2px #b6b6b6;
background-color: #515151;
Invalid property value.background-image: -ms-linear-gradient(top,#838383,#202020);
background-image: -webkit-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -moz-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -o-linear-gradient(top,#838383,#202020);
background-image: -webkit-gradient(linear,0% 0,0% 100%,from(#838383),to(#202020));
Invalid property value.filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
Unknown property name.-ms-filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
}

</style>

<style type="text/css">
.window {
	width:290px;
	position:absolute;
	display:none;
	bottom:30px;
	left:50%;
	 z-index:9999;
	margin:-50px auto 0 -145px;
	padding:2px;
	border-radius:0.6em;
	-webkit-border-radius:0.6em;
	-moz-border-radius:0.6em;
	background-color: #ffffff;
	-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	font:14px/1.5 Microsoft YaHei,Helvitica,Verdana,Arial,san-serif;
}
.window .title {
	
	background-color: #A3A2A1;
	line-height: 26px;
    padding: 5px 5px 5px 10px;
	color:#ffffff;
	font-size:16px;
	border-radius:0.5em 0.5em 0 0;
	-webkit-border-radius:0.5em 0.5em 0 0;
	-moz-border-radius:0.5em 0.5em 0 0;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #585858 ), to( #565656 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient(#585858, #565656); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient(#585858, #565656); /* FF3.6 */
	background-image:     -ms-linear-gradient(#585858, #565656); /* IE10 */
	background-image:      -o-linear-gradient(#585858, #565656); /* Opera 11.10+ */
	background-image:         linear-gradient(#585858, #565656);
	
}
.window .content {
	/*min-height:100px;*/
	overflow:auto;
	padding:10px;
	background: linear-gradient(#FBFBFB, #EEEEEE) repeat scroll 0 0 #FFF9DF;
    color: #222222;
    text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0 0 0.6em 0.6em;
	-webkit-border-radius: 0 0 0.6em 0.6em;
	-moz-border-radius: 0 0 0.6em 0.6em;
}
.window #txt {
	min-height:30px;font-size:16px; line-height:22px;
}
.window .txtbtn {
	
	background: #f1f1f1;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #DCDCDC ), to( #f1f1f1 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #DCDCDC ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #DCDCDC ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #DCDCDC ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #DCDCDC ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #DCDCDC );
	border: 1px solid #CCCCCC;
	border-bottom: 1px solid #B4B4B4;
	color: #555555;
	font-weight: bold;
	text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0.6em 0.6em 0.6em 0.6em;
	display: block;
	width: 100%;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
	text-overflow: ellipsis;
	white-space: nowrap;
	cursor: pointer;
	text-align: windowcenter;
	font-weight: bold;
	font-size: 18px;
	padding:6px;
	margin:10px 0 0 0;
}
.window .txtbtn:visited {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #cccccc );
}
.window .txtbtn:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #cccccc );
}
.window .txtbtn:active {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #cccccc ), to( #ffffff )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #cccccc , #ffffff ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #cccccc , #ffffff ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #cccccc , #ffffff ); /* IE10 */
	background-image:      -o-linear-gradient( #cccccc , #ffffff ); /* Opera 11.10+ */
	background-image:         linear-gradient( #cccccc , #ffffff );
	border: 1px solid #C9C9C9;
	border-top: 1px solid #B4B4B4;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) inset;
}

.window .title .close {
	float:right;
	background-image: url();
	width:26px;
	height:26px;
	display:block;	
}
</style>
<div class="window" id="windowcenter">
	<div id="title" class="title">消息提醒<span class="close" id="alertclose"></span></div>
	<div class="content">
	 <div id="txt"></div>
	 <input type="button" value="确定" id="windowclosebutton" name="确定" class="txtbtn">	
	</div>
</div>
 
 

<script type="text/javascript">

        //window.prize = "<?php echo ($Research["winprize"]); ?>";

var zjl ="<?php echo ($Research["zjl"]); ?>";
var num = 0;
var goon = true;
var winprize  = "<?php echo ($Research["winprize"]); ?>";

        
      

$("#save-btn").bind("click",
	function() {
		var btn 	= $(this);
		var tel 	= $("#tel").val();
		var wxname	= $("#wechaname").val();
		var wechaid = $("#wechaid").val();
		var lid 	= $("#lid").val();
		 
		if (tel == '') {
	        alert("请认真输入<?php echo ($Research["renametel"]); ?>");
	        return
    	}
		if(wxname == ''){
			alert("请认真输入微信号");
			return;
		}

		var submitData = {
			/*code: $("#sncode").text(),*/
			tel 	: tel,
			wxname	: wxname,
			wechaid : wechaid,
			lid 	: <?php echo ($Research["id"]); ?>,
			rid 	: <?php echo ($record["id"]); ?>,
			reid 	: <?php echo ($rid); ?>,
			action 	: "add",
			token 	: '<?php echo ($token); ?>'
		};
		$.post('index.php?g=Wap&m=Research&a=add&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>', submitData,
			function(data) {
				if (data.success == true) {
					alert(data.msg);
					$("#zjl").hide("slow");
					setTimeout("window.location.href = location.href",2000);
					return
				} else { 
					//alert('失败'+data);
					return
				}
			},"json")
});



$("#save-btnn").bind("click",
function () {
	var submitData = {
		id: <?php echo ($record["lid"]); ?>,
		rid: <?php echo ($record["id"]); ?>,
		reid: <?php echo ($rid); ?>,
		parssword: $("#parssword").val(),
		token 	: '<?php echo ($token); ?>'
	};
	$.post('index.php?g=Wap&m=Research&a=exchange&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>', submitData,
	function (data) {
		if (data.success == true) {
			alert(data.msg);
			if (data.changed == true) {
				setTimeout("window.location.href = location.href",2000);
			}
			return
		} else {alert(data.msg);}
	},
	"json")
});

</script>
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Research",
            "moduleID":"0",
            "imgUrl": "", 
            "timeLineLink": "<?php echo C('site_url') . U('Research/index',array('token' => $token, 'reid' => $rid));?>",
            "sendFriendLink": "<?php echo C('site_url') . U('Research/index',array('token' => $token, 'reid' => $rid));?>",
            "weiboLink": "<?php echo C('site_url') . U('Research/index',array('token' => $token, 'reid' => $rid));?>",
            "tTitle": "<?php echo ($metaTitle); ?>",
            "tContent": "<?php echo ($metaTitle); ?>"
        };
</script>
<?php echo ($shareScript); ?>
</body>
</html>