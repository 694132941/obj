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
		public $name;
		public $height;
		public $avoirdupois;
		public function bootFootBall($name,$height,$avoirdupois){
		    $this->name=$name;
			$this->height=$height;
			$this->avoirdupois=$avoirdupois;
			if($this->height<185 and $this->avoirdupois<85){
			    return $this->name.",符合踢足球的要求！";
			}else{
			    return $this->name.",不符合踢足球的要求！";
			}
		}
	}
/*	    function beatBasketball($name,$height,$avoirdupois,$age,$sex){
		    echo "姓名：".$name;
			echo "身高：".$height;
			echo "年龄：".$age;
		}
	
	}
	$sport = new SportObject();
	$sport->beatBasketball('明日','185','80','20周岁','男');


*/
    $sport = new SportObject();
	echo $sport->bootFootBall('明日','185','80');

?>





</body>
</html>
