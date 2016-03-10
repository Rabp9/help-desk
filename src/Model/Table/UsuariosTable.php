<?php
namespace App\Model\Table;

use App\Model\Entity\Usuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 */
class UsuariosTable extends Table
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

        $this->table('usuarios');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('nombres', 'create')
            ->notEmpty('nombres');

        $validator
            ->requirePresence('apellido_paterno', 'create')
            ->notEmpty('apellido_paterno');

        $validator
            ->requirePresence('apellido_materno', 'create')
            ->notEmpty('apellido_materno');

        $validator
            ->date('fecha_nac')
            ->allowEmpty('fecha_nac');

        $validator
            ->allowEmpty('estado');

        return $validator;
    }
}
