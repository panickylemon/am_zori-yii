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
		$request = Yii::$app->request;

		$query = District::find();


		$status = $request->get('is_sold', array());
		$house = $request->get('is_house', array());
		$village = $request->get('village_id');
		$ready = $request->get('date_ready');

		if ($status == array('0') || $status == array('1')) {
			$query->where(['is_sold' => $status]);
		}

		if ($house == array('0') || $house == array('1')) {
			$query->andWhere(['is_house' => $house]);
		}

		if (isset($village)) {
			$query->andWhere(['village_id' => $village]);
		}

		if (isset($ready)) {
			$query->andWhere(['date_ready' => $ready]);
		}

		$districts = $query->all();

		return $this->render('selection', [
			'districts' => $districts,
			'status'=>$status,
			'house'=>$house,
			'village'=>$village,
			'ready'=>$ready,
		]);

	}

}
