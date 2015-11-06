<?php
namespace frontend\controllers;


use Yii;
use yii\web\Controller;
use common\models\District;


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
		$price = $request->get('price');
		$size = $request->get('size');

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

		$prices = Array(100, 7000);
		if (isset($price) && preg_match("/^\d+;\d+$/", $price)) {
			$prices = explode(";", $price);
			$query->andWhere(['>=', 'price', $prices[0]]);
			$query->andWhere(['<=', 'price', $prices[1]]);
		}

		$sizes = Array(4, 26);
		if (isset($size ) && preg_match("/^\d+;\d+$/", $size)) {
			$sizes = explode(";", $size);
			$query->andWhere(['>=', 'size', $sizes[0]]);
			$query->andWhere(['<=', 'size', $sizes[1]]);
		}

		$districts = $query->orderBy('price')->all();

		return $this->render('selection', [
			'districts' => $districts,
			'status'=>$status,
			'house'=>$house,
			'village'=>$village,
			'ready'=>$ready,
			'prices'=>$prices,
			'sizes'=>$sizes
		]);

	}

}
