<?php 
namespace backend\widget;

use yii;
use yii\helpers\Html;
use yii\base\InvalidCallException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use \backend\assets\UploadAsset;
/**
 * Ueditor
 */
class Uploadify extends Widget {

	/** 绑定的上传input id */
	public $targetId = '';
	/** 是否多文件上传  */
	public $multi = 'false';
	/** 上传目标文件夹 */
	public $targetFolder = '';

	public $buttonText = '选择图片';
	/** 上传按钮的宽度 */
	public $width = 120;
	/** 上传按钮的高度 */
	public $height = 40;
	/** 文件上传大小限制 */
	public $fileSizeLimit = '2MB';
	/** 
	 * 文件上传位置
	 * @var path 
	 * image=>上传至图片文件夹，video=>上传至视频文件夹
	 */
	public $path = 'image';

	public function  init()
	{
		$path = ini_get('path');
		$width = ini_get('width');
		$multi  = ini_get('multi');
		$height = ini_get('height');
		$targetId = ini_get('targetId');
		$buttonText = ini_get('buttonText');
		$fileSizeLimit = ini_get('fileSizeLimit');

		parent::init();
	}

	public function run()
	{
		$view = $this->getView();

		$view->registerCssFile(Yii::getAlias('@pluginPath').'/uploadify/uploadify.css',['position' => \yii\web\View::POS_HEAD]);
		$view->registerJsFile(Yii::getAlias('@pluginPath').'/uploadify/jquery.uploadify.js',['position' => \yii\web\View::POS_END]);
		/** 插件目录 */
		$swf = Yii::getAlias('@pluginPath').'/uploadify/uploadify.swf';
		$uploader = Yii::getAlias('@pluginPath').'/uploadify/uploadify.php';

		$fileTypeExts = "*.jpg;*.png;*.gif;";
		if($this->path == 'video'){
			$fileTypeExts = "*.mp4;";
		}
		$view->registerJs('
			$("#'.$this->targetId.'").uploadify({
				"onSelect" : function(file){
	                filetype = file.type;
	            },
	            "auto":true,
	            "swf"      : "'.$swf.'",
	            "uploader" : "'.$uploader.'",
	            "buttonText":"'.$this->buttonText.'",
	            "method"   : "POST",
	            "formData" : { "path": "'.$this->path.'" },
	            "multi" : '.$this->multi.',
	            "height":'.$this->height.',
	            "width":'.$this->width.',
	            "fileSizeLimit" : "'.$this->fileSizeLimit.'",
	            "fileTypeExts" : "'.$fileTypeExts.'",
	            "onUploadStart" : function(){
	                $(".uploadify-queue").css("width","280px");
	            },
	            "onUploadSuccess" : function(file, url, response) {

                },
	            "onSelectError" : function(file,errorCode,errorMsg) {
					switch (errorCode) {
						case SWFUpload.QUEUE_ERROR.INVALID_FILETYPE:
							this.queueData.errorMsg = "上传图片格式不合法";
							break;
						case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:
							this.queueData.errorMsg = "上传图片尺寸最大"+this.settings.fileSizeLimit;
							break;
					}
				}
			});
		');

	}
}






