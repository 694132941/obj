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
	class MsubStr{
		function csubstr($str,$start,$len){
		    $strlen = $start + $len;
			$tmpstr ="";
			for($i = 0;$i < $strlen;$i++){
			   if(ord(substr($str,$i,1))>0xa0){
			       $tmpstr .= substr($str,$i,2);
				   $i++;
			   }else{
			       $tmpstr .= substr($str,$i,1);
			   }
			}

			return $tmpstr;
		}

		}
		$mc=new MsubStr();
    



?>



<table width="580" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php 
	    $string="关注明日科技，关注PHP从入门到精通版本！";
		if(strlen($string)>10){
		    echo substr($string,0,12)."...";
		}else{
		    echo $string;
		}
	?></td>
  </tr>
  <tr>
    <td>
		<?php 
	    $strs="关注明日科技，关注PHP从入门到精通版本！";
		if(strlen($strs)>10){
		    echo $mc->csubstr($strs,"0","9")."...";
		}else{
		    echo $strs;
		}
	?>

    </td>
  </tr>
  <tr>
    <td>
			<?php 
	    $strs="关注PHP编程词典！";
		if(strlen($strs)>30){
		    echo $mc->csubstr($strs,"0","20")."...";
		}else{
		    echo $strs;
		}
	?>

    </td>
  </tr>
</table>


</body>
</html>
