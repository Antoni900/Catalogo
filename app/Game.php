<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function category()
	{
		return $this->belongsTo(
			game::class,
			'fk_id_category',
			'id'


		);
	}
	public function user()
	{
		return $this->belongsTo(
			games::class,
			'fk_id_user',
			'id'
		);
	}

}
