<?php

namespace yii\materialdashboard\web;

/**
 * MaterialDashboard asset
 */
class MaterialDashboardAsset extends AssetBundle
{
    public $sourcePath = '@vendor/tommyknocker/yii2-material-dashboard/assets';

    public $css = [
        'css/material-dashboard.min.css',
    ];

    public $js = [
        'js/bootstrap-material-design.min.js',
        'js/material-dashboard.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\materialicons\AssetBundle'
    ];
}