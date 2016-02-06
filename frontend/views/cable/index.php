<script src="/public/frontend/js/jquery-1.4.4.min.js"></script>
<script src="/public/frontend/js/slides.min.jquery.js"></script>
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
.left{
	width: 200px;
	background-color: #e0dddf;
	padding-left: 50px;
}
.left p{
	margin-top: 4px;
	margin-left: 14px;
	margin-bottom: 8px;
}

#left{
  margin-left: 180px;
  margin-right: 22px;
  cursor: pointer;
}
#right{
  margin-left: 25px;
  cursor: pointer;
}
.tupian{
  width: 300px;
  height: 430px;
}
.btn-lg, .btn-group-lg > .btn{
  padding: 10px 24px;
}
.jiantou_left{
  cursor: pointer;
}
.phone{
  font-size: 20px;
  margin-left: 275px;
  margin-top: 40px;
}
</style>
<?php 
  for ($i=0; $i <count($newMgz) ; $i++) { 
    $arrPic[] = $newMgz[$i]->mgz_pic;
  }
?>
<script>
$(function(){
    //控制左面的显示
    var k = 0;
    var max = <?php echo count($mgzNum);?>;
    $(".left a").hide();
    var j = 0;
    showLeftA(j,max)
    $("#jiantou_left").click(function(){
      if(j==0){

      }else{
          j--;
      }
      showLeftA(j,max)
    });
    $("#jiantou_right").click(function(){
      if(j==Math.ceil(max/3)-1){

      }else{
          j++;
      }
      showLeftA(j,max)
    });

    var numTotal = "<?php echo count($arrPic);?>";
    var arrPic = eval('<?php echo json_encode($arrPic);?>');
    showPic(0,arrPic);
    
    var i=0;
    setInterval(function(){
      if(i==numTotal-1){
        i==numTotal
      }else{
        i++;
      }
      showPic(i,arrPic);
    },5000);

    
    $("#left").click(function(){
      showPic(i,arrPic);
      if(i==0){
        i==0
      }else{
        i--;
      }
    }); 
    $("#right").click(function(){
     if(i==numTotal-1){
        i==numTotal
      }else{
        i++;
      }
      showPic(i,arrPic);
    });  
  });
  function showPic(i,arrPic){
    $(".tupian").attr("src","/public/uploads/mgz/"+arrPic[i]);
  }
   function showLeftA(j,max){
        $(".left a").hide();
        if(j==0){
            $("#"+3*j).show();
            $("#1").show();
            $("#2").show();
        }else{
            $("#"+3*j).show();
            var next = 3*j+1;
            $("#"+next).show();
            var next_next = next+1;
            $("#"+next_next).show();
        }
    }
</script>
<ol class="breadcrumb _pc">
	<li>
		<a href="#">首页</a>
	</li>
	<li>
		<a href="#" class="active">索刊</a>
	</li>
</ol>
<div >
	<div class="pull-left left">
		<!-- <img src="/public/frontend/img/photo_03.png"> -->
     <p id='jiantou_left' class="jiantou_left">
       <span href="#" class=" btn-lg">
          <span class="glyphicon glyphicon-chevron-up"></span> 
        </span>
     </p> 
     <?php for ($i=0; $i < count($mgzYear) ; $i++) { 
       # code...
     ?>
      <a id="<?php echo $i;?>" href="/frontend/web/index.php?r=cable/index&mgzYear=<?php echo $mgzYear[$i];?>&mgzNum=<?php echo $mgzNum[$i];?>">
		    <img src='/public/frontend/img/首页-01_47.png'>
		    <p class=""><?php echo $mgzYear[$i];?>年<?php echo $mgzNum[$i];?>期</p>
      </a>
		<?php } ?>
		
    <p id='jiantou_right' class="jiantou_left">
       <span href="#" class=" btn-lg">
          <span class="glyphicon glyphicon-chevron-down"></span> 
        </span>
     </p>
	</div>
	<div class="pull-left">
			 <img class="jiantou" id="left" src="/public/frontend/img/jiantou_03.png"/>
       <img class="tupian" src=""/>
       <img class="jiantou" id='right' src="/public/frontend/img/jiantou_05.png"/>
       <p class="phone">索刊电话：022-23593650</p>
	</div>
</div>
