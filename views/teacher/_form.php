<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form card shadow p-3">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= 
    $form->field($model,'gender')->dropDownList(array('Karachi'=>'Karachi'));
    // $form->field($model, 'city')->textInput(['maxlength' => true]) 
    ?>

    <?= 
    $form->field($model,'gender')->dropDownList(array('M'=>'Men','F'=>'Women'));
    // $form->field($model, 'gender')->textInput(['maxlength' => true]) 
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
