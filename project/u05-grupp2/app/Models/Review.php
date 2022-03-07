<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'movie_id',
        'user_id',
        'content',
        'approved',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    protected $guarded = [];
    protected $hidden = []; // to hide variables
    protected $visible = []; // to show
}