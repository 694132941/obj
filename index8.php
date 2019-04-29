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
    class Book{
		static $num = 0;
		public function showMe(){
		    echo "您是第".self::$num.'位访客';
			self::$num++;
		}
	}
	$book1 = new Book();
	$book1->showMe();
	echo '<br>';
	$book2 = new Book();
	$book2->showMe();
	echo '<br>';
	echo '您是第'.Book::$num.'位访客';


?>





</body>
</html>
