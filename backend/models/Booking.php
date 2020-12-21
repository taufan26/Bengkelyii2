<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property string $tanggal
 * @property string $service_name
 * @property string $jam
 * @property string $create_at
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'tanggal', 'service_name', 'jam'], 'required'],
            [['tanggal', 'create_at', 'status'], 'safe'],
            [['nama', 'email', 'service_name', 'jam'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 50],
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
            'email' => 'Email',
            'tanggal' => 'Tanggal',
            'service_name' => 'Service Name',
            'jam' => 'Jam',
            'status' => 'Status',
            'create_at' => 'Create At',
        ];
    }

    public function getTanggal()
    {
        if ($this->tanggal != '') {
            return date('d-m-Y', strtotime($this->tanggal));
        }
    }

    public function setTanggal($value)
    {
        $this->tanggal = Date('Y-m-d', strtotime($value));
    }
}
