<?php

namespace App\Models;

use App\Models\Song;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['song_id', 'user_id', 'body'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function song()
    {
        return $this->belongsTo(Song::class );
    }
}
