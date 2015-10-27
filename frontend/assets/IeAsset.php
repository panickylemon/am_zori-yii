<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class IeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/ie8.css',
    ];
    public $js = [

    ];

    public $cssOptions = ['condition' => 'lte IE8'];
    public $jsOptions = [
        'condition'=>'lt IE 9',
        'position' => \yii\web\View::POS_HEAD,
    ];
}

?>