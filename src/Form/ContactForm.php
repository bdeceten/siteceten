<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class ContactForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('firstName', 'string')
            ->addField('lastName', ['type' => 'string'])
            ->addField('email', ['type' => 'string'])
            ->addField('message', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('firstName', 'length', [
                'rule' => ['minLength', 2],
                'message' => 'Veuillez renseigner un prénom'
            ])->add('lastName', 'length', [
                'rule' => ['minLength', 2],
                'message' => 'Veuillez renseigner un nom'
            ])->add('email', 'format', [
                'rule' => 'email',
                'message' => 'Veuillez renseigner une adresse email valide',
            ]);
    }

    protected function _execute(array $data)
    {
        // Envoie un email.
        return true;
    }
}
