<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'page_excerp',
        'description',
        'page_content',
        'user_id',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'page_id', 'id');
    }
}
