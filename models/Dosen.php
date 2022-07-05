<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id
 * @property string $nama_dosen
 * @property string $nama_matkul
 * @property string $alamat
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama_dosen', 'nama_matkul', 'alamat'], 'required'],
            [['id'], 'integer'],
            [['nama_dosen', 'nama_matkul', 'alamat'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_dosen' => 'Nama Dosen',
            'nama_matkul' => 'Nama Matkul',
            'alamat' => 'Alamat',
        ];
    }
}
