<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Фамилия')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Имя')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Отчество')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Дата_рождения')->textInput() ?>

    <?= $form->field($model, 'Должность')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Зарплата')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Номер_телефона')->textInput() ?>

    <?= $form->field($model, 'Стаж')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Адрес')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
