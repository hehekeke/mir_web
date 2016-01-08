<style type="text/css">
.breadcrumb > li + li:before {
    color: #CCCCCC;
    content: ">";
    padding: 0 5px;
}
.breadcrumb a{
	font-size: 19px;
}
a{
	color: black;
}
.first{
	margin-top: 20px;
	padding-bottom: 20px;
	margin-bottom: 20px;
	border-bottom: 1px dashed grey;
}
.first img{
	float: left;
	width: 18%;
	height: 66px;
	margin-right: 20px;
	margin-bottom: 10px;
}
h5{
	padding-bottom: 5px;
	border-bottom: 1px solid grey;
}
.tuijian div{
	width:30%; 
	margin-top: 20px;
	padding-left: 20px;
	padding-bottom: 20px;
	text-align: center;
	border-right: 1px dashed grey;
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
        .one{
        	border-bottom: 1px solid #e5e5e5;
        }
        .one p{
        	font-size: 20px;
        	font-weight: 400;
        	margin-left: 6%;
        	margin-top: 6px;
        }
       
        
 }

</style>
<div class="top _m">
    <div class="pull-left" style="margin-top:8px;margin-left:28px;">
        <div id="triangle-left"></div>
        <div id='left'>
            <span style="margin-top:5px;">返回</span>
        </div>
    </div>
    <p class="pull-left" style="width:70%;">行业招聘</p>
</div>
<div class="clearfix"></div>
<div class="_m">
	<div class="one">
		<p>诚招：php</p>
		<p>[北京]Msup</p>
	</div>
	<div class="one">
		<p>诚招：php</p>
		<p>[北京]Msup</p>
	</div>
	<div class="one">
		<p>诚招：php</p>
		<p>[北京]Msup</p>
	</div>
	<div class="one">
		<p>诚招：php</p>
		<p>[北京]Msup</p>
	</div>
	<div class="one">
		<p>诚招：php</p>
		<p>[北京]Msup</p>
	</div>
</div>
<ol class="breadcrumb _pc">
	<li>
		<a href="#">首页</a>
	</li>
	<li>
		<a href="#" class="active">行业招聘</a>
	</li>
</ol>
<div class="first _pc">
	<h5>|&nbsp;&nbsp;名企招聘</h5>
	<div>
		<?php for($i=0;$i<10;$i++){?>
			<img src="<?php echo $list[$i]->article_pic ;?>">
		<?php }?>
	</div>
	<div class="clearfix"></div>
</div>

<div class='second _pc'>
	<h5>|&nbsp;&nbsp;推荐招聘</h5>
	<div data-spy="scroll" data-target="#myScrollspy" data-offset="0" style="height:200px;overflow:auto; position: relative;">
		<div class='tuijian'>
			<?php for($i=0;$i<count($list);$i++){?>
				<div class='pull-left'>
				<a href="/frontend/web/index.php?r=job/index2&id=<?php echo $list[$i]->article_id;?>">
					 <h6>&bull;<?php echo $list[$i]->article_title ;?></h6>
					 <h6>
					 &nbsp;
					 <?php if($list[$i]->mirMake->maker_place){?>
					 [<?php echo $list[$i]->mirMake->maker_place ;?>]:
					 <?php echo $list[$i]->mirMake->maker_name ;?>
					 <?php }?>
					 </h6>
				</a>
				</div>
			<?php }?>
		</div>
	</div>
</div>