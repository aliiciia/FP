<?php

class Model_Album extends \Orm\Model {
	
	public static $_table_name = 'albums';
	
	public static $_properties = array(
		'id',
		'title',
		'description',
		'created_at',
		'updated_at'
	);
	

	protected static $_has_many = array(
		'photos' => array(
			'key_from' => 'id',
			'model_to' => 'Model_Photo',
			'key_to' => 'album_id',
			'cascade_save' => true,
			'cascade_delete' => false,
		)
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


	public function total_images()
	{
		return count($this->photos);
	}
}