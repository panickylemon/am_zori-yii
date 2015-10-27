<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class RespondAsset extends AssetBundle
{
    public $sourcePath = '@bower/respond/dest';
    public $js = [
        'respond.min.js',
    ];
    public $jsOptions = [
        'condition'=>'lt IE 9',
        'position' => \yii\web\View::POS_HEAD,
    ];
}

?>