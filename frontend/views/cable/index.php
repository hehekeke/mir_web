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
</style>
<script>
$(function(){
    $("#slides").slides();  
  });
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

		<img src='/public/frontend/img/首页-01_47.png'>
		<p class="">2015年6期</p>
		<img src='/public/frontend/img/首页-01_47.png'>
		<p class="">2015年5期</p>
		<img src='/public/frontend/img/首页-01_47.png'>
		<p class="">2015年4期</p>
		<!-- <img src="/public/frontend/img/photo_06.png"> -->
	</div>
	<div class="pull-left">
			
	</div>
</div>
<div id="slides">  
  <div class="slides_container">  
    <div>  
      <h1>Slide 1</h1>  
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
    </div>  
    <div>  
      <h1>Slide 2</h1>  
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
    </div>  
    <div>  
      <h1>Slide 3</h1>  
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
    </div>  
    <div>  
      <h1>Slide 4</h1>  
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
    </div>  
  </div>  
</div>  