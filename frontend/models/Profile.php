<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $nama_lengkap
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $note
 * @property string $img_profile
 * @property string $create_at
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'nama_lengkap', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'note', 'img_profile'], 'required'],
            [['username', 'email','tanggal_lahir', 'create_at'], 'safe'],
            [['note'], 'string'],
            [['username', 'email', 'nama_lengkap', 'jenis_kelamin', 'alamat'], 'string', 'max' => 100],
            [['img_profile'], 'string', 'max' => 255],
            [['img_profile'],'file','extensions'=>'jpg,png,gif', 'skipOnEmpty'=>false],
        ];
    }
 
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'nama_lengkap' => 'Nama Lengkap',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'note' => 'Note',
            'img_profile' => 'Img Profile',
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
