<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class UiaccordAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'ui_accord/jquery-ui.css',
        'ui_accord/jquery-ui.theme.css',
    ];
    public $js = [
        'ui_accord/jquery-ui.js',
    ];



}

?>