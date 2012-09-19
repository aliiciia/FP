<?php

class Controller_Site extends Controller_Template
{

	public $nav_items = array(
		'/' => 'Home',
		'media' => 'Media',
		'instrumentals' => 'Instrumentals',
		'aboutus' => 'About Us',
		'contact' => 'Contact',
	);

	public function before()
	{

		Casset::css('main.css');
		Casset::css('demo.css');
		Casset::css('flexslider.css');
		Casset::css('lightbox.css');
		Casset::css('blitzerjquery-ui.css');

		Casset::js('jquery.simpleValidate.js');
		Casset::js('jquery.youtubepopup.min.js');
		Casset::js('jquery.flexslider.js');
		Casset::js('jquery.livetwitter.js');
		Casset::js('jquery-ui.min.js');
		Casset::js('jquery-ui-1.8.18.custom.min.js');
		Casset::js('jquery.smooth-scroll.min.js');
		Casset::js('lightbox.js');
		Casset::js('twitter.js');
		Casset::js('main.js');

		parent::before();
	}


	/**
	 *
	 */
	public function action_index()
	{
		$this->template->nav = View::forge('site/nav', array(
			'active' => '/', 'items' => $this->nav_items,
		));

		$this->template->content = View::forge('site/index', array('events' => Model_Event::get_all(),
		 ));
	}


	/**
	 *
	 */
	public function action_media()
	{
		$this->template->nav = View::forge('site/nav', array(
			'active' => 'media', 'items' => $this->nav_items,
		));

		$this->template->content = View::forge('site/media', array(
			'albums' => Model_Album::get_all(),
		));
	}
	

	/**
	 *
	 */
	public function action_instrumentals()
	{
		$this->template->nav = View::forge('site/nav', array(
			'active' => 'instrumentals', 'items' => $this->nav_items,
		));

		$this->template->content = View::forge('site/instrumentals');
	}


	/**
	 *
	 */
	public function action_aboutus()
	{
		$this->template->nav = View::forge('site/nav', array(
			'active' => 'aboutus', 'items' => $this->nav_items,
		));

		$this->template->content = View::forge('site/aboutus');
	}

    /**
	 *
	 */
	public function action_copy()
	{
		$this->template->nav = View::forge('site/nav', array(
			'items' => $this->nav_items,
		));

		$this->template->content = View::forge('site/copy');
	}


	/**
	 *
	 */
	public function action_contact()
	{
		if (Input::method() == 'POST')
		{
			$this->form_contact();
		}

		$this->template->nav = View::forge('site/nav', array(
			'active' => 'contact', 'items' => $this->nav_items,
		));

		$this->template->content = View::forge('site/contact');	
	}

	public function form_contact()
	{
		$post = (object) array(
			'name' => Input::post('name'), 
			'email' => Input::post('email'), 
			'comment' => Input::post('comment') 
		);

		$new_post = Model_Message::new_message($post->name, $post->email, $post->comment);

	}
}