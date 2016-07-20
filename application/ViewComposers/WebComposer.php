<?php
namespace App\ViewComposers;

// 视图
use Illuminate\Contracts\View\View;

class WebComposer
{
	public function __construct () {

	}

	public function compose(View $view)
	{
		// 前台基本配置信息
		$this->WebBase($view);

		// 前台菜单等
		$this->WebNav($view);

		// 前台会员
		$this->User($view);

	}

	protected function User($view) 
	{
		$auth = app('auth');
		$user = $auth->user();
		$view->with('web_user', $user);
	}

	/**
	 * 配置前台基本的配置,例如标题等
	 * @author Young <ybys@qq.com>
	 * @date   2016-03-22T16:40:06+0800
	 * @param  [type]                   $view [description]
	 */
	protected function WebBase($view) {
		//$view->with('web_config', app('WebConfig'));
	}

	protected function WebNav($view) 
	{
		//$view->with('web_nav', app(ArticleCategoryRepository::class)->getTree(0, 'child', true));
	}
}