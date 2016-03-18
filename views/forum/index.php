<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;



/* @var $this yii\web\View */
/* @var $searchModel app\models\ForumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Forums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forum-index">
    <div class="container" style="position: relative; top:70px;">

        <p>
            <?= Html::button('我要留言',['value'=>Url::to('../forum/create'),'class'=>'btn btn-success','id'=>'modalButton'])  ?>
        </p>

        <?php
        Modal::begin([
            'header'=>'<h4 style="text-align: center">我要留言</h4>',
            'id'=>'modal',
            'size'=>'modal-md',
        ]);

        echo "<div id='modalContent'></div>";

        Modal::end();
        ?>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
//            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

//                'id',
                'content:ntext',
                'name',
                'date',
//                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    </div>
</div>
