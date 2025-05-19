<?php

App::uses('AppController', 'Controller');
App::uses('Member', 'Model');

class MembersController extends AppController
{
    /**
     * 
     */
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow(['login', 'register']);
    }

    /**
     * dashboard handler
     */
    public function dashboard() {}

    /**
     * method for handling login requests
     */
    public function login()
    {
        if ($this->Auth->login() && $this->request->is('get')) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        try {
            if ($this->request->is('post')) {
                if ($this->Auth->login()) {
                    return $this->redirect($this->Auth->redirectUrl());
                }

                $this->Flash->error(
                    __('E-Mail or password is incorrect')
                );
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * method for handling logout requests
     */
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * method for handling registration requests
     */
    public function register()
    {
        if ($this->request->is('post')) {
            if ($this->Member->save($this->request->data)) {
                $id = $this->Member->id;
                $this->request->data['Member'] = array_merge(
                    $this->request->data['Member'],
                    array('id' => $id)
                );

                unset($this->request->data['Member']['password']);
                $this->Auth->login($this->request->data['Member']);
                return $this->redirect('/dashboard');
            }
        }
    }

    /**
     * special page one handler
     */
    public function specialPageOne() {}

    /**
     * special page two handler
     */
    public function specialPageTwo() {}
}
