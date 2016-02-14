<?php
$session = Yii::$app->
session;
$language = empty($session['language'])?0:1;
use backend\components\GlobalFunc;
$glo =new GlobalFunc();
?>
<style type="text/css">
	.content{
		padding-bottom: 20px;
		border-bottom: 1px dashed grey;
	}
	.content img{
		margin-top: 20px;
		height: 156px;
		margin-left: 40px;
	}
	.wenzi{
		width: 70%;
		margin-top: 20px;
		margin-left: 40px;
	}
	.wenzi p {
		/*margin-bottom: 20px;*/
		margin-right: 30px;
	}
	.wenzi p span{
		display: inline-block;
		margin-bottom: 10px;
	}
	.wenzi .pull-right{
		color: grey;
	}
	a{
		color: black;
	}
	h2 {
		padding-bottom: 20px;
		border-bottom: 1px dashed black;
	}
	.neirong{
		margin-top: 10px;
        padding-top: 40px;
		border-top: 1px dashed black;
	}
	.shangxia{
		/*padding-left: 30px;*/
	}
	.shangxia span{
		color: grey;
		/*text-align: center;*/
		font-size: 18px;
		font-weight: 800px;
	}
</style>
<script type="text/javascript">
	$(function(){
		var id = "<?php echo $id?>";
		if(id==""){
			$("#wangqi").addClass("active");
			$("#wangqihuigu").addClass("active");
		}else{
			$("#zaixian").addClass("active");
			$("#linchuangyixue").addClass("active");
		}
	})
</script>
<div class="">
	<div class="">
		<ul class="nav nav-tabs " role="tablist" id="myTab">
			<li id='zaixian'>
				<a href="#linchuangyixue" role="tab" data-toggle="tab"><?php echo $type;?></a>
			</li>
			<li id='wangqi'>
				<a href="#wangqihuigu" role="tab" data-toggle="tab">往期回顾</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane shangxia" id='linchuangyixue'>
				<h2 class="text-center " >
					<?php echo $glo->enOrCh($model,'mir360_title');?>
				</h2>

            	<span style="text-align: center;display: block;">
                    <?php echo Yii::$app->params['title']['faburiqi'][$language];?>:
                    <?php echo date("Y-m-d",strtotime($model->mir360_date)); ?> 
                    &nbsp;&nbsp;&nbsp;
                    <?php echo Yii::$app->params['title']['laiyuan'][$language];?>
                    ：
                    <?php echo Yii::$app->params['title']['yixuejiancewang'][$language];?>
                </span>
            	<div class="neirong">
                    <?php echo $glo->enOrCh($model,'mir360_remark');?>
            	</div>
			</div>
			<div class="tab-pane" id='wangqihuigu'>
				<div class='content'>
					<img src='/public/frontend/img/精彩看点二级页面——往期回顾-01_03.png' class="pull-left">
					<div class="wenzi pull-left">
						<?php for ($i=0; $i < count($data['2016']); $i++) {?>
						<p>
							<span class='pull-left'>&bull;
								<?php echo  $glo->enOrCh($data['2016'],"mir360_title");?>
							</span>
							<span class='pull-right'><?php echo date("Y-m-d",strtotime($data['2016'][$i]->mir360_date));?></span>
						</p>
						<div class='clearfix'></div>
						<?php }?>
						
					</div>
					<div class='clearfix'></div>
				</div>

				<div class='content'>
					<img src='/public/frontend/img/精彩看点二级页面——往期回顾-01_06.png' class="pull-left">
					<div class="wenzi pull-left">
						<?php for ($i=0; $i < 5; $i++) {?>
						<p>
							<a href="/frontend/web/index.php?r=see/index2&id=<?php echo $data['2015'][$i]->mir360_id;?>">
							<span class='pull-left'>&bull;
								<?php echo  $glo->enOrCh($data['2015'][$i],"mir360_title");?>
							</span>
							<span class='pull-right'><?php echo date("Y-m-d",strtotime($data['2015'][$i]->mir360_date));?></span>
							<div class='clearfix'></div>
							</a>
						</p>
						<?php }?>
						
					</div>
					<div class='clearfix'></div>
				</div>

				<div class='content'>
					<img src='/public/frontend/img/精彩看点二级页面——往期回顾-01_08.png' class="pull-left">
					<div class="wenzi pull-left">
						<?php for ($i=0; $i < count($data['2014']); $i++) {?>
						<p>
							<a href="/frontend/web/index.php?r=see/index2&id=<?php echo $data['2014'][$i]->mir360_id;?>">
							<span class='pull-left'>&bull;
								<?php echo  $glo->enOrCh($data['2014'][$i],"mir360_title");?>
							</span>
							<span class='pull-right'><?php echo date("Y-m-d",strtotime($data['2014'][$i]->mir360_date));?></span>
							<div class='clearfix'></div>
							</a>
						</p>
						<?php }?>
					</div>
					<div class='clearfix'></div>
				</div>
			</div>
		</div>
	</div>
</div>