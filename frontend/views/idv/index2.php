<style type="text/css">
.fenlei{
	width: 100%;
	margin-top: 20px;
	padding-bottom: 10px;
	border-bottom: 1px dashed grey;
}
.fenlei span{
	display: inline-block;
	margin-right: 20px;
}
a{
	color: black;
}
</style>
<div>
	<ul class="nav nav-tabs " role="tablist" id="myTab">
		<li class="active">
			<a href="#home" role="tab" data-toggle="tab">品牌库</a>
		</li>
	</ul>
</div>
<?php foreach ($newData as $k => $v) { ?>
<div class="fenlei">
	<h4><?php echo $k;?></h4>
	<?php foreach ($v as $k => $v1) {  ?>
	<span><a><?php echo $v[$k];?></a></span>
	<?php }?>
</div>
<?php }?>


