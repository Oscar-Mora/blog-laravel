<?php

namespace App\Models;
use App\Models\Profile;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
        'email_verified_at' => 'datetime',
    ];
    
    //relacion uno a uno 
    
        // return $this->hasOne(Profile::class);
        public function profile(){
        /* $profile = Profile::where('user_id', $this->id)->first(); return $profile; 
        /*
            *la siguiente linea hace lo mismo que la de arriba, considera que la llave primaria de users es id y la foreing key es user_id
            *en caso de ser diferente se tuvo que haber pasado como 2do parametro en los argumentos de hasOne()
            */
        return $this->hasOne(Profile::class);
        }
    
}
