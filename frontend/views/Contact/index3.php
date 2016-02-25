<?php
$session = Yii::$app->session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
?>
<style type="text/css">
	
.breadcrumb > li + li:before {
    color: #CCCCCC;
    content: ">";
    padding: 0 5px;
}
.breadcrumb a{
	font-size: 19px;
}
.list-group{
	width: 210px;
}
.list-group a{
	font-size: 20px;
}
.wenzi{
	margin-top: 40px;
	margin-left: 9%;
}
h3{
	color: blue;
}
.bottom{
	width: 100%;
	border-bottom: 1px solid black;
	margin-bottom: 20px;
}
a{
	color: black;
}
 @media screen and (max-width:1000px) {
 	.top{
        width: 100%;
        height: 43px;
        background-color: #3c80a2;
    }
    .top p{
        padding-top: 8px;
        text-align: center;
        color: white;
        font-size: 20px;
    }
    ._m .tab-pane img{
        margin-top: 10px;
        margin-left: 20px;
    }
     #triangle-left { 
        width: 0; 
        height: 0; 
        border-top: 15px solid transparent; 
        border-right:15px solid #076595; 
        border-bottom :15px solid transparent; 
        float: left;
    } 
    #left{
        width: 34px;
        height: 30px;
        background: #076595;
        margin-left: 15px;
    }
    .top span{
        display: inline-block;
        color: white;
    }



    .list-group{
    	width: 100%;
    	/*margin:  0 5%;*/
    }
 }
}
</style>
<script type="text/javascript">
    $(function(){
        $("#left").click(function(){
            window.location.href="/frontend/web/index.php";
        });
    });
</script>
<div class="top _m">
    <div class="pull-left" style="margin-top:8px;margin-left:28px;">
        <div id="triangle-left"></div>
        <div id='left'>
            <span style="margin-top:5px;">返回</span>
        </div>
    </div>
    <p class="pull-left" style="width:70%;">关于我们</p>
</div>
<ol class="breadcrumb _pc">
	<li>
		<a href="/frontend/web/index.php"><?php echo Yii::$app->params['title']['home'][$language];?></a>
	</li>
	<li>
		<a href="#" class="active"><?php echo Yii::$app->params['title']['aboutUs'][$language];?></a>
	</li>
</ol>


<ul class="list-group pull-left">
    <a href="/frontend/web/index.php" class="list-group-item"><p class="text-center">医学仪器与试剂网</p></a>
    <a href="/frontend/web/index.php?r=contact/index3" class="list-group-item active"><p class="text-center">服务指南</p></a>
    <a href="/frontend/web/index.php?r=contact/index2" class="list-group-item"><p class="text-center">广告服务指南</p></a>
    <a href="/frontend/web/index.php?r=contact/index4" class="list-group-item"><p class="text-center">学术投稿</p></a>
    <a href="/frontend/web/index.php?r=contact/index" class="list-group-item "><p class="text-center">联系我们</p></a>
    <a href="/frontend/web/index.php?r=contact/index5" class="list-group-item"><p class="text-center">免责声明</p></a>
</ul>
<div class="pull-left wenzi _pc">
	<h3>联系我们</h3>
    <div>
        服务指南

      MIR网站为开放式网站，注册会员可无条件浏览到网站内所有共享信息。当您注册成为MIR的会员后，您可以享受到：
      1.    浏览MIR 为您提供的最全面、最丰富的业内信息。
      2.    利用方便的站内搜索查找到检验医学行业各类仪器设备、试剂等产品，并了解到产品的厂家、参数、价格等，方便比对。
      3.    进入MIR的市场论坛，参与最热门的市场话题，并能了解到权威人士的独到见解。
      4.     进入互动端口，进行工作求助，得到别人的帮助并能利用经验帮助别人。
      5.    进入MIR行业新闻版块，浏览全球检验医学的最新时讯。
      6.    在厂商专栏内得到厂家全面的产品说明和售后支持。
      7.    利用MIR广告服务得到更多的商业机会。
      8.    利用MIR最全面的行业相关链接，方便进行相关浏览。
    </div>

</div>

<div class="clearfix"></div>
