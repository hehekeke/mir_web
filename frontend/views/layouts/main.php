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
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta charset="<?= Yii::$app->
    charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->
    head() ?>
    <?php
$session = Yii::$app->session;
$language = empty($session['language'])?0:1;

use backend\components\GlobalFunc;
$glo =new GlobalFunc();

?>
    <style type="text/css">
    body{
        width: 1005px;
        margin: 0 auto;
    }
     ._m{
            display: none;
        }
    ._pc{
            display: block;
        }
    .header form{
        margin-right: 0%;
        margin-top: 28px;
    }
    .zhongwen,.yingwen{
        background-color: #003366;
        
    }
    /*登陆 注册按钮*/
    .header .loign{
        font-size: 24px;
        padding: 6px 0;
    }
    .logo img{
        margin-top: 5px;
        width: 257px;
        height: 48px;
        margin-bottom:15px;
    }
    .logo .btn-primary{
        margin-top: 20px;
    }
    .logo .pull-right{
        margin-top: 20px;
    } 
    /*导航栏*/
    .navbar li,.navbar .active{
        width: 125px;
        background-color: #006699;
    }
    .navbar li a{
        width: 127px;
        color: #ffffff;
        font-size: 20px;
        font-weight: 800;
    }
    .navbar{
        border: 1px solid #006699;
        border-radius: 4px;
        background-color: #006699;
    }
    .kongbai{ 
        width: 2px;
        height: 25px;
        background-color: #cccccc;
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
        font-size: 16px;
    }
    .nav-tabs a{
        font-family: "微软雅黑";
        color: black;
        text-align: center;
    }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{
        border: none;
    }
    .nav-tabs > li.active{
        border-bottom: 9px solid #006699;
    }
    .nav-tabs > li.active a{
        color: #006699;
    }
    .tab-content img{
        width: 178px;
        height: 93px;
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
    }
    .tab-content-title{
        margin-top: 15px;
        font-size: 18px;
        color: black;
    }
    .tab-content-title-small{
        font-size: 16px;
        color: #595757;
    }
    .tab-content-date{
        font-size: 14px;
        color: #c9caca;
    }

    .content-right img{
        margin-top: 14px;
        width: 100%;
        height: 210px;
    }
    .img img{
        width: 74px;
        height: 48px;
        margin-bottom: 0px;
    }
    .img-r img{
        width: 29%;
        height:60px;
        margin-right: 10px;
    }
    .img-r-right img{
        width: 101px;
        height: 101px;
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
        height: 45px;
        border-bottom: 1px dashed black;
    }
    .youqinglianjie{
        border-bottom: 1px solid black;
        margin-bottom: 20px;
    }
    .end{
        width: 100%;
        margin-top: 40px;
        margin-bottom: 40px;
        border-bottom: 1px solid black;
    }
    @media screen and (max-width:1000px) {
        body{
            width: 100%;
        }
        ._pc{
            display: none;
        }
        ._m{
            display: block;
        }
        .header{
            margin: 0;
            padding: 0;
        }
        .logo img{
            width: 100%;
            margin-bottom: 0px;
        }
        .daohang{
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #e5e5e5;
        }
        .daohang a{
            width: 32%;
            text-align: center;
            margin-bottom: 4px;
            font-size: 24px;
        } 
        .daohang .line{
            border-right: 1px solid grey;
        }  
    }
    </style>
</head>
<body class="header">
    <!-- 这个是公用的header.html -->
    <div class='logo _pc'>
        <img src='/public/frontend/img/logo_03.png'>
        <span class="pull-right btn btn-primary yingwen" style='margin-top:28px;'>English</span>

        <span class="pull-right btn btn-primary zhongwen" style='margin-right:15px;margin-top:28px;'>中&nbsp;&nbsp;&nbsp;&nbsp;文</span>

        <span class="pull-right btn loign" style='margin-right:55px;'><?php echo Yii::$app->params['title']['register'][$language];?></span>
        <span class="pull-right btn loign"><?php echo Yii::$app->params['title']['login'][$language];?> |</span>
        <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="输入关键字">
                <button type="submit" class="btn btn-default"><?php echo Yii::$app->params['title']['search'][$language];?></button>
            </div>
        </form>
    </div>
   
    <!-- 导航栏 -->
    <nav class="navbar _pc" role="navigation">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="/frontend/web" class='text-center'>
                <?php echo Yii::$app->params['title']['home'][$language];?>
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li >
                <a href="/frontend/web/index.php?r=new/index" class='text-center'>
                    <?php echo Yii::$app->params['title']['news'][$language];?>
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=idv/index" class='text-center'>
                    <?php echo Yii::$app->params['title']['ivd'][$language];?>
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=see/index" class='text-center'>
                    <?php echo Yii::$app->params['title']['WonderfulAspect'][$language];?>
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=meeting/index" class='text-center'>
                    <?php echo Yii::$app->params['title']['meeting'][$language];?>
                    <span class='pull-right'>
                        <div class="kongbai"></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=video/index" class='text-center'>
                    <?php echo Yii::$app->params['title']['video'][$language];?>
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=job/index" class='text-center'>
                    <?php echo Yii::$app->params['title']['job'][$language];?>
                    <span class='pull-right'>
                        <div class="kongbai "></div>
                    </span>
                </a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=contact/index" class='text-center'>
                    <?php echo Yii::$app->params['title']['aboutUs'][$language];?>
                </a>
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
        <div class="clearfix "></div>
       <div class="end _pc"></div>
       <div class="_pc">
        <table class=' text-center' width="100%" border="0" align="center"  cellpadding="0" cellspacing="0">
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
    </div>
    <div class="_m">
    <p class="text-center" style="margin-top:40px;"><a href="/frontend/web/index.php?r=contact/index">关于我们</a></p>
        <p class="text-center">热线电话：022-23593650/51转客服部</p>
        <p class="text-center">返回顶部</p>
    </div>
        <!-- 友情链接 -->
        

    <?php $this->endBody() ?></body>
    <script>
        $(function () {
            $(".yingwen").click(function(){
                $.post("/admin.php/index/index",{id:1},function(data){
                    window.location.reload();
                });
            });
            $(".zhongwen").click(function(){
                 $.post("/admin.php/index/index",{id:0},function(data){
                    window.location.reload();
                });
            });
            $('#myTab a').click(function (e) { 
              e.preventDefault();//阻止a链接的跳转行为 
              // $(this).tab('show');//显示当前选中的链接及关联的content 
            });
             $('.nav-pills a').click(function (e) { 
              e.preventDefault();//阻止a链接的跳转行为 
              // $(this).tab('show');//显示当前选中的链接及关联的content 
            });
        });
</script>
</html>
<?php $this->
endPage() ?>