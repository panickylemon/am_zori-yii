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


    public function actionAbout()
    {
        $review = new Reviews();

        $review->created = date("Y-m-d H:i");

        $query = Reviews::find();

        $reviews = $query->orderBy('created DESC')->limit(5)-> all();

        if ($review->load(Yii::$app->request->post()) && $review->save()) {
            return $this->redirect(['review/about']);
        } else {
            return $this->render('about', [
                'reviews' => $reviews,
                'review' => $review
            ]);
        }


    }


    public function actionReview()
    {
        $review = new Reviews();

        $review->created = date("Y-m-d H:i");

        $query = Reviews::find();

        $reviews = $query->orderBy('created DESC')-> all();

        if ($review->load(Yii::$app->request->post()) && $review->save()) {
            return $this->redirect(['review/review']);
        } else {
            return $this->render('review', [
                'reviews' => $reviews,
                'review' => $review
            ]);
        }


    }



}
