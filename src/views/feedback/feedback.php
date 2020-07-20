<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use \yii\widgets\MaskedInput;
?>

<a href="<?= Url::to(['admin-panel/index']) ?>">Показать список заявок</a>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'customer')->label('Как к Вам обращаться?') ?>
<?= $form->field($model, 'phone')
         ->label('На какой номер Вам позвонить?')
         ->widget(MaskedInput::class, ['mask' => '+9(999)999-99-99']) ?>

    <div class="form-group">
        <?= Html::submitButton('Запросить обратную связь', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>