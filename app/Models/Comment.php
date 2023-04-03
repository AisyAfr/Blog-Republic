<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'comment',
        'User',
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }
    use HasFactory;
}
