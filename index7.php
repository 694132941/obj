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
	    private $name = 'computer';
		public function setName($name){
		    $this->name = $name;
		}
		public function getName(){
		    return $this->name;
		}
	}
	class LBook extends Book{}
	$lbook = new LBook();
	echo "正确操作私有变量的方法：";
	$lbook->setName('PHP5从入门到应用开发');
	echo $lbook->getName();
	echo '<br>直接操作私有变量的结果：';
	echo Book::$name;

?>





</body>
</html>
