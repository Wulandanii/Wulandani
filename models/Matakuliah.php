<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matakuliah".
 *
 * @property int $id
 * @property string $nama_matkul
 * @property string $sks
 * @property string $kode_matkul
 */
class Matakuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matakuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama_matkul', 'sks', 'kode_matkul'], 'required'],
            [['id'], 'integer'],
            [['nama_matkul', 'sks', 'kode_matkul'], 'string', 'max' => 20],
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
            'nama_matkul' => 'Nama Matkul',
            'sks' => 'Sks',
            'kode_matkul' => 'Kode Matkul',
        ];
    }
}
