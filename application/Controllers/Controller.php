<?php
namespace App\Controllers;

abstract class Controller {

	private $_curr_action;
	private $_curr_arguments;
	protected $app;

	// 运行方法
	protected function _run_action() {
		$action = $this->_curr_action;
		return call_user_func_array([$this, $action], $this->_curr_arguments);
	}
	
	// 转发方法
	final public function _do_action() {
		$num = func_num_args();
		$arguments = func_get_args();
		$this->_curr_action = $arguments[0];
		array_shift($arguments);
		$this->_curr_arguments = $arguments;
		$this->app = app();
		return $this->_run_action();
	}
}