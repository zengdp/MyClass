<?php
use yii\helpers\Html;

$this->title = $post->title;
?>
<div class="site-post">
    <div class="container" style="position:relative; top:70px;">
        <article class="post">
            <h1 class="post-title" style="text-align:center ;"><?=$post->title?></h1>
            <p><?=$post->date?></p>
            <section class="post-content">
                <?=\yii\helpers\Markdown::process($post->content)?>
            </section>
        </article>
    </div>
</div>
