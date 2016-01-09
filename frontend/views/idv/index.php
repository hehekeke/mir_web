<?php
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
	height: 232px;
}
a{
	color: black;
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
	width: 100%;
	height: 147px;
}
.col-sm-5{
	padding: 0px;
	border: 1px solid grey;
	border-top: none;
}
.second .col-sm-1 {
	padding: 0px;
	border: 1px solid grey;
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
</style>
<ol class="breadcrumb">
	<li>
		<a href="#"><?php echo Yii::$app->params['title']['home'][$language];?></a>
	</li>
	<li>
		<a href="#" class="active"><?php echo Yii::$app->params['title']['ivd'][$language];?></a>
	</li>
</ol>
<div class='idv_topImg'>
	<img src='/public/frontend/img/indexTop.png'></div>
<div class="row">
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
</div>

<div class="btn-group">
	<?php for($i=0;$i<count($dafenlei);$i++){?>
		<button type="button" class="btn btn-default"><?php echo $glo->enOrCh($dafenlei[$i],'ClassName'); ?></button>
	<?php }?>
</div>
<div class="row">
	<div class="col-sm-5 col-md-4">
		<img src="/public/frontend/img/indexTop.png" ></div>

	<div class="col-sm-5 col-md-4">
		<img src="/public/frontend/img/indexTop.png" ></div>

	<div class="col-sm-5 col-md-4">
		<img src="/public/frontend/img/indexTop.png" ></div>
</div>

<div class="row second">
	<div class="col-sm-1 col-md-2">
		<img src="/public/frontend/img/indexTop.png" ></div>

	<div class="col-sm-1 col-md-2">
		<img src="/public/frontend/img/indexTop.png" ></div>

	<div class="col-sm-1 col-md-2">
		<img src="/public/frontend/img/indexTop.png" ></div>
	<div class="col-sm-1 col-md-2">
		<img src="/public/frontend/img/indexTop.png" ></div>

	<div class="col-sm-1 col-md-2">
		<img src="/public/frontend/img/indexTop.png" ></div>

	<div class="col-sm-1 col-md-2">
		<img src="/public/frontend/img/indexTop.png" ></div>
</div>
<!-- 下面八个图形 -->

<div class="row bagetuxing">
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

<div class="content">
	<div class="pull-left idv-left contne">
		<ul class="nav nav-tabs " role="tablist" id="myTab">
			<li class="active">
				<a href="#home" role="tab" data-toggle="tab"><?php echo Yii::$app->params['title']['jishufenxiang'][$language];?></a>
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
</div>

<div class="pinpaizhanshi">
	<ul class="nav nav-tabs " role="tablist" id="myTab">
		<li class="active">
			<a href="#home" role="tab" data-toggle="tab"><?php echo Yii::$app->params['title']['pinpaizhanshi'][$language];?></a>
		</li>
	</ul>
	<div class="row">
	<div class="col-sm-6 col-md-1">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-1">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-1">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-1">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-1">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-1">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-1">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-1">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
	<div class="col-sm-6 col-md-1">
		<a href="#" class="thumbnail">
			<img src="/public/frontend/img/indexTop.png" 
         alt="通用的占位符缩略图"></a>
	</div>
</div>
</div>



