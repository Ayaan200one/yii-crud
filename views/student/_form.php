<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form card shadow p-3">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
        <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
        <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
   
    <?= $form->field($model, 'fathername')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-6">
        <?= $form->field($model, 'grade')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-6">
        <?= $form->field($model, 'section')->textInput(['maxlength' => true]) ?>
        </div>
    </div>




    <?= $form->field($model, 'age')->textInput() ?> 

    <?= $form->field($model, 'contactno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
