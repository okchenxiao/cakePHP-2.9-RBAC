﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>逗比测试</title>
<link rel="stylesheet" href="images/animation.css" />
<link rel="stylesheet" href="images/common.css" />
<link rel="stylesheet" href="images/multiple.css" />

<style>
body{background: url("images/bg.png") repeat ;}
.t-btn1{
	color:#fff;
	background: url("images/titlepanel.png") no-repeat;
	background-position: center center;
	background-size: contain;
	padding-top:15px;
	padding-bottom:15px;
	padding-left:40px;
	padding-right:40px;
	text-align: center;
	margin:0 auto;
}
.t-s::after{
	position:absolute;
	right:5px;
	top:0;
	padding:4px;    
	background:rgba(255,255,255,0);
	content:url("images/select.png");
	display:none;
	opacity:0;
	-webkit-transition:opacity 0.3s ease;
}

.animation-breath{
	-webkit-animation:breath 1s ease-in-out infinite;
}
@-webkit-keyframes breath {
		0% { opacity: 0.4; }                          
		50%  { opacity: 1; }                       
		100%   { opacity: 0.4; }
}
#preload{
	display:none;
}
#result-bnt{
	display:none;
}
</style>
<script src="images/common.js"></script>
</head>
<body>
<div class="main" id="main">
	<div class="title-area">
		<div class="head" id="btimg"><img id="head-img" src="images/banner.jpg"></div>
		<div class="lt-w" id="toptit"><div id="dbt" class="t-btn1">逗比测试</div></div>
	</div>
	<div style="display: none;" class="start-area" id="start">
		<div class="auto-div start-auto">
			<div class="div-inner"><div class="circle"></div><div class="home-desc" id="home-desc"></div></div>
		</div>
		<div class="start-btn" onClick="startTest();">开始测试</div>
	</div>
	<div style="display: block;" id="wenti">
		<div id="progress-lable">测试进度：<span id="pro-label-span">1/10</span></div>
		<div class="progress"><div style="width: 10%;" id="precent"></div></div>
		<div class="question-only" id="question">如果你不小心中了500万，你做的第一件事是？</div>
		<div id="ti" style="display: block; font-size: 16px; text-align: center; color: rgb(255, 255, 255);">
			<div style="display: none;" id="ti0" class="t-c"><img id="picti" src=""><img id="preload" src=""></div>
			<div id="selections">
				<div id="tia" vel="1" num="a." class="t-s" onClick="select(this);">喝豆浆买一碗倒一碗</div>
				<div id="tib" vel="2" num="b." class="t-s" onClick="select(this);">给前任发短信：“就后悔吧你”</div>
				<div id="tic" vel="3" num="c." class="t-s" onClick="select(this);">狠狠地掐自己一下从梦中醒来</div>
				<div id="tid" vel="4" num="d." class="t-s" onClick="select(this);">跟现金合影，然后上传至陌陌</div>
			</div>
		</div>
	</div>
	
	<div class="result" id="result">
		<div class="auto-div">
			<div class="div-inner">
				<div class="circle"></div>
				<div class="result-title" id="result-title"></div>
				<div class="result-desc" id="result-desc"></div>
			</div>
		</div>
	</div>
</div>

<div class="result-bnt" id="result-bnt">
	<div class="share-btn animation-breath" onClick="moregame('mutiple', '');">更多有趣测试戳这里 &gt;&gt;</div>
</div>

<script type="text/javascript">
	var res_path = 'http://www.zzfriend.com/h5game/';
	var dbt='逗比测试';	
	// 问题
	var orignal = eval([{"img":"","question":"如果你不小心中了500万，你做的第一件事是？","answer":{"a":{"title":"喝豆浆买一碗倒一碗","weight":""},"b":{"title":"给前任发短信：“就后悔吧你”","weight":""},"c":{"title":"狠狠地掐自己一下从梦中醒来","weight":""},"d":{"title":"跟现金合影，然后上传至陌陌","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果有人对你表白，你如何拒绝？","answer":{"a":{"title":"说人话","weight":""},"b":{"title":"呵呵，我去洗个澡","weight":""},"c":{"title":"对不起，我们性别不合适","weight":""},"d":{"title":"我...我麻麻不让我谈恋爱","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果你可以穿越时空回到过去，你最想做什么？","answer":{"a":{"title":"四爷，再爱我一次","weight":""},"b":{"title":"全部家当押宝德国队","weight":""},"c":{"title":"多买几栋楼","weight":""},"d":{"title":"想不出来，下一题吧","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果给你一种超能力，你最希望是什么？","answer":{"a":{"title":"用意念从ATM里取钱","weight":""},"b":{"title":"让Ta爱上自己","weight":""},"c":{"title":"维护世界和平","weight":""},"d":{"title":"每天变帅一点点","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果有机会，你想演哪部影视剧？","answer":{"a":{"title":"大话西游","weight":""},"b":{"title":"古惑仔","weight":""},"c":{"title":"乡村爱情","weight":""},"d":{"title":"和苍老师的500天","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果让你禁止使用手机三天你会做些什么？","answer":{"a":{"title":"玩儿电脑，和平时一样呗","weight":""},"b":{"title":"狠狠睡三天，省去9顿饭钱","weight":""},"c":{"title":"加班，骗餐补","weight":""},"d":{"title":"买一副望远镜，偷看路人手机","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果你养了两只猫，你会给它们起什么名字？","answer":{"a":{"title":"Kevin老师 & Tony老师","weight":""},"b":{"title":"旺财 & 小强","weight":""},"c":{"title":"站住 & 快跑","weight":""},"d":{"title":"红豆 & 黄豆","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果Ta为你承包了座鱼塘，你会？","answer":{"a":{"title":"养一池锦鲤，天天发照片让朋友们转","weight":""},"b":{"title":"月黑风高，把鱼赶走，改造成私人游泳池”","weight":""},"c":{"title":"要什么鱼塘！！我看着像村姑么！”","weight":""},"d":{"title":"把鱼塘出租给霸道总裁们，让他们定期给姑娘承包","weight":""}},"right":"2","weight":"1"},{"img":"","question":"哪句歌词最能代表你的心声？","answer":{"a":{"title":"法海你不懂爱，淋漓尽致才痛快","weight":""},"b":{"title":"死了都要爱上一个不回家的人","weight":""},"c":{"title":"听～妈妈～的 话～ 爱上 一匹 野马","weight":""},"d":{"title":"天空飘来五个字儿，你是风儿～我是啥？","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果被妈妈拉去跳广场舞你会如何回答？","answer":{"a":{"title":"大声嚷嚷“我还只是个孩子啊”","weight":""},"b":{"title":"音乐不是小苹果，我不跳","weight":""},"c":{"title":"今！天！的！领！舞！就！是！我！","weight":""},"d":{"title":"委婉地问妈妈“隔壁王叔叔去吗”","weight":""}},"right":"2","weight":"1"}]);
	var xlist = eval([{"img":"","question":"如果你不小心中了500万，你做的第一件事是？","answer":{"a":{"title":"喝豆浆买一碗倒一碗","weight":""},"b":{"title":"给前任发短信：“就后悔吧你”","weight":""},"c":{"title":"狠狠地掐自己一下从梦中醒来","weight":""},"d":{"title":"跟现金合影，然后上传至陌陌","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果有人对你表白，你如何拒绝？","answer":{"a":{"title":"说人话","weight":""},"b":{"title":"呵呵，我去洗个澡","weight":""},"c":{"title":"对不起，我们性别不合适","weight":""},"d":{"title":"我...我麻麻不让我谈恋爱","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果你可以穿越时空回到过去，你最想做什么？","answer":{"a":{"title":"四爷，再爱我一次","weight":""},"b":{"title":"全部家当押宝德国队","weight":""},"c":{"title":"多买几栋楼","weight":""},"d":{"title":"想不出来，下一题吧","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果给你一种超能力，你最希望是什么？","answer":{"a":{"title":"用意念从ATM里取钱","weight":""},"b":{"title":"让Ta爱上自己","weight":""},"c":{"title":"维护世界和平","weight":""},"d":{"title":"每天变帅一点点","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果有机会，你想演哪部影视剧？","answer":{"a":{"title":"大话西游","weight":""},"b":{"title":"古惑仔","weight":""},"c":{"title":"乡村爱情","weight":""},"d":{"title":"和苍老师的500天","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果让你禁止使用手机三天你会做些什么？","answer":{"a":{"title":"玩儿电脑，和平时一样呗","weight":""},"b":{"title":"狠狠睡三天，省去9顿饭钱","weight":""},"c":{"title":"加班，骗餐补","weight":""},"d":{"title":"买一副望远镜，偷看路人手机","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果你养了两只猫，你会给它们起什么名字？","answer":{"a":{"title":"Kevin老师 & Tony老师","weight":""},"b":{"title":"旺财 & 小强","weight":""},"c":{"title":"站住 & 快跑","weight":""},"d":{"title":"红豆 & 黄豆","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果Ta为你承包了座鱼塘，你会？","answer":{"a":{"title":"养一池锦鲤，天天发照片让朋友们转","weight":""},"b":{"title":"月黑风高，把鱼赶走，改造成私人游泳池”","weight":""},"c":{"title":"要什么鱼塘！！我看着像村姑么！”","weight":""},"d":{"title":"把鱼塘出租给霸道总裁们，让他们定期给姑娘承包","weight":""}},"right":"2","weight":"1"},{"img":"","question":"哪句歌词最能代表你的心声？","answer":{"a":{"title":"法海你不懂爱，淋漓尽致才痛快","weight":""},"b":{"title":"死了都要爱上一个不回家的人","weight":""},"c":{"title":"听～妈妈～的 话～ 爱上 一匹 野马","weight":""},"d":{"title":"天空飘来五个字儿，你是风儿～我是啥？","weight":""}},"right":"2","weight":"1"},{"img":"","question":"如果被妈妈拉去跳广场舞你会如何回答？","answer":{"a":{"title":"大声嚷嚷“我还只是个孩子啊”","weight":""},"b":{"title":"音乐不是小苹果，我不跳","weight":""},"c":{"title":"今！天！的！领！舞！就！是！我！","weight":""},"d":{"title":"委婉地问妈妈“隔壁王叔叔去吗”","weight":""}},"right":"2","weight":"1"}]);
	for(var i=0; i<xlist.length; i++){
		xlist[i].img = 'http://wetest.qiniudn.com/' +　xlist[i].img;
	}
    //fontstyle
    var fontstyle = eval([{"fontSize":"16px","textAlign":"center","color":"#fff"}]);
    var ylist = eval([{"threshold":"35","img":"","title":"毒蛇型逗比","desc":"刀子嘴，豆腐心。人艰不拆不是你的性格，喜大普奔尽显真我风采，生活中的你凭借自己洞察世间百态的心智和秒杀一切话题的嘴吧，将调戏人类发挥的淋漓尽致，受到万千粉丝追捧，你就是你，不是在黑别人就是在准备黑别人","sharetitle":"在逗比测试中我获得“毒蛇型逗比”，说我不是在黑别人就是在准备黑别人。快来测测你是那种逗比？"},{"threshold":"30","img":"","title":"闷骚型逗比","desc":"外表冷静，内心狂热。你不说，不代表心里没想过，你就静静坐在哪里看着大千世界云起云落，其实内心早已奔过千万头草泥马，但是你就是不说。嗯，你就继续憋着吧","sharetitle":"在逗比测试中我获得“闷骚型逗比”，说我外表冷静其实内心早已奔过千万头草泥马。快来测测你是那种逗比？"},{"threshold":"25","img":"","title":"炸裂型逗比","desc":"脑袋不大，笑点不高！哈哈哈。。。。。你就是这么开心的一个人，因为你，你身边的人也都是开心的人，哈哈哈哈哈哈哈！","sharetitle":"在逗比测试中我获得“炸裂型逗比”，说我脑袋不大，笑点不高！整天哈哈哈。。。。快来测测你是那种逗比？"},{"threshold":"20","img":"","title":"高冷型逗比","desc":"高贵且内敛，智慧且冷艳！你高贵冷艳的幽默气质总是能瞬间冷却酒肉损友间低级无趣的毒蛇吐槽，轻轻松松让众人皮笑肉笑；分分钟让众生敬仰膜拜。这就是你，一个脱离低级趣味的人。","sharetitle":"在逗比测试中我获得“高冷型逗比”，说我高贵且内敛，智慧且冷艳，是一个脱离低级趣味的人。快来测测你是那种逗比？"},{"threshold":"15","img":"","title":"蠢萌型逗比","desc":"天然呆，自然萌。生活中的你虽然时常反应迟钝、神经大条，老虎老鼠傻傻分不清楚，做出一些常人难以想象的事情。然而在朋友眼中的你永远是傻傻的憨憨的带给大家无尽的欢声笑语，感觉自己萌萌哒卡哇伊内~~","sharetitle":"在逗比测试中我获得“蠢萌型逗比”，说我天然呆，自然萌，老虎老鼠傻傻分不清楚。快来测测你是那种逗比？"},{"threshold":"10","img":"","title":"透明型逗比","desc":"明明你已经很努力的搞笑来提升存在感了，可是大家报数时还是没算你。别叹气，别放弃，相信世界总会有奇迹，小透明也能人气高到飞起。加油吧，么么哒！","sharetitle":"在逗比测试中我获得“透明型逗比”，说我明明已经很努力的搞笑来提升存在感了，可是大家报数时还是没算我。快来测测你是那种逗比？"}]);
    var total=xlist.length; // 总题数
    var finish = 1; // 已完成题数
    var answer_right = 0; // 答对题数
    var score = 0; 
    var isweight = xlist[0].weight;
    var targetScroe = 0;
    
    function startTest(){    	
    	setTimeout(function () {            
            addClass(document.getElementById('main'),'animation-next');
   	        document.getElementById('start').style.display = 'none';
  	        document.getElementById('wenti').style.display = 'block';
        },500)        
    }
    function creatanserElement( anser){
    	var vel = 1;
    	var xieti = '';
    	for(index in anser){
    		console.log(index)
    		xieti +=  "<div id='ti" +index + "'" +" vel='"  +index + "'" +  " num='" +index + ".'" +" class='t-s' onclick='select(this);'><span></span></div>";
    	}
    	//console.log(xieti);
    	document.getElementById('selections').innerHTML = xieti;
    }
   
    function setquestion(i){
    	creatanserElement(xlist[i].answer);
     	     	addClass(document.getElementById('question'), 'question-only');
     	document.getElementById('question').innerHTML = xlist[i].question;
     	document.getElementById('ti0').style.display = 'none';
     			var num=1;
		for(anser in xlist[i].answer){			
			document.getElementById('ti' + anser).innerHTML = xlist[i].answer[anser].title; //换题
				if(xlist[i].answer[anser].weight !=""){
					document.getElementById('ti' + anser).setAttribute('vel',xlist[i].answer[anser].weight);
					targetScroe += xlist[i].answer[anser].weight;
					//console.log("weight:" + xlist[i].answer[anser].weight);
				}
				else{document.getElementById('ti' + anser).setAttribute('vel',num);
				targetScroe += num;
				num += 1;
				}
		}
		
		if(i<(total-1)){
			//console.log("i:" + i + "orignal[i+1].img:" + orignal[i+1].img);			
			if( orignal[i + 1].img!="")
				document.getElementById('preload').setAttribute('src',xlist[i + 1].img);
		}
		
     }
     function paduan(selected){
    
    	    selected = parseInt(selected);
    	    score += selected;
    	    var level='';
    	    console.log('selected' + selected)
    	    console.log('finish:' + finish)
        	if(xlist[finish - 1].right == selected){
        		answer_right += 1;
        		console.log('right:' + answer_right);
        	}     		        		
       		if(total== finish)
       		{
       			console.log('finish' + finish)
       			if(isweight == '0'){	
       				if(answer_right > total*0.75){
           				level="A";
           			}else if(answer_right > total*0.5){
           				level="B";
           			}else if(answer_right > total*0.25){
           				level="C";
           			}else{
           				level="D";
           			}
       			}       
       			//console.log("score :" + score);  
       			//console.log("targetScroe" + targetScroe);
       			//console.log(level);  
       			//addClass(document.getElementById('wenti'),'animation-rotateOut');
       			//location.href = "/wxapi.php/tinytest/result" +  level;
       			showResult(level);
       			//setTimeout(function () {showResult(level);},500);
       		}
       		else{
       			setquestion(finish);
       			finish += 1;
       			}	
        } 
     
     function showResult(level){
     	var answerTitle='';
     	var answerDesc='';
 	   	 for(i=0; i< ylist.length; i++){
 	   		 if(isweight == '1'){
 	   			 if(score >= ylist[i].threshold){
  				    answerTitle = ylist[i].title;
 				    answerDesc= ylist[i].desc;
 				   if(ylist[i].sharetitle !="")
				    	dataForWeixin.title = ylist[i].sharetitle;
				    else if(ylist[i].title !=""){
 				    	dataForWeixin.title = "我在《" + dbt + "》测试结果是：" + ylist[i].title + "。你也来试试";
 				    }
 				    break;
 	   			 }
 	   		 }
 	   		 else if(ylist[i].threshold == level){
 				    answerTitle = ylist[i].title;
 				    answerDesc= ylist[i].desc;
  				   if(ylist[i].sharetitle !="")
				    	dataForWeixin.title = ylist[i].sharetitle;
				    else if(ylist[i].title !=""){
				    	dataForWeixin.title = "我在《" + dbt + "》中测试结果是：" + ylist[i].title + "。你也来试试";
				    }
 				   break;
 			 }
 		 }
 		 document.getElementById('result-title').innerHTML = answerTitle;
 		 document.getElementById('result-desc').innerHTML = answerDesc;
 		 document.getElementById('dbt').innerHTML = dbt;
 		 document.title=dbt;
 	 
 		 //document.getElementById('share-tip').style.display = 'block';
 		 document.getElementById('wenti').style.display = 'none';
     	 document.getElementById('result').style.display = 'block'; 
     	 document.getElementById('result-bnt').style.display = 'block';
     	 document.getElementById('ad_bottom').style.bottom = '50px';
     	
        /*document.body.addEventListener('touchmove', function(e) {
            e.stopPropagation();
            e.preventDefault();
        });*/
     }
</script>
<script>
function select(dom){
    	removeClass(dom,'active'); 
    	//removeClass(document.body,'animation-next');
    	removeClass(document.getElementById('main'),'animation-next');
    	addClass(dom,'active');
    	setTimeout(function () {
            paduan(dom.getAttribute('vel'));
            updateProcess();
            removeClass(dom,'active');
            
            addClass(document.getElementById('main'),'animation-next');
        },500)
        
 } 
   function initGameFont(){
		if(typeof(fontstyle) != 'undefined'){
			for(stye in fontstyle[0]){
			    document.getElementById('ti').style[stye] = fontstyle[0][stye];
			   // document.getElementById('ti' + anser).style.textAlign = 'center';
			}
		}
   }   
</script>
<script>
	var process = 1/total;
    var i = 1;
    function updateProcess(){
        process =  1/total * i * 100;
        if(i>= total) i=total;
        if(process >= 100) process=100;
        document.getElementById('precent').style.width = process + '%';
        document.getElementById('pro-label-span').innerHTML = i + '/' + total;
        i++;
    }
    function adpthead(){
        var img = document.getElementById('head-img');
        console.log(document.body.clientWidth);
//        alert(document.body.scrollWidth)
        var imgStyleHeight = img.height;
        var targetHeight = 100;
        //alert(imgStyleHeight);
        if(imgStyleHeight > targetHeight){
            img.style.marginTop = -(imgStyleHeight-targetHeight)/2 + 'px';
            img.style.marginBottom= -(imgStyleHeight-targetHeight)/2 + 'px';
            img.maxHeight = 100 + 'px';
            img.overflow = 'hidden';
        }
    } 
    
    function setbanner(){
  	   var banner = '';
  	   console.log('banner:' + banner)
 	   if(banner !=""){
 		   document.getElementById('head-img').setAttribute('src','http://wetest.qiniudn.com/' + banner);
 	   }else{		   
 		   document.getElementById('head-img').setAttribute('src','images/banner.jpg');
 	   }
     }

    function initGame(){
    	if("".trim() == ""){
   	        document.getElementById('start').style.display = 'none';
  	        document.getElementById('wenti').style.display = 'block';
    	}
    	else{
        	document.getElementById('home-desc').innerHTML = ''; 
    	}
    	   setbanner();
    	   document.getElementById('dbt').innerHTML = dbt;
    	   document.title=dbt;
    	   setquestion(0); // 初始化    	   
    	   initGameFont();	
    	   updateProcess();
    } 
    initGame();
    
</script>

<script language="javascript">
var _host = "http://" + window.location.host;
var share_url = "http://www.zzfriend.com/demo/youxi/m/dbcs/";
function attention_wx() {
	alert("源码之家 - 提供最新免费网站源码下载！");
	location.href='http://www.mycodes.net/';
	//location.href="http://wetest.weyouquan.com/wxapi.php/index/tip_add/type/0";
}
var dataForWeixin = {
		appId : "", 
		MsgImg : 'http://www.zzfriend.com/demo/youxi/m/dbcs/dbcs.jpg',
		TLImg:'http://www.zzfriend.com/demo/youxi/m/dbcs/dbcs.jpg',
		shareurl :share_url,
		title :  '我在参加了“' + '逗比测试' + '”测试，你也快来测测',
		desc :   '很准的呦,都来试试吧！',
		before_share : function()
		{
			//dataForWeixin.shareurl = "http://we6269.mtjkj.xyz/index.php?r=" + _host + "/wxapi.php/tinygame/iphone6/from/tl";
			//dataForWeixin.title = "我叫"+name+"，我来自"+address+'，我是第'+''+'位警告日本的人'			
		},
		callback : function() {
			$post("/wxapi.php/wetest/inc_share","mid=31"); 
			_czc.push(["_trackEvent","share",'share','mutiple', '31']);
					}
};
function inc_view()
{
	$post("/wxapi.php/wetest/inc_view","mid=31");
}
setTimeout(inc_view,3000);
</script>
<script src="images/wxtools.js"></script>
<script>var _czc = _czc || [];</script>

<div style="display:none"></div>
<style>
.ad_bottom {
	text-align: center;
	left:0px;
	right:0px;
	bottom: 0;
	position: fixed;
	z-index:999;
}
#ifr{height: 50px!important;}
#spn{height: 50px!important;}
#botBoxClose{z-index:20000;top:-20px;}
#botBoxClose{position:absolute;text-align:center;right:0px;top:2px;width:20px;height:20px;line-height:18px;
border-radius:10px;background:rgba(0,0,0,0.6);color:#fff;font-size:16px;font-family:arial;cursor:pointer;
}

</style>

<script src="images/jssdk.js"></script>

</body>
</html>
