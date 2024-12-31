<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBadWord extends Model
{
    use HasFactory;

    protected $table = 'user_bad_words';

    protected $fillable = ['user_id', 'bad_word_id', 'count'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function badWord()
    {
        return $this->belongsTo(BadWord::class);
    }
}
