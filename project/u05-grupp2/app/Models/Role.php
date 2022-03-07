<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ //allow only these
        'role'
    ];

    protected function role(): Attribute
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
}
