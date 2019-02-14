<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\GamesTable|\Cake\ORM\Association\HasMany $Games
 * @property \App\Model\Table\MovesTable|\Cake\ORM\Association\HasMany $Moves
 * @property \App\Model\Table\TournamentMembershipsTable|\Cake\ORM\Association\HasMany $TournamentMemberships
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @property \App\Model\Table\GamesTable|\Cake\ORM\Association\HasMany $GamesWon
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Games', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('GamesWon', [
            'className' => 'Games',
            'foreignKey' => 'user_id',
            'conditions' => ['GamesWon.is_player_winner' => true]
        ]);
        $this->hasMany('Moves', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TournamentMemberships', [
            'foreignKey' => 'user_id'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email');

        $validator
            ->allowEmptyString('password');

        $validator
            ->boolean('is_active')
            ->allowEmptyString('is_active');

        $validator
            ->allowEmptyString('first_name');

        $validator
            ->allowEmptyString('last_name');

        $validator
            ->boolean('is_superuser')
            ->allowEmptyString('is_superuser');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
