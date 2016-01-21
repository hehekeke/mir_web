<?php
$session = Yii::$app->
session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
?>
<style type="text/css">
    a{
        color: black;
    }
    .lichu{
        padding-bottom: 10px;
        border-bottom: 1px dashed grey;
    }
    .kanwu{
        margin-top: 10px;
    }
    .left{

        float: left;
    }
    .kanwu .content img{
        margin-left: 10px;
        width: 71px;
        height: 117px;
    }
    .content-right-kanwu{
        width: 31%;
        margin-left: 40px;
        border-bottom: 1px dashed grey;
    }
    .jiantou_right{
        margin-top: 12px;
        margin-left: 10px;
    }
    .jiantou_left{
        margin-top: 20px;
    }
    .left p{
        margin-left: 10px;
    }
    .lichu{
        padding-top: 10px;
    }
    .tab-content-one_new{
        border-bottom: 1px dashed grey;
    }
    .youqinglianjie .left{
        font-size: 24px;
        margin-top: 20px;
        margin-right: 10px;
    }
    .youqinglianjie .right{
        margin-top: 39px;
        width: 87%;
        border-top: 1px solid black;
    }
    .youqinglianjie img{
        margin-left: 10px;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    .tab-content-right h4{
        margin: 0;
    }
</style>
<!-- index top图片 -->
<div class="indexTop _pc">
    <img src="/public/frontend/img/indexTop.png" class="img-responsive"></div>
<!-- 中间的内容 -->
<div class="content _pc">
    <div class="pull-left content-left">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#a0" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['linchuanzaixian'][$language];?></a>
            </li>
            <li>
                <a href="#a1" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['zhutizhuanfang'][$language];?></a>
            </li>
            <li>
                <a href="#a2" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['zhuanjiazhuanlan'][$language];?></a>
            </li>
            <li>
                <a href="#a3" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['pinpaililiang'][$language];?></a>
            </li>
        </ul>
        <div class="tab-content">
            <?php for ($i=0; $i < count($firstData); $i++) { ?>
                <?php if($i == 0){?>
                    <div class="tab-pane active  tab-content-one" id="a<?php echo $i;?>">
                <?php }else{?>
                    <div class="tab-pane  tab-content-one" id="a<?php echo $i;?>">
                <?php }?>
                
                <?php for ($j=0; $j < count($firstData[$i]); $j++) { ?>

                <a href="/frontend/web/index.php?r=see/index2&type=<?php echo $i+1;?>&id=<?php echo $firstData[$i][$j]->mir360_id?>">
                    <div class="lichu">
                        <div class='pull-left tab-content-left'>
                            <!-- <img src='/public/uploads/360/<?php echo $linchuangyixues[$i]->mir360_pic;?>'> -->
                            <img src='/public/frontend/img/首页-01_06.png'>
                        </div>
                        <div class='pull-left tab-content-right'>
                            <h4>
                                <?php echo  $glo->enOrCh($firstData[$i][$j],"mir360_title");?>
                            </h4>
                            <div class='tab-content-title-small'><?php echo  $glo->enOrCh($firstData[$i][$j],"mir360_zy",'70');?></div>
                            <div class='tab-content-date'>2015/3/18</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </a>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="pull-left content-right">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['ivd'][$language];?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <!-- <img src="/public/uploads/pro/<?php echo $porducts[0]->product_pic;?>"> -->
                <img src='/public/frontend/img/首页-01_03.png'>
            </div>
            <div class='img'>
                <?php for ($i=1; $i < 5 ; $i++) { ?>
                     <!-- <img src='/public/uploads/pro/<?php echo $porducts[$i]->product_pic;?>' > -->

                <?php }?>
                <img src='/public/frontend/img/sy_03.png'>
                <img src='/public/frontend/img/sy_04.png'>
                <img src='/public/frontend/img/sy_05.png'>
                <img src='/public/frontend/img/sy_06.png'>
            </div>
            <div class='img-r-right'>
                <img src='/public/frontend/img/shouye_07.png' >
                <img src='/public/frontend/img/shouye_09.png' >
                <img src='/public/frontend/img/shouye_11.png' >
                <img src='/public/frontend/img/shouye_16.png' >
                <img src='/public/frontend/img/shouye_17.png' >
                <img src='/public/frontend/img/shouye_18.png' >
                <img src='/public/frontend/img/shouye_22.png' >
                <img src='/public/frontend/img/shouye_23.png' >
                <img src='/public/frontend/img/shouye_24.png' >
            </div>
        </div>
    </div>
</div>

<!-- 中间的内容 second -->
<div class="content _pc">
    <div class="pull-left content-left">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['news'][$language];?></a>
            </li>
        </ul>
        <div class="tab-content" id="home">
            <?php for($i=0;$i<count($news);$i++){?>
            <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $news[$i]->article_id?>">
                <div class="tab-pane active tab-content-one tab-content-one_new" >
                    <div class='pull-left tab-content-left'>
                        <img src="/public/uploads/art/<?php echo $news[$i]->article_pic?>">
                    </div>
                    <div class='pull-left tab-content-right' style="boder-bottom:1px dashed grey;">
                        <div class='tab-content-title'>
                            <h4>
                                <?php echo  $glo->enOrCh($news[$i],"article_title");?>
                            </h4>
                        </div>
                        <div class='tab-content-title-small'>
                            <?php echo  $glo->enOrCh($news[$i],"article_zy",100); ?></div>
                        <div class='tab-content-date'>
                            <?php echo $news[$i]->article_date?></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </a>
            <?php }?>
            <div class="tab-pane active tab-content-one" id="home">广告位</div>

        </div>
    </div>
    <div class="pull-left content-right">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['video'][$language];?></a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <!-- <img src="/public/frontend/img/indexTop.png"> -->
                <img src='/public/frontend/img/首页-01_16.png'>
            </div>
            <div class='img-r'>
                <img src='/public/frontend/img/首页-01_20.png'>
                <img src='/public/frontend/img/首页-01_22.png'>
                <img src='/public/frontend/img/首页-01_24.png'>
                <img src='/public/frontend/img/首页-01_28.png'>
                <img src='/public/frontend/img/首页-01_29.png'>
                <img src='/public/frontend/img/首页-01_30.png'>
                <img src='/public/frontend/img/首页-01_34.png'>
                <img src='/public/frontend/img/首页-01_35.png'>
                <img src='/public/frontend/img/首页-01_36.png'>
            </div>
            <div class="tab-pane active tab-content-one" id="home">广告位</div>
        </div>
    </div>
</div>

<!-- 中间的内容 third -->
<div class="content _pc">
    <div class="pull-left content-left">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#zhanhuiMeetings" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['zhanhuixinxi'][$language];?></a>
            </li>
            <li >
                <a href="#xueshuMeetings" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['xueshuhuiyi'][$language];?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active " id="zhanhuiMeetings">
                <div class='pull-left'>
                    <?php for($i=0;$i<count($zhanhuiMeetings);$i++){ ?>
                    <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $zhanhuiMeetings[$i]->
                        meeting_id;?>">
                        <h4>
                            &bull;
                            <?php echo  $glo->enOrCh($zhanhuiMeetings[$i],"meeting_name");?></h4>
                    </a>
                    <?php }?></div>
                <div class="clearfix"></div>
            </div>
            <div class="tab-pane  " id="xueshuMeetings">
                <div class='pull-left'>
                    <?php for($i=0;$i<count($xueshuMeetings);$i++){ ?>
                    <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $xueshuMeetings[$i]->
                        meeting_id;?>">
                        <h4>
                            &bull;
                            <?php echo  $glo->enOrCh($xueshuMeetings[$i],"meeting_name");?></h4>
                    </a>
                    <?php }?></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="pull-left content-right three">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['zhaobiaoguanggao'][$language];?></a>
            </li>
        </ul>
        <div class="tab-pane active" id="home">
            <!-- <div class="tab-content-third pull-left">
                <img src='/public/frontend/img/首页-01_28.png'>
            </div> -->
            <!-- <div class="r-top pull-left">
                <a href="">
                    <p>
                        <?php echo $zhaobiao[0]->article_title;?></p>
                </a>
            </div> -->
            <!-- <div class="clearfix"></div> -->
        </div>
        <?php for($i=0;$i<count($zhaobiao);$i++){ ?>
        <a href="">
            <h4>
                <?php echo $zhaobiao[$i]->article_title;?></h4>
        </a>
        <?php }?></div>
</div>

<!-- 中间的内容 four -->
<div class="content _pc">
    <div class="pull-left content-left">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['jishufenxiang'][$language];?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active " id="zhanhuizhanlan">
                <div class='pull-left'>
                    <?php for($i=0;$i<count($jishus);$i++){?>
                    <h4>
                        &bull;
                        <?php echo $jishus[$i]->article_title;?></h4>
                    <?php }?></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="pull-left content-right-kanwu">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['suokan'][$language];?></a>
            </li>
        </ul>
        <div class="tab-pane active" id="home">
            <div class="kanwu">
                <div class="left jiantou_left">
                    <img src='/public/frontend/img/首页-01_03_left.png'>
                </div>
                <div class="left content">
                    <img src='/public/frontend/img/首页-01_47.png'>
                    <p class="text-center">2015/5</p>
                </div>
                <div class="left content">
                    <img src='/public/frontend/img/首页-01_47.png'>
                    <p class="text-center">2015/5</p>
                </div>
                <div class="left content">
                    <img src='/public/frontend/img/首页-01_47.png'>
                    <p class="text-center">2015/5</p>
                </div>
                <div class="left jiantou_right">
                    <img src='/public/frontend/img/首页-01_05_right.png'>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 友情链接 -->
<div class="youqinglianjie _pc">
    <div class="pull-left left">
       &nbsp;&nbsp;<?php echo Yii::$app->params['title']['youqinglianjie'][$language];?>
    </div>
    <div class="pull-left right">
        <?php for($i=0;$i<count($newFriendLinks);$i++){?>
            <?php for($j=0;$j<count($newFriendLinks[$i]);$j++){?>
                <a href="<?php echo $newFriendLinks[$i][$j]->Link_url?>">
                    &nbsp;&nbsp;&nbsp;
                    <img src="/public/uploads/friendlink/<?php echo $newFriendLinks[$i][$j]->Link_imgurl?>" height="33" width="80" alt="上海丰汇" border="0">
                </a>
            <?php }?>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</div>

<!--************************************* 移动端代码 ************************************************************************-->
<style type="text/css">
      @media screen and (max-width:1000px) {
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
        .logo_index img{
            width: 100%;
            height: 80px;
        }
        ._m .tab-pane img{
            margin-top: 10px;
            margin-left: 20px;
        }
       
        ._m .tab-pane .title{
            width: 70%;
        }
        .tab-content img{
            width: 80%;
        }
        h4{
            margin-top: 20px;
            margin-left: 7%;
        }
        .tab-content-date{
            margin-left: 7%;
        }
        .content{
            padding-bottom: 3px;
            margin-bottom: 20px;
            border-bottom: 1px solid black;
        }
        .jiugetupian img{
            width: 10%;
            float: left;
            margin-top: 10px;
            margin-left: 2px;
        }
        .jiugetupian{
            margin-bottom: 10px;
        }
        .xinwen p{
            margin-top: 5px;
            margin-bottom: 2px;
            margin-left: 3%;
            margin-right: 3%;
        }
        .xinwen .title{
            font-size: 14px;
            font-weight: 500px;
        }
        .xinwen .date{
            color: grey;
            margin-top: 10px;
        }
     
      } 
</style>

<div class='logo _m'>
    <img src='/public/frontend/img/mobile/首页_01.png'></div>

<div class='_m daohang'>
    <a class="pull-left line" href="/frontend/web/index.php?r=new/index">新闻中心</a>
    <a class="pull-left line" href="/frontend/web/index.php?r=idv/index">IVD展厅</a>
    <a class="pull-left" href="">精彩看点</a>
    <a class="pull-left line" href="/frontend/web/index.php?r=meeting/index">会议信息</a>
    <a class="pull-left line" href="">视屏中心</a>
    <a class="pull-left" href="/frontend/web/index.php?r=job/index">行业招聘</a>
    <div class='clearfix'></div>
</div>
<div class='logo_index _m'>
    <img src='/public/frontend/img/indexTop.png'></div>
<ul class="nav nav-pills _m">
    <li class="active">
        <a href="#linchuang">临床在线</a>
    </li>
    <li >
        <a href="#">主题专访</a>
    </li>
    <li>
        <a href="#">主题专访</a>
    </li>
    <li>
        <a href="#">品牌力量</a>
    </li>
</ul>
<div class="tab-content  _m">
    <div class="tab-pane active" id="linchuang">
        <div class="content">
            <div class='pull-left tab-content-left'>
                <img src='/public/frontend/img/indexTop.png'></div>
            <div class='pull-left tab-content-right'>
                <h4>我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                <div class='tab-content-date'>2015/3/18</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="content">
            <div class='pull-left tab-content-left'>
                <img src='/public/frontend/img/indexTop.png'></div>
            <div class='pull-left tab-content-right'>
                <h4>我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                <div class='tab-content-date'>2015/3/18</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="content">
            <div class='pull-left tab-content-left'>
                <img src='/public/frontend/img/indexTop.png'></div>
            <div class='pull-left tab-content-right'>
                <h4>我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                <div class='tab-content-date'>2015/3/18</div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<ul class="nav nav-pills _m">
    <li >
        <a href="#linchuang">技术与探讨</a>
    </li>

</ul>
<div class="jiugetupian _m">
    <img style='margin-left:3%;' src='/public/frontend/img/idv_1.png' >
    <img src='/public/frontend/img/首页-01_05.png' >
    <img src='/public/frontend/img/首页-01_07.png' >
    <img src='/public/frontend/img/首页-01_12.png' >
    <img src='/public/frontend/img/首页-01_13.png' >
    <img src='/public/frontend/img/首页-01_14.png' >
    <img src='/public/frontend/img/首页-01_18.png' >
    <img src='/public/frontend/img/首页-01_19.png' >
    <img src='/public/frontend/img/idv_2.png' >
    <div class="clearfix"></div>
</div>

<ul class="nav nav-pills _m">
    <li class='active'>
        <a href="#xinwenzhongxinM" role="tab" data-toggle="tab">新闻中心</a>
    </li>
</ul>
<div class="tab-content xinwen _m">
    <div class="tab-pane active" id='xinwenzhongxinM'>
        <?php for($i=0;$i<count($news);$i++){ ?>
        <div>
            <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $jishus[$i]->
                article_id;?>">
                <div class="content">
                    <div class='pull-left tab-content-left'>
                        <img src='/public/frontend/img/indexTop.png'></div>
                    <div class='pull-left tab-content-right'>
                        <h4>
                            <?php echo  $glo->enOrCh($news[$i],"article_title");?></h4>
                        <div class='tab-content-date'>
                            <?php echo  date("Y-m-d",strtotime($glo->enOrCh($news[$i],"article_date")));?></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </a>
            <div class="clearfix"></div>
        </div>
        <?php }?></div>
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
        <?php for($i=0;$i<count($zhanhuiMeetings);$i++){ ?>
        <div>
            <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $zhanhuiMeetings[$i]->
                meeting_id;?>">
                <p class="pull-left title">
                    <?php echo  $glo->enOrCh($zhanhuiMeetings[$i],"meeting_name");?></p>
                <p class="pull-right date">
                    <?php echo  date("Y-m-d",strtotime($glo->enOrCh($zhanhuiMeetings[$i],"meeting_bdate")));?></p>
            </a>
            <div class="clearfix"></div>
        </div>
        <?php }?></div>

    <div class="tab-pane" id='xueshuhuiyiM'>
        <?php for($i=0;$i<count($xueshuMeetings);$i++){ ?>
        <div>
            <a href="/frontend/web/index.php?r=meeting/index2&id=<?php echo $xueshuMeetings[$i]->
                meeting_id;?>">
                <p class="pull-left title">
                    <?php echo  $glo->enOrCh($xueshuMeetings[$i],"meeting_name");?></p>
                <p class="pull-right date">
                    <?php echo  date("Y-m-d",strtotime($glo->enOrCh($xueshuMeetings[$i],"meeting_bdate")));?></p>
            </a>
            <div class="clearfix"></div>
        </div>
        <?php }?></div>
</div>

<ul class="nav nav-pills _m">
    <li class='active'>
        <a href="#jishufenxiangs" role="tab" data-toggle="tab">技术分享</a>
    </li>
</ul>
<div class="tab-content xinwen _m">
    <div class="tab-pane active" id='jishufenxiangs'>
        <?php for($i=0;$i<count($jishus);$i++){ ?>
        <div>
            <a href="/frontend/web/index.php?r=new/index2&comeForm=jishu&id=<?php echo $jishus[$i]->
                article_id;?>">
                <p class="pull-left title">
                    <?php echo  $glo->enOrCh($jishus[$i],"article_title");?></p>
                <p class="pull-right date">
                    <?php echo  date("Y-m-d",strtotime($glo->enOrCh($jishus[$i],"article_date")));?></p>
            </a>
            <div class="clearfix"></div>
        </div>
        <?php }?></div>
</div>

<ul class="nav nav-pills _m">
    <li >
        <a href="#linchuang">索刊</a>
    </li>
</ul>