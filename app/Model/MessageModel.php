<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class MessageModel extends Model
{
    protected $fillable = ['content','from_id','to_id','read_at'];
    public $timestamps =false;
    protected $dates= ['created_at','read_at','updated_at'];
    public function from(){
        return $this->belongsTo(User::class,'from_id');
    }
}
