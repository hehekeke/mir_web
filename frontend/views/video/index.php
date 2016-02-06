<?php
$session = Yii::$app->session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
?>
<head>
	<link rel="stylesheet" href="/public/flowplayer/skin/minimalist.css">
	<script src="/public/Admin/js/jquery.js"></script>
	<script type="text/javascript" src="/public/flowplayer/flowplayer.min.js"></script>
</head>
<style type="text/css">
.breadcrumb > li + li:before {
    color: #CCCCCC;
    content: ">";
    padding: 0 5px;
}
.breadcrumb a{
	font-size: 19px;
}
h5{
	padding-bottom: 5px;
	border-bottom: 1px solid grey;
}
.first{
	margin-top: 20px;
	padding-bottom: 20px;
	margin-bottom: 20px;
}
.first video{
	margin:0 14%;
	width: 70%;
	height: 300px;
}
.first img{
	width: 100%;
	height: 300px;
}
.video{
	margin-top: 10px;
	float: left;
	width: 47%;
	padding-bottom: 20px;
	margin-left: 30px;
	border-bottom: 1px dashed grey; 
}

.video img{
	width: 200px;
	height: 100px;
}

.wenzi{
	margin-top: 30px;
	margin-left: 30px;
}

}
</style>
<ol class="breadcrumb">
	<li>
		<a href="#"><?php echo Yii::$app->params['title']['home'][$language];?></a>
	</li>
	<li>
		<a href="#" class="active"><?php echo Yii::$app->params['title']['video'][$language];?></a>
	</li>
</ol>
<div class="first">
	<h5>|&nbsp;&nbsp;<?php echo Yii::$app->params['title']['tebietuijian'][$language];?></h5>
	<video controls=""  src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4"  
			poster="/public/frontend/img/视频中心一级页面-01_03.png" data-setup="{}">
		<source src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4" type="video/mp4"/>
	</video>

	<div class="clearfix"></div>
</div>

<div class="seond">
	<h5>|&nbsp;&nbsp;<?php echo Yii::$app->params['title']['qiteshipin'][$language];?></h5>
	<div class="video ">
		<div class="pull-left">
			<video
				style='width:300px;height:200px;'
			    controls=""
			    src="/1.mp4" 
				poster="/public/frontend/img/视频中心一级页面-01_07.png" data-setup="{}">
				<source src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4" type="video/mp4"/>
			</video>
		</div>
		<div class="pull-left wenzi">
			的萨芬肯定
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="video ">
		<div class="pull-left">
			<video
				style='width:300px;height:200px;'
			    controls=""
			    src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4"  
				poster="/public/frontend/img/视频中心一级页面-01_07.png" data-setup="{}">
				<source src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4" type="video/mp4"/>
			</video>
		</div>
		<div class="pull-left wenzi">
			的萨芬肯定
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="video ">
		<div class="pull-left">
			<video
				style='width:300px;height:200px;'
			    controls=""
			    src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4"  
				poster="/public/frontend/img/视频中心一级页面-01_07.png" data-setup="{}">
				<source src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4" type="video/mp4"/>
			</video>
		</div>
		<div class="pull-left wenzi">
			的萨芬肯定
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="video ">
		<div class="pull-left">
			<video
				style='width:300px;height:200px;'
			    controls=""
			    src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4"  
				poster="/public/frontend/img/视频中心一级页面-01_07.png" data-setup="{}">
				<source src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4" type="video/mp4"/>
			</video>
		</div>
		<div class="pull-left wenzi">
			的萨芬肯定
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="video ">
		<div class="pull-left">
			<video
				style='width:300px;height:200px;'
			    controls=""
			    src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4"  
				poster="/public/frontend/img/视频中心一级页面-01_07.png" data-setup="{}">
				<source src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4" type="video/mp4"/>
			</video>
		</div>
		<div class="pull-left wenzi">
			的萨芬肯定
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="video ">
		<div class="pull-left">
			<video
				style='width:300px;height:200px;'
			    controls=""
			    src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4"  
				poster="/public/frontend/img/视频中心一级页面-01_07.png" data-setup="{}">
				<source src="http://7u2jzm.com2.z0.glb.qiniucdn.com/1-Arther%20Wu-3.mp4" type="video/mp4"/>
			</video>
		</div>
		<div class="pull-left wenzi">
			的萨芬肯定
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="clearfix"></div>
</div>


