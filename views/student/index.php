<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap4\Modal;
use yii\widgets\ActiveForm;

// use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentSearch */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="student-index">

    <div class="row">
        <div class="col-md-8">
            <!-- <h1><?= Html::encode($this->title) ?></h1> -->
            <h1>Student List</h1>
        </div>
        <div class="col-md-4">
        <?php
        // Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) 
        Modal::begin([
            'title' => '<h5>Add Student</h5>',
            'toggleButton' => ['label' => 'Add new', ['class' => 'btn btn-success']],
            'size'=>'modal-lg',
            'class'=>'btn showModalButton',
        ]);
        
        // echo 'Say hello...';
        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
        ]) ?>
    <form>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <?= $form->field($searchModel, 'firstname') ?>
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                    <?= $form->field($searchModel, 'lastname') ?>
                </div>
            </div>
        </div>

        <div class="form-group">
                    <?= $form->field($searchModel, 'fathername') ?>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <?= $form->field($searchModel, 'grade') ?>
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                    <?= $form->field($searchModel, 'section') ?>
                </div>
            </div>
        </div>
          <div class="form-group">
                    <?= $form->field($searchModel, 'address') ?>
        </div>  

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <?= $form->field($searchModel, 'contactno') ?>
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                    <?= $form->field($searchModel, 'age') ?>
                </div>
            </div>
        </div>

        <div class="form-group">
                    <?= $form->field($searchModel, 'city') ?>
        </div>  

            <div class="form-group">
                <?= Html::submitButton('Add', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

      

        <?php ActiveForm::end() ?>

        <?php
            Modal::end();
            ?>
        </div>
    </div>

    <p>
      
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card shadow p-3">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'firstname',
            'lastname',
            'fathername',
            'grade',
            //'section',
            //'age',
            //'rollno',
            //'contactno',
            //'address',
            //'city',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
    </div>


</div>