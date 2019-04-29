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
    header("content-type:text/html;charset=utf-8");
	$str = 'This is an example!';
	echo '加密前的$str的值为：'.$str;
    $cryttostr = crypt($str);
	echo '<p>加密后$str的值为：'.$cryttostr;
?>

</body>
</html>
