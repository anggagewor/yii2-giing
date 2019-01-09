<?php


namespace anggagewor\giing;

use yii\web\AssetBundle;

class GiiAsset extends AssetBundle
{
    public $sourcePath = '@yii/gii/assets';
    public $css        = [
        'css/main.css',
    ];
    public $js         = [
        'js/bs4-native.min.js',
        'js/gii.js',
    ];
    public $depends    = [
        'yii\web\YiiAsset'
    ];
}
