<?php
namespace frontend\controllers;

use common\models\District;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Reviews;

class SelectionController extends Controller
{

	public function actionSelection()
	{

		$query = District::find();

		$districts = $query->all();

		return $this->render('selection', [
			'districts' => $districts,
		]);


	}

}
