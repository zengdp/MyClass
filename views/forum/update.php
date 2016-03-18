<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Forum */

$this->title = 'Update Forum: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Forums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="forum-update">
    <div class="container" style="margin-top: 50px;">
        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
