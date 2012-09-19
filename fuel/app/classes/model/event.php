<?php

class Model_Event extends \Orm\Model {
	
	public static $_table_name = 'events';
	
	public static $_properties = array(
		'id',
		'detail',
		'created_at',
		'updated_at'
	);

	protected static $_observers = array(
		'Orm\\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
			'property' => 'created',
		),
		'Orm\\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
			'property' => 'updated',
		),
	);


	public static function get_all()
	{
		return static::find('all');
	}

}