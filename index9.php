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
    abstract class CommodityObject{
	    abstract function service($getName,$price,$num);
	}
	class MyBook extends CommodityObject{
	    public function service($getName,$price,$num){
		    echo '您购买的商品是'.$getName.', 该商品的价格是：'.$price.'元。';
			echo '您购买的数量为：'.$num.' 本。';
			echo '如发现缺页，损坏请在3日内更换。';
		}
	}
	class MyComputer extends CommodityObject{
	    public function service($getName,$price,$num){
		    echo '您购买的商品是'.$getName.', 该商品的价格是：'.$price.'元。';
			echo '您购买的数量为：'.$num.' 台。';
			echo '如发现缺页，损坏请在3日内更换。';
		}
	}
	$book = new MyBook();
	$computer = new MyComputer();
	$book->service('<PHP从入门到精通>',85,3);
	echo '<p>';
	$computer->service('xxx笔记本',85000,1);


?>





</body>
</html>
