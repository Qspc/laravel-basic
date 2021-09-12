<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
}

// Post::create([
//     'title' => "sang sangkala",
//     'category_id' => 2,
//     'slug' => "sang-sangkala",
//     'script' => "lorem ipsum",
//     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quo!"
// ])
