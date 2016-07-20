<?php
namespace App\ViewComposers;

// 视图
use Illuminate\Contracts\View\View;

class AdminComposer
{
	public function __construct () {

	}

	public function compose(View $view)
	{
		// 后台管理员
		$this->AdminUser($view);
	}

	protected function AdminUser($view) 
	{
		$view->with('admin', session('admin'));
	}

}