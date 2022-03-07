<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    public function role(){
        return $this->hasOne(Role::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ //allow only these
        'username',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',//new column showing when the email was modified
    ];


    protected function username(): Attribute
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
            $question->slug = Str::slug($question->username);
        });
    }

    // /**Added: Add a mutator to ensure hashed passwords*/
    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }
}
