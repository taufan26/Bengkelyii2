<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string $nama
 * @property string $deskripsi
 * @property int $quantity
 * @property int $harga
 * @property int $stock
 * @property string $merek
 * @property string $model
 * @property string $kondisi_barang
 * @property string $image
 * @property string $create_at
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'deskripsi', 'quantity', 'harga', 'stock', 'merek', 'model', 'kondisi_barang', 'image'], 'required'],
            [['quantity', 'harga', 'stock'], 'integer'],
            [['create_at'], 'safe'],
            [['nama', 'deskripsi', 'image'], 'string', 'max' => 255],
            [['merek', 'kondisi_barang'], 'string', 'max' => 50],
            [['model'], 'string', 'max' => 100],
            [['image'],'file','extensions'=>'jpg,png,gif', 'skipOnEmpty'=>false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'quantity' => 'Quantity',
            'harga' => 'Harga',
            'stock' => 'Stock',
            'merek' => 'Merek',
            'model' => 'Model',
            'kondisi_barang' => 'Kondisi Barang',
            'image' => 'Image',
            'create_at' => 'Create At',
        ];
    }
}
