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
h1{
    margin-top: 56px;
}
.gongsi{
    padding-bottom: 20px;
}
.gongsi .tab-content{
    padding-top: 30px;
    margin-left: 30px;
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
        h6{
            color: grey;
        }
 }
</style>
<script type="text/javascript">
    $(function(){
        $("#left").click(function(){
            window.location.href="/frontend/web/index.php?r=job/index";
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
    <p class="pull-left" style="width:70%;">行业招聘</p>
</div>
<div class="clearfix"></div>
<ol class="breadcrumb _pc">
    <li>
        <a href="/frontend/web/index.php"><?php echo Yii::$app->params['title']['home'][$language];?></a>
    </li>
    <li>
        <a href="/frontend/web/index.php?r=job/index" ><?php echo Yii::$app->params['title']['job'][$language];?></a>
    </li>
     <li>
        <a href="#" class="active"><?php echo Yii::$app->params['title']['qiyexinxi'][$language];?></a>
    </li>
</ol>
<h1 class="text-center">
    <?php if(!empty($model->mirMake)){?>
        <?php echo $glo->enOrCh($model->mirMake,"maker_name");?>
    <?php } else{ ?>
        <?php echo $glo->enOrCh($model,"article_title");?>
    <?php } ?>
</h1>

  <h6 class="text-center">
  <?php echo Yii::$app->params['title']['faburiqi'][$language];?>
  ：<?php echo date("Y-m-d",strtotime($model->article_date));?></h6>

<div class="_m" style="padding:0 6%;">
     <?php echo $glo->enOrCh($model,"article_contents");?>
</div>

<div class="_pc">
    <div class="gongsi">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#gongsijieshao" role="tab" data-toggle="tab"><?php echo Yii::$app->params['title']['gongsijieshao'][$language];?></a>
            </li>
            <li >
                <a href="#zhaopinzhiwei" role="tab" data-toggle="tab"><?php echo Yii::$app->params['title']['zhaopinzhiwei'][$language];?></a>
            </li>
        </ul>
        <div class="tab-content active">
            <div class="tab-pane active " id="gongsijieshao">
                <?php echo $glo->enOrCh($model->mirMake,"maker_info");?>
                 <!-- <?php echo $model->mirMake->maker_info;?> -->

            </div>
            <div class="tab-pane " id="zhaopinzhiwei">
                <?php echo $glo->enOrCh($model,"article_contents");?>
                <!-- <?php echo $model->article_contents;?> -->
            </div>
           
        </div>
    </div>
</div>