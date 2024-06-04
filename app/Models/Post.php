<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //establishes a one to many relation between the post and comment
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
