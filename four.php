<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="JQuery/jquery-ui-1.11.2/jquery-ui.css" rel="stylesheet" type="text/css" />
  
<title>彩蛋~~~~</title>
  <header>
 
  <script src="JQuery/jquery-2.1.1.js"></script>
  <script src="JQuery/jquery-ui-1.11.2/jquery-ui.js"></script>
	
</header>
 <script type="text/javascript">
alert('說明文:因為未完成多個旋轉，圓球圖是中心點 點擊兩下的功能請自行酌量 有放大功能自行測試 如果載入緩面請稍等 如果需原圖檔請自找');
 $(document).ready(function() {
	$('#body').css('height', window.innerHeight);
	$('#body').css('width',window.innerWidth);
	for($i=0;$i<8;$i++){
		$('#img'+$i).dialog({
		
	}); //彈層
	$('#base').draggable({});
   $('#img'+$i).removeAttr('style');
	$('.ui-dialog-titlebar').attr('id','id');
	$('.ui-dialog').css('height','150px');
	$('.ui-dialog').appendTo('#divs');
		
	  $('.ui-dialog-titlebar').css('min-height','100%');
		  $('.ui-dialog').attr('id','uiid');
	
	}
	for($i=0;$i<8;$i++){
		var y=Math.floor(Math.random()*720);
		var x=Math.floor(Math.random()*720);
		var yy=Math.floor(Math.random()*120)+100;
		var xx=Math.floor(Math.random()*240)+100;
    	console.log($(document.body).children('div').eq($i).attr('aria-labelledby'));
		$(document.body).children('div').eq($i).css('top',y);
		$(document.body).children('div').eq($i).css('left',x);
		$(document.body).children('div').eq($i).css('background','url(img/'+$i+'.png)no-repeat center/contain');
		$(document.body).children('div').eq($i).css('width',xx);
		$(document.body).children('div').eq($i).css('height',yy);
	}
});

/*
------------------核心
 參數 預設零度+數字
*/
var ans=0;//基準線和滑鼠的角度差
var ang=0;//基準線和上次的角度差
var gg=false;//開關
$(document).click(function(e) {//設定滑鼠基準點
   		var h=(document.getElementById('uiid').offsetTop)+($('.ui-dialog').height()*0.5);//物件的y中心點 距離邊界+一半的高度 
		var w=(document.getElementById('uiid').offsetLeft)+($('.ui-dialog').width()*0.5);//物件的x中心點 距離邊界+一半的長度
    	var y=(parseInt(e.pageY)-h);	//滑鼠的距離y邊界
		var x=(parseInt(e.pageX)-w);	//滑鼠的距離x邊界
		
		
		var oo=Math.atan2(x,y)*180/Math.PI;<!--極座標公式 注意是放(x,y) 
		ans=Math.abs(oo-180);//用絕對值矯正 基準線為0 (附註原基準線 左邊為-180 右邊為180) 更正基準線 正前0 右90 後180 左270 
		
		if(document.getElementById('uiid').style.transform){//判斷上次角度 和 抓出角度
			 ang=(document.getElementById('uiid').style.transform).split('rotate(');
			 ang=(parseInt( ang[1]));
			 ang=parseInt(ang);
		
		}
		
		$(document).mousemove(function dmove(e) {//滑鼠移動時
				  if(gg==true){//開關控制器
					var h=(document.getElementById('uiid').offsetTop)+($('.ui-dialog').height()*0.5);//上方有說明
					var w=(document.getElementById('uiid').offsetLeft)+($('.ui-dialog').width()*0.5);//上方有說明
					var y=(parseInt(e.pageY)-h);//上方有說明
					var x=(parseInt(e.pageX)-w);//上方有說明
					
					
					var oo=Math.atan2(x,y)*180/Math.PI;<!--上方有說明
					
					var xx=Math.abs(oo-180)-ans+ang;//將	基準線和滑鼠的角度差-基準線和滑鼠的預設角度差+基準線和上次的角度差
					
					$('.ui-dialog').css('transform','rotate('+xx+'deg)');
					//以上就完成~~~ 夕立 加 時雨 賽高~大好阿~~ 此段是廢話 研發期日 2015/7/26 完工日期 2015/7/27			  
				  }
				 
					
			})
		
		
		
});

$(document).dblclick(function(e) {
  	if(gg==true){
		gg=false;
	}
	else{
		gg=true;
	}
});

 </script>
<body id="body" style=" background:url(img/Windows10.jpg)  no-repeat center/cover; ">
<h1 style="color:#FFF; position:fixed; top:0; bottom:0; left:0; right:0; text-align:center; display:block;line-height:100%;  font-size:36px; ">Is today! We're coming</h1> 	 

<?
	for($i=0;$i<8;$i++){
		?>
        	<div id='img<?=$i?>' ></div>
        <?
	}
?>
   


  

<style>
.big{
	border:3px #666666 dashed;
	width:800px; 
	height:600px;	
}
.ui-dialog-titlebar-close,.ui-dialog-title{
	display:none;	
}

</style>
</body>
</html>