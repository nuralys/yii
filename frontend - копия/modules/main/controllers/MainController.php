<?php

namespace app\modules\main\controllers;

use frontend\models\ContactForm;
use frontend\models\Image;
use frontend\models\SignupForm;
use yii\web\Response;
use yii\widgets\ActiveForm;

class MainController extends \yii\web\Controller
{
	public $layout = 'inner';

    public function actionIndex()
    {
    	
    	$url_image = Image::getImageUrl();
        return $this->render('index');
    }

    public function actionRegister(){
    	$model = new SignupForm;
    	return $this->render('register',['$model' => $model]);
    }

}
