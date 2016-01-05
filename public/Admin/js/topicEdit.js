var app_obj={
	appedit_init:function(){

		var ue = UE.getEditor('editor');
			UE.utils.cssRule('body','body{background:#ccc}');

		$(window).bind('beforeunload',function(){ 
			return '您输入的内容尚未保存，确定离开此页面吗？'; 
		}); 
		$('#topicsubmit').click(function(){
			$('#topicsubmit').text('正在提交...');
		});
		//ajax提交更新，返回
		$('#appedit').submit(function(){ 
			//获取详细纯文本
			var arr = [];
			arr.push(UE.getEditor('editor').getPlainTxt());
			var plainTextArray = JSON.stringify(getPlainText(arr[0]));//将带有格式的纯文本进行json编码
        	$('#plainText').attr('value',plainTextArray);
			// $(this).attr('disabled', true);
			var $url = $("#appedit").attr('do_action');
			$.post($url, $('#appedit').serialize(), function(response){
				if(response.status=='1'){
					$(window).unbind('beforeunload');
					window.location = response.jumpurl;
				}else{
					global_obj.win_alert('提交失败：'+response.errmsg);
				};
			}, 'json');
			return false;
		});
		
		$('#home_form .item .rows .b_l a[href=#shop_home_img_del]').click(function(){
			var _no=$(this).attr('value');
			$('#home_form .b_r').eq(_no).html('');
			$('#home_form input[name=ImgPathList\\[\\]]').eq(_no).val('');
			this.blur();
			return false;
		});
	},
	relation_modal_init:function()
	{
		//关联讲师分页
	    $("#couse-relationapp").on("click", ".pagination a", function(event){
	       event.stopImmediatePropagation(); 
	        var url = $(this).attr("href");
	        $(this).attr("href", "javascript:void(0)")
	        $("#couse-relationapp .modal-body *").remove();
	        $("#couse-relationapp .modal-body").load(url);
	        return false;
	    })
	    //关联活动分页
	    $("#activity-relationapp").on("click", ".pagination a", function(event){
	       event.stopImmediatePropagation(); 
	        var url = $(this).attr("href");
	        $(this).attr("href", "javascript:void(0)")
	        $("#activity-relationapp .modal-body *").remove();
	        $("#activity-relationapp .modal-body").load(url);
	        return false;
	    })
	    //关联课程分页
	    $("#course-relationapp").on("click", ".pagination a", function(event){
	       event.stopImmediatePropagation(); 
	        var url = $(this).attr("href");
	        $(this).attr("href", "javascript:void(0)")
	        $("#course-relationapp .modal-body *").remove();
	        $("#course-relationapp .modal-body").load(url);
	        return false;
	    })
	},
	relation_input_click:function()
	{
		/* 关联讲师 */
		$("#relationapp").click(function(event){
            var $url = '/admin.php/taskrecord/relationteacher';
            $("#couse-relationapp .modal-body").load($url);
            $("#couse-relationapp").modal("show");
        });
        /* 关联活动 */
        $("#relationActivity").click(function(event){
            var $url = '/admin.php/topic/relation-activity';
            $("#activity-relationapp .modal-body").load($url);
            $("#activity-relationapp").modal("show");
        });
		/* 关联课程 */
        $("#relationCourse").click(function(event){
            var $url = '/admin.php/topic/relation-course';
            $("#course-relationapp .modal-body").load($url);
            $("#course-relationapp").modal("show");
        });

	}
	
}
function getPlainText(str){
	// var pattern = /<img\s+src=\"(http\:\/\/.+\/ueditor\/php\/upload\/image\/\d+\/\d+\.[a-z]+)?\"\s*.+>/g;//本地上传图片url
	// var pattern = /<img\s+src=\"([http\:\/\/]*\/[\w\/\.]+\.[a-z]{1,4})?\"\s*.+>/g;v2
	var pattern = /<img\s+[\w\=\-\"\s]*src=\"([http\:\/\/]*\/[\w\/\.]+\.[a-z]{1,4})?\"\s*.+?\s*>/g;//v3
	var patternUrl = /[http\:\/\/]*\/[\w\/\.]+\.[a-z]{1,4}/;//匹配图片url
	var matchImg = str.match(pattern);
	var data =[];
	//是否存在img标签
	if(matchImg != null){
		var imgTagCount = matchImg.length;//img标签个数
		for(var i=0;i<imgTagCount;i++){
			var index = str.search(pattern);//获取匹配的位置索引
			var imgUrl = matchImg[i].match(patternUrl);//图片url
			if(index>0){//索引大于零说明前面还有文字
				var text = str.substr(0,index);//截取第一段文字
				data.push(text);//文字进数组
				data.push(imgUrl);//图片url进数组
			}else{
				data.push(imgUrl);
			}
		 	str = str.substr(index+matchImg[i].length);
			if(i == matchImg.length-1&& str.length != 0){
				data.push(str);
			}
		}
	}else{
		data.push(str);
	}
	return data;
}