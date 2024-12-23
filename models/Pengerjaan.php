<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengerjaan".
 *
 * @property int $id_Pengerjaan
 * @property string|null $Tgl_Mulai
 * @property string|null $Tgl_Selesai
 * @property int $KARYAWAN_id_Karyawan
 *
 * @property Karyawan $kARYAWANIdKaryawan
 */
class Pengerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Pengerjaan', 'KARYAWAN_id_Karyawan'], 'required'],
            [['id_Pengerjaan', 'KARYAWAN_id_Karyawan'], 'integer'],
            [['Tgl_Mulai', 'Tgl_Selesai'], 'safe'],
            [['id_Pengerjaan'], 'unique'],
            [['KARYAWAN_id_Karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::className(), 'targetAttribute' => ['KARYAWAN_id_Karyawan' => 'id_Karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Pengerjaan' => 'Id Pengerjaan',
            'Tgl_Mulai' => 'Tgl Mulai',
            'Tgl_Selesai' => 'Tgl Selesai',
            'KARYAWAN_id_Karyawan' => 'Karyawan Id Karyawan',
        ];
    }

    /**
     * Gets query for [[KARYAWANIdKaryawan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKARYAWANIdKaryawan()
    {
        return $this->hasOne(Karyawan::className(), ['id_Karyawan' => 'KARYAWAN_id_Karyawan']);
    }
}
