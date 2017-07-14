<?php

namespace app\controllers;

use yii;
use yii\rest\ActiveController;
// use app\models\Token;

class TokenController extends ActiveController{
    public $modelClass = 'app\models\Token';

    // public function actions(){
    // 	$actions = parent::actions();
    // 	unset($actions['create']);
    // 	return $actions;
    // }

    // public function actionCreate(){

    // 	$model = new Token();
    // 	// print_r(yii::$app->request->post());
    // 	// die();
    // 	$model->load(yii::$app->request->post(), '');
    // 	$model->save();
    // 	return $model;

    // }
}
