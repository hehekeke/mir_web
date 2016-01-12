<?php
$session = Yii::$app->session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
use yii\widgets\LinkPager;
?>
<style type="text/css">
    .h6-1{
        width: 55%;
        margin-left: 10px;
    }
    .h6-2{
        width: 20%;
        margin-left: 10px;
    }
    .h6-3{
        width: 20%;
        margin-left: 10px;
    }
    .scroll{
        border-bottom: 1px dashed grey;
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
        .nav-pills {
            background-color: #e5e5e5;
        }
        .nav-pills li{
            border-right: 1px solid white;
        }
        .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus{
            background-color: #e5e5e5;
            color: orange;
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
        .one{
            border-bottom: 1px solid #e5e5e5;
        }
        .one p{
            font-size: 16px;
            font-weight: 400;
            margin-left: 6%;
            margin-top: 6px;
        }
        .neirong{
            font-size: 14px;
            color: grey;
        }
        .fenye{
            margin: 0 10%;
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
 <!-------------------------------------------- 移动端代码 ---------------------------------------->
<div class="top _m">
    <div class="pull-left" style="margin-top:8px;margin-left:28px;">
        <div id="triangle-left"></div>
        <div id='left'>
            <span style="margin-top:5px;">返回</span>
        </div>
    </div>
    <p class="pull-left" style="width:70%;">会议信息</p>
    <div class="clearfix"></div>
</div>
<ul class="nav nav-pills _m">
        <li class='active'>
            <a href="#zhanhuizhanlanM" role="tab" data-toggle="tab">展会展览</a>
        </li>
        <li>
            <a href="#xueshuhuiyiM" role="tab" data-toggle="tab">学术会议</a>
        </li>
    </ul>
    <div class="tab-content xinwen _m">
        <div class="tab-pane active" id='zhanhuizhanlanM'>
            <div class="_m">
                <?php for($i=0;$i<count($zhanhuiMeetingsM);$i++){?>
                <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $xueshuMeetings[$i]->meeting_id;?>">
                    <div class="one">
                        <p><?php echo $glo->enOrCh($zhanhuiMeetingsM[$i],"meeting_name");?></p>
                        <p class="neirong">
                            [<?php echo $glo->enOrCh($zhanhuiMeetingsM[$i],"meeting_loc") ;?>]
                            <?php echo date("Y-m-d",strtotime($zhanhuiMeetingsM[$i]->meeting_bdate));?>
                        </p>
                    </div>
                </a>
                <?php }?>
                <div class="fenye">
                    <?= LinkPager::widget(['pagination' =>$zhanhuipages]); ?>
                </div>

            </div>
        </div>

        <div class="tab-pane" id='xueshuhuiyiM'>
            <?php for($i=0;$i<count($xueshuMeetingsM);$i++){ ?>
                 <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $xueshuMeetingsM[$i]->meeting_id;?>">
                    <div class="one">
                        <p><?php echo $glo->enOrCh($xueshuMeetingsM[$i],"meeting_name");?></p>
                        <p class="neirong">
                            [<?php echo $glo->enOrCh($xueshuMeetingsM[$i],"meeting_loc") ;?>]
                            <?php echo date("Y-m-d",strtotime($xueshuMeetingsM[$i]->meeting_bdate));?>
                        </p>
                    </div>
                </a>
            <?php }?>
            <div class="fenye">
                <?= LinkPager::widget(['pagination' =>$xuehuipages]); ?>
            </div>
        </div>
        </div>




<div class="indexTop _pc">
    <img src="/public/frontend/img/indexTop.png" class="img-responsive"></div>
<div class="content _pc">
    <div class="pull-left content-left">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab"><?php echo Yii::$app->params['title']['xueshuhuiyi'][$language];?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="scroll" data-spy="scroll" data-target="#myScrollspy" data-offset="0" style="height:242px;overflow:auto; position: relative;">
                <?php for($i=0;$i<count($xueshuMeetings);$i++){ ?>
                <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $xueshuMeetings[$i]->meeting_id;?>">
                    <div>
                        <h6 class="pull-left h6-1">
                            &bull;
                            <?php echo $glo->enOrCh($xueshuMeetings[$i],'meeting_name');?>
                            </h6>
                        <h6 class="pull-left h6-2">
                            [
                            <?php echo $glo->enOrCh($xueshuMeetings[$i],'meeting_loc');?>
                            ]</h6>
                        <h6 class="pull-left h6-3"><?php echo $xueshuMeetings[$i]->meeting_bdate;?></h6>
                        <div class='clearfix'></div>
                    </div>
                </a>
                <?php }?></div>

        </div>
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab"><?php echo Yii::$app->params['title']['zhanhuixinxi'][$language];?></a>
            </li>
        </ul>
        <div class="tab-content">

            <div class="scroll" data-spy="scroll" data-target="#myScrollspy" data-offset="0" style="height:242px;overflow:auto; position: relative;">
                <?php for($i=0;$i<count($zhanhuiMeetings);$i++){ ?>
                <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $zhanhuiMeetings[$i]->meeting_id;?>">
                    <div>
                        <h6 class="pull-left h6-1">
                            &bull;
                            <?php echo $glo->enOrCh($zhanhuiMeetings[$i],'meeting_name');?>
                        </h6>
                        <h6 class="pull-left h6-2">
                            [
                            <?php echo $glo->enOrCh($zhanhuiMeetings[$i],'meeting_loc');?>
                            ]
                            </h6>
                        <h6 class="pull-left h6-3"><?php echo $zhanhuiMeetings[$i]->meeting_bdate;?></h6>
                        <div class='clearfix'></div>
                    </div>
                </a>
                <?php }?></div>
            </div>
        </div>
    </div>
    <div class="pull-left content-right rendian _pc">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active" style="border-bottom:9px solid orange;">
                <a href="#home" role="tab" data-toggle="tab" style="color:orange;"><?php echo Yii::$app->params['title']['zuixinhuiyi'][$language];?></a>
            </li>
        </ul>
        <div class="tab-content tab-div" style="border-bottom: 1px dashed grey;">
            <?php for($i=0;$i<count($newMeetings);$i++){ ?>
            <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $newMeetings[$i]->meeting_id;?>">
                <h6>
                    &bull;
                    <?php echo $glo->enOrCh($newMeetings[$i],'meeting_name');?>
                </h6>

            </a>
            <?php }?></div>
    </div>
    <div class="clearfix"></div>
</div>