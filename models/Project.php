<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id_Project
 * @property string|null $Jenis_Project
 * @property string|null $Nama_Client
 * @property string|null $Tgl_Masuk
 * @property string|null $Harga
 * @property int $CLIENT_id_Client
 * @property int $KARYAWAN_id_Karyawan
 *
 * @property Client $cLIENTIdClient
 * @property Karyawan $kARYAWANIdKaryawan
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Project', 'CLIENT_id_Client', 'KARYAWAN_id_Karyawan'], 'required'],
            [['id_Project', 'CLIENT_id_Client', 'KARYAWAN_id_Karyawan'], 'integer'],
            [['Tgl_Masuk'], 'safe'],
            [['Jenis_Project', 'Nama_Client', 'Harga'], 'string', 'max' => 45],
            [['id_Project'], 'unique'],
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
            'id_Project' => 'Id Project',
            'Jenis_Project' => 'Jenis Project',
            'Nama_Client' => 'Nama Client',
            'Tgl_Masuk' => 'Tgl Masuk',
            'Harga' => 'Harga',
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
