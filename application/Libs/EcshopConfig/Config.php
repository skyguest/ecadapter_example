<?php
namespace App\Libs\EcshopConfig;
use App\Models\ShopConfig;

class Config {

	protected $db;
	protected static $cache;

	public static function getAll() {
		if ( !empty(self::$cache) ) return self::$cache;
		return self::$cache = ShopConfig::where('parent_id', '>', 0)->get(['code', 'value'])->pluck('value', 'code');
	}

	public static function get($key, $default = null) {
		if ( empty(self::$cache) ) {
			self::getAll();
		} 

		return self::$cache->get($key, $default);
	}
}