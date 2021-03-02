<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parts".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $full_name
 * @property int|null $quantity
 */
class Parts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity'], 'integer'],
            [['name', 'full_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'full_name' => 'Full Name',
            'quantity' => 'Quantity',
        ];
    }
}
