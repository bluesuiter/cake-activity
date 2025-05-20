<?php

App::uses('Model', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Member extends Model
{
    public $belongsTo = array('Role');
    public $actsAs = array('Acl' => array('type' => 'requester', 'enabled' => false));

    public function bindNode($member)
    {
        return array('model' => 'Role', 'foreign_key' => $member['Member']['role_id']);
    }


    public function parentNode()
    {
        if (!$this->id && empty($this->data)) {
            return null;
        }

        $data = $this->data;
        if (empty($this->data)) {
            $data = $this->read();
        }

        if (empty($data['Member']['role_id'])) {
            return null;
        } else {
            return array('Role' => array('id' => $data['Member']['role_id']));
        }
    }

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
