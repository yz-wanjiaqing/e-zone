<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>帝国备份王后台登录</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<br>
<table width="100%" border="0" cellspacing="8" cellpadding="3">
    <tr>
      <td><table width="420" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
        <form name="form1" method="post" action="phome.php">
          <input type="hidden" name="phome" value="login">
          <tr> 
            <td height="25" colspan="2"><div align="center"><strong><font color="#FFFFFF">系统安全认证</font></strong></div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">密码：</td>
            <td height="25"><input name="lpassword" type="password" id="lpassword" size="30"><默认密码：123456></td>
          </tr>
		  <?php
		  if($set_loginauth)
		  {
			?>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">认证码：</td>
            <td height="25"><input name="loginauth" type="password" size="30"></td>
          </tr>
			<?php
		  }
		  ?>
          <?php
		if(!$set_loginkey)
		{
		?>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">验证码：</td>
            <td height="25"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="52"> <input name="key" type="text" id="key" size="6"> 
                  </td>
                  <td><img src="ShowKey.php" align="bottom"></td>
                </tr>
              </table></td>
          </tr>
          <?php
		}
		?>
          <tr bgcolor="#FFFFFF"> 
            <td height="25">&nbsp;</td>
            <td height="25"><input type="submit" name="Submit" value="登录">&nbsp;&nbsp; <input type="reset" name="Submit2" value="重置"></td>
          </tr>
        </form>
      </table></td>
    </tr>
  </table>
  </body>
</html>