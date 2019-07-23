<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class imgModel extends Model
{
    public function post() {
        return $this->belongsTo('App\Post', 'post_id', 'id');
    }

    protected $guarded = [];
    public function annonce()
    {
        return $this->belongsTo(AdModel::class);
    }
    protected $fillable = ['img','post_id',];
    protected $table = 'images';
}
