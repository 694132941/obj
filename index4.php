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
		public $avoirdupois;
		public $age;
		public $sex;
		public function __construct($name,$height,$avoirdupois,$age,$sex){
		    $this->name =$name;
			$this->height =$height;
			$this->avoirdupois =$avoirdupois;
			$this->age =$age;
			$this->sex =$sex;
		}
		function showMe(){
		    echo '这句话不会显示。';
		}
		}
		/*子类BeatBasketBall*/
		class BeatBasketBall extends SportObject{
		    public $height;
			function __construct($name,$height){
			    $this->height = $height;
				$this->name = $name;
			}
			function showMe(){
			    if($this->height>185){
				    return $this->name.",符合打篮球的要求！";
				}else{
				    return $this->name.",不符合打篮球的要求！";
				}
			}
		}
        /*WeigthLifting*/
		
		class WeigthLifting extends SportObject{
			function showMe(){
			    if($this->avoirdupois<85){
				    return $this->name.",符合举重的要求！";
				}else{
				    return $this->name.",不符合举重的要求！";
				}
			}
		}

		
    //实例化对象
	$BeatBasketBall = new BeatBasketBall('科技','190');
    $WeigthLifting = new WeigthLifting('明日','185','80','20','男');
	echo $BeatBasketBall->showMe().'<br>';
	echo $WeigthLifting->showMe().'<br>';
	//echo $sport->bootFootBall();

?>





</body>
</html>
