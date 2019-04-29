<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk2312">
<title>无标题文档</title>

<script language="javascript">


</script>

</head>

<body>

<?php
    $conn = mysqli_connect("127.0.0.1","root","yyf123")or die("数据库连接错误".mysql_error());
	mysqli_select_db($conn,"ml") or die("数据库访问错误".mysql_error());
	mysqli_query($conn,"set name gb2313");
?>
<?php
    if(isset($_POST['username'])&& trim($_POST['username']) !=""){
	    $usr = crypt(trim($_POST['username']),'tm');
		echo $usr;
		$sql = "select * from cw_base_device_info where DEVICE_NO='''.$usr'''";
		$rst = mysqli_query($conn,$sql);
		if(mysqli_num_rows($rst) > 0){
		    echo "<font color='red'>用户名已存在。</font>";
		}else{
		    echo "<font color='green'>恭喜您	：用户名可以使用！。</font>";
		}
	}
?>

<form name="form1" method="post" action="">
  <table width="580" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="81">用户名：</td>
      <td width="417"><input type="text" name="username">
      <input type="submit" name="Submit" value="检查"></td>
      <td width="82">&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
