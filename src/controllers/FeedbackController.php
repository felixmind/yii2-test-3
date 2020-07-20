<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Feedback;

class FeedbackController extends Controller
{
    /**
     * Обработчик формы обратной связи.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Feedback();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();

            return $this->render('feedback-sent', ['model' => $model]);
        }

        return $this->render('feedback', ['model' => $model]);
    }
}
