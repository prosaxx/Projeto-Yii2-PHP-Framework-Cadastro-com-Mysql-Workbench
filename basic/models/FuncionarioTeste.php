<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $id
 * @property string|null $cpf
 * @property string|null $nome
 * @property string|null $datanascimento
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cpf'],'required'],
            [['datanascimento'], 'safe'],
            [['cpf'], 'string', 'max' => 11],
            [['nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'id' => Yii::t('app', 'ID'),
            'cpf' => Yii::t('app', 'Cpf'),
            'nome' => Yii::t('app', 'Nome'),
            'datanascimento' => Yii::t('app', 'Data de nascimento'),

        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\FuncionarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\FuncionarioQuery(get_called_class());
    }
}
