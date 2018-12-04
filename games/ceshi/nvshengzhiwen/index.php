<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes">
<title>你的指纹与谁最相配(女生版)</title>
<meta name="keywords" content="你的指纹与谁最相配(女生版)" />
<meta name="description" content="你的指纹与谁最相配(女生版)" />
<link rel="stylesheet" href="zw.css" />
<link rel="stylesheet" href="zp.css" />
</head>

<body onselectstart='return false' class="disable-default-action">

	<h1>你的指纹与谁最相配(女生版)</h1>
	<div class="shuoming">说明：先输入姓名，然后将手指按在指纹识别区。</div>
	<div class="m-farea J_farea">
		<div class="line"></div>
	</div>
	<div class="shuru">请输入您的名字：<input value="" id="name"></div>

<div id="info" style="display:none;">
	<div id="tip"></div>
	
	<div class="retry">
	<button onClick="retry()">重新测试</button>
	　<button onclick="location.href='http://www.v918.cn/vgames/'">更多好玩测试</button>
	</div>

</div>


<script type="text/javascript" src="zepto.min.js"></script>
<script type="text/javascript">
var info=new Array()
info[0]="都教授"
info[1]="李敏镐"
info[2]="周杰伦"
info[3]="安七炫"
info[4]="吴尊"
info[5]="金秀贤"
info[6]="王力宏"
info[7]="林志颖"
info[8]="吴奇隆"
info[9]="杜汶泽"
info[10]="张杰"
info[11]="何炅"

var _t;
function op(_this,ev){
	var _that = $(_this),
		_type = ev.type;
	switch(_type){
		case "touchstart" : 
			_is = true;
			$(".J_farea").find(".line").addClass("active");
			_t = setTimeout(function(){$(".J_farea").find(".line").removeClass("active");_is = false;setTimeout(function(){

				$.post("do.php", { name: $("#name").val()},function(data){
					var a = data*30+15;
					var infos="“"+$("#name").val()+"”的指纹与"+info[data]+"最相配。";
					document.title = infos+" | 指纹配对(女生版)";
					var infos="<font color=orange><b>【测试结果】</b></font><br />"+infos;
					$("#tip").html(infos);
					$("#info").css({display:""});
						 
			});

			},100);},3000);
			break;
		case "touchend":
			$(".J_farea").find(".line").removeClass("active");
			clearTimeout(_t);
			if(_is){
				$(".J_error").show();
				setTimeout(function(){$(".J_error").hide();},1000);
			}
			break;
	}
		
}

$(".J_farea").on("touchstart",function(ev){
		if($("#name").val()==""){
		alert("请输入您的名字");
		document.getElementById('name').focus()
		return false;
	}
	op(this,ev);}).on("touchend",function(ev){op(this,ev);});
$(".J_error").click(function(){var _that = this;setTimeout(function(){$(_that).hide();},200);})

function retry(){
	$("#info").css({display:"none"});
}

</script>

<div id="footad">
	</div>


<div class="more_test_list" id="more_test">
<dt><h2>↓ 更多好玩测试 ↓</h2></dt>
<dd><a href="../huihuang/"><li>测测你一生中最辉煌的年龄</li></a><a href="../nianxin/"><li>测测年薪多少才配得上你？</li></a><a href="../kaiche/"><li>测你五年内会开什么车</li></a><a href="../tiansheng/"><li>测测你天生是什么命</li></a><a href="../qianshi/"><li>测测你前世是什么人</li></a><a href="../chuanyue/"><li>穿越回古代你会是谁？</li></a><a href="../ceo/"><li>测你会成为哪家公司总裁。</li></a><a href="../qianshi/"><li>测测你前世是什么人</li></a></dd>
</div>




	<div class="J_error m_error">
		<p>扫描时间过短，无法识别</p>
	</div>

<footer style="margin-top:10px; font-size:10px; color:#bbb; text-align:center;">
郑重承诺：本页面为纯静态HTML制作，绝不收集任何用户信息。
</footer>

<textarea id="adhtml" style="display:none">
	
<button onClick="location.href='http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd'">关注我们</button>
<button onClick="location.href='http://www.v918.cn/vgames/'">智力游戏</button>

	</textarea>

<script>
	infos=$("#adhtml").val();
	$("#footad").append(infos);
	</script>
<div style="display:none">
<script language="javascript" type="text/javascript" src="http://js.users.51.la/15858550.js"></script>
</div>
</body>
</html>
