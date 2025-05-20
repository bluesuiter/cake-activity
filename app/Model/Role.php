<?php

App::uses('Model', 'Model');

class Role extends Model
{
    var $actsAs = array('Acl' => array('type' => 'requester'));

    public $hasMany = array('Member');

    function parentNode()
    {
        return null;
    }
}
