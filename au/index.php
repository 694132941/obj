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
    
		function __autoload($class_name){
		    $class_path = $class_name.'.class.php';
			if (file_exists($class_path)){
			    include_once($class_path);
			}else{
			    echo '类路径错误';
			}
        
		}
		$myBook = new SportObject('江山带有人才出 各领风骚数百年');
		echo $myBook;
	



?>





</body>
</html>
