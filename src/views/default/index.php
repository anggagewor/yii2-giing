<?php

/* @var $this \yii\web\View */

use yii\bootstrap\Html;

/* @var $generators \anggagewor\giing\Generator[] */
/* @var $content string */

$generators  = Yii::$app->controller->module->generators;
$this->title = 'Welcome to Gii';
?>
<div class="default-index">
    <h1 class="border-bottom pb-3 mb-3">Welcome to Gii
        <small class="text-muted">a magical tool that can write code for you</small>
    </h1>

    <p class="lead mb-5">Start the fun with the following code generators:</p>

    <div class="row">
        <?php foreach ( $generators as $id => $generator ): ?>
            <div class="generator col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <?= Html::encode($generator->getName()) ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $generator->getDescription() ?></p>
                        <?= Html::a('Start &raquo;', [ 'default/view', 'id' => $id ],
                            [ 'class' => [ 'btn', 'btn-primary' ] ]
                        ) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <p><a class="btn btn-success" href="http://www.yiiframework.com/extensions/?tag=gii">Get More Generators</a></p>

</div>
