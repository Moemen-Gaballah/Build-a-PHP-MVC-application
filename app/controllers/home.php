<?php

class Home extends Controller
{
	protected $user;

	public function __construct(){
		$this->user = $this->model('User');
	}

	/**
	* The default controller method.
	*
	* @return void
	*/
	public function index($name = 'moemen', $mood = 'happy')
	{
		// $user = $this->model('User'); // construct do it.
		$user = $this->user;
		$user->name = $name;
		// echo $user->name . ' '. $mood;
		$this->view('home/index', [
			'name' => $user->name,
			'mood' => $mood,
		]);

		User::find(1)->username;
	}

	public function create($username = '', $email = '', $password = '')
	{
		// User::create([ // if comment for construct use this 
		$this->user->create([
			'username' => $username,
			'email' => $email,
			'password' => $password,
		]);
	}
}