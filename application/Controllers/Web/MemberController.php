<?php
namespace App\Controllers\Web;

use App\Controllers\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class MemberController extends BaseController {

	protected $web_user;
	
	protected function _run_action() {
		$auth = app('auth');
		$user = $auth->user();
		if ( !$user ) {
			// 没有登录跳转
			return new RedirectResponse('./');
		}

		$this->web_user = $user;

		return parent::_run_action();
	}
}