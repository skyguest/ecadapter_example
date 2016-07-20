<?php
namespace App\ServiceProviders;

use Pimple\Container;
use Skyguest\Ecadapter\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	protected $boot = true;
	
	public function register(Container $pimple) {

	}

	public function boot(Container $pimple) {

		// 这里可以扩展，在启动实例的时候就会调用，例如试图模块
		$pimple->extend('view', function ($obj, $pimple) {

			// 后台的视图共享
		    $obj->composer(
	            'admin.*', 'App\ViewComposers\AdminComposer'
	        );

	        // 前台视图共享
	        $obj->composer(
	            ['web.*', 'user.*'], 'App\ViewComposers\WebComposer'
	        );

		    return $obj;
		});
	}
}