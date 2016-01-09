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
	.tab-div{
		padding-bottom: 20px;
		border-bottom: 1px solid black;
	}
	.renmen{
		margin-top: 50px;
	}
	.remen_div span{
		display: inline-block;
		width: 15px;
		height: 15px;
		text-align: center;
		background-color: red;
	}
	.dibu{
		width: 100%;
		border-bottom: 1px solid black;
		margin-bottom: 30px;
	}
	h2 {
		padding-bottom: 20px;
		border-bottom: 1px dashed black;
	}
	.neirong{
        padding-top: 40px;
		border-top: 1px dashed black;
	}
	.shangxia{
		padding-left: 30px;
	}
	.shangxia span{
		font-size: 18px;
		font-weight: 800px;
	}
	.first-p{
		margin-top: 100px;
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
        .title h6{
            color: grey;
        }
        .shangxia{
            /*margin-left: 2%;*/
            padding-left: 8%;
        }
     }
</style>

<div class="top _m">
    <div class="pull-left" style="margin-top:8px;margin-left:28px;">
        <div id="triangle-left"></div>
        <div id='left'>
            <span style="margin-top:5px;">返回</span>
        </div>
    </div>
    <p class="pull-left" style="width:70%;">新闻中心</p>
</div>
    <div class='title _m'>
        <h3 class="text-center">新闻中心新闻中心新闻中心</h3>
        <h6 class="text-center">发布日期是：2323121</h6>
        <div style="padding:0 6%;">
            萨福克斯开发和打算考第三方还打算考几分还是打款发货的萨克 第三方好的撒付款哈舒服空间的
        </div>
    </div>
    <div class='shangxia _m'>
       <p class='first-p'><span>上一篇</span>：1231232132</p>
        <p><span>下一遍</span>：1231232132</p> 
    </div>
        
<!-- 中间的内容 -->
    <div class="content _pc">
    <ol class="breadcrumb _pc">
        <li>
            <a href="/frontend/web/"><?php echo Yii::$app->params['title']['home'][$language];?></a>
        </li>
        <li>
            <a href="/frontend/web/index.php?r=new/index"><?php echo Yii::$app->params['title']['news'][$language];?></a>
        </li>
        <li>
            <a href="#" class="active"><?php echo Yii::$app->params['title']['zhengwen'][$language];?></a>
        </li>
    </ol>
        <div class="pull-left content-left">
            
            <div class="tab-content shangxia">
            	<h2 class="text-center"><?php echo $glo->enOrCh($model,'article_title');?></h2>
            	<span>
                    <?php echo Yii::$app->params['title']['faburiqi'][$language];?>:
                    <?php echo date("Y-m-d",strtotime($model->article_date)); ?> 
                    &nbsp;&nbsp;&nbsp;
                    <?php echo Yii::$app->params['title']['laiyuan'][$language];?>
                    ：
                    <?php echo Yii::$app->params['title']['yixuejiancewang'][$language];?>
                </span>
            	<div class="neirong">
                    <?php echo $glo->enOrCh($model,'article_contents');?>
            	</div>
            	<p class='first-p'><span>上一篇</span>：1231232132</p>
    			<p><span>下一遍</span>：1231232132</p>
            </div>
        </div>
        <div class="pull-left content-right rendian">
            <ul class="nav nav-tabs " role="tablist" id="myTab">
                <li class="active" style="border-bottom:9px solid orange;">
                    <a href="#home" role="tab" data-toggle="tab" style="color:orange;">本周热点</a>
                </li>
            </ul>
            <div class="tab-content tab-div">
            	<h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            	<h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            	<h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            	<h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            	<h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            	<h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            </div>


            <ul class="nav nav-tabs renmen" role="tablist" id="myTab">
                <li class="active" style="border-bottom:9px solid green;">
                    <a href="#home" role="tab" data-toggle="tab" style="color:green;">本周热点</a>
                </li>
            </ul>
            <div class="tab-content remen_div ">
            	<h5><span>1</span>我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h5>
            	<h5><span>1</span>我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h5>
            	<h5><span>1</span>我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h5>
            	<h5><span>1</span>我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h5>
            	<h5><span>1</span>我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h5>
            	<h5><span>1</span>我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h5>
            	<h5><span>1</span>我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h5>
            	<h5><span>1</span>我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h5>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>