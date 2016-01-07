<?php

use backend\assets\AppAsset;
use backend\components\GlobalFunc;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
?>
<?php $this->
beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->
    head() ?>
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/timeline.css" rel="stylesheet">
    <link href="/Public/Admin/css/sb-admin-2.css" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/morris.css" rel="stylesheet">
    <link href="/Public/Admin/css/../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="/assets/31ce011a/jquery.js"></script>

</head>
<body>
    <?php $this->
    beginBody() ?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin.php/">后台管理系统</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="glyphicon glyphicon-user"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">
                                <i class="fa fa-gear fa-fw"></i>
                                设置
                            </a>
                        </li>
                        <li>
                            <a href="/admin.php/site/logout">
                                <i class="fa fa-sign-out fa-fw"></i>
                                退出
                            </a>

                        </li>
                    </ul>
                </li>

            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      <!--   <li class="nav-item">
                            <a href="/admin.php/site/index">
                                <span class="glyphicon glyphicon-home"></span>
                                我的个人中心
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-user"></span>
                                会员管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/user/index">会员列表</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-tasks"></span>
                                管理员管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/admins/create">管理员添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/admins/index">管理员管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/admins/password">修改密码</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-dashboard"></span>
                                信息管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/scheduling/index">信息添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/scheduling/my">信息修改</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-comment"></span>
                                IVD访谈管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/topic/create">IVD访谈添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/topic/index">IVD访谈修改</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-dashboard"></span>
                                产品管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/mir-product/create">产品添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/mir-product/index">产品管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/appoint/contact-lecturer">产品回收站</a>
                                </li>
                                <li>
                                    <a href="/admin.php/appoint/lecturer">产品分类管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/appoint/lecturer">产品品牌管理</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-dashboard"></span>
                                经销商管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/mir-maker/create">厂商添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/mir-maker/index">厂商管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/tickling-question-answer/diff">厂商回收站</a>
                                </li>
                                 <li>
                                    <a href="/admin.php/tickling-question-answer/diff">厂商留言管理</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-dashboard"></span>
                                留言管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/case-submit/index">互动话题添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/case-list/index">互动话题查看</a>
                                </li>
                                <li>
                                    <a href="/admin.php/luck-draw/index">互动回复管理</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-lock"></span>
                                友情链接管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/friend-link/create">友情链接添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/friend-link/index">友情链接管理</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-tags"></span>
                                视屏管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/category/index">视屏添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/tags/index">视屏列表</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-eye-open"></span>
                                展会信息管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/mir-meeting/create">展会信息添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/mir-meeting/index">展会信息列表</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-dashboard"></span>
                                在线杂志管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/mir-mgz/create">期刊页面添加</a>
                                </li>
                                <li>
                                    <a href="/admin.php/mir-mgz/index">期刊页面列表</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse --> </div>
            <!-- /.navbar-static-side --> </nav>
        <div id="page-wrapper" style='min-height: 204px;<?php if (Yii::$app->
            request->get('iframe')) echo 'margin-left:0px;'?>' >
            <?php echo $content; ?></div>
    </div>
    <!-- /#wrapper -->
    <?php $this->endBody() ?></body>
</html>
<?php $this->
endPage() ?>