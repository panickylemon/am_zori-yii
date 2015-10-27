<?php
namespace frontend\controllers;

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

/**
 * Review controller
 */
class ReviewController extends Controller
{
//
//    public function actions()
//    {
//        return [
//            'error' => [
//                'class' => 'yii\web\ErrorAction',
//            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
//        ];
//    }


//    public function actionReview()
//    {
//        $review = new Reviews();
//
//        if ($review->load(Yii::$app->request->post()) && $review->save()) {
//            return $this->redirect(['review/village_1']);
//        } else {
//            return $this->render('village_1', [
//                'review' => $review,
//            ]);
//        }
//    }

}
