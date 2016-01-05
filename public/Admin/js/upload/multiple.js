/*global Qiniu */
/*global plupload */
/*global FileProgress */
/*global hljs */


$(function() {
    var uploader = Qiniu.uploader({
        runtimes: 'html5,flash,html4',
        browse_button: 'pickfiles',
        container: 'container',
        drop_element: 'container',
        max_file_size: '300mb',
        flash_swf_url: 'js/plupload/Moxie.swf',
        dragdrop: true,
        chunk_size: '4mb',
        uptoken_url: $('#uptoken_url').val(),
        domain: $('#domain').val(),
        save_key: false,
        auto_start: true,
        init: {
            'FilesAdded': function(up, files) {
                $('#ppt_upload').show();
                $('#success').hide();
                // $('#pickfiles').hide();
                // $('#pickfiles').removeClass().addClass('btn btn-danger');
                plupload.each(files, function(file) {
                    var progress = new FileProgress(file, 'fsUploadProgress');
                    progress.setStatus("等待...");
                });
            },
            'BeforeUpload': function(up, file) {
                var progress = new FileProgress(file, 'fsUploadProgress');
                var chunk_size = plupload.parseSize(this.getOption('chunk_size'));
                if (up.runtime === 'html5' && chunk_size) {
                    progress.setChunkProgess(chunk_size);
                }
            },
            'UploadProgress': function(up, file) {
                var progress = new FileProgress(file, 'fsUploadProgress');
                var chunk_size = plupload.parseSize(this.getOption('chunk_size'));

                progress.setProgress(file.percent + "%", file.speed, chunk_size);
            },
            'UploadComplete': function() {
                $('#success').show();
            },
            'FileUploaded': function(up, file, info) {
                var progress = new FileProgress(file, 'fsUploadProgress');
                progress.setComplete(up, info);
            },
            'Error': function(up, err, errTip) {
                $('table').show();
                var progress = new FileProgress(err.file, 'fsUploadProgress');
                progress.setError();
                progress.setStatus(errTip);
            },
            'Key': function(up, file) {
                // 若想在前端对每个文件的key进行个性化处理，可以配置该函数
                // 该配置必须要在 unique_names: false , save_key: false 时才生效
                var randNum = Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000;
                var key = Date.parse(new Date())+randNum;
                // do something with key here
                return key;
            }
        }
    });

    uploader.bind('FileUploaded', function() {
        console.log('hello man,a file is uploaded');
    });

    var Q2 = new QiniuJsSDK();
    var uploader2 = Q2.uploader({
        runtimes: 'html5,flash,html4',
        browse_button: 'pickfiles2',
        container: 'container2',
        drop_element: 'container2',
        max_file_size: '300mb',
        flash_swf_url: 'js/plupload/Moxie.swf',
        dragdrop: true,
        chunk_size: '4mb',
        uptoken_url: $('#uptoken2_url').val(),
        domain: $('#domain2').val(),
        save_key: false,
        auto_start: true,
        init: {
            'FilesAdded': function(up, files) {
                $('#video_upload').show();
                $('#success').hide();
                plupload.each(files, function(file) {
                    var progress = new FileProgress2(file, 'fsUploadProgress2');
                    progress.setStatus("等待...");
                });
            },
            'BeforeUpload': function(up, file) {
                var progress = new FileProgress2(file, 'fsUploadProgress2');
                var chunk_size = plupload.parseSize(this.getOption('chunk_size'));
                if (up.runtime === 'html5' && chunk_size) {
                    progress.setChunkProgess(chunk_size);
                }
            },
            'UploadProgress': function(up, file) {
                var progress = new FileProgress2(file, 'fsUploadProgress2');
                var chunk_size = plupload.parseSize(this.getOption('chunk_size'));

                progress.setProgress(file.percent + "%", file.speed, chunk_size);
            },
            'UploadComplete': function() {
                $('#success').show();
            },
            'FileUploaded': function(up, file, info) {
                var progress = new FileProgress2(file, 'fsUploadProgress2');
                progress.setComplete(up, info);
            },
            'Error': function(up, err, errTip) {
                $('table').show();
                var progress = new FileProgress2(err.file, 'fsUploadProgress2');
                progress.setError();
                progress.setStatus(errTip);
            },
            'Key': function(up, file) {
                // 若想在前端对每个文件的key进行个性化处理，可以配置该函数
                // 该配置必须要在 unique_names: false , save_key: false 时才生效
                var randNum = Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000;
                var key = Date.parse(new Date())+randNum+'.mp4';
                // do something with key here
                return key;
            }
        }
    });

    // uploader2.bind('FileUploaded', function() {
        // uploader2.init();
        // $('#pickfiles2').on('click',function(e){
        //     var v = $('#pickfiles2').children('span').text();        
        //     if(v == '重新上传'){
        //         uploader2.init();

        //     }
        // });
    // });
    // $('#container').on(
    //     'dragenter',
    //     function(e) {
    //         e.preventDefault();
    //         $('#container').addClass('draging');
    //         e.stopPropagation();
    //     }
    // ).on('drop', function(e) {
    //     e.preventDefault();
    //     $('#container').removeClass('draging');
    //     e.stopPropagation();
    // }).on('dragleave', function(e) {
    //     e.preventDefault();
    //     $('#container').removeClass('draging');
    //     e.stopPropagation();
    // }).on('dragover', function(e) {
    //     e.preventDefault();
    //     $('#container').addClass('draging');
    //     e.stopPropagation();
    // });



    // $('#show_code').on('click', function() {
    //     $('#myModal-code').modal();
    //     $('pre code').each(function(i, e) {
    //         hljs.highlightBlock(e);
    //     });
    // });


    // $('body').on('click', 'table button.btn', function() {
    //     $(this).parents('tr').next().toggle();
    // });


    // var getRotate = function(url) {
    //     if (!url) {
    //         return 0;
    //     }
    //     var arr = url.split('/');
    //     for (var i = 0, len = arr.length; i < len; i++) {
    //         if (arr[i] === 'rotate') {
    //             return parseInt(arr[i + 1], 10);
    //         }
    //     }
    //     return 0;
    // };

    // $('#myModal-img .modal-body-footer').find('a').on('click', function() {
    //     var img = $('#myModal-img').find('.modal-body img');
    //     var key = img.data('key');
    //     var oldUrl = img.attr('src');
    //     var originHeight = parseInt(img.data('h'), 10);
    //     var fopArr = [];
    //     var rotate = getRotate(oldUrl);
    //     if (!$(this).hasClass('no-disable-click')) {
    //         $(this).addClass('disabled').siblings().removeClass('disabled');
    //         if ($(this).data('imagemogr') !== 'no-rotate') {
    //             fopArr.push({
    //                 'fop': 'imageMogr2',
    //                 'auto-orient': true,
    //                 'strip': true,
    //                 'rotate': rotate,
    //                 'format': 'png'
    //             });
    //         }
    //     } else {
    //         $(this).siblings().removeClass('disabled');
    //         var imageMogr = $(this).data('imagemogr');
    //         if (imageMogr === 'left') {
    //             rotate = rotate - 90 < 0 ? rotate + 270 : rotate - 90;
    //         } else if (imageMogr === 'right') {
    //             rotate = rotate + 90 > 360 ? rotate - 270 : rotate + 90;
    //         }
    //         fopArr.push({
    //             'fop': 'imageMogr2',
    //             'auto-orient': true,
    //             'strip': true,
    //             'rotate': rotate,
    //             'format': 'png'
    //         });
    //     }

    //     $('#myModal-img .modal-body-footer').find('a.disabled').each(function() {

    //         var watermark = $(this).data('watermark');
    //         var imageView = $(this).data('imageview');
    //         var imageMogr = $(this).data('imagemogr');

    //         if (watermark) {
    //             fopArr.push({
    //                 fop: 'watermark',
    //                 mode: 1,
    //                 image: 'http://www.b1.qiniudn.com/images/logo-2.png',
    //                 dissolve: 100,
    //                 gravity: watermark,
    //                 dx: 100,
    //                 dy: 100
    //             });
    //         }

    //         if (imageView) {
    //             var height;
    //             switch (imageView) {
    //                 case 'large':
    //                     height = originHeight;
    //                     break;
    //                 case 'middle':
    //                     height = originHeight * 0.5;
    //                     break;
    //                 case 'small':
    //                     height = originHeight * 0.1;
    //                     break;
    //                 default:
    //                     height = originHeight;
    //                     break;
    //             }
    //             fopArr.push({
    //                 fop: 'imageView2',
    //                 mode: 3,
    //                 h: parseInt(height, 10),
    //                 q: 100,
    //                 format: 'png'
    //             });
    //         }

    //         if (imageMogr === 'no-rotate') {
    //             fopArr.push({
    //                 'fop': 'imageMogr2',
    //                 'auto-orient': true,
    //                 'strip': true,
    //                 'rotate': 0,
    //                 'format': 'png'
    //             });
    //         }
    //     });

    //     var newUrl = Qiniu.pipeline(fopArr, key);

    //     var newImg = new Image();
    //     img.attr('src', 'loading.gif');
    //     newImg.onload = function() {
    //         img.attr('src', newUrl);
    //         img.parent('a').attr('href', newUrl);
    //     };
    //     newImg.src = newUrl;
    //     return false;
    // });

});
