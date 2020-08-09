<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = ['user_id','image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
