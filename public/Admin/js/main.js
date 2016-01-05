// 根据屏幕尺寸不同加载不同的 BANNER 图片
var imgPath = 'images/';
if($(window).width()<680){
	var imgPath = 'images/mobile/';
}
$(function(){
	(function(){
		$(".teacher-wrap li").each(function(index, element) {
			if($(window).width()>680 && index%5==0){
				$(this).css("margin-left",0);
			}
		})
	})();
	
	//login
	(function(){
		$(".mobile-login>a").click(function(e){
			if(!$(this).hasClass("cur")){
				$(".layer").show();
				$(this).next("div").slideDown();
				$(this).addClass("cur");
				$(this).next("div").siblings("div").hide();
				$(this).siblings("a").removeClass("cur");
			}else{
				$(".layer").hide();
				$(".mobile-login>a").removeClass("cur");
				$(".mobile-login>div").hide();
			}
		})
	})();
	
	(function(){
		$(".import-list li").click(function(){
			if(!$(this).hasClass("cur")){
				$(this).addClass("cur");
			}else{
				$(this).removeClass("cur");
			}
		})		
	})();
	
	//经验
	if($(window).width()>680){
		(function(){
			$(".experience-con li").click(function(){
				$(this).addClass("cur");
				$(this).siblings("li").removeClass("cur");
				$(".experience-list").eq($(this).index()).show();
				$(".experience-list").eq($(this).index()).siblings("ul").hide();
				selectLiPc($(this).index());
			})
			$(".experience-list li").each(function(index, element) {
				if(index%4==0){
					$(this).css("margin-left",0);
				}
			})
			function selectLiPc(p){
				$(".select-all").click(function(){				
					$(".import-list").eq(p).children("li").each(function(index, element) {
						if(index>=0){
							$(this).addClass("cur");
						}else if(index>99){
							$(this).removeClass("cur");
						}
					})
					$(".import-list").eq(p).siblings().children("li").removeClass("cur");
				})
			}
			selectLiPc(0);
		})();
	}else{
		(function(){
			var maxn=$(".experience-con ul").children("li").length-1;
			var n=maxn;
			$(".exp-left").click(function(){
				n++;
				if(n<=maxn){
					$(".experience-con ul").animate({marginLeft:'+=10em'},500);
					$(".exp-right").addClass("cur");
					qiehuan(5-n);
					ul(5-n);
				}else{
					n=maxn;
					$(".exp-left").removeClass("cur");
					qiehuan(0);
					ul(0);
				}
				//alert(n);
			})
			
			$(".exp-right").click(function(){
				n--;
				if(n>=0){
					$(".experience-con ul").animate({marginLeft:'-=10em'},500);
					$(".exp-left").addClass("cur");
					qiehuan(5-n);
					ul(5-n);
					selectLi(5-n);
				}else{
					n=0;
					$(".exp-right").removeClass("cur");
					qiehuan(maxn);
					ul(maxn);
					selectLi(0);
				}
				//alert(n)
			})
			function qiehuan(m){
				$(".experience-con ul li").eq(m).addClass("cur");
				$(".experience-con ul li").eq(m).siblings("li").removeClass("cur");
			}
			function ul(k){
				$(".experience-list").eq(k).show();
				$(".experience-list").eq(k).siblings("ul").hide();
			}
			
			function selectLi(q){
				$(".select-role").click(function(){				
					$(".import-list").eq(q).children("li").each(function(index, element) {
						if(index>=0){
							$(this).addClass("cur");
						}else if(index>99){
							$(this).removeClass("cur");
						}
					})
					$(".import-list").eq(q).siblings().children("li").removeClass("cur");
				})
			}
			selectLi(0);
		})();
	}
	
	
	
	
	
})