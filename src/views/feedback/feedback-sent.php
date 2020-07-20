<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Имя</label>: <?= Html::encode($model->customer) ?></li>
    <li><label>Телефон</label>: <?= Html::encode($model->phone) ?></li>
</ul>

<a href="<?= Url::to(['admin-panel/index']) ?>">Показать список заявок</a>