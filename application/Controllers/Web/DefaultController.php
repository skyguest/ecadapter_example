<?php
namespace App\Controllers\Web;

use Symfony\Component\HttpFoundation\Request;
use App\Libs\EcshopConfig\Config;

class DefaultController extends BaseController {

	public function index(Request $request) {

		$shop_closed = Config::get('shop_closed');

		return view('web.index');
	}
}