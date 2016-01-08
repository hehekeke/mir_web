<style type="text/css">
    a{
        color: black;
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
                <a href="#home" role="tab" data-toggle="tab">临床医学</a>
            </li>
            <li>
                <a href="#profile" role="tab" data-toggle="tab">主题专访</a>
            </li>
            <li>
                <a href="#messages" role="tab" data-toggle="tab">专家专栏</a>
            </li>
            <li>
                <a href="#settings" role="tab" data-toggle="tab">品牌力量</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active tab-content-one" id="home">
                <div class='pull-left tab-content-left'>
                    <img src='/public/frontend/img/indexTop.png'></div>
                <div class='pull-left tab-content-right'>
                    <h4>我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                    <div class='tab-content-title-small'>shfdiashfdsafk</div>
                    <div class='tab-content-date'>2015/3/18</div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="tab-pane active tab-content-one" id="home">
                <div class='pull-left tab-content-left'>
                    <img src='/public/frontend/img/indexTop.png'></div>
                <div class='pull-left tab-content-right'>
                    <div class='tab-content-title'>我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我奇</div>
                    <div class='tab-content-title-small'>shfdiashfdsafk</div>
                    <div class='tab-content-date'>2015/3/18</div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <div class="pull-left content-right">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">IDV展厅</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <img src="/public/frontend/img/idv.png"></div>
            <div class='img'>
                <img src='/public/frontend/img/idv_1.png' >
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' ></div>
            <div class='img-r-right'>
                <img src='/public/frontend/img/idv_1.png' >
                <img src='/public/frontend/img/首页-01_05.png' >
                <img src='/public/frontend/img/首页-01_07.png' >
                <img src='/public/frontend/img/首页-01_12.png' >
                <img src='/public/frontend/img/首页-01_13.png' >
                <img src='/public/frontend/img/首页-01_14.png' >
                <img src='/public/frontend/img/首页-01_18.png' >
                <img src='/public/frontend/img/首页-01_19.png' >
                <img src='/public/frontend/img/idv_2.png' ></div>

        </div>

    </div>

</div>

<!-- 中间的内容 second -->
<div class="content _pc">
    <div class="pull-left content-left">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">新闻中心</a>
            </li>
        </ul>
        <div class="tab-content" id="home">
            <?php for($i=0;$i<count($news);$i++){?>
            <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $news[$i]->article_id?>">
            <div class="tab-pane active tab-content-one" >
                <div class='pull-left tab-content-left'>
                    <img src="http://www.mir168.com/edming/uppic/art/<?php echo $news[$i]->article_pic?>"></div>
                <div class='pull-left tab-content-right' style="boder-bottom:1px dashed grey;">
                    <div class='tab-content-title'><?php echo $news[$i]->article_title?></div>
                    <div class='tab-content-title-small'><?php echo  mb_substr($news[$i]->article_zy,0,60,'utf-8'); ?></div>
                    <div class='tab-content-date'><?php echo $news[$i]->article_date?></div>
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
                <a href="#home" role="tab" data-toggle="tab">视屏中心</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <img src="/public/frontend/img/indexTop.png"></div>
            <div class='img-r'>
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' >
                <img src='/public/frontend/img/indexTop.png' ></div>
            <div class="tab-pane active tab-content-one" id="home">广告位</div>
        </div>
    </div>
</div>

<!-- 中间的内容 third -->
<div class="content _pc">
    <div class="pull-left content-left">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#zhanhuiMeetings" role="tab" data-toggle="tab">展会展览</a>
            </li>
            <li >
                <a href="#xueshuMeetings" role="tab" data-toggle="tab">学术会议</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active " id="zhanhuiMeetings">
                <div class='pull-left'>
                    <?php for($i=0;$i<count($zhanhuiMeetings);$i++){ ?>
                        <a href="">
                            <h4>&bull;<?php echo $zhanhuiMeetings[$i]->meeting_name;?></h4>
                        </a>
                     <?php }?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="tab-pane  " id="xueshuMeetings">
                <div class='pull-left'>
                    <?php for($i=0;$i<count($xueshuMeetings);$i++){ ?>
                        <a href="">
                            <h4>&bull;<?php echo $xueshuMeetings[$i]->meeting_name;?></h4>
                        </a>
                     <?php }?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="pull-left content-right three">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">招标广告</a>
            </li>
        </ul>

        <div class="tab-pane active" id="home">
            <div class="tab-content-third pull-left">
                <img src="/public/frontend/img/indexTop.png"></div>
            <div class="r-top pull-left">
                <a href="">
                    <p><?php echo $zhaobiao[0]->article_title;?></p>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php for($i=1;$i<count($zhaobiao);$i++){ ?>
        <a href="">
            <h6><?php echo $zhaobiao[$i]->article_title;?></h6>
        </a>
        <?php }?>
    </div>
</div>

<!-- 中间的内容 four -->
<div class="content _pc">
    <div class="pull-left content-left">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">技术分享</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active " id="zhanhuizhanlan">
                <div class='pull-left'>
                    <h4>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                    <h4>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                    <h4>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                    <h4>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                    <h4>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="pull-left content-right">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">索刊</a>
            </li>
        </ul>
        <div class="tab-pane active" id="home">1111</div>

    </div>
</div>
<!-- 友情链接 -->
<table class='youqinglianjie _pc'  border="0" cellspacing="0" cellpadding="0">
    <tr valign="middle">
        <td height="44" align="center">
            <table width="972" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" class="tblineX">
                        <p align="left" style="color:#333">&nbsp;&nbsp;&nbsp;&nbsp;友情链接：</p>
                            <table width="700" border="0" cellpadding="0" cellspacing="0">
                                <?php for($i=0;$i<count($newFriendLinks);$i++){?>
                                <tr height="40">
                                    <?php for($j=0;$j<count($newFriendLinks[$i]);$j++){?>
                                    <td align="center" valign="middle">
                                        <a href="<?php echo $newFriendLinks[$i][$j]->Link_url?>">
                                            &nbsp;&nbsp;&nbsp;
                                            <img src="http://www.mir168.com/uppic/friendlink/<?php echo $newFriendLinks[$i][$j]->Link_imgurl?>" height="33" width="80" alt="上海丰汇" border="0"></a>
                                    </td>
                                    <?php }?>
                                </tr>
                                <?php }?>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

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
            width: 50%;
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
            font-size: 20px;
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
        <a class="pull-left line" href="">IVD展厅</a>
        <a class="pull-left" href="">精彩看点</a>
        <a class="pull-left line" href="">会议信息</a>
        <a class="pull-left line" href="">视屏中心</a>
        <a class="pull-left" href="">行业招聘</a>
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
        <li >
            <a href="#linchuang">新闻中心</a>
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
        <li class='active'>
            <a href="#linchuang">展会展览</a>
        </li>
        <li>
            <a href="#linchuang">学术会议</a>
        </li>
    </ul>
    <div class="xinwen _m">
        <div>
            <p class="pull-left title">1323131132313113231311323131</p>
            <p class="pull-right date">2013-5-18</p>
            <div class="clearfix"></div>
        </div>
        <div>
            <p class="pull-left title">1323131132313113231311323131</p>
            <p class="pull-right date">2013-5-18</p>
            <div class="clearfix"></div>
        </div>
        <div>
            <p class="pull-left title">1323131132313113231311323131</p>
            <p class="pull-right date">2013-5-18</p>
            <div class="clearfix"></div>
        </div>
    </div>
    <ul class="nav nav-pills _m">
        <li >
            <a href="#linchuang">技术分享</a>
        </li>
    </ul>
    <div class="xinwen _m">
        <div>
            <p class="pull-left title">1323131132313113231311323131</p>
            <p class="pull-right date">2013-5-18</p>
            <div class="clearfix"></div>
        </div>
        <div>
            <p class="pull-left title">1323131132313113231311323131</p>
            <p class="pull-right date">2013-5-18</p>
            <div class="clearfix"></div>
        </div>
        <div>
            <p class="pull-left title">1323131132313113231311323131</p>
            <p class="pull-right date">2013-5-18</p>
            <div class="clearfix"></div>
        </div>
    </div>
    <ul class="nav nav-pills _m">
        <li >
            <a href="#linchuang">索刊</a>
        </li>
    </ul>