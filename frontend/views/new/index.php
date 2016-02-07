<?php
$session = Yii::$app->
session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
?>
<style type="text/css">
 /* .breadcrumb{
    background-color: white;
    border-bottom: 1px solid grey;
    border-radius:0px;
  }*/
  a{
    color: black;
  }
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
        background-color: #EDEDED;
    }
    .tab-content-one{
        border-bottom: 1px dashed grey;
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
        .tab-content img{
            height: 76px;
        }
        .content{
            margin: 0;
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
            border-bottom: 1px solid black;
        }
         h4{
            margin-top: 15px;
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
        .fenye{
            margin: 0 2%;
        }
    }
</style>
<script type="text/javascript">
    $(function(){
        $("#left").click(function(){
            window.location.href="/frontend/web/index.php";
        });
    });
</script>
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
         <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $news[$i]->article_id;?>">
            <div class="content">
                <div class='pull-left tab-content-left'>
                    <img src='/public/uploads/360/<?php echo $news[$i]->article_pic;?>'></div>
                <div class='pull-left tab-content-right'>
                    <h4>
                        <?php echo  $glo->enOrCh($news[$i],"article_title");?></h4>
                    <div class='tab-content-date'>
                        <?php echo  date("Y-m-d",strtotime($glo->enOrCh($news[$i],"article_date")));?></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </a>
        <?php }?></div>
</div>

<!-- 中间的内容 -->
<div class="content ">
    <div class="pull-left content-left _pc">
        <!-- <ul class="nav nav-tabs " role="tablist" id="myTab">
        <li class="active">
            <a href="/frontend/web/" role="tab" data-toggle="tab">首页 > 新闻中心</a>
        </li>
    </ul>
    -->
    <ol class="breadcrumb _pc">
        <li>
            <a href="/frontend/web/">
                <?php echo Yii::$app->params['title']['home'][$language];?></a>
        </li>
        <li>
            <a href="/frontend/web/index.php?r=new/index">
                <?php echo Yii::$app->params['title']['news'][$language];?></a>
        </li>
    </ol>
    <div class="tab-content">
        <?php for($i=0;$i<count($news);$i++){?>
        <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $news[$i]->
            article_id; ?>">
            <div class="tab-pane active tab-content-one" id="home">
                <div class='pull-left tab-content-left'>
                    <img src='/public/uploads/art/<?php echo $news[$i]->article_pic;?>'>
                </div>
                <div class='pull-left tab-content-right'>
                    <h4>
                        <?php echo $glo->enOrCh($news[$i],'article_title');?></h4>
                    <div class='tab-content-title-small'>
                        <?php echo  $glo->enOrCh($news[$i],'article_zy','60');?></div>
                    <div class='date'>
                        <?php echo date("Y-m-d",strtotime($news[$i]->article_date));?></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </a>
        <?php }?></div>
        <div class="fenye _pc">
            <?= LinkPager::widget(['pagination' =>$pages]); ?>
        </div>
</div>
<div class="fenye _m">
    <?= LinkPager::widget(['pagination' =>$pages]); ?>
</div>
<div class="pull-left content-right rendian _pc">
    <ul class="nav nav-tabs " role="tablist" id="myTab">
        <li class="active" style="border-bottom:9px solid orange;">
            <a href="#home" role="tab" data-toggle="tab" style="color:orange;">本周热点</a>
        </li>
    </ul>
    <div class="tab-content tab-div">
        <?php for ($i=0; $i < 7; $i++) { ?>
        <h5>&bull;
            <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $renDian[$i]->
            article_id; ?>">
                <?php echo  $glo->enOrCh($renDian[$i],'article_title','22');?>
            </a>
        </h5>
        <?php }?>
    </div>

    <ul class="nav nav-tabs renmen" role="tablist" id="myTab">
        <li class="active" style="border-bottom:9px solid green;">
            <a href="#home" role="tab" data-toggle="tab" style="color:green;">热门排行</a>
        </li>
    </ul>
    <div class="tab-content remen_div tab-div">

        <h5><span style='background-color: #FAC2D7;'>1</span>
            <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $paiHang[0]->
            article_id; ?>">
                <?php echo  $glo->enOrCh($paiHang[0],'article_title','20');?>
            </a>
        </h5>
        <h5><span style='background-color: #CFC502;'>2</span>
             <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $paiHang[1]->
            article_id; ?>">
                <?php echo  $glo->enOrCh($paiHang[1],'article_title','20');?>
            </a>
        </h5>
        <h5><span style='background-color: #FEFDA2;'>3</span>
             <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $paiHang[2]->
            article_id; ?>">
                <?php echo  $glo->enOrCh($paiHang[2],'article_title','20');?>
            </a>
        </h5>
        <?php for ($i=3; $i < 10 ; $i++) {?>
            <h5><span><?php echo $i+1;?></span>
            <a href="/frontend/web/index.php?r=new/index2&id=<?php echo $paiHang[$i]->
            article_id; ?>">
                <?php echo  $glo->enOrCh($paiHang[$i],'article_title','20');?>
            </a>
            </h5>
        <?php }?>
    </div>

</div>
<div class="clearfix"></div>
</div>