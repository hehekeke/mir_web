<?php
$session = Yii::$app->
session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
?>
<style type="text/css">
	.col-sm-3{
		width: 22%;
		/*padding-left: 10px;*/
		/*padding-right: 10px;*/
	}
	.col-sm-3 img{
		margin-top: 20px;
		width: 100%;
		height: 400px;
	}
	.img_bottom{
		background-color: #eeeae9;
		height: 100px;
	}
	.img_bottom p{
		margin: 0;
		margin-left: 20px;
	}
	.img_bottom .title{
		font-weight: 500px;
		font-size: 18px;
		padding-top: 10px;
		margin-left: 20px;
	}
	a{
		color: black;
	}
</style>
<!-- index top图片 -->
<div class="indexTop _pc">
	<img src="/public/frontend/img/indexTop.png" class="img-responsive"></div>
<!-- 中间的内容 four -->
<div class="_pc">
	<div class="">
		<ul class="nav nav-tabs " role="tablist" id="myTab">
			<li class="active">
				<a href="#home" role="tab" data-toggle="tab">精彩看点</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active " id="zhanhuizhanlan">
				<div class="container">
					<div class="row" >
						<div class="col-xs-6 col-sm-3">
							<a href="/frontend/web/index.php?r=see/index2&id=<?php echo $linchuangyixues[0]->mir360_id;?>">
								<img src='/public/frontend/img/精彩看点一级页面-01_03.png'>
								<div class="img_bottom">
									<div class='title'><?php echo $glo->enOrCh($linchuangyixues[0],"mir360_title");?></div>
									<p>河北省儿童医院</p>
									<p>检验科主任：李贵霞</p>
								</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-3">
							<a href="/frontend/web/index.php?r=see/index2&id=<?php echo $zhutizhuanfang[0]->mir360_id;?>">
								<img src='/public/frontend/img/精彩看点一级页面-01_04.png'>
								<div class="img_bottom">
									<div class='title'>
										<?php echo  $glo->enOrCh($zhutizhuanfang[0],"mir360_title");?>
									</div>
									<p>河北省儿童医院</p>
									<p>检验科主任：李贵霞</p>
								</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-3">
							<a href="/frontend/web/index.php?r=see/index2&id=<?php echo $zhuanjiazhuanlan[0]->mir360_id;?>">
								<img src='/public/frontend/img/精彩看点一级页面-01_05.png'>
								<div class="img_bottom">
									<div class='title'><?php echo  $glo->enOrCh($zhuanjiazhuanlan[0],"mir360_title");?></div>
									<p>河北省儿童医院</p>
									<p>检验科主任：李贵霞</p>
								</div>
							</a>
						</div>
						<div class="col-xs-6 col-sm-3">
							<a href="/frontend/web/index.php?r=see/index2&id=<?php echo $pinpaililiang[0]->mir360_id;?>">
								<img src='/public/frontend/img/精彩看点一级页面-01_06.png'>
								<div class="img_bottom">
									<div class='title'><?php echo  $glo->enOrCh($pinpaililiang[0],"mir360_title");?></div>
									<p>河北省儿童医院</p>
									<p>检验科主任：李贵霞</p>
								</div>
							</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>