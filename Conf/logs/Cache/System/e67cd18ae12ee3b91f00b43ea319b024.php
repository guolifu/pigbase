<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>权限管理</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
</head>
<body class="warp">
<div id="artlist" class="addn">
<?php if(($info["id"]) > "0"): ?><form action="<?php echo U('Funintro/upsaves');?>" method="post" name="form" enctype="multipart/form-data" id="myform">
			<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
		<?php else: ?>
			<form action="<?php echo U('Funintro/adds');?>" method="post" name="form" enctype="multipart/form-data" id="myform"><?php endif; ?>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" id="addn">

				 <tr>
					<th colspan="4"><?php echo ($title); ?></th>
				</tr>
				<tr>
					<td height="48" align="right"><strong>分类名称：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="name" class="ipt" size="45" value="<?php echo ($info["name"]); ?>" />
					</td>
				</tr>
				<tr>
					<td colspan="3" class="lt">
						<input type="hidden" name="pid" class="ipt" size="45" value="<?php echo ($id); ?>"/>
					</td>
				</tr>
	<tr>
		<td colspan="4">
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