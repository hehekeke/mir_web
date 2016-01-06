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
                                展会信息管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/mir-meeting/index">展会信息列表</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-dashboard"></span>
                                排课管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/scheduling/index">排课列表</a>
                                </li>
                                <li>
                                    <a href="/admin.php/scheduling/my">我上传的排课</a>
                                </li>
                                <li>
                                    <a href="/admin.php/scheduling/create">添加排课</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-comment"></span>
                                话题管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/topic/create">添加话题</a>
                                </li>
                                <li>
                                    <a href="/admin.php/topic/index">话题管理</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-dashboard"></span>
                                报名预约管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/appoint/course-signup">课程报名管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/appoint/appoint-course">课程预约管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/appoint/contact-lecturer">联系教练申请</a>
                                </li>
                                <li>
                                    <a href="/admin.php/appoint/lecturer">教练入驻申请</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-dashboard"></span>
                                会员管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/user-member/index">会员管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/producer/index">出品人管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/tickling-question-answer/diff">反馈人员合并</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-dashboard"></span>
                                TOP100功能管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/case-submit/index">提交案例管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/case-list/index">案例榜单管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/luck-draw/index">现场抽奖</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-lock"></span>
                                系统用户管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/auth-item/index">角色管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/auth-item/item">权限管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/user/admin">用户管理</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-tags"></span>
                                标签管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/category/index">标签栏目管理</a>
                                </li>
                                <li>
                                    <a href="/admin.php/tags/index">标签管理</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <span class="glyphicon glyphicon-eye-open"></span>
                                审核管理
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin.php/review/index">审核列表</a>
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