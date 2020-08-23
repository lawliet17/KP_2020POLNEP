<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = ['user_id','name','nama'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galleries()
    {
        return $this->belongsToMany(Gallery::class,'category_galleries');
    }
}
