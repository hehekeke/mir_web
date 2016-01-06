<?php 
namespace backend\models;
use Yii;

use yii\web\NotFoundHttpException;
use yii\helpers\ArrayHelper;

     
class MirBase extends \yii\db\ActiveRecord
{

	public function updateByMap($data,$map)
	{
		return $this->updateAll($data,$map);
	}
}


?>