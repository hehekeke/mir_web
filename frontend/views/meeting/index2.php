<?php
$session = Yii::$app->session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
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
    .neirong_date{
        border-bottom: 1px dashed grey;
        border-top: 1px dashed grey;
        
    }
    .zhangtai{
        display: inline-block;
        margin-left: 30px;
    }
    .shuoming{
        margin-top: 40px;
        font-size: 24px;
        margin-bottom: 20px;
        border-bottom: 1px solid black;
    }
    .tab-content  .table{
        width: 90%;
        margin-top: 40px;
    }
    .first{
        text-align: center;
        width: 21%;
    }
      .breadcrumb > li + li:before {
        color: #CCCCCC;
        content: ">";
        padding: 0 5px;
    }
    .breadcrumb a{
        font-size: 19px;
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
        .contents{
            color: black;
            background-color: black;
        }
        .title{
            border-bottom: 1px solid grey;
        }
     }
</style>
<script type="text/javascript">
    $(function(){
        $("#left").click(function(){
            window.location.href="/frontend/web/index.php?r=meeting/index";
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
    <p class="pull-left" style="width:70%;">会议信息</p>
</div>
<div class='title _m'>
    <h3 class="text-center"><?php echo $glo->enOrCh($model,"meeting_name");?></h3>
    <h6 class="text-center">发布日期是：<?php echo date("Y-m-d",strtotime($model->meeting_bdate)); ?> </h6>
    <div style="padding:0 6%;">
        <table class="table table-hover table-bordered">
        <tbody>
            <tr>
                <td class="first text-center">会议时间</td>
                <td>
                    <?php echo date("Y-m-d",strtotime($model->meeting_bdate));?>
                    到
                    <?php echo date("Y-m-d",strtotime($model->meeting_edate));?>
                </td>
            </tr>
            <tr>
                <td class="first text-center">举办城市</td>
                <td><?php echo $model->meeting_loc;?></td>
            </tr>
            <tr>
                <td class="first text-center">会议地址</td>
                <td>
                    <?php echo $glo->enOrCh($model,"meeting_loc");?>
                </td>
            </tr>
            <tr >
                <td class="first text-center">展馆名称</td>
                <td>Pune</td>
            </tr>
            <tr >
                <td class="first text-center">主板单位</td>
                <td><?php echo $model->meeting_loc;?></div></td>
            </tr>
        </tbody>
    </table>
    <p class="shuoming">展会说明</p>
        <?php echo $glo->enOrCh($model,'meeting_mem');?>
    </div>
</div>

<div class="content _pc">

    <div class="pull-left content-left">
        <ol class="breadcrumb _pc">
            <li>
                <a href="/frontend/web/"><?php echo Yii::$app->params['title']['home'][$language];?></a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=meeting/index">
                    <?php if($model->meeting_class == '1'){?>
                        <?php echo Yii::$app->params['title']['xueshuhuiyi'][$language];?>
                    <?php }else{ ?>
                        <?php echo Yii::$app->params['title']['zhanhuixinxi'][$language];?>
                    <?php }?>
                </a>
            </li>
        </ol>
        <div class="tab-content">
            <div>
                <h3 class="text-center">
                    <?php echo $glo->enOrCh($model,"meeting_name");?>
                </h3>
                <div class="neirong_date">
                    <span><?php echo Yii::$app->params['title']['faburiqi'][$language];?>：2015-3-28</span>
                    <span class='zhangtai'>状态：未开始</span>
                </div>
                <table class="table table-hover table-bordered">
                    <tbody>
                        <tr>
                            <td class="first text-center">会议时间</td>
                            <td>
                                <?php echo date("Y-m-d",strtotime($model->meeting_bdate));?>
                                到
                                <?php echo date("Y-m-d",strtotime($model->meeting_edate));?>
                            </td>
                        </tr>
                        <tr>
                            <td class="first text-center">举办城市</td>
                            <td><?php echo $model->meeting_loc;?></td>
                        </tr>
                        <tr>
                            <td class="first text-center">会议地址</td>
                            <td>
                                <?php echo $glo->enOrCh($model,"meeting_loc");?>
                            </td>
                        </tr>
                        <tr >
                            <td class="first text-center">展馆名称</td>
                            <td>Pune</td>
                        </tr>
                        <tr >
                            <td class="first text-center">主板单位</td>
                            <td><?php echo $model->meeting_loc;?></div></td>
                        </tr>

                    </tbody>
                </table>
                <p class="shuoming"><?php echo Yii::$app->params['title']['zhanhuishuoming'][$language];?></p>
                <div>
                    <?php echo $glo->enOrCh($model,"meeting_mem");?>
                </div>
            </div>

        </div>

    </div>
</div>
<div class="pull-left content-right rendian _pc">
    <ul class="nav nav-tabs " role="tablist" id="myTab">
        <li class="active" style="border-bottom:9px solid orange;">
            <a href="#home" role="tab" data-toggle="tab" style="color:orange;">
                <?php echo Yii::$app->params['title']['zuixinhuiyi'][$language];?>
            </a>
        </li>
    </ul>
    <div class="tab-content tab-div" style="border-bottom: 1px dashed grey;">
        <?php for($i=0;$i<count($newMeetings);$i++){ ?>
        <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $newMeetings[$i]->
            meeting_id;?>">
            <h6>
                &bull;
                <?php echo $glo->enOrCh($newMeetings[$i],"meeting_name");?>
            </h6>
        </a>
        <?php }?></div>

</div>
<div class="clearfix"></div>
</div>