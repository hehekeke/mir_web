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
        cursor: pointer;
    }
    .jiantou_left{
        margin-top: 20px;
        cursor: pointer;
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
        font-size: 18px;
        margin-top: 20px;
        margin-right: 10px;
    }
    .youqinglianjie .right{
        margin-top: 19px;
        /*width: 87%;*/
        /*border-top: 1px solid black;*/
    }
    .youqinglianjie img{
        /*margin-left: 10px;*/
        margin-top: 15px;
        margin-bottom: 10px;
        width: 121px;
        height: 40px;
    }
    .tab-content-right h4{
        margin: 0;
    }
    .banner  a{ width:100%; height:100%; display:block;}
    .banner  .title{background-color:RGBA(0,0,0,.5); height:48px; color:#fff;  position:absolute; left:0; bottom:0px; width:74px; z-index:1000;}
    .banner  .title{font-size: 12px;}
    .banner img{
        cursor: pointer;
    }
    .banner span{
        cursor: pointer;
    }
    .title_big,.title_big_video{
        display: inline-block;
        background-color: #036393;
        width: 312px;
        height: 20px;
        color: white;
        padding-left: 10px;
    }
    .title_big_video p{
        display: block;
        float: left;
    }
    .title_big_video div{
        background-color: #0c507e;
        float: left;
        width: 20px;
        height: 20px;
        text-align: center;
        margin-left: 1px;
        cursor: pointer;
    }
    .jihuiVideoPic{
        background-color: yellow;
    }
    .guangaowei{
        width: 100%;
        height: 90px;
        background-color: #dddddd;
        text-align: center;
        padding-top: 30px;
        font-size: 30px;
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
                            <img src='/public/uploads/360/<?php echo $firstData[$i][$j]->mir360_pic;?>'>
                        </div>
                        <div class='pull-left tab-content-right'>
                            <h4 style="margin-bottom: 10px;">
                                <?php echo  $glo->enOrCh($firstData[$i][$j],"mir360_title");?>
                                <br/>
                            </h4>
                            <div class='tab-content-title-small'><?php echo  $glo->enOrCh($firstData[$i][$j],"mir360_zy",'80');?></div>
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
                <img id='shouYeIvd' src="/public/uploads/pro/<?php echo $fourPic[0]->product_pic;?>">
                <span class="title_big">
                        <?php echo $fourPic[0]->product_name;?>
                 </span>
            </div>
            <script type="text/javascript">
            $(function(){
                $(".banner span:eq(0)").hide();
                $(".banner img,span").click(function(){
                        $(".banner span").show();
                        var imgUrl = $(this).parent().find("img").attr("src");
                        $("#shouYeIvd").attr("src",imgUrl);
                        $(this).hide();
                       $(".title_big").html($(this).html());
                });
                var i = 0;
                setInterval(function(){
                    $("#shouYeIvd").attr("src",$(".banner img:eq("+i+")").attr("src"));
                    $(".banner span").show();
                    $(".banner span:eq("+i+")").hide();
                    $(".title_big").html($(".banner span:eq("+i+")").html());
                    if(i==4){
                         i=0;
                    }else{
                        i++;
                    }
                },3000);
            })
            </script>
            <div class='img'>
                <?php for ($i=0; $i < 4 ; $i++) {?>
                <div class="col-sm-6 col-md-3" style="padding:0;">
                    <div  class="banner">
                        <img src='/public/uploads/pro/<?php echo $fourPic[$i]->product_pic;?>'>
                        <span class="title">
                            <?php echo $fourPic[$i]->product_name;?>
                        </span>
                     </div>
                </div>
                <?php }?>
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
                        <img  src="/public/uploads/art/<?php echo $news[$i]->article_pic?>">
                    </div>
                    <div class='pull-left tab-content-right' style="boder-bottom:1px dashed grey;">
                        <div class='tab-content-title'>
                            <h4 style="margin-bottom: 10px;">
                                <?php echo  $glo->enOrCh($news[$i],"article_title");?>
                                <br/>
                            </h4>
                        </div>
                        <div class='tab-content-title-small'>
                            <?php echo  $glo->enOrCh($news[$i],"article_zy",'80'); ?></div>
                        <div class='tab-content-date'>
                            <?php echo $news[$i]->article_date?></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </a>
            <?php }?>
            <div class="tab-pane active tab-content-one guangaowei" id="home" >广告位</div>

        </div>
    </div>
    <div class="pull-left content-right">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">
                    <?php echo Yii::$app->params['title']['video'][$language];?></a>
            </li>
        </ul>
        <script type="text/javascript">
            $(function(){
                var k = 0;

                $(".title_big_video div:eq(0)").css({"background-color":"#f8d410"});
                setInterval(function(){
                    $(".title_big_video div").css({"background-color":"#0c507e"});
                    $(".title_big_video div:eq("+k+")").css({"background-color":"#f8d410"});
                    // $("#shouYeIvd").attr("src",$(".banner img:eq("+i+")").attr("src"));
                    // $(".banner span").show();
                    // $(".banner span:eq("+i+")").hide();
                    // $(".title_big").html($(".banner span:eq("+i+")").html());
                    if(k==6){
                         k=0;
                    }else{
                        k++;
                    }
                },3000);
                $(".title_big_video").click(function(){return false;});
                $(".title_big_video div").click(function(){
                    $(".title_big_video div").css({"background-color":"#0c507e"});
                    $(this).css({"background-color":"#f8d410"});
                    k = $(this).index();
                    return false;
                });
            })
        </script>
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <img src='/public/uploads/video_cover/<?php echo $videos[0]->video_cover;?>'>
                <span class="title_big_video">
                    <p style="width: 136px;"><?php echo  $glo->enOrCh($videos[0],"video_title");?></p>
                    <div style="margin-left:41px;">1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                    <div>5</div>
                    <div>6</div>
                </span>
            </div>
            <div class='img-r' style="height: 408px;">
                <!-- <?php for($i=1;$i<count($videos);$i++){?>
                    <img src='/public/uploads/video_cover/<?php echo $videos[$i]->video_cover;?>'>
                    
               <?php }?> -->
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
            <div class="tab-pane active tab-content-one guangaowei" id="home">广告位</div>
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
                        <h4 style="font-size: 14px;">
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
                        <h4 style="font-size: 14px;">
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
        </div>
        <?php for($i=0;$i<count($zhaobiao);$i++){ ?>
        <a href="">
            <h4 style="font-size: 14px;">
                <?php echo $zhaobiao[$i]->article_title;?>
            </h4>
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
                    <a style="height:21px;display: block;" href="/frontend/web/index.php?r=skill/index2&id=<?php echo $jishus[$i]->article_id;?>">
                        <h4 style="font-size: 14px;">
                            &bull;
                            <?php echo $jishus[$i]->article_title;?>
                        </h4>
                    </a>
                    <?php }?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- 索刊的js代码 -->
    <script type="text/javascript">
    $(function(){
        $(".kanwu .content").hide();
        // $("#2,#3,#4").show();
        var k = 0;
        var max = <?php echo count($mgzNum);?>;
        // for (var i = 0; i <= max; i++) {
        //     $("#"+i).show();
        // };
        showKanwu(k,max);
        // alert(max);
        $(".jiantou_left").click(function(){
            if(k==0){

            }else{
                k--;
            }
            showKanwu(k,max);
        });
        $(".jiantou_right").click(function(){
            if(k==Math.ceil(max/3)-1){

            }else{
                k++;
            }
            showKanwu(k,max);
        });
    });
    function showKanwu(k,max){
        $(".kanwu .content").hide();
        if(k==0){
            $("#"+3*k).show();
            $("#1").show();
            $("#2").show();
        }else{
            $("#"+3*k).show();
            var next = 3*k+1;
            $("#"+next).show();
            var next_next = next+1;
            $("#"+next_next).show();
        }
    }
    </script>
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
            <?php for ($i=0; $i < count($mgzYear); $i++) { 
               
            ?>
                <a href="/frontend/web/index.php?r=cable/index&mgzYear=<?php echo $mgzYear[$i];?>&mgzNum=<?php echo $mgzNum[$i];?>">
                    <div id="<?php echo $i;?>" class="left content">
                        <img src='/public/frontend/img/首页-01_47.png'>
                        <p class="text-center"><?php echo $mgzYear[$i];?>/<?php echo $mgzNum[$i];?></p>
                    </div>  
                </a>
            <?php } ?>
                <div class="left jiantou_right">
                    <img src='/public/frontend/img/首页-01_05_right.png'>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 友情链接 -->
<div class="youqinglianjie _pc">
    <div class=" left" style="display: inline-block;">
       <?php echo Yii::$app->params['title']['youqinglianjie'][$language];?>
    </div>
    <div class=" left" style="display: inline-block; border-top:1px solid black;height: 1px;width: 90%;margin-top: 32px;">
       
    </div>
    <div class="pull-left right">
        <?php for($i=0;$i<count($newFriendLinks);$i++){?>
            <?php for($j=0;$j<count($newFriendLinks[$i]);$j++){?>
                <a href="<?php echo $newFriendLinks[$i][$j]->Link_url?>">
                    
                    <img src="/public/uploads/friendlink/<?php echo $newFriendLinks[$i][$j]->Link_imgurl?>"  alt="上海丰汇" border="0">
                </a>
            <?php }?>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</div>

<!--************************************* 移动端代码 ************************************************************************-->
<style type="text/css">
      @media screen and (max-width:1000px) {
        .logo{
            margin-top: 0px;
            height: auto;
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
        .logo_index img{
            width: 110%;
            height: 80px;
        }
        ._m .tab-pane img{
            margin-top: 0px;
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