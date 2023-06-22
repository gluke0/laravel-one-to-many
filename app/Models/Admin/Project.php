<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;


class Project extends Model
{
    use HasFactory;

    public static function addSlug($title)
        {
            return Str::slug($title, '-');
        }
        
        protected $fillable = ['title', 'slug', 'description', 'languages', 'image'];
}
