<?php
use yii\helpers\Html;
use yii\materialdashboard\web\MaterialDashboardAsset;
use yii\web\View;

/* @var $this View */
/* @var $content string */

MaterialDashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700&display=swap"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div class="wrapper">
            <?= $this->render('left') ?>
            <div class="main-panel">
                <?= $this->render('header', ['title' => $this->title]) ?>
                <?= $this->render('content', ['content' => $content]) ?>
                <?= $this->render('footer') ?>
            </div>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>