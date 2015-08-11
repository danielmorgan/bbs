<?php

namespace BulletinBoard;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function user()
    {
        $this->belongsTo('App\User');
    }
}
