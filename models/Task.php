<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $created_by
 * @property string $created_at
 * @property string $due_date
 * @property int $assigned_to
 * @property string $submitted_at
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'created_by', 'due_date', 'assigned_to'], 'required'],
            [['created_by', 'assigned_to'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'due_date', 'submitted_at'], 'safe'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'due_date' => 'Due Date',
            'assigned_to' => 'Assigned To',
            'submitted_at' => 'Submitted At',
        ];
    }
}
