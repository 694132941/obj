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
	interface MPopedom{
	    function popedom();
	}
	interface MPurview{
	    function purview();
	}
	class Member implements MPurview{
	    function purview(){
		    echo '会员拥有的权限';
		};
	}
	class  Manager implements MPopedom,MPurview{
	    function purview(){
		    echo '管理员拥有会员的全部权限。';
		};
		function popedom(){
		    echo '管理员还有会员没有的权限。';
		};
	}
	$member = new Member();
	$manager = new Manager();
	$member->purview();
	echo '<p>';
	$manager->purview();
	$manager->popedom();





?>





</body>
</html>
