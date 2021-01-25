<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "promo".
 *
 * @property int $id
 * @property string $nama
 * @property string $img
 * @property string $create_at
 */
class Promo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'promo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'img'], 'required'],
            [['create_at'], 'safe'],
            [['nama'], 'string', 'max' => 255],
            [['img'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'img' => 'Img',
            'create_at' => 'Create At',
        ];
    }
}
