<?php

 class Model_Photo extends \Orm\Model{
	
	public static $_table_name = 'photos';
	
	public static $_properties = array(
		'id',
		'album_id',
		'path',
		'title',
		'created_at',
		'updated_at',
	);
	

	protected static $_belongs_to = array(
		'album' => array(
			'key_from' => 'album_id',
			'model_to' => 'Model_Album',
			'key_to' => 'id',
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
	



}