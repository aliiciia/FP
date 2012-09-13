<?php

 class Model_Message extends \Orm\Model{
	
	public static $_table_name = 'messages';
	
	public static $_properties = array(
		'id', 
		'name', 
		'email', 
		'comment',
		'created_at'
	);
	
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
			'property' => 'created_at'
		),
	);

	

	public static function new_message($name, $email, $comment)
	{
		$post = static::forge(array(
			'name'    => $name,
			'email'   => $email,
			'comment' => $comment
		));

		$post->save();
		
		return $post;
	}
}