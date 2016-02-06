<?php
use yii\widgets\LinkPager;
$session = Yii::$app->session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
?>
<style type="text/css">
	
.breadcrumb > li + li:before {
    color: #CCCCCC;
    content: ">";
    padding: 0 5px;
}
.breadcrumb a{
	font-size: 19px;
}
.idv_topImg img{
	width: 100%;
	height: 162px;
}
a{
	color: black;
}
.btn{
	border-radius:0px;
}
.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img{
	height: 100px;
}
.col-sm-6 {
	padding: 0px;
}
.btn-group{
	width: 100%;
}
.btn-group .btn-default{
	width: 12.5%;
}
.col-sm-5 img{
	width: 101%;
	height: 147px;
}
.col-sm-5{
	padding: 0px;
	border: 1px solid transparent;
	border-top: none;
}
.second .col-sm-1 {
	padding: 0px;
}
.second .col-sm-1 img{
	width: 100%;
	height: 70px;
}
.bagetuxing{
	margin-top: 20px;
}

.first img{
	width: 230px;
	height: 230px;
}
.er img{
	margin-bottom: 4px;
	width: 88%;
	height:48%;
}
.er{
	padding: 0px;
}
.col-md-6{
	padding: 0px;
	padding-right: 2px;
}
.idv-left{
	width: 45%;
}
.contne{
	margin-right: 100px;
}
.pinpaizhanshi{
	margin-bottom: 20px;
	border-bottom:1px solid black;
}
.pinpaizhanshi ul{
	width: 100%;
}
.more{
	font-size: 20px;
	margin-top: 20px;
}
.pingpaizhanshi{
	margin-left: 47px;
}
.pingpaizhanshi img{
	margin-bottom: 6px;
	margin-top: 6px;
	width: 9%;
	margin-left: 6px;
}
.xiaminsigetu{
	margin-left: 2px;
}
.xiaminsigetu img{
	margin-top: 10px;
	margin-bottom: 10px;
	width: 239px;
	height: 87px;
}
.xiaminsigetu span{
	font-size: 20px;
	padding-top: 40px;
	text-align: center;
}
.xiaminsigetu div{
	cursor: pointer;
}
/*.banner{ width:100%; overflow:hidden; position:relative;}*/
.banner  a{ width:100%; height:100%; display:block;}
.banner  .title{background-color:RGBA(0,0,0,.5); height:100px; color:#fff;  position:absolute; left:0; bottom:10px; width:228px; z-index:1000;}

.panel{
	margin-bottom: 0px;border-radius:0;
}
.anniu_xiamian{
	margin-left: -1px;
}
.second{
	margin-left: 0px;
}
.col-sm-5 .panel{
	border-top: none;
	border-bottom: none;
}
.btn-group{
	height: 39px;
}
.btn-group  button{
	margin-bottom: 3px;
}
@media (min-width: 992px){
	.col-md-4 {
	  width: 32.5433333%;
	}
	.col-md-2{
		width: 16.30666667%;
	}
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {  /* hover、focus、active变化时的颜色 */
  color: #333;
  background-color: #ebebeb;
  border-color: #adadad;
  border-bottom: 3px solid #006699;
}
</style>
<script type="text/javascript">
	$(function(){
		$(".xiaminsigetu div").click(function(){
			$(".xiaminsigetu").find("span").show();
			var src = $(this).find("img").attr("src");
			$(this).find("span").hide();
			$("#big").attr("src",src);
		});
		$(".btn-group button:eq(0)").addClass("jihuo");
	})
</script>
<ol class="breadcrumb _pc">
	<li>
		<a href="#"><?php echo Yii::$app->params['title']['home'][$language];?></a>
	</li>
	<li>
		<a href="#" class="active"><?php echo Yii::$app->params['title']['ivd'][$language];?></a>
	</li>
</ol>
<div class='idv_topImg _pc '>
	<!-- <img src='/public/frontend/img/indexTop.png'> -->
	<img id='big' src='/public/uploads/pro/<?php echo $fourPic[0]->product_pic;?>'>
	
</div>


<div class="row xiaminsigetu _pc">
	<div class="col-sm-6 col-md-3">
		<div  class=" banner">
			<img src='/public/frontend/img/ivd_06.png'>
         </div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="banner">
			<img src='/public/frontend/img/ivd_08.png'>
			<!-- <span class="title">视频中心</span> -->
        </div>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="">
			<img src='/public/frontend/img/ivd_10.png'>
         </a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="">
			<img src='/public/frontend/img/ivd_12.png'>
		</a>
	</div>
</div>

<div class="btn-group _pc">
	<?php for($i=0;$i<count($mainClass)-1;$i++){?>
		<button type="button" id="<?php echo $i;?>" class="btn btn-default"><?php echo $mainClass[$i]; ?></button>
	<?php }?>
</div>
<div class="anniu anniu_xiamian row _pc">
	<?php for($i=0;$i<count($products);$i++){?>
		<div class="<?php echo $i;?>">
			<?php for($j=0;$j<3;$j++){?>
				<div class="col-sm-5 col-md-4 ">
					<!-- <img src="/public/uploads/360/<?php echo $products[$i][$j]->product_pic;?>" > -->
					<img  class="panel panel-default " src='/public/frontend/img/IVD展厅一级页面-01_15.png'>
				</div>
			<?php }?>
		</div>
	<?php }?>
</div>

<div class="row second _pc">
	<div class="col-sm-1 col-md-2">
		<img class="panel panel-default" src='/public/frontend/img/IVD展厅一级页面-01_17.png'>
	</div>

	<div class="col-sm-1 col-md-2">
		<img class="panel panel-default" src='/public/frontend/img/IVD展厅一级页面-01_18.png'>
	</div>

	<div class="col-sm-1 col-md-2">
		<img class="panel panel-default" src='/public/frontend/img/IVD展厅一级页面-01_17.png'>
	</div>
	<div class="col-sm-1 col-md-2">
		<img class="panel panel-default" src='/public/frontend/img/IVD展厅一级页面-01_18.png'>
	</div>

	<div class="col-sm-1 col-md-2">
		<img class="panel panel-default" src='/public/frontend/img/IVD展厅一级页面-01_17.png'>
	</div>
	<div class="col-sm-1 col-md-2">
		<img class="panel panel-default" src='/public/frontend/img/IVD展厅一级页面-01_18.png'>
	</div>
</div>
<!-- 下面八个图形 -->

<div class="row bagetuxing _pc">
	<div class="col-sm-1 col-md-3 first">
		<img src="/public/frontend/img/首页-01_13.png" ></div>

	<div class="col-sm-1 col-md-3 er">
		<div class='col-sm-1 col-md-6'>
			<img src="/public/frontend/img/idv_1.png" ></div>
		<div class='col-sm-1 col-md-6'>
			<img src="/public/frontend/img/首页-01_05.png" ></div>
		<div class='col-sm-1 col-md-6'>
			<img src="/public/frontend/img/首页-01_07.png" ></div>
		<div class='col-sm-1 col-md-6'>
			<img src="/public/frontend/img/首页-01_12.png" ></div>

	</div>

	<div class="col-sm-1 col-md-3 er">
		<div class='col-sm-1 col-md-6'>
			<img src="/public/frontend/img/首页-01_14.png" ></div>
		<div class='col-sm-1 col-md-6'>
			<img src="/public/frontend/img/首页-01_18.png" ></div>
		<div class='col-sm-1 col-md-6'>
			<img src="/public/frontend/img/首页-01_19.png" ></div>
		<div class='col-sm-1 col-md-6'>
			<img src="/public/frontend/img/idv_2.png" ></div>
	</div>
	<div class="col-sm-1 col-md-3">
		<div class="col-sm-1 col-md-3 first">
			<img src="/public/frontend/img/首页-01_13.png" ></div>
	</div>
</div>

<div class="content _pc">
	<div class="pull-left idv-left contne">
		<ul class="nav nav-tabs " role="tablist" id="myTab">
			<li class="active">
				<a href="#home" role="tab" data-toggle="tab"><?php echo Yii::$app->params['title']['jishufenxiang'][$language];?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active " id="zhanhuizhanlan">
				<div class='pull-left'>
					<?php for($i=0;$i<count($jishus);$i++){?>
					<a href="/frontend/web/index.php?r=job/index2&id=<?php echo $jobs[$i]->article_id;?>">
						<h4>&bull;<?php echo $glo->enOrCh($jishus[$i],'article_title','30'); ?></h4>
					</a>
				<?php }?>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<div class="pull-left idv-left">
		<ul class="nav nav-tabs " role="tablist" id="myTab">
			<li class="active">
				<a href="#home" role="tab" data-toggle="tab"><?php echo Yii::$app->params['title']['job'][$language];?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active " id="zhanhuizhanlan">
				<div class='pull-left'>
				<?php for($i=0;$i<count($jobs);$i++){?>
					<a href="/frontend/web/index.php?r=job/index2&id=<?php echo $jobs[$i]->article_id;?>">
						<h4>&bull;<?php echo $glo->enOrCh($jobs[$i],'article_title'); ?></h4>
					</a>
				<?php }?>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<div class="clearfix"></div>
</div>

<div class="pinpaizhanshi _pc">
	<ul class="nav nav-tabs " role="tablist" id="myTab">
		<li class="active">
			<a href="#home" role="tab" data-toggle="tab"><?php echo Yii::$app->params['title']['pinpaizhanshi'][$language];?></a>
		</li>
		<p class="pull-right more"><a href="/frontend/web/index.php?r=idv/index2">更多</a></p>
	</ul>
	<div class="row pingpaizhanshi">
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
</div>
<script type="text/javascript">
	$(function(){
		// $(".anniu div").hide();
		$(".anniu .1,.2,.3,.4,.5,.6,.7").hide();
		$(".btn-group button").click(function(){
			var id = $(this).attr("id");
			$(".anniu .0,.1,.2,.3,.4,.5,.6,.7").hide();
			$(".anniu ."+id).show();
		});
		$(".more").click(function(){
			window.location.href="/frontend/web/index.php?r=idv/index2";
		});
	});
</script>



<!-------------------------------------- 移动端代码 -------------------------------------->
<style type="text/css">
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

        .nav-pills {
            background-color: #e5e5e5;
        }
        .nav-pills li{
            border-right: 1px solid white;
        }
        .nav-pills a{

        }
        .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus{
            background-color: #e5e5e5;
            color: orange;
        }
        .neirong .nav-pills {
        	background-color: white;
        }
        .neirong .nav-pills li{
        	float: left;
        	width: 11%;
        }
        .neirong .nav-pills img{
        	width: 55px;
        	height: 55px;
        }
        .neirong  .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus{
            background-color: white;
            color: orange;
        }
        .neirong .nav > li > a{
        	padding: 0;
        	padding: 10px 0px
        }
        .neirong .nav-pills{
        	margin-left: 20px;
        }
        .left_content{
        	margin-left: 19px;
        	width: 40%;
        }
        .left_content img{
        	width: 80%;
        	height: 90px;
        }
        .right_content{
        	margin-left: 10px;
        }
        .right_content h6{
        	color: grey;
        }
        .product_content{
        	height: 110px;
        	padding: 10px 0;
        	border-bottom: 1px solid grey;
        	border-top: 1px solid grey;
        }
        h3{
        	margin-top: 3px;
        	font-size: 14px;
        }
        .kuai{
        	width: 10px;
        	height: 10px;
        	display: inline-block;
        	background-color: #FCFE04;
        }
        .fenye{
        	margin: 0 5%;
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
<div class="top _m">
    <div class="pull-left" style="margin-top:8px;margin-left:28px;">
        <div id="triangle-left"></div>
        <div id='left'>
            <span style="margin-top:5px;">返回</span>
        </div>
    </div>
    <p class="pull-left" style="width:70%;">IVD展厅</p>
</div>
<ul class="nav title nav-pills _m">
    <li class='active'>
        <a href="#zhanhuizhanlanM" role="tab" data-toggle="tab">展会展览</a>
    </li>
    <li>
        <a href="#xueshuhuiyiM" role="tab" data-toggle="tab">学术会议</a>
    </li>
</ul>
<div class="tab-content neirong _m">
    <div class="tab-pane active" id='zhanhuizhanlanM'>
     	<ul class="nav nav-pills _m">
		    <li class='active'>
		        <a href="#a0" role="tab" data-toggle="tab">
		        	<img src='/public/frontend/img/首页-01_05.png' >
		        </a>
		    </li>
		    <li >
		        <a href="#a1" role="tab" data-toggle="tab">
		        	<img src='/public/frontend/img/首页-01_07.png' >
		        </a>
		    </li>
		    <li>
		        <a href="#a2" role="tab" data-toggle="tab">
		        	<img src='/public/frontend/img/首页-01_12.png' >
		        </a>
		    </li>
		    <li >
		        <a href="#a3" role="tab" data-toggle="tab">
		        	<img src='/public/frontend/img/首页-01_13.png' >
		        </a>
		    </li>
		    <li>
		        <a href="#a4" role="tab" data-toggle="tab">
		        	<img src='/public/frontend/img/首页-01_14.png' >
		        </a>
		    </li>
		    <li>
		        <a href="#a5" role="tab" data-toggle="tab">
		        	<img src='/public/frontend/img/首页-01_18.png' >
		        </a>
		    </li>
		    <li >
		        <a href="#a6" role="tab" data-toggle="tab">
		        	<img src='/public/frontend/img/首页-01_19.png' >
		        </a>
		    </li>
		    <li >
		        <a href="#a7" role="tab" data-toggle="tab">
		        	<img src='/public/frontend/img/idv_2.png' >
		        </a>
		    </li>
		    
		</ul> 
     </div>
    <div class="tab-pane" id='xueshuhuiyiM'>
       111
    </div>
</div>
<div class="tab-content zhanhuizhanlan  _m">
 <?php for($j=0;$j<8;$j++){?>
 	<?php if($j==0){?>
 		<div class="tab-pane active" id='a<?php echo $j;?>'>
 	<?php }else{?>
		<div class="tab-pane" id='a<?php echo $j;?>'>
 	<?php }?>
		<?php for($i=0;$i<count($productArray[$j]);$i++){?>
			<div class="product_content">
			<a href="/frontend/web/index.php?r=idv/index3&id=<?php echo $productArray[$j][$i]->product_id;?>">
				<div class="pull-left left_content">
					<img src='/public/frontend/img/idv_2.png' >
				</div>
				<div class="pull-left right_content">
					<h3><?php echo mb_substr($productArray[$j][$i]->product_name,0,20,'utf-8');?></h3>
					<h6><?php echo mb_substr($productArray[$j][$i]->product_date,0,22,'utf-8');?></h6>
					<p><div class="kuai"></div>&nbsp;<?php echo mb_substr($products[$j][$i]->product_maker,0,22,'utf-8');?></p>
				</div>
			</div>
			<div class="clearfix"></div>
			</a>
		<?php }?>
		<div class="fenye _m">
            <?= LinkPager::widget(['pagination' =>$pagesArray[0]]); ?>
        </div>
    </div>
<?php }?>
</div>

