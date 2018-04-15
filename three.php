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
.all{
	margin-top:6rem;
	padding-left:10vw;;
	padding-right:10vw;;
}
.top{
	padding-left:10vw;;
	padding-right:10vw;;
	position:fixed;
	margin:0 auto;
	top:0;
	left:0;
	right:0;
	background:rgba(0,0,0,0.8);
	height:4rem;	
}
h1{
	color:#FFF;
	margin-top:1rem;	
}
.top1{
	padding-bottom:3rem;	
}
.top1 span{
	display:inline-block;
	width:30rem;
	vertical-align:top;	
}
.top1 span:first-child{
	min-width:20vw;	
}
.top1 span:last-child{
	min-width:40vw;
}
.img{
	background:#333;
	width:40vw;
	min-height:15rem;
	min-width:30rem;
	height:30vh;
	right:0;

	
}
.ispan{
	margin-right:0;
	right:0;
}
img{
	background:#333;	
}
h2{
	margin:0 0 1rem 0;
}
input[type=button]{
	background:rgba(255,153,51,1);
	color:#FFF;
	border:0px;
	font-weight:bolder;
	padding:0.5rem;
	padding-left:1rem;;
	padding-right:1rem;;
		
}
#topd{
	display:inline-block;
	max-width:10rem;	
}
li{
	display:inline-block;
	padding-left:1rem;
	color:#FFF;	
}
.ul{
	position:fixed;
	right:11vw;
	top:1rem;	
}
.main{
	min-height:10rem;
	padding-right:1rem;	
}
.mid{
	min-height:20rem;
	padding-bottom:2rem;
	background:rgba(0,0,0,0.15);
	vertical-align:top;
	/*box-shadow:#666 0.2rem 0.2rem 0.5rem 0.2rem;	*/
}
.mid>h2{
	padding-top:0.5rem;
}
.min{
	height:20vh;
	width:23.5vw;
	min-width:15rem;
	min-width:17.5rem;
	}
.mid>div{
	padding-right:3vw;
	display:inline-table;
}
.mid>div:last-child{
	padding-right:0rem;
}
.mid>div>span{
	display:block;
	max-width:19rem;
	font-size:12px;
	color:#333;
	height:6.5rem;
}
.bot{
	background:rgba(0,0,0,0.8);
	min-height:20rem;	
	padding-left:10vw;;
	padding-right:10vw;
	vertical-align:top;
}
.bot>div{
	display:inline-block;
	min-height:10rem;
	vertical-align:top;	
}
.bot>div:first-child{
	width:20vw;	
}
.bot>div:nth-child(2n){
	width:35vw;	
}
.bot>div:last-child{
	width:20vw;	
}
.bot h3,h4{
	color:#FFF;	
}
.logo{
	display:inline-block;	
	height:2rem;
	width:2rem;
	background:#000;
	line-height:2rem;
	text-align:center;
	border-radius:1rem;
	color:#FFF;	
}
.logo1{
	display:inline-block;
	color:#FFF;
	margin-left:0.2rem;	
}
ul{
	padding-left:0;
}
.ol{
	padding-left:0;
	padding-bottom:0.3rem;
}
.AB{
	color:#999;
	font-size:12px;	
}
.date{
	display:inline-table;
	height:2rem;
	width:2rem;
	line-height:1rem;
	background:#FFF;
	text-align:center;
	border-radius:0.5rem;
	color:#000;
	vertical-align:bottom;
}
.date1{
	
	display:inline-table;
	color:#FFF;
	margin-left:0.2rem;	
}
.ol h4{
	margin:0;
	color:#FFF;
	font-weight:bolder;
}
.ol h6{
	margin:0;
	color:#999;
}
h1,h2{
	font-weight:bolder;
}
</style>
<?
	$a=array('Home','About US','Service','Portfolio','Contact Us');
	$b=array('Akane Sakurada','Aoi Sakurada','Kanade Sakurada');
	$c=array('Akane is the third daughter and fourth child of the Sakurada family. She hates being the center of attention and being followed by cameras all day. Her ability is Gravity Core, which allows her to manipulate the gravity of herself and anyone she touches, as well as allowing her to increase her speed and strength.','Eldest child of the Sakurada family. She has two abilities, the first is Invisible Work, which allows her to do anything once she has learned it, while the second is yet to be shown called Absolute Order.','Third child and second daughter of the Sakurada family. She\'s the twin of Shū. Her ability is Heaven\'s Gate, which allows her to create objects using materials within a certain area. In order to materialize them, she has to pay the amount of money it takes to use the requested object, which makes her have a job.');
	
	$d=array('27','27','27','27');
	$f=array('F','T','R','G');
	$g=array('Facebook','Twitter','RSS','Google+');
?>

<body>
   
  <div class="top">
          <div id="topd"><h1>Bloom</h1></div>
          <ul class="ul">
          	<?
				for($i=0;$i<count($a);$i++){
			?>
            	<li>
                	<?=$a[$i]?>
                </li>
            <?	
				}
			?>
           
          </ul>
  </div>
  <div class="all">
 		<div class="top1">
        	<span>
            	<h2>Lorem ipsum dolor sit amet</h2>
                <div class="main">
                	Castle Town Dandelion , also known as Jōkamachi no Dandelion, is a Japanese four-panel comic strip manga written and illustrated by Ayumu Kasuga. It made its first appearance in Houbunsha's Manga Time Kirara Miracle! magazine with the June 2012 issue. An anime adaptation produced by Production IMS and directed by Noriaki Akitaya premiered in Japan on July 2, 2015.
                </div>
                <div>
                	<input type="button" value="Learn More" />
                </div>
            </span>
            <span class="ispan">
            	<img  class="img" src=""/>
            </span>
        </div>
        <div class="mid">
        	<h2>This is a Heading</h2>
            
            	<?
					for($i=0;$i<3;$i++){
						?>
                        <div class="midd">
                        	<img class="min" />
                        	<h3><?=$b[$i]?></h3>
                            <span><?=$c[$i]?></span>     
                            <div>
                            	<input type="button" value="Learn More" />
                            </div>
                        </div>
                        <?	
					}
				?>
                
           
        </div>
 		
  </div>
  <div class="bot">
        	<div>
            	<h3>Latrdy Posts</h3>
                <div>
                	<?
							for($i=0;$i<3;$i++){
						?>
                        		<ol class="ol">
									<span class="date"><font style="font-size:5px;">July</font><br />27</span><span class="date1"><h4>Castle Town Dandelion</h4><h6>Jōkamachi no Dandelion</h6></span>
                                </ol>
                        <?
							}
						?>
                </div>
            </div>
            <div>
            	<h4>About</h4>
                <div class="AB">
                	The story revolves around the Sakurada family, a family of nine super-powered siblings whose father is the king. It focuses on Akane, the fourth eldest, who is extremely shy. However, the actions of her and her siblings are constantly being recorded and broadcast on TV, allowing the citizens to choose which one to elect as the next king.<br />
<br />
	Castle Town Dandelion High season
                </div>
            </div>
            <div>
            	<h3>Stay Connected</h3>
                <div>
                	<ul>
                    	<?
							for($i=0;$i<4;$i++){
						?>
                        		<ol class="ol">
									<span class="logo"><?=$f[$i]?></span><span class="logo1"><?=$g[$i]?></span>
                                </ol>
                        <?
							}
						?>
                    </ul>
                </div>
            </div>
        </div>
</body>
</html>