<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>
<link href="<?php echo ADMIN_THEME?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME?>images/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME?>images/table_form.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="<?php echo ADMIN_THEME?>js/jquery.min.js"></script>
</head>
<body>
<div class="subnav">
<div class="content-menu ib-a blue line-x">
<?php
$a = isset($_GET['a']) && $_GET['a'] ? $_GET['a'] : 'index';
foreach ($menu as $i=>$t) {
	$class = $a == $t[0] ? ' class="on"' : '';
	$span  = $i >= count($menu)-1  ? '' : '<span>|</span>';
	echo '<a href="' . purl('admin/' . $t[0]) . '" ' . $class . '><em>' . $t[1] . '</em></a>' . $span;
}
?>
</div>
<div class="bk10"></div>
<div class="table-list">
<form action="" method="post" target='result' style="margin-bottom:20px;">
<table width="100%" class="table_form">
<tr>
	<th width="200">替换内容： </th>
	<td>
	<textarea style="width:210px;height:70px" name="regex"></textarea>
	替换为
	<textarea style="width:210px;height:70px" name="replace"></textarea><br>
	<div class="onShow">多个替换直接使用回车符换行，格式：内容1[回车符]内容2...。</div>
	</td>
</tr>
<tr>
	<th>替换字段： </th>
	<td><input type="text" class="input-text" size="50" value="" name="fields">
	<div class="onShow">多个字段以分号“,”分隔，例如：title,description,content(支持自定义字段)。</div>
	</td>
</tr>
<tr>
	<th>&nbsp;</th>
	<td style="padding-left:200px;"><input class="button" type="submit" name="submit" value="&nbsp; 开&nbsp;始&nbsp;执&nbsp;行 &nbsp;" /></td>
</tr>
<tr>
	<th style="text-align:left;"><b>运行状态</b></th>
	<td>&nbsp;</td>
</tr>
<tr>
	<th>&nbsp;</th>
	<td style="padding-left:190px;"><iframe name="result" frameborder="0" id="result" width="100%" height="80"></iframe></td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>
