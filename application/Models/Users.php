<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Skyguest\Ecadapter\Auth\IAuthable;

class Users extends Model implements IAuthable {
	
	protected $table = 'users';

	protected $primaryKey = 'user_id';

	public $timestamps = false;

	public function getAuthIdentifier() {
		return $this->user_id;
	}
}