<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id_Karyawan
 * @property string|null $Nama_Karyawan
 * @property string|null $Alamat
 * @property string|null $Posisi
 *
 * @property Negosiasi[] $negosiasis
 * @property Pengerjaan[] $pengerjaans
 * @property Project[] $projects
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Karyawan'], 'required'],
            [['id_Karyawan'], 'integer'],
            [['Nama_Karyawan', 'Alamat', 'Posisi'], 'string', 'max' => 45],
            [['id_Karyawan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Karyawan' => 'Id Karyawan',
            'Nama_Karyawan' => 'Nama Karyawan',
            'Alamat' => 'Alamat',
            'Posisi' => 'Posisi',
        ];
    }

    /**
     * Gets query for [[Negosiasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNegosiasis()
    {
        return $this->hasMany(Negosiasi::className(), ['KARYAWAN_id_Karyawan' => 'id_Karyawan']);
    }

    /**
     * Gets query for [[Pengerjaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengerjaans()
    {
        return $this->hasMany(Pengerjaan::className(), ['KARYAWAN_id_Karyawan' => 'id_Karyawan']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['KARYAWAN_id_Karyawan' => 'id_Karyawan']);
    }
}
