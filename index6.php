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
	    const NAME = 'computer';
		function __construct(){
		    echo '本月图书类销售官军为：'.Book::NAME.'';
		}
	}
	class I_book extends Book{
	    const NAME = 'foreign language';
		function __construct(){
		    parent::__construct();
			echo '本月图书类销售官军为：'.self::NAME.'';
		}
	}
	$obj = new I_book();

?>





</body>
</html>
