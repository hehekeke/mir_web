<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');

Yii::setAlias('pluginPath', 'http://'.$_SERVER['SERVER_NAME'] . '/public/plugin');
Yii::setAlias('Admin', 'http://'.$_SERVER['SERVER_NAME'] . '/public/Admin');
Yii::setAlias('jsPath', 'http://'.$_SERVER['SERVER_NAME'] . '/public/Admin/js');
Yii::setAlias('uploads', 'http://'.$_SERVER['SERVER_NAME'] . '/public/uploads');
