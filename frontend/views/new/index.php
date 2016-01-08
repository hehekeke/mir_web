<style type="text/css">
 /* .breadcrumb{
    background-color: white;
    border-bottom: 1px solid grey;
    border-radius:0px;
  }*/
  .breadcrumb > li + li:before {
        color: #CCCCCC;
        content: ">";
        padding: 0 5px;
    }
    .breadcrumb a{
        font-size: 19px;
    }
    .date{
        float: right;
        color: #808080;
    }
    .tab-div{
        padding-bottom: 20px;
        border-bottom: 1px solid black;
    }
    .renmen{
        margin-top: 50px;
    }
    .remen_div span{
        display: inline-block;
        width: 15px;
        height: 15px;
        text-align: center;
        background-color: red;
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
        .tab-content-date{
            margin-left: 7%;
        }
        .content{
            padding-bottom: 3px;
            margin-bottom: 20px;
            border-bottom: 1px solid black;
        }
         h4{
            margin-top: 20px;
            margin-left: 7%;
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
    }
</style>
<?php

use yii\widgets\LinkPager;
?>
<div class="top _m">
    <div class="pull-left" style="margin-top:8px;margin-left:28px;">
        <div id="triangle-left"></div>
        <div id='left'>
            <span style="margin-top:5px;">返回</span>
        </div>
    </div>
    <p class="pull-left" style="width:70%;">新闻中心</p>
</div>
<!-- index top图片 -->
<div class="indexTop">
    <img src="/public/frontend/img/indexTop.png" class="img-responsive"></div>
<div class="tab-content  _m">
    <div class="tab-pane active" id="linchuang">
        <?php for($i=0;$i<count($news);$i++){?>
        <div class="content">
            <div class='pull-left tab-content-left'>
                <img src='/public/frontend/img/indexTop.png'></div>
            <div class='pull-left tab-content-right'>
                <h4>我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h4>
                <div class='tab-content-date'>2015/3/18</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php }?>
     
    </div>
</div>

<!-- 中间的内容 -->
<div class="content _pc">
    <div class="pull-left content-left">
        <!-- <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active">
                <a href="/frontend/web/" role="tab" data-toggle="tab">
                    首页 > 新闻中心
                </a>
            </li>
        </ul> -->
         <ol class="breadcrumb _pc">
            <li>
                <a href="/frontend/web/">首页</a>
            </li>
            <li>
                <a href="/frontend/web/index.php?r=new/index">新闻中心</a>
            </li>
        </ol>
        <div class="tab-content">
        <?php for($i=0;$i<count($news);$i++){?>
            <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $news[$i]->article_id; ?>">
            <div class="tab-pane active tab-content-one" id="home">
                <div class='pull-left tab-content-left'>
                    <img src='/public/frontend/img/indexTop.png'></div>
                <div class='pull-left tab-content-right'>
                    <h4><?php echo $news[$i]->article_title; ?></h4>
                    <div class='tab-content-title-small'><?php echo $news[$i]->article_zy; ?></div>
                    <div class='date'><?php echo date("Y-m-d",strtotime($news[$i]->article_date));?></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </a>
        <?php }?>    
        </div>
        <?= LinkPager::widget(['pagination' => $pages]); ?>
    </div>

    <div class="pull-left content-right rendian">
        <ul class="nav nav-tabs " role="tablist" id="myTab">
            <li class="active" style="border-bottom:9px solid orange;">
                <a href="#home" role="tab" data-toggle="tab" style="color:orange;">本周热点</a>
            </li>
        </ul>
        <div class="tab-content tab-div">
            <h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            <h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            <h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            <h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            <h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
            <h6>&bull;我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇</h6>
        </div>

        <ul class="nav nav-tabs renmen" role="tablist" id="myTab">
            <li class="active" style="border-bottom:9px solid green;">
                <a href="#home" role="tab" data-toggle="tab" style="color:green;">本周热点</a>
            </li>
        </ul>
        <div class="tab-content remen_div tab-div">
            <h5>
                <span>1</span>
                我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇
            </h5>
            <h5>
                <span>1</span>
                我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇
            </h5>
            <h5>
                <span>1</span>
                我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇
            </h5>
            <h5>
                <span>1</span>
                我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇
            </h5>
            <h5>
                <span>1</span>
                我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇
            </h5>
            <h5>
                <span>1</span>
                我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇
            </h5>
            <h5>
                <span>1</span>
                我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇
            </h5>
            <h5>
                <span>1</span>
                我是宇奇我是王宇奇我是王宇奇我是王宇奇我奇
            </h5>
        </div>

    </div>
    <div class="clearfix"></div>
</div>