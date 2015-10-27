<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class TabAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/easy-responsive-tabs.css',
        'gallery/css/style.css',
        'gallery/css/elastislide.css',
        'css/village.css',
    ];
    public $js = [
        'js/easyResponsiveTabs.js',
        'gallery/js/jquery.tmpl.min.js',
        'gallery/js/jquery.easing.1.3.js',
        'gallery/js/jquery.elastislide.js',
        'gallery/js/gallery.js',
        'js/jquery.corner.js',
        'js/review_form.js',
        'js/IEfix.js',
    ];



}

?>