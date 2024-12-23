<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "negosiasi".
 *
 * @property int $id_Negosiasi
 * @property string|null $Tgl_Menghubungi
 * @property string|null $Media_Hubung
 * @property int $CLIENT_id_Client
 * @property int $KARYAWAN_id_Karyawan
 *
 * @property Client $cLIENTIdClient
 * @property Karyawan $kARYAWANIdKaryawan
 */
class Negosiasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'negosiasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Negosiasi', 'CLIENT_id_Client', 'KARYAWAN_id_Karyawan'], 'required'],
            [['id_Negosiasi', 'CLIENT_id_Client', 'KARYAWAN_id_Karyawan'], 'integer'],
            [['Tgl_Menghubungi'], 'safe'],
            [['Media_Hubung'], 'string', 'max' => 45],
            [['id_Negosiasi'], 'unique'],
            [['CLIENT_id_Client'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['CLIENT_id_Client' => 'id_Client']],
            [['KARYAWAN_id_Karyawan'], 'exist', 'skipOnError' => true, 'targetClass' => Karyawan::className(), 'targetAttribute' => ['KARYAWAN_id_Karyawan' => 'id_Karyawan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Negosiasi' => 'Id Negosiasi',
            'Tgl_Menghubungi' => 'Tgl Menghubungi',
            'Media_Hubung' => 'Media Hubung',
            'CLIENT_id_Client' => 'Client Id Client',
            'KARYAWAN_id_Karyawan' => 'Karyawan Id Karyawan',
        ];
    }

    /**
     * Gets query for [[CLIENTIdClient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCLIENTIdClient()
    {
        return $this->hasOne(Client::className(), ['id_Client' => 'CLIENT_id_Client']);
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
