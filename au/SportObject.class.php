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
		private $cont;
		public function __construct($cont){
		    $this->cont = $cont;
		}
		public function __tostring(){
		    return $this->cont;
		}
	    
	}
	




?>





</body>
</html>
