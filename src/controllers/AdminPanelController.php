<?php

namespace app\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use app\models\Feedback;
use app\models\FeedbackSearch;

class AdminPanelController extends Controller
{
    /**
     * Отображение страницы с таблицей заявок на обратную связь.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FeedbackSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->get());
        $dataProvider->setPagination([
            'pageSize' => 1,
        ]);

        return $this->render('feedback', [
            'dataProvider' => $dataProvider,
            'searchModel'  => $searchModel,
        ]);
    }

    /**
     * Отображение страницы для обработки заявки.
     *
     * @return string|Response
     * @throws NotFoundHttpException
     */
    public function actionUpdate()
    {
        $id = Yii::$app->request->get('id');

        if (!$model = Feedback::findOne($id)) {
            throw new NotFoundHttpException();
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();

            return $this->redirect(Url::to(['admin-panel/index']));
        }

        return $this->render('feedback-edit', ['model' => $model]);
    }
}
