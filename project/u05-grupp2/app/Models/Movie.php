<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;//Searchable-> to search in movies


class Movie extends Model
{
    use HasApiTokens, HasFactory, Notifiable, Searchable; //Searchable-> to search in movies

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ //allow only these
        'title',
        'description',
        'year',
        'category',
        'director',
        'actor',
        'rating',
        'duration',
        'public',
        'imageurl',
        'trailerurl'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    //this fucntion returns the table that we want to search
    public function searchableAs()
    {
        return 'movies';
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];

    protected $guarded = [//Allow all except these ones

    ];

    protected function title(): Attribute
    {
        # code...
        return new Attribute( //Esto es un mutator
            get: function($value){
                return ucwords($value);
            },
            
            set: function($value){ //Esto es un accessor
                return strtolower($value);
            }
        );
    }

    //added viene de la clase Model routekeyname buena practica modificarlo desde el modelo y no modificando el framework
    public function getRouteKeyName()
    {
        // return $this->getKeyName();
        return 'slug';//para que devuelva basado en el slug y no en el id que pasabamos con la variable $curso
    }

    protected static function boot() {
        parent::boot();
    
        static::creating(function ($question) {
            $question->slug = Str::slug($question->title);
        });
    }
    
}
