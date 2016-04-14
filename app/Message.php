<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['send_id', 'receive_id', 'content', 'status'];

    public function sender()
    {
        return $this->belongsTo('App\User', 'send_id');
    }

    public function reciever()
    {
        return $this->belongsTo('App\User', 'receive_id');
    }

}
