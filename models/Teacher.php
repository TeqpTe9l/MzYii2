<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Mzteacher".
 *
 * @property int $id
 * @property string $Фамилия
 * @property string $Имя
 * @property string $Отчество
 * @property string $Дата_рождения
 * @property string $Должность
 * @property float $Зарплата
 * @property int $Номер_телефона
 * @property string $Стаж
 * @property string $Адрес
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Mzteacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Фамилия', 'Имя', 'Отчество', 'Дата_рождения', 'Должность', 'Зарплата', 'Номер_телефона', 'Стаж', 'Адрес'], 'required'],
            [['Дата_рождения'], 'safe'],
            [['Зарплата'], 'number'],
            [['Номер_телефона'], 'integer'],
            [['Фамилия', 'Имя', 'Отчество', 'Должность', 'Стаж', 'Адрес'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Фамилия' => 'Фамилия',
            'Имя' => 'Имя',
            'Отчество' => 'Отчество',
            'Дата_рождения' => 'Дата Рождения',
            'Должность' => 'Должность',
            'Зарплата' => 'Зарплата',
            'Номер_телефона' => 'Номер Телефона',
            'Стаж' => 'Стаж',
            'Адрес' => 'Адрес',
        ];
    }
}
