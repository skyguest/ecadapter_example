<?php
namespace App\Controllers\Web;

use App\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends MemberController {

	public function index(Request $request) {
		dd($this->web_user);
	}
}