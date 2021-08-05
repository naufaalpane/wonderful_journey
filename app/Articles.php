<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'UserId');
    }

    public function category()
    {
        return $this->hasOne('App\Categories', 'id', 'CategoriesId');
    }
}
