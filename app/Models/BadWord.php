<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BadWord extends Model
{
    use HasFactory;

    protected $fillable = ['word'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_bad_words')
                    ->withPivot('count')
                    ->withTimestamps();
    }
}
