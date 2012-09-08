<?php

class Controller_Site extends Controller_Template
{

	public function before()
	{
		Casset::js('jquery.flexslider.js');
		Casset::js('jquery.livetwitter.js');
		Casset::js('main.js');
		
		Casset::css('main.css');
		Casset::css('demo.css');
		Casset::css('flexslider.css');

		parent::before();
	}



	public function action_index()
	{
		$this->template->content = View::forge('site/index');
	}

	public function action_media()
	{
		$this->template->content = View::forge('site/media');
	}
    
    public function action_instrumentals()
    {
    	$this->template->content = View::forge('site/instrumentals');
    }

    public function action_aboutus()
    {
    	$this->template->content = View::forge('site/aboutus');
    }

    public function action_contact()
    {
    	Casset::js('jquery.youtubepopup.min.js');
    	$this->template->content = View::forge('site/contact');	
    }
}