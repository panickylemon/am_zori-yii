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


	function saveThumb($model) {
		if ($model->image) {
			$full = Yii::getAlias('@frontend/web/uploads/' . $model->image);
			$thumb = Yii::getAlias('@frontend/web/uploads/' . pathinfo($model->image, PATHINFO_FILENAME) . '_thumb.' . pathinfo
				($model->image, PATHINFO_EXTENSION));
			$thumb2 = Yii::getAlias('@frontend/web/uploads/' . pathinfo($model->image, PATHINFO_FILENAME) . '_thumb2.' .
				pathinfo($model->image, PATHINFO_EXTENSION));

			$size = new \Imagine\Image\Box(150, 150);
			$size2 = new \Imagine\Image\Box(200, 200);
			$mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;

			//$model->image->saveAs($full);

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

		if ($model->load(Yii::$app->request->post())) {
			$image = $model->uploadImage();

			if ($model->save()) {
				if ($image !== false) {
					$path = $model->getImageFile();
					$image->saveAs($path);
					$this->saveThumb($model);
				}
				return $this->redirect(['view', 'id'=>$model->id]);
			}
		}
		return $this->render('create', [
			'model'=>$model,
		]);
	}


	public function actionUpdate($id)
	{
		$model = $this->findModel($id);
		$oldFile = $model->getImageFile();
		$oldImage = $model->image;

		if ($model->load(Yii::$app->request->post())) {
			$image = $model->uploadImage();

			if ($image === false) {
				$model->image = $oldImage;
			}

			if ($model->save()) {
				if ($image !== false && unlink($oldFile)) {
					$path = $model->getImageFile();
					$image->saveAs($path);
					$this->saveThumb($model);
				}
				return $this->redirect(['view', 'id'=>$model->id]);
			}
		}
		return $this->render('update', [
			'model'=>$model,
		]);
	}


	public function actionDelete($id)
	{
		$model = $this->findModel($id);

		if ($model->delete()) {
			if (!$model->deleteImage()) {
				Yii::$app->session->setFlash('error', 'Error deleting image');
			}
		}
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
