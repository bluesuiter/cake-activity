<?php

App::uses('Model', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Member extends Model
{
    /**
     * encrypt password before save
     */
    public function beforeSave($options = array())
    {
        if (!empty($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }
}
