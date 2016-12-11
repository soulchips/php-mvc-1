<?php

/**
* 
*/
class Main extends Controller
{
	public function index($name = '')
	{
		$this->view('main/index', ['name'=>$user->name]);
	}

	public function create($username='', $email='')
	{
		User::create([
			'username'=>$username,
			'email'=>$email
		]);
	}
}