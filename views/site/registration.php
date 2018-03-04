<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Users;
use app\models\Groups;
use yii\helpers\ArrayHelper;

?>
<div class="row">

    <div class="col col-lg-4  col-lg-offset-4">



        <?php $form = ActiveForm::begin([
            'action'=>['site/registration'],
            'id'=>'register-form',
            'enableAjaxValidation' => true,
        ]); ?>
        <?= $form->field($model, 'groups')->dropDownList(
            ArrayHelper::map(Groups::find()->Where(['<>', 'name','admin'])->all(), 'id', 'name'));
        ?>
        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'middle_name') ?>
        <?= $form->field($model, 'last_name') ?>
        <?= $form->field($model, 'login') ?>
        <?= $form->field($model, 'password') ?>


        <div class="form-group">
            <?= Html::submitButton('Зарегистрировать', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>


    </div>

</div>