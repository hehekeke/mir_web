var isSigned = 0;
$(function(){
	$(".user_info span.edit").click(function(){
        $(this).hide();
        $(this).next("input").val($(this).text()).show().attr("type", "text").focus();

    })
	// 点击签到按钮
    $(".full-and-activation").click(function(){

        var bank = $(".bank").val();
        if (!bank) {
            alert("请输入门票号后点击提交确定");
            return false;
        }
        if (isSigned == 1) {
            alert("该门票已签到成功");
            return false;
        }
        activation(bank);
        console.log($("input[name='MsupUserMember[phone]']").val());
        if(!$("input[name='MsupUserMember[phone]']").val()) return false;
        var Form = {"MsupMemberInfo[name]":"", "MsupMemberInfo[company]":"", "MsupMemberInfo[position]":"", "MsupUserMember[phone]":"","MsupUserMember[email]":""};
        $(".user_info input").each(function(){
            if($(this).attr("type") == "hidden") {
                $(this).val($(this).prev("span").text())
            }
            var name = $(this).attr("name");
            if($(this).val() !='')Form[name] = $(this).val();

        })
        $.post(
            baseUrl+'/admin.php/Ticket/scheduling-ticket/update-owner-info?bank='+bank,
            Form,
            function(data){
                if (data.errno == 0) {
                } else {
                    alert(data.errmsg)
                }
        },"json")
    })
    // 点击票号提交
	$(".sub-bank").click(function(){
		$(".user_info input").hide();
		$("span.text").show();
		$("span.text").text('');
		$(".sub-Activation").removeClass("isSigned").prop('disabled',false);
		isSigned = 0;
		bank = $(".bank").val();
		if (!bank){
			alert("请填写票号");
			return false;
		}
		$.get(
			baseUrl+'/admin.php/Ticket/ticket-active/get-ticket-info?bank='+bank,
			function(data) {
				if (data.errno == 0) {
					var container = $(".user_info");
					$(".tickets").text(data.data.tickets.title);
					if (data.data.userInfo) {
						// 如果有用户数据则插入相关数据
						fullInfoWithData(data.data.userInfo, container, '');
						if (data.data.userInfo.memberInfo) {
							fullInfoWithData(data.data.userInfo.memberInfo, container, '');
						}
					}
					if (data.data.isSigned == "1") {
						$(".isSigned").text("已签到");
						$(".sub-Activation").addClass("isSigned").attr('disabled','disabled');
						$("span.isSigned").css("color", "#f00")
						isSigned = 1;
					} else {
						$("span.isSigned").css("color", "#000")
						$(".isSigned").text("未签到");
					}
				} else if (data.errno > 0){
					alert(data.errmsg)
				} else {
					// console.log(data);
				}
			}, 'json');
	})
})

function activation(bank){

	$.get(
			baseUrl+'/admin.php/Ticket/ticket-active/sign?bank='+bank,
			function(data){
				if (data.errno == 0){
					$(".isSigned").text("已签到");
					alert("签到成功");
					$("input").val('');
					$("span.text").text('')
					isSigned = 1;
					// loadActiveHistory(data.data.owner);
				} else if (data.errno > 0){
					alert(data.errmsg)
				} else {
					console.log(data);
				}
			}
		,"json")

}

// 根据数据来插入到对应的元素中
function fullInfoWithData(data,container, ele){
	for(var i in data) {
		if (container.find(ele+"."+i).length > 0 && data[i]){
			$("span."+i).text(data[i]);
		}
	}
}
// 获取用户签到历史
function loadActiveHistory(userId) {
	$.get(
		baseUrl+'/admin.php/Ticket/ticket-active/activation?ud='+userId,
		function(data){
			if (data.data != '') {
				for (var i in data.data){
					var history = '<div class="sign_content">';
					history += '<div class="sign_detail">';
					history += '<div class="in">';
					history += '<span class="tit">票号：</span>';
					history += '<div class="tel">'+data.data.bank+'</div>';
					history += '</div><div class="in">';
					history += '<span class="tit">姓名：</span>';
					history += '<div class="tel">'+data.data.userInfo.memberInfo.name+'</div>';
					history += '</div>';
					$("#activeHistory").append(history);
				}
			}
		},'json');

}

// function show