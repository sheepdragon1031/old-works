<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<style>
body{
	margin:0;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
.B{
	display:inline-block;		
}
.l{
	background:rgba(204,0,0,0.8);
	height:10rem;
	width:7.5rem;
	text-align:center;
		
}
.r{
	float:right;
	margin:0;
	height:3.3rem;
	width:20rem;
		
}
.m{
	margin:0;
	height:100%;
	width:20rem;
	display:inline-block;
	border-bottom:rgba(255,255,255,1) 1px solid;
	font-weight:bolder;	
}
.r>div>span{
}
span{
	display:inline-block;			
}
.ot{
	display:inherit;
	padding:1px;
}
.two{
	background:rgba(0,0,0,0.2);
}
.wc{
	margin: 0.5rem 1rem auto ;
	border-radius:5rem;
	height:2rem;
	width:2rem;
	background:rgba(0,102,255,1);
	color:#FFF;
	line-height:2rem;
	text-align:center;
	font-weight:bolder;
	font-size:20px;
	display:inline-block;
	
}
h3,h5{
	color:#FFF;
	margin:0 auto;
	font-weight:bolder;
}
.l>div{
	    margin-top: 50%;
}
.log{
	width:50%;	
}

.p{
	display:inline-block;
	float:right;
	background:rgba(204,0,0,0.2);
	width:2rem;
	height:3.3rem;		
}
.ej{
	width:10rem;
		
}
.m:nth-child(n){
	color:#999;
}
.m:nth-child(2n){
	background:rgba(0,0,0,0.3);
	color:#FFF;
}
.ll{
	font-size:9px;
	font-weight:bolder;
	color:#000;	
}
</style>
<body>
<?
	$a=array('Wordpress','CSS');
	$b=array('Wednesday','Saturday');
	$c=array('W','C');
	$e=array('install plugin','install theme','post your first atricle');
	$f=array('Basic knowledge','CSS selectors','CSS Hack');
	$d=array($e,$f);
	$g=array('19:00 - 21:00','14:00 - 18:00','18:00 - 20:00');
?>
	<?
		for($i=0;$i<2;$i++){
	?>
   <span class="ot">
    	<div class="B">
    	<span class="l">
        	<div>
            	<h3><?=$a[$i]?></h3>
            <h5>(<?=$b[$i]?>)</h5>
            </div>
        </span>
        <div class="r">
               <?
			   	for($j=0;$j<3;$j++){
					?>
                    <span class="m">
                      <span  class="s" style="display:block"><div class="wc"><?=$c[$i]?></div><span  class="ej"><?=$d[$i][$j]?></span><span class="ll"><?=$g[$j]?></span><span class="p"></span></span>
                    	
                    </span>
                    <?
				}
			   ?>
                
        </div>
            
    </div>
   </span>
    <?
		}
	?>
</body>
</html>