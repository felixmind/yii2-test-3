<?php

use app\models\Feedback;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use \yii\widgets\MaskedInput;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'id')->hiddenInput()->label(false) ?>
<?= $form->field($model, 'customer')->label('Имя') ?>
<?= $form->field($model, 'phone')
         ->label('Телефон')
         ->widget(MaskedInput::class, ['mask' => '+9(999)999-99-99']) ?>
<?= $form->field($model, 'status')->label('Статус')->dropDownList(Feedback::getStatuses()) ?>

<div class="form-group">
    <?= Html::submitButton('Сохранить изменения', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<a href="<?= Url::to(['admin-panel/index']) ?>">Вернуться к списку заявок</a>