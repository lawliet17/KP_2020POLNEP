<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $fillable = ['user_id','image_url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function choices()
    {
        return $this->belongsToMany(Choice::class,'category_galleries');
    }
}
