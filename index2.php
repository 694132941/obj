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
		const BOOK_TYPE = '计算机图书';
		public $object_name;
		function setObjectName($name){
		    $this->object_name = $name;

		}
		function getObjectName(){
		    return $this->object_name;
		}
	}
        $c_book = new SportObject();
        $c_book ->setObjectName('PHP 类');
		echo SportObject::BOOK_TYPE."->";
		echo $c_book->getObjectName();


?>





</body>
</html>
