<?php

class HomeController extends BaseController {

/**
* Layout yang akan digunakan untuk controller ini
*/
protected $layout = 'layouts.master';

public function dashboard()
{
$this->layout->content = View::make('dashboard.index')->withTitle('Dashboard');
}

	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }

}
