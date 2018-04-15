<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<style>
body{
	margin:0;
	font-family:"微軟正黑體";
}
.box{
	border:rgba(0,153,51,1) 3px solid;
	margin:1rem;
	display:inline-block;
	width:12.5rem;
	height:10rem;	
}
.after-box{	
	border:rgba(255,255,51,1) 3px solid;
	display:block;
	width:95vw;;
	margin:auto;
	height:10rem;
}
</style>
<body>
<?
	for($i=0;$i<11;$i++){
?>
	<div class="box">
    	我在浮動~~~~
    </div>
<?
	}
?>   
<div class="after-box">
	我使用clear
</div> 
</body>
</html>