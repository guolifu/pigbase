<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加关于我们</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script>

var editor;
KindEditor.ready(function(K) {
editor = K.create('#content', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
                        'source','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                        'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                        'insertunorderedlist', '|', 'emoticons', 'image', 'link', 'music', 'video']
});

});
</script>
<meta http-equiv="x-ua-compatible" content="ie=7" />
</head>
<body class="warp">
<div id="artlist" class="addn">
        <?php if(($info["id"]) > "0"): ?><form action="<?php echo U('Aboutus/edit');?>" method="post" name="form" id="myform">
            <input type="hidden" name="id" value="<?php echo ($info['id']); ?>">
        <?php else: ?>
            <form action="<?php echo U('Aboutus/add');?>" method="post" name="form" id="myform"><?php endif; ?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="addn">
            <input type="hidden" name="type" value="1">
                 <tr>
                    <th colspan="4"><?php echo ($title); ?></th>
                </tr>

                <tr>
                    <td height="48" align="right"><strong>标题：</strong></td>
                    <td colspan="3" class="lt">
                        <input type="text" name="title" class="ipt" size="87" value="<?php echo ($info["title"]); ?>">
                    </td>
                </tr>

                <tr>
                    <td height="48" align="right"><strong>内容说明：</strong></td>
                    <td colspan="3" class="lt">
                    <textarea name="content" id="content" class="ipt"  rows="5" style="width:590px;height:360px"><?php echo ($info["content"]); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="lt">
                        <input type="hidden" name="pid" class="ipt" value="<?php echo ($pid); ?>" size="45"/>
                    </td>
                </tr>
    <tr>
        <td colspan="4" style="padding:10px 0 10px 160px;">
            <?php if(($info["id"]) > "0"): ?><input class="bginput" type="submit" name="dosubmit" value="修 改" >
                <?php else: ?>
                <input class="bginput" type="submit" name="dosubmit" value="添 加"><?php endif; ?>
            &nbsp;
            <input class="bginput" type="button" onclick="javascript:history.back(-1);" value="返 回" ></td>
    </tr>
</table>
</form>
<br />
<br />
<br />

</div>
</body>
</html>