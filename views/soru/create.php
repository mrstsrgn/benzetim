<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\soru */

$this->title = 'Create Soru';
$this->params['breadcrumbs'][] = ['label' => 'Sorus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
