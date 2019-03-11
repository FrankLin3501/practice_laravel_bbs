<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    public static function getById($id) {
        return User::where('id', $id);
    }

    public function posts(): HasMany {

        return $this->hasMany(\App\Post::class);
    }
}
