<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->
beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->
    language ?>">
<head>
    <meta charset="<?= Yii::$app->
    charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->
    head() ?>
    <style type="text/css">
    body{
        margin: 17px 10% 0 10%;
    }
    .header form{
        margin-right: 30%;
    }
    /*登陆 注册按钮*/
    .header .loign{
        padding:6px 0px;
    }
    /*导航栏*/
    .navbar li,.navbar .active{
        width: 125px;
        background-color: #5d9dbe;
    }
    .navbar li a{
        width: 127px;
        color: #ffffff;
        font-size: 20px;
        font-weight: 800;
    }
    .navbar{
        border: 1px solid #5d9dbe;
        border-radius: 4px;
        background-color: #5d9dbe;
    }
    .kongbai{ 
        width: 2px;
        height: 25px;
        background-color: #ffffff;
    }
    .navbar  li  a{
        padding: 14px 2px;
    }

    .indexTop img{
        width: 100%;
    }

    /*中间的内容*/
    .content{
        margin-top: 20px;
    }
    .content-left{
        width: 64%;
    }
    .content-right{
        width: 31%;
        margin-left: 40px;
    }
    .nav-tabs li a{
        font-size: 22px;
    }
    .nav-tabs a{
        color: black;
        text-align: center;
    }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{
        border: none;
    }
    .nav-tabs > li.active{
        border-bottom: 9px solid #5d9dbe;
    }
    .nav-tabs > li.active a{
        color: #5d9dbe;
    }
    .tab-content img{
        width: 178px;
        height: 116px;
    }
    .tab-content-left{
        width: 33%;
    }
    .tab-content-left >div{
        margin: 10px 0;
    }
    .tab-content-right{
        width: 59%;
    }
    .tab-content-one{
        margin-top: 15px;
        padding-bottom: 15px;
        border-bottom: 1px dashed grey;
    }
    .tab-content-title{
        margin-top: 15px;
        font-size: 18px;
        color: black;
    }
    .tab-content-title-small{
        font-size: 16px;
        color: #808080;
    }
    .tab-content-date{
        font-size: 14px;
        color: #7E8877;
    }

    .content-right img{
        margin-top: 20px;
        width: 100%;
        height: 210px;
    }
    .img img{
        width: 24%;
        height: 50px;
        margin-bottom: 40px;
    }
    .img-r img{
        width: 29%;
        height:60px;
        margin-right: 10px;
    }
    .img-r-right img{
        width: 32%;
        height: 100px;
    }

    .tab-content-third img{
        width: 110px;
        height: 70px;
    }
    .three{
        border-bottom: 1px dashed black;
    }
    #zhanhuizhanlan{
        padding-bottom: 20px;
        border-bottom: 1px dashed black;
    }
    .three .r-top{
        margin-left: 20px;
        margin-top: 40px;
        width: 170px;
        height: 36px;
        border-bottom: 1px dashed black;
    }
    .youqinglianjie{
        border-bottom: 1px solid black;
        margin-bottom: 20px;
    }
    </style>
</head>
<body class="header">
    <!-- 这个是公用的header.html -->
    <div>
        <img src='https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=3233073314,694013259&fm=58&s=39C718720E8EBE011B398BAC0300F024'>
        <span class="pull-right btn btn-primary">English</span>

        <span class="pull-right btn btn-primary">中文</span>

        <span class="pull-right btn loign">注册</span>
        <span class="pull-right btn loign">登陆 |</span>
        <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="输入关键字">
                <button type="submit" class="btn btn-default">搜索</button>
            </div>
        </form>

    </div>

    <!-- 导航栏 -->
    <nav class="navbar " role="navigation">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="##" class='text-center'>
                    首页
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li >
                <a href="##" class='text-center'>
                    新闻中心
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="##" class='text-center'>
                    IVD展厅
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="##" class='text-center'>
                    精彩看点
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="##" class='text-center'>
                    会议信息
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="##" class='text-center'>
                    视屏中心
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="##" class='text-center'>
                    行业招聘
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="##" class='text-center'>关于我们</a>
            </li>
        </ul>
    </nav>
    <!-- index top图片 -->
    <div class="indexTop">
        <img src="/public/frontend/img/indexTop.png" class="img-responsive"></div>

    <!-- 中间的内容 -->
    <div class="content">
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
    <div class="content">
        <div class="pull-left content-left">
            <ul class="nav nav-tabs " role="tablist" id="myTab">
                <li class="active">
                    <a href="#home" role="tab" data-toggle="tab">新闻中心</a>
                </li>
            </ul>
            <div class="tab-content">
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
    <div class="content">
        <div class="pull-left content-left">
            <ul class="nav nav-tabs " role="tablist" id="myTab">
                <li class="active">
                    <a href="#home" role="tab" data-toggle="tab">展会展览</a>
                </li>
                <li >
                    <a href="#home" role="tab" data-toggle="tab">学术会议</a>
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
                    <p>居中对齐文本</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <h6>公司1</h6>
            <h6>公司2</h6>
            <h6>公司3</h6>
            <h6>公司4</h6>
        </div>
    </div>

    <!-- 中间的内容 four -->
    <div class="content">
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
    <table class='youqinglianjie'  border="0" cellspacing="0" cellpadding="0">
        <tr valign="middle">
            <td height="44" align="center">
                <table width="972" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" class="tblineX">
                            <p align="left" style="color:#333">&nbsp;&nbsp;&nbsp;&nbsp;友情链接：</p>
                            <!--滚动脚本<div id="A1">
                            <div id="A2">
                                -->
                                <table width="700" border="0" cellpadding="0" cellspacing="0">

                                    <tr height="40">

                                        <td align="center" valign="middle">

                                            <a href="http://www.keweidiagnostic.com/">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015031837015309.gif" height="33    " width="80" alt="北京科卫临床诊断试剂有限公司" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.zhyujia.com">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015031836951373.gif" height="33 " width="80" alt=" 珠海市誉佳塑料制品有限公司" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.lzyhsw.com/">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015022749123029.gif" height="33 " width="80" alt=" 兰州雅华生物技术有限公司" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.diasia.com.cn/">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015021236209781.gif" height="33  " width="80" alt="深圳德夏科技发展有限公司" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="www.stago-cn.com">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015012747442321.gif" height="33   " width="80" alt="北京思塔高诊断产品贸易有限责任公司" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.juchuangbio.com/">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015012747331697.gif" height="33    " width="80" alt="聚创科技" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.thalys.net.cn/">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015012747278977.gif" height="33  " width="80" alt="武汉塞力斯" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.huisong.com/">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015012740889805.gif" height="33    " width="80" alt="汇松科技" border="0"></a>

                                        </td>

                                    </tr>
                                    <tr height="40">
                                        <td align="center" valign="middle">

                                            <a href="http://www.hightopqd.com">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015011260357305.gif" height="33   " width="80" alt="青岛汉唐生物科技有限公司" border="0"></a>
                                        </td>
                                        <td align="center" valign="middle">

                                            <a href="http://www.tellgen.com">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015011260328585.gif" height="33 " width="80" alt="上海透景生命科技有限公司" border="0"></a>
                                        </td>
                                        <td align="center" valign="middle">

                                            <a href="http://www.snibe.com">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015011260288385.gif" height="33   " width="80" alt="深圳新产业生物医学工程有限公司" border="0"></a>
                                        </td>
                                        <td align="center" valign="middle">
                                            <a href="http://www.khbio.com">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2015011260248681.gif" height="33   " width="80" alt="潍坊市康华生物技术有限公司" border="0"></a>
                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.joyinmed.com/">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2014071556442933.gif" height="33   " width="80" alt="zhuoyin" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2013031155825389.gif" height="33   " width="80" alt="艾康生物技术（杭州）有限公司" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2010122340296417.gif" height="33   " width="80" alt="百龙腾" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.yutaikang.com">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2010031058278909.gif" height="33   " width="80" alt="裕泰康" border="0"></a>

                                        </td>

                                    </tr>
                                    <tr height="40">

                                        <td align="center" valign="middle">

                                            <a href="http://www.shfenghui.cn">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2009102357895129.gif" height="33    " width="80" alt="上海丰汇" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.tuopu.com.cn">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2009102357881849.gif" height="33    " width="80" alt="北京拓普" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.chinabiocell.com">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2009102357761597.gif" height="33    " width="80" alt="博赛生物" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle">

                                            <a href="http://www.thermo.com.cn">
                                                &nbsp;&nbsp;&nbsp;
                                                <img src="http://www.mir168.com/uppic/friendlink/2009102357636053.gif" height="33   " width="80" alt="赛默飞世尔" border="0"></a>

                                        </td>

                                        <td align="center" valign="middle"></td>

                                        <td align="center" valign="middle"></td>

                                        <td align="center" valign="middle"></td>

                                        <td align="center" valign="middle"></td>

                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="30" align="center">
                    <a href="about1.asp">MIR医学仪器与试剂网</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="about2.asp">服务指南</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="about3.asp">广告服务指南</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="about4.asp">学术投稿</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="about5.asp">联系我们</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="about6.asp">免责声明</a>
                </td>
            </tr>
            <tr>
                <td height="30" align="center">
                    <a href="#">Copyright &copy;2016&nbsp;天津市讯星科技发展广告有限公司</a>
                    <a href="http://www.miibeian.gov.cn"></a>
                </td>
            </tr>
            <tr>
                <td height="30" align="center">
                    <a href="http://www.miibeian.gov.cn" target="_blank">津ICP14002484</a>
                    <br /> <font style="font-size:9px; color:#666">页面执行时间：60.0毫秒</font>
                </td>
            </tr>
        </table>
<!-- 友情链接 -->
<div></div>
<?php $this->
beginBody() ?>
<!--  <div class="wrap">
<div class="container">
<?= Breadcrumbs::widget([
            'links' =>
isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
<?= Alert::widget() ?>
<?= $content ?></div>
</div>
-->
<!--  <footer class="footer">
<div class="container">
<p class="pull-left">
&copy; My Company
<?= date('Y') ?></p>
<p class="pull-right">
<?= Yii::powered() ?></p>
</div>
</footer>
-->
<?php $this->endBody() ?></body>
<script>
        // $(function () {
        //     $('#myTab a[href="#profile"]').tab('show');
        // });
</script>
</html>
<?php $this->
endPage() ?>