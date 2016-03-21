<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Contactos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $email
 * @property string $celular
 */
class Contactos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Contactos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'email', 'celular'], 'required'],
            [['nombre', 'email', 'celular'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'email' => 'Email',
            'celular' => 'Celular',
        ];
    }
}
