<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    public static function getById($id) {
        return Message::where('id', $id);
    }

    public static function withUsername() {
        return Message::join('users', 'users.id', '=', 'messages.user_id')
        ->select('messages.*', 'users.name as username');
    }
}
