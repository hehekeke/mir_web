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
	/*margin-top: 80px;*/
	margin-left: 30px;
}

.first_video{
	margin-top: 20px;
	margin-left: 1%;
}
.big_div{
	width: 350px;
	margin-top:30px;
	margin-left: 30px;
}
.big_div div{
	font-size: 17px;
	line-height: 18px;
}
.big_div div p{
	line-height: 22px;
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
	<div class="first_video pull-left">
		<video   width="600" height="360" class="video-js vjs-default-skin" controls preload="none" 
	      	poster="/public/uploads/video_cover/<?php echo $videos[0]->video_cover;?>"
	      	data-setup="{}">
		    <source src="/public/uploads/video/<?php echo $videos[0]->video_filename;?>" type='video/mp4' />
		  </video>
	</div>
	<div class="pull-left big_div">
		<h2 style="text-align: center;margin-bottom: 15px;"><?php echo  $glo->enOrCh($videos[0],"video_title",'70');?></h2>
		<div>
			<?php echo  $glo->enOrCh($videos[0],"video_mem",'1000');?>
		</div>
	</div>
	 
	<div class="clearfix"></div>
</div>

<div class="seond">
	<h5>|&nbsp;&nbsp;<?php echo Yii::$app->params['title']['qiteshipin'][$language];?></h5>
	<?php for($i=1;$i<count($videos);$i++){?>
	<div class="video ">
		<div class="pull-left">
		 <video   width="336" height="187" class="video-js vjs-default-skin" controls preload="none" 
	      	poster="/public/uploads/video_cover/<?php echo $videos[$i]->video_cover;?>"
	      	data-setup="{}">
		    <source src="/public/uploads/video/<?php echo $videos[$i]->video_filename;?>" type='video/mp4' />
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


