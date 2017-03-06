<?php

namespace App;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','description','url'];



	 public function getCreatedAtAttribute($created_at)
    {
        return new Date($created_at);
    }

     public function getUpdatedAtAttribute($updated_at)
    {
        return new Date($updated_at);
    }
}

