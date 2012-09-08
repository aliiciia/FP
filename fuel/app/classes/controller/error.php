<?php

class Controller_Error extends Controller
{
	public function action_404()
	{
		return Response::forge(View::forge('error/404'), 404);
	}
}