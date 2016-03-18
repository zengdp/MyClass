<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = '新建文章';
$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-create">
    <div class="container" style="margin-top: 80px;">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
