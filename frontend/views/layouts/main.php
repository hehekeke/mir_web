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
                <a href="/frontend/web" class='text-center'>
                    首页
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li >
                <a href="/frontend/web/index.php?r=new/index" class='text-center'>
                    新闻中心
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=idv/index" class='text-center'>
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
                <a href="/frontend/web/index.php?r=video/index" class='text-center'>
                    视屏中心
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=job/index" class='text-center'>
                    行业招聘
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=contact/index" class='text-center'>关于我们</a>
            </li>
        </ul>
    </nav>
    

        <?php $this->beginBody() ?>
                <?= Breadcrumbs::widget([
            'links' =>
                isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
       
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
                </td>
            </tr>
        </table>
        <!-- 友情链接 -->
        

    <?php $this->endBody() ?></body>
    <script>
        // $(function () {
        //     $('#myTab a[href="#profile"]').tab('show');
        // });
</script>
</html>
<?php $this->
endPage() ?>