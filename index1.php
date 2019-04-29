<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>

<script language="javascript">


</script>

</head>

<body>



<?php
    header("content-type:text/html;charset=utf-8");
    class SportObject{
	    function beatBasketball($name,$height,$avoirdupois,$age,$sex){
		    echo "姓名：".$name;
			echo "身高：".$height;
			echo "年龄：".$age;
		}
	
	}
	$sport = new SportObject();
	$sport->beatBasketball('明日','185','80','20周岁','男');




?>





</body>
</html>
