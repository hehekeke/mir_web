<?php
$session = Yii::$app->session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
?>
<style type="text/css">
	.video img{
		margin-top: 40px;
		margin-bottom: 40px;
		margin-left: 40px;
		width: 300px;
		height: 300px;

	}
	.wenzi{
		width: 60%;
	}
	h4{
		margin-top: 80px;
		margin-bottom: 20px;
		margin-left: 40px;
		font-size: 20px;
		color: #003366;

	}
	.content{
		margin-left: 40px;

	}
	video{
		margin-top: 40px;
	}
</style>
<div >
	<div>
		<ul class="nav nav-tabs " role="tablist" id="myTab">
			<li class="active">
				<a href="#home" role="tab" data-toggle="tab">其他视屏</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active " id="zhanhuizhanlan">
				<div class='pull-left video'>
						<video controls=""  src="/public/uploads/video/<?php echo $model->video_filename;?>"  
								poster="/public/frontend/img/视频中心一级页面-01_07.png" data-setup="{}">
							<source src="/public/uploads/video/<?php echo $model->video_filename;?>" type="video/mp4"/>
						</video>
				</div>
				<div class='pull-left wenzi'>
					<h4 class="text-center">
						<?php echo  $glo->enOrCh($model,"video_title");?>
					</h4>
					<div class='content'>
						<?php echo  $glo->enOrCh($model,"video_mem");?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
</div>
