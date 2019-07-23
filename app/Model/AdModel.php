<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdModel extends Model
{
    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

//    public function image()
//    {
//        return $this->belongsToMany('App\Image');
//    }
    public function image()
    {
        return $this->hasMany(imgModel::class);
    }
    protected $fillable = [
        'user_id','title', 'content','price','img1',];
    protected $table = 'posts';

}
