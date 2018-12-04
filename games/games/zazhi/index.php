<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>千万别来南宁</title>
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta http-equiv="Expires" content="-1" />
<meta http-equiv="pragram" content="no-cache" />
<!--移动端版本兼容 -->
<script type="text/javascript">
    var phoneWidth = parseInt(window.screen.width);
    var phoneScale = phoneWidth/640;

    var ua = navigator.userAgent;
    if (/Android (\d+\.\d+)/.test(ua)){
        var version = parseFloat(RegExp.$1);
        // andriod 2.3
        if(version>2.3){
            document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
        // andriod 2.3以上
        }else{
            document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
        }
        // 其他系统
    } else {
        document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
    }
</script>
<!--移动端版本兼容 end -->

<link rel="stylesheet" href="success/css/success.css?v=20140621" />
</head>

<body>
<div class="p-index">
    <div class="audio_txt">
      <p class="txt">点击开启/关闭音效</p>
      <p></p>
    </div>

    <section class="fn-audio">
      <div class="btn">
        <p class="btn_audio"><span class="css_sprite01 audio_open"></span><span class="css_sprite01 audio_close"></span></p>
        <audio id="car_audio" controls="" preload="preload">
          <source src="success/images/bgmusic.mp3" type="audio/mpeg">
        </audio>
      </div>
    </section>

    <section class="u-arrow"><img src="success/images/btn01_arrow.png" width="28"></section>

    <!-- 旋转正面 data-open: 0->关闭， 1->开启 -->

    <!-- 旋转正面 end-->
      <input id="ca-tips"   type="hidden" value="" />
      <!-- 蒙板背景图 -->
      <input id="r-cover" type="hidden" value='success/images/s1.jpg' />
      <div class='m-page m-page1 v-page' data-id='16265' data-statics='info_pic2'>
        <div id="j-mengban" class='translate-front z-show'>
          <div class='mengban-warn'></div>
        </div>
        <div class="page-con lazy-img" data-src='success/images/s2.jpg'><img src="success/images/s2.jpg" class="imgHeight" width="100%" hidden /></div>
      </div>
      <!-- 封页 end-->
<!--
    <section data-page="1" class="m-page m-page1" data-id='16266' data-type='info_pic2'>
      <div class="m-img m-img01" style="background:url(/success/images/s1.jpg) center top no-repeat; background-size:cover;"></div>
      <img data-share-logo=""  src="success/images/s1.jpg"  style="display:none;">
    </section>

    <section data-page="2" class="m-page m-page2 hide" data-id='16268' data-type='info_nomore'>
      <div class="m-img m-img01" data-bk='success/images/s2.jpg'
        style="background:url(/success/images/s2.jpg) center top no-repeat; background-size:cover;">
      </div>
    </section>
 -->
    <section data-page="2" class="m-page m-page2 v-page hide" data-id='16269' data-type='info_nomore'>
      <div class="m-img m-img01" data-bk='success/images/s3.jpg'
        style="background:url(./success/images/s3.jpg) center top no-repeat; background-size:cover;">
        <img src="success/images/s3_txt.png" width="100%" class="showTxt txt-s3" />
      </div>
    </section>

    <section data-page="2" class="m-page m-page2 v-page hide" data-id='16270' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" data-bk='success/images/s4.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
        <img src="success/images/s4_txt.png" width="100%" class="showTxt txt-s4" />
      </div>
    </section>

    <section data-page="2" class="m-page m-page2 h-page hide" data-id='16271' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" id="tleft" data-bk='success/images/s12.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
        <img src="success/images/s5_txt.png" width="100%" class="txt-s5" />
        <p class="tr mb30"><img src="success/images/s5_1_1.png" height="200" class="s5-img1-1" /><img src="success/images/s5_1_1.png" height="200" class="s5-img1-2" /><img src="success/images/s5_1.png" height="200" class="s5left" /></p>
        <p class="tl"><img src="success/images/s5_2.png" height="200" class="s5right" /><img src="success/images/s5_2_1.png" height="200" class="s5-img2-1" /><img src="success/images/s5_2_1.png" height="200" class="s5-img2-2" /></p>
      </div>
    </section>

    <section data-page="2" class="m-page m-page2 v-page hide" data-id='16272' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" data-bk='success/images/s6.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
      </div>
    </section>

    <section data-page="2" class="m-page m-page2 v-page hide" data-id='16273' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" data-bk='success/images/s7.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
        <img src="success/images/s7_txt.png" width="100%" class="showTxt txt-s7" />
      </div>
    </section>

    <section data-page="2" class="m-page m-page2 v-page hide" data-id='16274' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" data-bk='success/images/s8.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
        <img src="success/images/s8_txt.png" width="100%" class="showTxt txt-s8" />
      </div>
    </section>

    <section data-page="2" class="m-page m-page2 v-page hide" data-id='16275' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" data-bk='success/images/s9.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
        <img src="success/images/s9_txt.png" width="100%" class="showTxt txt-s9" />
      </div>
    </section>

    <section data-page="2" class="m-page m-page2 v-page hide" data-id='16276' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" data-bk='success/images/s10.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
        <img src="success/images/s10_txt.png" width="100%" class="showTxt txt-s10" />
      </div>
    </section>

    <section data-page="2" class="m-page m-page2 v-page hide" data-id='16277' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" data-bk='success/images/s11.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
        <!-- <p class="btnWrap"><a href="#"><img src="success/images/btn_yy.png" width="60%" /></a></p> -->
      </div>
    </section>

    <!-- 12 S -->
    <section data-page="2" class="m-page m-page2 v-page hide" data-id='16278' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" data-bk='success/images/s12.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
        <p class="f0"><img src="success/images/t12.png" width="100%" /></p>
        <div class="cont12">
          <ul class="list-pro">
            <li class="chosed" pv="1"><img src="success/images/p1.png" width="100%" /><img src="success/images/icon_chose.png" width="30" class="icon-chose" /></li>
            <li class="chosed" pv="2"><img src="success/images/p2.png" width="100%" /><img src="success/images/icon_chose.png" width="30" class="icon-chose" /></li>
            <li class="chosed" pv="3"><img src="success/images/p3.png" width="100%" /><img src="success/images/icon_chose.png" width="30" class="icon-chose" /></li>
          </ul>
          <ul class="list-form12">
            <li><p class="f0 ptb10"><img src="success/images/txt12_1.png" width="80%" /></p></li>
            <li><a href="#" class="db btn-sub"><img id="postinfo_btn" src="success/images/btn_sub.png" width="100%" /></a></li>
            <li><p class="f0 pt10"><img src="success/images/txt12_2.png" width="70%" /></p></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- 12 E -->

    <section id="s13" data-page="2" class="m-page m-page2 v-page hide" data-id='16279' data-type='info_nomore'>
      <div class="m-img m-img01 lazy-bk" data-bk='success/images/s13.jpg'
        style="background:#ddd center top no-repeat; background-size:cover;">
        <img src="success/images/s13_txt.png" width="100%" class="showTxt txt-s13" />
        <p class="tc s13txt">
            <img src="success/images/s13_icon2.png" height="36" class="s13icon1" />
            <img src="success/images/s13_icon2.png" height="36" class="s13icon2" />
            <img src="success/images/s13_icon2.png" height="36" class="s13icon3" />
            <img src="success/images/s13_txt2.png" height="36" class="mlr10" />
            <img src="success/images/s13_icon.png" height="36" class="s13icon4" />
            <img src="success/images/s13_icon.png" height="36" class="s13icon5" />
            <img src="success/images/s13_icon.png" height="36" class="s13icon6" />
        </p>
        <p class="tc copyWrap"><span class="mr10">南宁周边游微信</span> 荣誉出品</p>
      </div>
    </section>
</div>

<div id="systemmsg_box" class="share-popup" style="display:none !important;">
    <div class="alert-div">
        <p class="tc" id="systemmsg_text">您的手机号码输入错误！</p>
        <p class="tc" id="systemmsg_btn"><img src="success/images/btn_sure.png" width="60%" /></p>
    </div>
</div>

<script type="text/javascript" src="success/js/jquery.min.js?v=20140621"></script>
<script type="text/javascript" src="success/js/easing.min.js?v=20140621"></script>
<script type="text/javascript" src="success/js/main.min.js?v=20140621"></script>
<script type="text/javascript" src="success/js/lottery.min.js?v=20140621"></script>
<script type="text/javascript" src="success/js/com.js?v=20140621"></script>
<script>
var mebtnopenurl = 'v918_cn';
dataForWeixin = {
    appid: 'wx13b7a88076a07cba', 
    img_url: './success/images/zazhi.png',
    img_width: '100',
    img_height: '100',
    link: 'http://www.v918.cn/vgames/games/zazhi/index.html',
    title: '我是认真的，千万不要来南宁',
    desc: "我是认真的，千万不要来南宁",
    callback:function(){document.location.href = mebtnopenurl;}
};

$('#postinfo_btn').bind('click', function(){

    if(!$('#name').val()){
        systemmsg('你确定还要来南宁？！');
        return;
    }
    if( !isMobile($('#mobile').val()) ){
        systemmsg('请填写正确的手机号！');
        return;
    }
    var params = {
        pid : $('.chosed').attr('pv'),
    	name : $('#name').val(),
    	mobile : $('#mobile').val()
    };
    $.ajax({
		type : 'POST',
		url : 'http://www.v918.cn/vgames/',
		data : params,
		dataType : 'json',
		success : function(response) {
			if(response.ret==1){
                 $('#name').val('');
                 $('#mobile').val('');
                 systemmsg("您的信息提交成功！", function(){
                    $(".btn-sub").closest(".m-page").next('.m-page').css('top',$(window).height()).addClass("active").animate({"top":0}, 1000);
                    newM = page_n + 1 ;
                    page_n = newM;
                 });
			}else{
                 systemmsg(response.msg);
             }
		}
	});
});

$('.list-pro').find('li').bind('click', function(){
  $(this).addClass('chosed').siblings().removeClass('chosed');
});

window.onload = function(){
  changeClose();
  var lottery = new Lottery($('#j-mengban')[0], $('#r-cover').val(), 'image',$('.imgHeight').width() , $(window).height(), function(){
       $('#j-mengban').fadeOut(200);
       changeOpen();
       $("#car_audio")[0].play();
  });
  lottery.init();
  setTimeout(function(){$('.imgHeight').show();}, 500);
}

if(window.screen.height <= 480){
  $('[data-bk="success/images/s6.jpg"]').css('background-position', '0 -30px');
  $('[src="success/images/txt12_2.png"]').hide();
}
</script>
<div style='display:none;' data-role="none" hidden>

</div></body>
</html>
