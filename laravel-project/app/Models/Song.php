<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover_image',
        'title',
        'artists',
        'writers',
        'languages',
        'release_date',
        'lyrics',
        'duration',
    ];

    public function scopeFilter($query, array $filter)
    {
        // dd($query); 
        // dd($filter);
        if ($filter ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('artists', 'like', '%' . request('search') . '%')
                ->orWhere('writers', 'like', '%' . request('search') . '%')
                ->orWhere('languages', 'like', '%' . request('search') . '%')
                ->orWhere('release_date', 'like', '%' . request('search') . '%')
                ->orWhere('lyrics', 'like', '%' . request('search') . '%')
                ->orWhere('duration', 'like', '%' . request('search') . '%');
        }
    }
}
