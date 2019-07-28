<?php

namespace yii\materialdashboard\web;

use yii\bootstrap4\BootstrapAsset;
use yii\web\JqueryAsset;
use yii\web\YiiAsset;

/**
 * MaterialDashboard asset
 */
class MaterialDashboardAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/tommyknocker/yii2-material-dashboard/assets';

    public $css = [
        'css/material-dashboard.css',
    ];

    public $js = [
        'js/popper.min.js',
        'js/bootstrap-material-design.min.js',
        'js/material-dashboard.js',
    ];

    public $depends = [
        YiiAsset::class,
        JqueryAsset::class,
        \yii\materialicons\AssetBundle::class
    ];
}