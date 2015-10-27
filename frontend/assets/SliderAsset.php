<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class SliderAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'bx-slider/jquery.bxslider.css',
    ];
    public $js = [
        'bx-slider/jquery.bxslider.min.js',
    ];

    //public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

}

?>