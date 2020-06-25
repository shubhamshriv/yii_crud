<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rms_district".
 *
 * @property int $district_id
 * @property string $district_name
 * @property int $state_id
 * @property int $district_added_by
 * @property string $district_status
 * @property string $created_date
 *
 * @property RmsStates $state
 */
class RmsDistrict extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rms_district';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['district_name', 'state_id', 'district_added_by', 'created_date'], 'required'],
            [[ 'district_added_by'], 'integer'],
            [['district_status'], 'string'],
            [['created_date','state_id'], 'safe'],
            [['district_name'], 'string', 'max' => 50],
            [['district_name'], 'unique'],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => RmsStates::className(), 'targetAttribute' => ['state_id' => 'rms_state_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'district_id' => 'District ID',
            'district_name' => 'District Name',
            'state_id' => 'State ID',
            'district_added_by' => 'District Added By',
            'district_status' => 'District Status',
            'created_date' => 'Created Date',
        ];
    }

    /**
     * Gets query for [[State]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(RmsStates::className(), ['rms_state_id' => 'state_id']);
    }
}
