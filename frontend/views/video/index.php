<?php
$session = Yii::$app->session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
?>
<head>
	<link href="video-js.css" rel="stylesheet" type="text/css">
    <script src="video.js"></script>
</head>
<style type="text/css">
.breadcrumb > li + li:before {
    color: #CCCCCC;
    content: ">";
    padding: 0 5px;
}
a{
	color: black;
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

/*.first img{
	width: 100%;
	height: 300px;
}*/
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
	float: left;
	width: 90px;
	margin-top: 80px;
	margin-left: 30px;
}

.first_video{
	margin-top: 20px;
	margin-left: 20%;
}
}
</style>
<script>
</script>
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
	<div class="first_video">
		<video   width="600" height="333" class="video-js vjs-default-skin" controls preload="none" 
	      	poster="http://120.27.99.112/public/uploads/video_cover/14562861315314.jpg"
	      	data-setup="{}">
		    <source src="http://120.27.99.112/public/uploads/video/14562911942413.mp4" type='video/mp4' />
		  </video>
	</div>
	 
	<div class="clearfix"></div>
</div>

<div class="seond">
	<h5>|&nbsp;&nbsp;<?php echo Yii::$app->params['title']['qiteshipin'][$language];?></h5>
	<?php for($i=1;$i<count($videos);$i++){?>
	<div class="video ">
		<div class="pull-left">
		 <video   width="350" height="187" class="video-js vjs-default-skin" controls preload="none" 
	      	poster="http://120.27.99.112/public/uploads/video_cover/14562861315314.jpg"
	      	data-setup="{}">
		    <source src="http://120.27.99.112/public/uploads/video/14562911942413.mp4" type='video/mp4' />
		 </video>
		</div>
		<div class="pull-left wenzi">
			<a href="/frontend/web/index.php?r=video/index2&id=<?php echo $videos[$i]->video_id;?>">
				<?php echo  $glo->enOrCh($videos[$i],"video_title",'70');?>
			</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php }?>

</div>


