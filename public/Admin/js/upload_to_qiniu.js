var upload = {
    up_to_qiniu:function(token,key){
        //图片上传七牛
        $('#f').uploadify({
            'onSelect' : function(file){
                filetype = file.type;
                $('#f').uploadify('settings', 'formData', {"key":key+filetype}) //上传文件的名称
            },

            'fileObjName' : 'file',  //七牛的上传的字段名称是file
            'formData'     : {
                'token'     :token, //token
            },
            'swf'      : '/Public/plugin/uploadify/uploadify.swf',
            'uploader' : 'http://up.qiniu.com/',
            'buttonText':'<i class="glyphicon glyphicon-plus"></i>选择图片',
            'method'   : 'POST',
            'height':34,
            'width':101,
            'onUploadSuccess' : function(file, data, response) {
                    console.log(data);
                    var data = $('#f').uploadify('settings','formData');
                    $('#topic').show();
                    $('#logo').attr('src','http://source.buzz.cn/'+data.key);
                    $('#logo_url').val('http://source.buzz.cn/'+data.key);
                    $('#old_pic').hide();
                    if(data.key!==""){
                        $("#notice").html("<font style='color:#73b304;bolid;font:700 14px Arial, Helvetica, sans-serif;'>上传成功！重新上传请单击选择文件按钮！</font>");
                    }else{
                        $("#notice").html("<font style='color:red;bolid;font:700 14px Arial, Helvetica, sans-serif;'>上传失败，请联系管理员！</font>");
                    }

                },
        });
    }
}