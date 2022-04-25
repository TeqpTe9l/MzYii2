<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Mzstud".
 *
 * @property int $id
 * @property string $Фамилия
 * @property string $Имя
 * @property string $Отчество
 * @property string $Дата_рождения
 * @property string $Адрес
 * @property int $Номер_телефона
 * @property string $Класс
 * @property float $Балл_учащегося
 * @property string $Срок_обучения
 */
class Stud extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Mzstud';
    }

    /**
     * {@inheritdoc}
     */
    
    public function rules()
    {
        return [
            [['Фамилия', 'Имя', 'Отчество', 'Дата_рождения', 'Адрес', 'Номер_телефона', 'Класс', 'Балл_учащегося', 'Срок_обучения'], 'required'],
            [['Дата_рождения'], 'safe'],
            [['Номер_телефона'], 'integer'],
            [['Балл_учащегося'], 'number'],
            [['Фамилия', 'Имя', 'Отчество', 'Адрес', 'Класс'], 'string', 'max' => 30],
            [['Срок_обучения'], 'string', 'max' => 60],
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
            'Адрес' => 'Адрес',
            'Номер_телефона' => 'Номер Телефона',
            'Класс' => 'Класс',
            'Балл_учащегося' => 'Балл Учащегося',
            'Срок_обучения' => 'Срок Обучения',
        ];
    }
}
