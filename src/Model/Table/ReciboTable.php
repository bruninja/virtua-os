<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recibo Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Servico
 * @property \Cake\ORM\Association\BelongsTo $Cliente
 *
 * @method \App\Model\Entity\Recibo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recibo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recibo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recibo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recibo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recibo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recibo findOrCreate($search, callable $callback = null)
 */
class ReciboTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('recibo');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Servico', [
            'foreignKey' => 'servico_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cliente', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->date('data')
            ->allowEmpty('data');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['servico_id'], 'Servico'));
        $rules->add($rules->existsIn(['cliente_id'], 'Cliente'));

        return $rules;
    }
}
