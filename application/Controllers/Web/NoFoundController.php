<?php
namespace App\Controllers\Web;

use App\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class NoFoundController extends BaseController {

	public function index(Request $request) {
		dd('404');
	}
}