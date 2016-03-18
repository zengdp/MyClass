<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '卓越2012',
        'brandUrl' => Yii::$app->homeUrl.'/site/index',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);


    $navItems=[

    ];
    if (Yii::$app->user->isGuest) {
        array_push($navItems,
            ['label' => '主页', 'url' => ['/site/index']],
            ['label' => '关于', 'url' => ['/site/about']],
            ['label' => '活动', 'url' => ['/site/news']],
//            ['label' => '联系', 'url' => ['/site/contact']],
            ['label' => 'BBS', 'url' => ['/forum/index']],
            ['label' => '登录', 'url' => ['/user/login']]);
    } else {
        array_push($navItems,
            /*['label' => '主页', 'url' => ['/site/index']],
            ['label' => '验证用户', 'url' => ['/user/confirm']],
            ['label' => '删除用户', 'url' => ['/user/delete']],
            ['label' => '修改密码', 'url' => ['/user/password']],*/
            ['label' => '新闻', 'url' => ['/news/index']],
//            ['label' => '论坛', 'url' => ['/forum/index']],
            ['label' => '设置', 'url' => ['/user/settings/account']],
                ['label' => '退出 (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/user/security/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ]
            );
    }
    echo Nav::widget([
        'options' => ['class' => 'nav-color navbar-nav navbar-right'],
        'items' => $navItems,
    ]);
    NavBar::end();
    ?>

    <div>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left"><a href="#" target="_blank">交大首页 </a>&nbsp;&nbsp; <a href="#" target="_blank"> 学院首页 </a> &nbsp;&nbsp;<a href="#" target="_blank"> 卓越2011</a></p>
        <p class="pull-right"><a href="javascript:void();">技术支持：卓越2012</a> </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
