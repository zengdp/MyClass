<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Forum */

$this->title = '我要留言';
$this->params['breadcrumbs'][] = ['label' => 'Forums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forum-create">
    <div class="container" style="width:80%;">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
