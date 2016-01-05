


	$.fn.timely = function(options){
		var defaults = {
				'searchUrl':'',
				'listValue':'listValue',
				'key':'name', //需要获取的值
				'message':'您是否要找：',

	    };
    	var options = $.extend(defaults, options);
    	var that = $(this);
    	var listValue = options.listValue;
    	var key = options.key;

    	if (!that.hasClass("timelySearch")) {
    		that.addClass("timelySearch");
    	}
    	var listV = $("."+listValue);   
    	
    	$(listV).remove();
		$("<ul class='"+listValue+" npl' style='display:none'><h5 class='nm'>"+options.message+"</h5></ul>").insertAfter(that);

    	that.keyup(function(event){
			listV.find('*').remove();
	    	listV.hide();
    		var val = that.val();
    		if (val !== '') {
    			$.get(
	    			options.searchUrl, 
	    			{data:val}, 
	    			function(data){

						if (data.onwerHtml != 'undefined' && data.onwerHtml != undefined ) {

    						listV.append(data.onwerHtml);
    						listV.show();

	    				} else if ( data.length >0 ) {
	    					var len = data.length;
    						for(var i = 0; i<len; i++) {
		    						var row = data[i];
		    						listV.append(
		    							"<li>"+row[key]+"</li>"
		    							);
	    					}
	    					listV.show()

	    				}
    				}, 
    			'json');
    		}

    	})
    	listV.mouseover(function(){
    		listV.show();
    	})
    	// that.parent().mouseout(function(){
    	// 	listV.hide();

    	// })
    	// $("body").click(function(){
    	// 	listV.hide(100);
    	// })
	}	




