<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class RangeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'range/normalize.css',
        'range/ion.rangeSlider.css',
        'range/ion.rangeSlider.skinNice.css',
    ];
    public $js = [
        'range/ion.rangeSlider.js',
    ];

    //public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

}

?>