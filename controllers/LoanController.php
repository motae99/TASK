<?php

namespace app\controllers;

use yii;
use yii\rest\ActiveController;
use app\models\Loan;

class LoanController extends ActiveController{
    public $modelClass = 'app\models\Loan';

    public function actions(){
    	$actions = parent::actions();
    	unset($actions['create']);
    	return $actions;
    }

    public function actionCreate(){

    	$model = new Loan();
        $model->load(yii::$app->request->post(), '');
        
        $model->attributes = $_POST['loans'];
    	print_r($model->attributes);
    	die();

    	// $model->save();
    	// return $model;

    }
}
