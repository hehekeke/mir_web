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
    <a href="/frontend/web/index.php?r=contact/index3" class="list-group-item"><p class="text-center">服务指南</p></a>
    <a href="/frontend/web/index.php?r=contact/index2" class="list-group-item"><p class="text-center">广告服务指南</p></a>
    <a href="/frontend/web/index.php?r=contact/index4" class="list-group-item"><p class="text-center">学术投稿</p></a>
    <a href="/frontend/web/index.php?r=contact/index" class="list-group-item "><p class="text-center">联系我们</p></a>
    <a href="/frontend/web/index.php?r=contact/index5" class="list-group-item active"><p class="text-center">免责声明</p></a>
</ul>
<div class="pull-left wenzi _pc">
	<h3>联系我们</h3>

</div>

<div class="clearfix"></div>
