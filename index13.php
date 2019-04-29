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
	class SportObject{
		private $type = 'DIY';
		public function getType(){
		   return $this->type;
		}
		public function __sleep(){
		   echo '使用serialize()函数对对象保存起来，可以存放到文本文件，数据库等待地方<br>';
		   return array('type');
		}
		public function __wakeup(){
		    echo '当需要该数据时，使用unserialize()函数对已序列化的字符串进行操作，将其转换会对象<br>';
		}
    }
	$myBook = new SportObject();
	$i = serialize($myBook);
	echo '序列化后的字符串：'.$i.'<br>';
	$reBook = unserialize($i);
	echo '还原后的成员变量：'.$reBook->getType();


?>





</body>
</html>
