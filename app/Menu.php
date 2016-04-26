<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

	protected $primaryKey = "menu_id";
	protected $table = 'menus';

		public function category()
    {
        return $this->belongsTo('Menu', 'menu_id');
    }
}
