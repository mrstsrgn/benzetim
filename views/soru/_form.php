<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\admin\models\soru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'soru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
