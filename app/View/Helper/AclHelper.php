<?php
App::uses('AppHelper', 'View/Helper');

class AclHelper extends AppHelper
{
    public $helpers = array('Session');

    public function check($aco)
    {
        App::uses('AclComponent', 'Controller/Component');
        $collection = new ComponentCollection();
        $Acl = new AclComponent($collection);
        $user = $this->Session->read('Auth.User');
        pr($user);
        return $Acl->check(array('model' => 'Member', 'foreign_key' => $user['id']), $aco);
    }
}
