<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function role()
    {
        return $this->belongsTo(
            user::class,
            'fk_id_role',
            'id'
        );
        
    }
    public function games()
    {
        return $this->hasMany(
            user::class,
            'fk_id_game',
            'id'

        );
        
    }

}
