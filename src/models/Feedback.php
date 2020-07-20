<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property string $customer
 * @property string $phone
 * @property int    $status
 * @property string $statusName
 */
class Feedback extends ActiveRecord
{
    private const STATUSES = [
        0 => 'На модерации',
        1 => 'Обработана',
        2 => 'Отклонена',
    ];

    public static function tableName()
    {
        return '{{feedbacks}}';
    }

    public function rules()
    {
        return [
            [['customer', 'phone'], 'required'],
            ['customer', 'string', 'min' => '2', 'max' => '50'],
            ['phone', 'match', 'pattern' => '/^\+\d\(\d{3}\)\d{3}-\d{2}-\d{2}$/i'],
            ['status', 'in', 'range' => array_keys(self::STATUSES)],
        ];
    }

    /**
     * Текст статуса заявки
     *
     * @return string
     */
    public function getStatusName()
    {
        return self::STATUSES[$this->status];
    }

    /**
     * Возвращает словарь статусов.
     *
     * @return string[]
     */
    public static function getStatuses()
    {
        return self::STATUSES;
    }
}
