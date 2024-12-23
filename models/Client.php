<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id_Client
 * @property string|null $Nama_Client
 * @property string|null $Alamat_Client
 * @property int|null $No_Hp_Client
 *
 * @property Negosiasi[] $negosiasis
 * @property Project[] $projects
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Client'], 'required'],
            [['id_Client', 'No_Hp_Client'], 'integer'],
            [['Nama_Client', 'Alamat_Client'], 'string', 'max' => 45],
            [['id_Client'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Client' => 'Id Client',
            'Nama_Client' => 'Nama Client',
            'Alamat_Client' => 'Alamat Client',
            'No_Hp_Client' => 'No Hp Client',
        ];
    }

    /**
     * Gets query for [[Negosiasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNegosiasis()
    {
        return $this->hasMany(Negosiasi::className(), ['CLIENT_id_Client' => 'id_Client']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['CLIENT_id_Client' => 'id_Client']);
    }
}
