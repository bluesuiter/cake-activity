<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('Member', 'Model');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $user = null;

    public $components = array(
        'Session',
        'Flash',
        'Auth' => array(
            'loginAction' => array('controller' => 'members', 'action' => 'login'),
            'loginRedirect' => array('controller' => 'members', 'action' => 'dashboard'),
            'logoutRedirect' => array('controller' => 'members', 'action' => 'login'),
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Member',
                    'passwordHasher' => array(
                        'className' => 'Simple',
                        'hashType' => 'sha256'
                    ),
                    'fields' => array('username' => 'email', 'password' => 'password')
                )
            ),
            'authError' => 'Please log in to access that page.'
        )
    );

    /**
     * handle beforeRender
     */
    public function beforeRender()
    {
        $this->set('member', $this->Auth->user());
    }
}
