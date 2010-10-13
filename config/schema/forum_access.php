<?php
/**
 * Forum: A CakePHP Plugin
 *
 * @author		Miles Johnson - http://milesj.me
 * @copyright	Copyright 2006-2010, Miles Johnson, Inc.
 * @license		http://opensource.org/licenses/mit-license.php - Licensed under The MIT License
 * @link		http://milesj.me/resources/script/forum-plugin
 */

class ForumAccessSchema extends CakeSchema {

	/**
	 * Schema name.
	 *
	 * @access public
	 * @var string
	 */
	public $name = 'ForumAccess';

	/**
	 * Table schema.
	 *
	 * @access public
	 * @var array
	 */
	public $forum_access = array(
		'id' => array(
			'type' => 'integer',
			'length' => 10,
			'null' => false,
			'key' => 'primary'
		),
		'access_level_id' => array(
			'type' => 'integer',
			'length' => 10,
			'null' => false
		),
		'user_id' => array(
			'type' => 'integer',
			'length' => 10,
			'null' => false
		),
		'created' => array(
			'type' => 'datetime',
			'null' => true,
			'default' => null
		),
		'modified' => array(
			'type' => 'datetime',
			'null' => true,
			'default' => null
		),
		'indexes' => array(
			'PRIMARY' => array(
				'column' => 'id',
				'unique' => true
			),
			'user_id' => array(
				'column' => 'user_id',
				'unique' => false
			),
			'access_level_id' => array(
				'column' => 'access_level_id',
				'unique' => false
			)
		)
	);
	
}