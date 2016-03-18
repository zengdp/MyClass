<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-news">
    <div class="header">
        <div class="container" >
            <img src="../../images/example-slide-1.jpg" style="width:100%; height: 150px;">
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="table-title"><h3>班级活动</h3></div>
                    <table cellspacing="0" cellpadding="0">
                        <?php foreach($posts as $post): ?>
                           <tr>
                               <td>
                                   <p class="news-title"><?=Html::a($post->title,['post','id'=>$post->id])?></p>
                               </td>
                               <td style=" float: right;margin-left: 120px; width:120px;  border: 1px solid #EFEFEF; text-align: center; vertical-align: middle;">
                                   <p class="date" style="line-height: 25px; position: relative; top: 5px;" ><?=($post->date)?></p>
                               </td>
                           </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="col-lg-5">
                    <div class="mv-title">
                        <h3>活动通告</h3>
                    </div>
                    <div class="notice">
                        <ul>
                            <li>1月15号开会</li>
                            <li>1月17号开会</li>
                            <li>2月29号开会</li>
                            <!--<li>This is first notice</li>
                            <li>This is first notice</li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row news-slide" >
                <div class="col-lg-7">
                    <div id="focus">
                        <ul>
                            <li><a href="javascript:void();"><img src="../../images/news-img/001.jpg" style="width:653px; height: 300px;"
                                                                  alt="图片1" /></a></li>
                            <li><a href="javascript:void();"><img src="../../images/news-img/002.jpg" alt="图片2"
                                    /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <embed src="http://player.youku.com/player.php/sid/XMTY1NjI0MjYw/v.swf" allowFullScreen="true" quality="high" width="450" height="300" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
                </div>
            </div>
        </div>
    </div>
</div>
