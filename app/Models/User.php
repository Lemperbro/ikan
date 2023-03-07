<?php

namespace App\Models;

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
    protected $primaryKey = 'user_id';
    //$fillable untuk menentukan field yang boleh di isi
    //$guarded unutuk menentukan field yang tidak boleh di isi
    // protected $fillable = [
    //     'username',
    //     'email',
    //     'password',
    //     'no_tlpn',
    //     'alamat'
    // ];

    protected $guarded = [
        'user_id',
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


    //relasi model
    //belongsTo artinya satu data / row dalam table db memiliki satu foregn key , misal satu user memiliki satu category
    //hasMany artinya satu  data / row dalam table db memiliki banyak foregn key , misal satu category memiliki banyak user 
    public function category(){
    return $this->belongsTo(Category::class);
    }

    public function Post(){
        return $this->hasMany(Post::class);
    }


}
