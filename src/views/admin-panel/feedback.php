<?php

use app\models\Feedback;
use yii\grid\ActionColumn;
use yii\grid\GridView;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns'      => [
        'customer',
        'phone',
        [
            'attribute' => 'status',
            'value' => function ($data) {
                return $data->statusName;
            },
            'filter' => Feedback::getStatuses(),
        ],
        [
            'class' => ActionColumn::class,
            'template' => '{update}',
        ]
    ],
]); ?>