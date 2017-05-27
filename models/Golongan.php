<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "golongan".
 *
 * @property integer $id
 * @property string $kode_golongan
 * @property string $nama_golongan
 */
class Golongan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'golongan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_golongan', 'nama_golongan'], 'required'],
            [['kode_golongan'], 'string', 'max' => 7],
            [['nama_golongan'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_golongan' => 'Kode Golongan',
            'nama_golongan' => 'Nama Golongan',
        ];
    }
}
