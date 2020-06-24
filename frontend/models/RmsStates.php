<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rms_states".
 *
 * @property int $rms_state_id
 * @property string $rms_state_name
 * @property string $rms_createdate
 * @property string $state_status
 * @property int $State_added_by
 */
class RmsStates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rms_states';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rms_state_name', 'State_added_by'], 'required'],
            [['rms_createdate'], 'safe'],
            [['state_status'], 'string'],
            [['State_added_by'], 'integer'],
            [['rms_state_name'], 'string', 'max' => 50],
            [['rms_state_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rms_state_id' => 'State ID',
            'rms_state_name' => 'State Name',
            'rms_createdate' => 'Createdate',
            'state_status' => 'Status',
            'State_added_by' => 'Added By',
        ];
    }
}
