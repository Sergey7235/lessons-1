<?php 
class User{
	public $name = '';
	public $login = '';
	public $password = '';
	protected $auth = false;
	public $test = 'test';

	public function __construct($login, $password, $name)
	{
		$this->login = $login;
		$this->password = $password;
		$this->name = $name;
	}


	public function auth($login, $password)
	{
		if($login == $this->login && $password == $this->password) {
			$this->auth = true;
			echo "Вы успешно прошли авторизацию";
		}

		else {
			echo "Введен неправильный логин или пароль";
		}
	}
}

class Rabotaga extends User{
	public $sallary;

	public function __construct($login, $password, $name, $sallary) {
		parent::__construct($login, $password, $name);
		$this->sallary = $sallary;
	}	

	public function getSallary()
	{
		echo "Вы получили свою зарплату {$this->sallary}р";
	}
}

class Admin extends Rabotaga{
	public function changeTitle($title)
	{
		echo "Заголовок статьи изменен на $title";
	}

	public function showStatus()
	{
		var_dump($this->auth);
	}
}

$user = new Admin('test', 'test', 'test', 12000);

$user->showStatus();











 ?>