<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<a href="<?= Url::to(['feedback/index']) ?>">Показать форму обратной связи</a>

<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Имя</label>: <?= Html::encode($model->customer) ?></li>
    <li><label>Телефон</label>: <?= Html::encode($model->phone) ?></li>
</ul>