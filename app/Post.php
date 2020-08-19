<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';

    protected $fillable = ['user_id','thumbnail','id_title','en_title','id_slug','en_slug','id_details','en_details','post_type','is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_posts');
    }
}
