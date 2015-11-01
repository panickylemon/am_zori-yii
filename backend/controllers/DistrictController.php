<?php

namespace backend\controllers;

use Yii;
use common\models\District;
use backend\models\DistrictSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * DistrictController implements the CRUD actions for District model.
 */
class DistrictController extends Controller
{
	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['post'],
				],
			],
		];
	}

	public function actionIndex()
	{
		$searchModel = new DistrictSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}


	public function actionView($id)
	{
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}


	function saveImage($model) {
		if ($model->image) {
			$full = Yii::getAlias('@frontend/web/uploads/' . $model->image->baseName . '.' . $model->image->extension);
			$thumb = Yii::getAlias('@frontend/web/uploads/' . $model->image->baseName . '_thumb.' . $model->image->extension);
			$thumb2 = Yii::getAlias('@frontend/web/uploads/' . $model->image->baseName . '_thumb2.' .
				$model->image->extension);

			$model->image->saveAs($full);

			$size = new \Imagine\Image\Box(150, 150);
			$size2 = new \Imagine\Image\Box(250, 250);
			$mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;


			Image::frame($full)
				->thumbnail($size2, $mode)
				->save($thumb2);

			Image::frame($full)
				->thumbnail($size, $mode)
				->save($thumb);


		}
	}


	public function actionCreate()
	{
		$model = new District();
		$model->load(Yii::$app->request->post());
		$model->image = UploadedFile::getInstance($model, 'image');
		if ($model->save()) {
			$this->saveImage($model);
			//print_r(UploadedFile::getInstance($model, 'image'));
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}


	public function actionUpdate($id)
	{
		$model = $this->findModel($id);
		$oldFile = Yii::getAlias('@frontend/web/uploads/' . $model->image);
		$oldFileName = $model->image;

		if ($model->load(Yii::$app->request->post())) {
			$image = UploadedFile::getInstance($model, 'image');

			if (empty($image)) {
				$image = false;
				$model->image = $oldFileName;
			} else {
				$model->image = $image;
			}

			if ($model->save()) {
				if ($image !== false && unlink($oldFile)) {
					$this->saveImage($model);
				}
				return $this->redirect(['view', 'id' => $model->id]);
			}
		}
		return $this->render('update', [
			'model' => $model,
		]);
	}


	public function actionDelete($id)
	{
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}


	protected function findModel($id)
	{
		if (($model = District::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
