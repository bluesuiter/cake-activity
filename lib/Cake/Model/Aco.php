<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       Cake.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AclNode', 'Model');

/**
 * Access Control Object
 *
 * @package       Cake.Model
 */
class Aco extends AclNode
{

	/**
	 * Model name
	 *
	 * @var string
	 */
	public $name = 'Aco';

	/**
	 * Binds to ARO nodes through permissions settings
	 *
	 * @var array
	 */
	public $hasAndBelongsToMany = array('Aro' => array('with' => 'Permission'));
}
